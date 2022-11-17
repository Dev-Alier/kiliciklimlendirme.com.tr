<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_Category;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    protected $formService;
    protected $helperService;
    protected $commonService;
    protected $productCategory;

    public function __construct(
        FormService $formService,
        HelperService $helperService,
        CommonService $commonService,
        Product_Category $productCategory
    ) {
        $this->formService = $formService;
        $this->helperService = $helperService;
        $this->commonService = $commonService;
        $this->productCategory = $productCategory;
    }




    public function getList($id= null)
    {
        $category = $id ? $this->productCategory->find($id) : $this->productCategory;
        $data = $this->formService->getProductCategoryForm($category);
        $list = $this->productCategory->all();
        return view('admin.product_categories.list', compact('list', 'data', 'category'));
    }


    public function getEditProductCategory($id)
    {
        $category = $this->productCategory->find($id);
        $data = $this->formService->getProductCategoryForm($category);
        $list = $this->productCategory->all();
        return view('admin.product_categories.list', compact('list', 'data', 'category'));
    }

    public function save(Request $request)
    {

        try {
            if ($request->name == '') {
                $this->helperService->toastr('Kategori Adı Boş Geçilemez', 'error');
                return redirect()->back();
            }
            $id = $request->id;
            $request['slug'] = Str::slug($request->name);
            if ($id == null) {
                $this->commonService->createData($request->all(), $this->productCategory);
            } else {
                $this->commonService->updateData($request->all(), $this->productCategory->find($id));
            }
            $this->helperService->toastr($id ? 'Ürünler Kategorisi Güncellendi' : 'Ürünler Kategorisi Eklendi', 'success');
            return redirect()->route('list.productCategory');
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.productCategory');
        }
    }

    public function deleteProductCategory($id)
    {
        try {
            $category = $this->productCategory->find($id);
            $response = $this->commonService->deleteData($category);
            if ($response) {
                $this->helperService->toastr('Kategori Silindi!', 'success');
                return redirect()->route('list.productCategory');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.productCategory');
        }
    }
}
