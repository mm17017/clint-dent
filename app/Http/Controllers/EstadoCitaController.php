<?php

namespace App\Http\Controllers;

use App\Models\Estado_cita;
use Illuminate\Http\Request;

class EstadoCitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Estado_cita::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Estado_cita::create($input);

        return response()->json([
            'res'=>true,
            'messagge'=>'Registro creado correctamente',
            'estado_Cita'=>$input
            
        ],status:201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estado_cita  $estado_Cita
     * @return \Illuminate\Http\Response
     */
    public function show(Estado_cita $estado_Cita)
    {
        return Estado_cita::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estado_Cita  $estado_Cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $estadoCita=Estado_cita::findOrFail($id);
        $estadoCita->fill($input);
        $estadoCita->save();
        return response()->json([
            'res'=>true,
            'message'=>'Registro actualizado correctamente',
            'estado_cita'=>$input
        ],status:200);
    }


    /**
     * Remove the specified resource from storage.
       *
     * @param  \App\Models\Estado_Cita  $estado_Cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estado_cita::destroy($id);
        return response()->json([
            'res'=>true,
            'message'=>'Registro eliminado correctamente'
        ],status:200);
    }
}
