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
            'descripcion'=>'required|max:50',
            'fecha_cita'=>'required|after_or_equal:'.$yesterday,
            'user_id'=>'required|integer',
            'estado_cita_id'=>'required|integer',
            'jornada_id'=>'required|integer'
        ];
    }
    public function messages()
    {
        return[
            'descripcion.required' => 'La descripción es obligatoria',
            'descripcion.max' => 'Deben ser menos de 50 caracteres',
            'fecha_cita.required' => 'La Fecha es obligatoria',
            'user_id.required'=>'Debe ingresar el codigo de usuario',
            'user_id.integer'=>'Debe ingresar un valor',
            'fecha_cita.after_or_equal' => 'Fecha invalida coloque una fecha igual o posterior a hoy',
        ];
    }
}
