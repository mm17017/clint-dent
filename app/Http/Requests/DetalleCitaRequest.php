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
        $today = date('Y-m-d'); 

        return [
            'descripcion'=>'required|max:50',
            'fecha_cita'=>'required|after_or_equal:'.$today,
            'user_id'=>'required|integer',
            'estado_cita_id'=>'required|integer',
            'jornada_id'=>'required|integer',
            "serviciosSeleccionados" => 'required',
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
            'jornada_id.required' => 'Seleccione una hora para su cita',
            'fecha_cita.after_or_equal' => 'Fecha invalida coloque una fecha igual o posterior a hoy',
            'serviciosSeleccionados.required' => 'Seleccione por lo menos un servicio a recibir'
        ];
    }
}
