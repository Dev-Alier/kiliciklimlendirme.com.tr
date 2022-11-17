<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SolutionPartnerRequest;
use App\Models\Solution_Partner;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SolutionPartnerController extends Controller
{
    protected $formService;
    protected $helperService;
    protected $commonService;
    protected $serviceCategory;
    protected $solutionPartner;

    public function __construct(
        FormService $formService,
        HelperService $helperService,
        CommonService $commonService,
        Solution_Partner $solutionPartner
    ) {
        $this->formService = $formService;
        $this->helperService = $helperService;
        $this->commonService = $commonService;
        $this->solutionPartner = $solutionPartner;
    }




    public function getList($id = null)
    {
        $solution = $id ? $this->solutionPartner->find($id) : $this->solutionPartner;
        $data = $this->formService->getSolutionPartnerForm($solution);
        $list = $this->solutionPartner->all();
        return view('admin.solution_partners.list', compact('list', 'data', 'solution'));
    }

    public function save(SolutionPartnerRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                $request =  $this->helperService->uploadImage($request, 'image', 'assets/images/solution_partners/',150,140);
                $this->commonService->createData($request, $this->solutionPartner);
                $this->helperService->toastr('Çözüm Ortağı Eklendi', 'success');
                return redirect()->route('list.solutionPartner');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.solutionPartner');
        }
    }

    public function deleteSolutionPartner($id)
    {
        try {
            $solution = $this->solutionPartner->find($id);
            $response = $this->commonService->deleteData($solution, 'assets/images/solution_partners/' . $solution->image);
            if ($response) {
                $this->helperService->toastr('Çözüm Ortağı Silindi!', 'success');
                return redirect()->route('list.solutionPartner');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('list.solutionPartner');
        }
    }
}
