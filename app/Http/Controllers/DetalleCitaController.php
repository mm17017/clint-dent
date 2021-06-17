<?php

namespace App\Http\Controllers;

use App\Post;
use App\Models\Detalle_cita;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DetalleCitaRequest;
use App\Http\Requests\CreateDetalleCitaRequest;
use App\Models\Jornada;
use Illuminate\Support\Facades\Date;

class DetalleCitaController extends Controller
{

    public function __construct()
    {
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Detalle_cita::where('user_id', Auth::user()->id)->get();
        foreach ($citas as $key => $cita) {
            $cita->jornada_id = Jornada::where('id', $cita->jornada_id)->get();
        } 
        return $citas;
        // return Detalle_cita::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetalleCitaRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $detalle = new Detalle_cita;
        $detalle->fill($input);
        $detalle->save();
        foreach ($request->serviciosSeleccionados as $servicio) {
            $detalle->servicios()->attach($servicio);
        }
        return response()->json([
            'res' => true,
            'messagge' => 'Reserva realizada',
            'detalle_cita' => $detalle
        ], status: 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle_cita $detalle)
    {
        if ($detalle->user_id == Auth::user()->id) {
            $detalle->jornada_id = Jornada::where('id', $detalle->jornada_id)->get();
            return ([$detalle, $detalle->servicios]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetalleCitaRequest $request, $id)
    {

        $input = $request->all();
        $detalle = Detalle_cita::findOrFail($id);
        $detalle->fill($input);
        $detalle->save();
        $detalle->servicios()->sync($request->serviciosSeleccionados);
        return response()->json([
            'res' => true,
            'messagge' => 'Registro actualizado correctamente',
            'detalle_cita' => $detalle
        ], status: 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Detalle_cita::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente'
        ], status: 200);
    }

    public function getServicios()
    {
        return Servicio::get();
    }

    public function getJornadas($request)
    {
        $ocupada = false;
        date_default_timezone_set('America/El_Salvador');

        //Obteniendo todas las jornadas
        $jornadas = Jornada::get(); 
        
        //Obteniendo todas las citas de la fecha solicitada
        $citas = Jornada::join('detalle_citas', 'jornadas.id', '=', 'detalle_citas.jornada_id')->where('fecha_cita', '=', $request)->get();

        foreach ($jornadas as $key => $jornada) {
            $ocupada = false;
            if (strtotime($jornada->hora_inicio) > time() && strtotime($request) == strtotime(date('Y-m-d')) || (strtotime($request) > strtotime(date('Y-m-d')))) {
                foreach ($citas as $cita) {
                    if ($cita->jornada_id == $jornada->id) {
                        $ocupada = true;
                        break;
                    }
                }

                if ($ocupada == true) {
                    unset($jornadas[$key]);
                }
            } else {
                unset($jornadas[$key]);
            }
        }

        return $jornadas;
    }

    /*public function store(){
        $data = request()->validated([
            'title'=>'',
            'content'=>''
        ]);

        Post::created ($data);
    }*/

}
