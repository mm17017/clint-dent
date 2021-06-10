<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Detalle_cita extends Model
{
    protected $table = 'detalle_citas';
    
    public function usuarios()
    {
        return $this->belongsTo(User::class);
    }

    public function jornadas()
    {
        return $this->belongsTo(Jornada::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class);
    }

    public function estado_citas()
    {
        return $this->belongsTo(Estado_cita::class);
    }

    public function detalle_cita_servicio(){
        return $this->hasMany(detalle_cita_servicio::class);
    }
}