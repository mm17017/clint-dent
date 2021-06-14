<?php

namespace App\Http\Controllers;

use App\Models\Detalle_cita;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DetalleCitaRequest;
use App\Http\Requests\CreateDetalleCitaRequest;

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

        return Detalle_cita::where('user_id', Auth::user()->id)->get();
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
            'res'=>true,
            'messagge'=>'Registro creado correctamente',
            'detalle_cita'=>$detalle
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
    public function update(DetalleCitaRequest $request,$id)
    {
   
        $input = $request->all();
        $detalle = Detalle_cita::findOrFail($id);
        $detalle->fill($input);
        $detalle->save();
        $detalle->servicios()->sync($request->serviciosSeleccionados);
        return response()->json([
            'res'=>true,
            'messagge'=>'Registro actualizado correctamente',
            'detalle_cita'=>$detalle
        ],status:200);
        
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
            'res'=>true,
            'message'=>'Registro eliminado correctamente'
        ],status:200);
        
    }

    public function getServicios()
    {
        return Servicio::get();
    }
}
