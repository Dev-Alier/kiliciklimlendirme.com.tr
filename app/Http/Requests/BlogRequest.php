<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
           // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }

    public function messages(){
        return [
            'title.required' => 'Başlık Gereklidir',
            'description.required' => 'Açıklama Gereklidir',
            // 'image.required' => 'Resim Gerekli',
            // 'image.mimes' => 'Marka Resim Formatı Şunlar Olmalı: jpeg,png,jpg,gif,svg',
            // 'image.max' => 'Resim boyutu maksimum 2MB olmalı',
        ];
    }
}
