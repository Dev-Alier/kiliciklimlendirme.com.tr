<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $formService;
    protected $helperService;
    protected $commonService;
    protected $serviceCategory;
    protected $slider;

    public function __construct(
        FormService $formService,
        HelperService $helperService,
        CommonService $commonService,
        Slider $slider
    ) {
        $this->formService = $formService;
        $this->helperService = $helperService;
        $this->commonService = $commonService;
        $this->slider = $slider;
    }




    public function getList($id = null)
    {
        $slider = $id ? $this->slider->find($id) : $this->slider;
        $data = $this->formService->getSliderForm($slider);
        $list = $this->slider->all();
        return view('admin.sliders.list', compact('list', 'data', 'slider'));
    }

    public function save(SliderRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                $request =  $this->helperService->uploadImage($request, 'image', 'assets/images/sliders/',1920,900);
                $this->commonService->createData($request, $this->slider);
                $this->helperService->toastr('Slider Eklendi', 'success');
                return redirect()->route('list.slider');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.slider');
        }
    }

    public function deleteSlider($id)
    {
        try {
            $slider = $this->slider->find($id);
            $response = $this->commonService->deleteData($slider, 'assets/images/sliders/' . $slider->image);
            if ($response) {
                $this->helperService->toastr('Slider Silindi!', 'success');
                return redirect()->route('list.slider');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.slider');
        }
    }
}
