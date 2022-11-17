<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileContoller extends Controller
{

    protected $formService;
    protected $commonService;
    protected $user;
    protected $helperService;

    public function __construct(
        FormService $formService,
        CommonService $commonService,
        User $user,
        HelperService $helperService
    ) {
        $this->formService = $formService;
        $this->commonService = $commonService;
        $this->user = User::first() ?? $user;
        $this->helperService = $helperService;
    }

    public function edit()
    {
        $user = $this->user;

        $data = $this->formService->getProfileForm($user);
        return view('admin.profiles.edit', compact('data', 'user'));
    }

    public function saveData(Request $request)
    {
        try {
            $user = User::all()->first();
            if($request->password){
                if (Hash::check($request->oldPassword, $user->password)){
                    $user->password = Hash::make($request->password);
                }else{
                    $this->helperService->toastr('Eski Şifre Yanlış', 'error');
                    return redirect()->back();
                }
            }
            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();

            $this->helperService->toastr('Profil Güncellendi', 'success');
            return back();
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata: ' . $th->getMessage(), 'error');
            return back();
        }
    }
}
