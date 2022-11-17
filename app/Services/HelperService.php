<?php

namespace App\Services;
use Image;
use Intervention\Image\ImageManagerStatic as Images;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class HelperService
{

    /**
     * @param $name the name is input name for image;
     */
    public function uploadImage($request, $name, $path,$resizeW,$resizeH)
    {

            $file_name = $request->file($name)->getClientOriginalName();
            $image_resize = Image::make($request->file($name)->getRealPath());
            $image_resize->resize($resizeW, $resizeH);

            $originalName = pathinfo($file_name, PATHINFO_FILENAME); // file
            $time = Carbon::now()->format('YmdHis');
            // create image name
            if ($name == 'logo')
            $imageName = 'logo' . '_' . $time . '.' . $request->$name->extension();
            else if ($name == 'icon')
            $imageName = 'icon' . '_' . $time . '.' . $request->$name->extension();
            else
            $imageName = $originalName . '_' . $time . '.' . $request->$name->extension();

            $image_resize->save(public_path($path). $imageName);

            $request = $request->except($name);

            $request[$name] = $imageName;
            return $request;

    }

    public function uploadProductImage($request)
    {
        $image = array();
        if($files = $request->file('image')){
            foreach ($files as $key => $file) {

                $file_name = $file->getClientOriginalName();
                $image_resize = Image::make($file->getRealPath());
                $image_resize->resize(605, 543);

                $originalName = pathinfo($file_name, PATHINFO_FILENAME); // file
                $time = Carbon::now()->format('YmdHis');

                // create image name
                $imageName = $originalName . '_' . $time . '.' . $file->getClientOriginalExtension();
                $image_resize->save(public_path('assets/images/products/'). $imageName);
                $image[]= $imageName;
            }
        }
            return $image;
    }


    public function uploadDocument($request)
    {
        $documentFileName = "";
        if ($request->hasFile('catalog')) {
            $documentFileName = $request->file('catalog')->getClientOriginalName();
            $request->catalog->move(public_path('assets/pdf/'), $documentFileName);
            if ($request->oldDocument != null) {
                unlink(public_path('assets/pdf/' . $request->oldDocument));
            }
        }
        $documentFileName = $documentFileName != "" ? $documentFileName : $request->oldDocument;
        return $documentFileName;
    }

    // for dynamic form with order
    // public function FormEncode($formData){
    //     $array = json_decode($formData, true);

    //     usort($array, function ($a, $b) {
    //         if($a['order'] <=> $b['order'])
    //         return $a['order'] <=> $b['order'];
    //         dd($a['order'], $b['order']);
    //     });
    //     return json_encode($array);
    // }

    // tostr message
    public function toastr($message, $type)
    {
        toastr()->$type($message, ' ', ['closeButton' => true,]);
    }

    public function changeStatus($request, Model $model, $field, $message, $status)
    {

        try {
            $model->find($request->id)->update([$field => $status]);
            $this->toastr($message, 'success');
            return true;
        } catch (\Throwable $th) {
            $this->toastr($th->getMessage(), 'error');
            return false;
        }

    }
}
