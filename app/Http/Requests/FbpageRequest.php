<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FbpageRequest extends FormRequest
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
            'name' => 'required',
            'platform_name' => 'required',
            'active' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Sayfa Adı Gereklidir',
            'platform_name.required' => 'Platform Adı Gereklidir',
            'active.required' => 'Aktiflik Durumu Gereklidir'
        ];
    }
}
