<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Servicio;
use Faker\Generator as Faker;

$factory->define(Servicio::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->sentence,
        'precio' => $faker->numberBetween(1, 999),
        'tiempo_tratamiento' => $faker->time,
    ];
});
