<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class lrRequest extends FormRequest
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
     * @return array
     */

    public function rules()
    {
        return [
            'name'=>'required|min:2|max:30',
            'password'=>'required|min:6|max:12',
            'email'=>'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name.min'=>'Ad minimum 2 simvol olmalıdır',
            'name.max'=>'Ad maksimum 30 simvol olmalıdır',
            'name.required'=>'Ad və soyad daxil etmədiniz',
            'password.required'=>'Şifrə daxil etmədiniz',
            'password.min'=>'Şifrə minimum 6 simvol olmalıdır',
            'password.max'=>'Şifrə maksimum 12 simvol olmalıdır',
            'email.required'=>'E-poçt daxil etmədiniz',
            'email.email'=>'E-poçt ünvanını düzgün daxil edin '
        ];
    }
}
