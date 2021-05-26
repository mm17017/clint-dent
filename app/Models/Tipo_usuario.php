<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tipo_usuario extends Model
{
    //Relacion uno a muchos
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
