<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'=>'info@clintdent.com',
            'password'=>'contraseña',
            'lastname_usuario'=>'clint',
            'name_usuario'=>'root',
            'fecha_nacimiento'=>'2021-03-05',
            'telefono'=>'12345',
        ]);
    }
}
