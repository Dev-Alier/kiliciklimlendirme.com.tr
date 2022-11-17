<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use LDAP\Result;

class CommonService
{

    /**
     * Eloquent model instance.
     */
    protected $model;
    /**
     * load default class dependencies.
     *
     * @param Model $model Illuminate\Database\Eloquent\Model
     */
    public function __construct()
    {
    }
    /**
     * get all the items collection from database table using model.
     *
     * @return Collection of items.
     */
    public function createData($data, Model $model)
    {
        if (isset($data['title']) || isset($data['name'])) {
            // create slug
            $slug = Str::slug(!empty($data['title']) ? $data['title'] : $data['name']);
            // slug push in  data
            $data['slug'] = $slug;
        }
        $newData = $model->create($data);

        return $newData;
    }

    public function updateData(array $data, Model $model, $imagePath = null)
    {
        unset($data['_token']);
        if (empty($data['title']) || empty($data['name'])) {
            // create slug
            $slug = Str::slug(!empty($data['title']) ? $data['title'] : $data['name']);
            // slug push in  data
            $data['slug'] = $slug;
        }
        if ($imagePath && is_file(public_path($imagePath))) {
            unlink($imagePath);
        }
        //dd($data,$model);
        $updateData = $model->update($data);
        return $updateData;
    }

    public function deleteData($model, $imagePath = null)
    {
        // dd($imagePath);
        try {

            $isDelete = $model->delete();
            if ($isDelete && $imagePath) {
                unlink(public_path($imagePath));
            }
            return $isDelete;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
