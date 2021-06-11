<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornadas';

    protected $fillable =  ['hora_inicio','tipo_jornada_id'];
    protected $hidden =  ['created_at','updated_at'];

    public function detalle_citas(){
        return $this->hasMany(detalle_citas::class);
    }

    public function tipo_jornadas(){
        return $this->belongsTo(tipo_jornadas::class);
    }
}
