<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email'=>'email|required',
            'password'=>'required|min:8',
            'telefono'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'email.email'=>'Debe ingresar un correo valido',
            'email.required'=>'Debe ingresar un correo',
            'password.required'=>'Debe ingresar una contrasena',
            'password.min'=>'Debe ingresar una contrasena de al menos 8 caracteres',
            'telefono.required'=>'Debe ingresar una telefono'
        ];
    }
}