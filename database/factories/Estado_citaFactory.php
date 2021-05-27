<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estado_cita;
use Faker\Generator as Faker;

$factory->define(Estado_cita::class, function (Faker $faker) {
    return [
        'estado' => $faker->randomElement(['En proceso', 'Cancelado', 'Finalizado']),
        'descripcion'=> $faker->sentence(3),        
    ];
});
