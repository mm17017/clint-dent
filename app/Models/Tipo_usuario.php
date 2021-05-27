<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
    protected $table='tipo_usuarios';
    //Relacion uno a muchos
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
