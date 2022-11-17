<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(
        private FormService     $formService    = new FormService(new HelperService()),
        private HelperService   $helperService  = new HelperService(),
        private CommonService   $commonService  = new CommonService(),
        private Service         $service        = new Service()
    ) {
    }


    public function getList()
    {
        $list = $this->service->all();
        return view('admin.services.list', compact('list'));
    }

    public function getAddService()
    {
        $service = $this->service;
        $data = $this->formService->getServiceForm($service);
        return view('admin.services.create', compact('data', 'service'));
    }


    public function getEditService($id)
    {
        $service = $this->service->find($id);
        $data = $this->formService->getServiceForm($service);
        return view('admin.services.create', compact('data', 'service'));
    }

    public function save(ServiceRequest $request)
    {
        try {
            $id = $request->id;

            // upload blog image
            $request = $request->hasFile('image') ? $this->helperService->uploadImage($request, 'image', 'assets/images/services/',300,270) : $request->all();


            if ($id == null) {
                $this->commonService->createData($request, $this->service);
            } else {
                $oldImage = $this->service->find($id)->image;
                if ($request['image'] != null && $request['image'] != $oldImage) {
                    unlink(public_path('assets/images/services/' . $oldImage));
                }
                $this->commonService->updateData($request, $this->service->find($id));
            }
            $this->helperService->toastr($id ? 'Hizmet Güncellendi' : 'Hizmet Eklendi', 'success');
            return redirect()->route('list.service');
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.service');
        }
    }

    public function deleteBlog($id)
    {
        try {
            $service = $this->service->find($id);
            $response = $this->commonService->deleteData($service, 'assets/images/services/' . $service->image);
            if ($response) {
                $this->helperService->toastr('Hizmet Silindi!', 'success');
                return redirect()->route('list.service');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.service');
        }
    }
}
