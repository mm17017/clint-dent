<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipo_jornada;
use Faker\Generator as Faker;

$factory->define(Tipo_jornada::class, function (Faker $faker) {
    return [
        'nombre_tipo' => $faker->word(),
        'descripcion_tipo' => $faker->sentence(3),        
    ];
});
