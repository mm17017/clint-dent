<?php

namespace App\Http\Controllers;

use App\Models\Detalle_cita;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetalleCitaController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $servicios = Servicio::get();
        //return Detalle_cita::where('user_id', Auth::user()->id())->get();
        return Detalle_cita::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = new Detalle_cita;
        $detalle->descripcion = $request->descripcion;                
        $detalle->fecha_cita = $request->fecha_cita;                
        $detalle->hora_cita = $request->hora_cita;                
        $detalle->user_id = $request->user_id;                
        $detalle->estado_cita_id = $request->estado_cita_id;                
        $detalle->jornada_id = $request->jornada_id;                
        $detalle->jornada_id = $request->jornada_id;           
        $detalle->save();        
        foreach ($request->serviciosSeleccionados as $servicio) {
            $detalle->servicios()->attach($servicio);             
        }
        return response()->json([
            'res'=>true,
            'messagge'=>'Registro creado correctamente',
            'data'=>$detalle
        ],status:201);
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
    public function update(Request $request, Detalle_cita $detalle)
    {
        // return $detalle;        
        $detalle->descripcion = $request->descripcion;                
        $detalle->fecha_cita = $request->fecha_cita;                
        $detalle->hora_cita = $request->hora_cita;                
        $detalle->user_id = $request->user_id;                
        $detalle->estado_cita_id = $request->estado_cita_id;                
        $detalle->jornada_id = $request->jornada_id;                
        $detalle->jornada_id = $request->jornada_id;
        $detalle->save();
        $detalle->servicios()->sync($request->serviciosSeleccionados);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalle_cita $detalle)
    {
        if (Auth::user()->id == $detalle->user_id) {
            $detalle->delete();
        }
    }

    public function getServicios()
    {
        return Servicio::get();
    }
}
