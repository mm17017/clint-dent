<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_jornada extends Model
{
    protected $table='tipo_jornadas';
    
    public function jornadas(){
        return $this->hasMany(jornadas::class);
    }
}
