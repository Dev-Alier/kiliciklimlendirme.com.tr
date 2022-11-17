<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'offer' => 'required',
            'phone' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ];
    }

    public function messages()
    {
        return [
            'offer.required' => 'Teklifinizi Girmelisiniz.',
            'name.required' => 'Ad Gereklidir',
            'phone.required' => 'Telefon Numarası Gereklidir',
            'g-recaptcha-response.required' => 'Lütfen "Ben Robot Değilim" işaretleyin'
            ];
    }
}
