<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Image;
use App\Models\Product;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function __construct(
        private FormService     $formService    = new FormService(new HelperService()),
        private HelperService   $helperService  = new HelperService(),
        private CommonService   $commonService  = new CommonService(),
        private Product         $product        = new Product(),
        private Image           $image        = new Image()
    ) {
    }


    public function getList()
    {
        $list = $this->product->all();
        return view('admin.products.list', compact('list'));
    }

    public function getAddProduct()
    {
        $product = $this->product;
        $data = $this->formService->getProductForm($product);
        return view('admin.products.create', compact('data', 'product'));
    }


    public function getEditProduct($id)
    {
        $product = $this->product->find($id);
        $data = $this->formService->getProductForm($product);
        return view('admin.products.create', compact('data', 'product'));
    }

    public function save(ProductRequest $request)
    {
        try {
            $id = $request->id;

            // upload pdf document
            $pdfName = $this->helperService->uploadDocument($request);

            $request->except('catalog');
            // upload blog image
            $images = $this->helperService->uploadProductImage($request);
            $request = $request->all();
            $request['catalog'] = $pdfName;
            $data = $request;

            if ($id == null) {
                $newProduct = $this->commonService->createData($data, $this->product);
                if ($images) {

                    foreach ($images as $key => $image) {
                        $data = [
                            'name' => $image,
                            'product_id' => $newProduct->id,
                        ];

                        Image::create($data);
                    }
                }
            } else {
                $product = $this->product->find($id);
                $this->commonService->updateData($data, $product);
                if ($images) {
                    foreach ($images as $key => $image) {
                        $data = [
                            'name' => $image,
                            'product_id' => $id,
                        ];

                        Image::create($data);
                    }
                }
            }
            $this->helperService->toastr($id ? 'Ürün Güncellendi' : 'Ürün Eklendi', 'success');
            return redirect()->route('list.product');
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.product');
        }
    }

    public function deleteProduct($id)
    {
        try {
            $product = $this->product->find($id);
            $response = $this->commonService->deleteData($product);

            if ($response) {
                if ($pdf = public_path("assets/pdf/$product->catalog")) {
                    File::delete($pdf);
                }
                foreach ($product->images as $image) {
                    $path = public_path("assets/images/products/$image->name");
                    unlink($path);
                }
                $this->helperService->toastr('Ürün Silindi!', 'success');
                return redirect()->route('list.product');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.product');
        }
    }

    public function deleteImage($id)
    {
        $image = $this->image->find($id);
        $response = $this->commonService->deleteData($image, 'assets/images/products/' . $image->name);
        return $response;
    }

    public function productCatalog($slug)
    {
        $catalog = $this->product->whereSlug($slug)->value('catalog');
        return view('client.products.catalog', compact('catalog'));
    }
}
