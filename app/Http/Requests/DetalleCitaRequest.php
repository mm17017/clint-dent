<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetalleCitaRequest extends FormRequest
{
    
    // const $yesterday = date('Y-m-d', strtotime('-1 days');
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
        $yesterday = date('Y-m-d', strtotime('-1 days')); 
        return [
            'S_Detalle'=>'required|max:50',
            'D_Fecha'=>'required|after:'.$yesterday,
            'T_Hora'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'S_Detalle.required' => 'La descripción es obligatoria',
            'S_Detalle.max' => 'Deben ser menos de 50 caracteres',
            'D_Fecha.required' => 'La Fecha es obligatoria',
            'D_Fecha.after' => 'Fecha invalida coloque una fecha igual o posterior a hoy',
            'T_Hora.required' => 'La hora es obligatoria'
        ];
    }
}