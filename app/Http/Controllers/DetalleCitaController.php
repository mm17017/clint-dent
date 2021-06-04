<?php

namespace App\Http\Controllers;

use App\Models\detalle_cita;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetalleCitaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $servicios = Servicio::get();
        return detalle_cita::where('user_id', Auth::user()->id)->get();;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = new detalle_cita;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_cita $detalle)
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
    public function update(Request $request, detalle_cita $detalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_cita $detalle)
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
