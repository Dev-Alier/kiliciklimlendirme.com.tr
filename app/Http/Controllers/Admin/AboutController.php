<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $formService;
    protected $commonService;
    protected $address;
    protected $helperService;

    public function __construct(
        FormService $formService,
        CommonService $commonService,
        HelperService $helperService,
        About $about)
    {
        $this->formService = $formService;
        $this->commonService = $commonService;
        $this->about = About::first() ? About::first() : $about;
        $this->helperService = $helperService;
    }

    public function edit(){
        $about = $this->about;
        return view('admin.abouts.edit', compact('about'));
    }

    public function saveData(Request $request)
    {
        try {
            $about = About::all()->first();
            if (!$about) {

                $this->about->create($request->all());
            } else {
                $this->about->update($request->all());
            }
            $this->helperService->toastr('Hakkımızda Yazısı Güncellendi', 'success');
            return back();
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata: '. $th->getMessage(), 'error');
            return back();
        }
    }
}
