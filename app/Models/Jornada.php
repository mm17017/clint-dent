<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    public function detalle_citas(){
        return $this->hasMany(detalle_citas::class);
    }

    public function tipo_jornadas(){
        return $this->belongsTo(tipo_jornadas::class);
    }
}
