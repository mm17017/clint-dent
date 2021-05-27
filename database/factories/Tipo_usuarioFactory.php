<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipo_usuario;
use Faker\Generator as Faker;

$factory->define(Tipo_usuario::class, function (Faker $faker) {
    return [
        'tipo_usuario' => $faker->word(),
        'descripcion' => $faker->sentence(2),        
    ];
});
