<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ];
    }

    public function messages()
    {
        return [
            'image.required' =>'Fotoğraf Zorunludur.',
            'image.mimes' =>'Fotoğraf Formatı jpeg,png veya jpg olmalıdır'
        ];
    }
}
