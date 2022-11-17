<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    protected $formService;
    protected $commonService;
    protected $address;
    protected $helperService;

    public function __construct(
        FormService $formService,
        CommonService $commonService,
        HelperService $helperService,
        Address $address)
    {
        $this->formService = $formService;
        $this->commonService = $commonService;
        $this->address = Address::first() ? Address::first() : $address;
        $this->helperService = $helperService;
    }

    public function edit(){
        $address = $this->address;
        $data = $this->formService->getAddressForm($address);
        return view('admin.addresses.edit', compact('data', 'address'));
    }

    public function saveData(Request $request)
    {
        try {
            $address = Address::all()->first();
            if (!$address) {

                $this->address->create($request->all());
            } else {
                $this->address->update($request->all());
            }
            $this->helperService->toastr('Adres Güncellendi', 'success');
            return back();
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata: '. $th->getMessage(), 'error');
            return back();
        }
    }

}
