<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCategoryRequest;
use App\Models\Service_Category;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    protected $formService;
    protected $helperService;
    protected $commonService;
    protected $serviceCategory;

    public function __construct(
        FormService $formService,
        HelperService $helperService,
        CommonService $commonService,
        Service_Category $serviceCategory
    ) {
        $this->formService = $formService;
        $this->helperService = $helperService;
        $this->commonService = $commonService;
        $this->serviceCategory = $serviceCategory;
    }




    public function getList()
    {
        $data = $this->formService->getServiceCategoryForm($this->serviceCategory);
        $list = Service_Category::all();
        return view('admin.service_categories.list', compact('list', 'data'));
    }

    public function addServiceCategory(){

        $category = $this->serviceCategory;
        $data = $this->formService->getServiceCategoryForm($category);
        return view('admin.service_categories.create', compact('data', 'category'));
    }


    public function getEditServiceCategory($id)
    {
        $category = Service_Category::find($id);
        $data = $this->formService->getServiceCategoryForm($category);
        return view('admin.service_categories.create', compact('data', 'category'));
    }

    public function save(ServiceCategoryRequest $request)
    {
        try {
            if ($request->name == '') {
                $this->helperService->toastr('Kategori Adı Boş Geçilemez', 'error');
                return redirect()->back();
            }
            $id = $request->id;
            $isService = $this->serviceCategory->where('name',$request->name)->first();

            if ($isService && $isService->id != $id) {
                $this->helperService->toastr('Bu isimde zaten bir kategori bulunmaktadır', 'error');
                return redirect()->back();
            }
            $request = $request->hasFile('image') ? $this->helperService->uploadImage($request, 'image', 'assets/images/service_categories/',1920,320) : $request->all();
            $request['slug'] = Str::slug($request['name']);

            if ($id == null) {
                $this->commonService->createData($request, $this->serviceCategory);
            } else {
                $this->commonService->updateData($request, Service_Category::find($id));
            }
            $this->helperService->toastr($id ? 'Hizmetler Kategorisi Güncellendi' : 'Hizmetler Kategorisi Eklendi', 'success');
            return redirect()->route('list.serviceCategory');
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.serviceCategory');
        }
    }

    public function deleteServiceCategory($id)
    {
        try {
            $category = Service_Category::find($id);
            $response = $this->commonService->deleteData($category);
            if ($response) {
                $this->helperService->toastr('Kategori Silindi!', 'success');
                return redirect()->route('list.serviceCategory');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.serviceCategory');
        }
    }
}
