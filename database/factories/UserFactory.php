<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipo_usuario;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [        
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'lastname_usuario' => $faker->sentence(2),
        'name_usuario' => $faker->sentence(2),
        'fecha_nacimiento' => $faker->date(),
        'telefono' => $faker->e164PhoneNumber(),
        'tipo_usuario_id' => Tipo_usuario::all()->random()->id,
        'remember_token' => Str::random(10),
    ];
});
