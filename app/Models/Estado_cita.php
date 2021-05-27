<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado_cita extends Model
{
    public function detalle_citas(){
        return $this->hasMany(detalle_citas::class);
    }
}
