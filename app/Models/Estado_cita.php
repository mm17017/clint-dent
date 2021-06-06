<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado_cita extends Model
{
    protected $fillable = ['estado','descripcion'];
    public function detalle_citas(){
        return $this->hasMany(detalle_citas::class);
    }
}
