<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Jornada;
use App\Models\Tipo_jornada;
use Faker\Generator as Faker;

$factory->define(Jornada::class, function (Faker $faker) {
    return [
        'hora_inicio' => $faker->time(),        
        'tipo_jornada_id' => Tipo_jornada::all()->random()->id,
    ];
});
