<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    protected $fillable =  ['descripcion','precio','tiempo_tratamiento'];
    protected $hidden =  ['created_at','updated_at'];
    public function detalle_cita_servicio(){
        return $this->hasMany(detalle_cita_servicio::class);
    }

    public function detalle_cita(){
        return $this->belongsToMany(detalle_cita::class);
    }
}
