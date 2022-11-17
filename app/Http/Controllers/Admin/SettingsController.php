<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    protected $formService;
    protected $commonService;
    protected $setting;
    protected $helperService;

    public function __construct(
        FormService $formService,
        CommonService $commonService,
        Setting $setting,
        HelperService $helperService)
    {
        $this->formService = $formService;
        $this->commonService = $commonService;
        $this->setting = Setting::first() ? Setting::first() : $setting;
        $this->helperService = $helperService;
    }

    public function edit(){
        $setting = $this->setting;

        $data = $this->formService->getSettingsForm($setting);
        return view('admin.settings.edit', compact('data', 'setting'));
    }

    public function saveData(Request $request)
    {
        try {
            $setting = Setting::all()->first();
            $oldLogo = null;
            $data= $request->all();
            if($request->hasFile('logo')){
                $oldLogo = $setting->logo ?? '';
                $data = $request->hasFile('logo') ? $this->helperService->uploadImage($request, 'logo', 'assets/images/',320,110) : $request->all();
            }
            if (!$setting) {
                $this->setting->create($data);
            } else {
                if ($request['logo'] != null && $request['logo'] != $oldLogo && $request->hasFile('logo')) {
                    unlink(public_path('assets/images/' . $oldLogo));
                }
                $this->setting->update($data);
            }
            $this->helperService->toastr('Ayarlar Güncellendi', 'success');
            return back();
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata: '. $th->getMessage(), 'error');
            return back();
        }
    }


}
