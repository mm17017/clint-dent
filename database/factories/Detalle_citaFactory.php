<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Detalle_cita;
use App\Models\Estado_cita;
use App\Models\Jornada;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Detalle_cita::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->sentence(3),
        'fecha_cita' => $faker->date(),        
        'user_id' => User::all()->random()->id,        
        'estado_cita_id' => Estado_cita::all()->random()->id,
        'jornada_id' => Jornada::all()->random()->id,        
    ];
});
