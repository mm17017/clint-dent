<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado_cita extends Model
{
    protected $fillable = ['estado','descripcion'];
    protected $hidden = ['created_at','updated_at'];
    public function detalle_citas(){
        return $this->hasMany(detalle_citas::class);
    }
}
