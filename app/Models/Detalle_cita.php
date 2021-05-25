<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class detalle_cita extends Model
{
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
        return $this->belongsTo(Servicio::class);
    }

    public function estado_citas()
    {
        return $this->belongsTo(Estado_cita::class);
    }
}
