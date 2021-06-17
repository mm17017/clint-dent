<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
    protected $table='tipo_usuarios';

    protected $fillable = ['tipo_usuario','descripcion'];
    //Relacion uno a muchos
    public function Users(){
        return $this->hasMany(User::class);
    }
}
