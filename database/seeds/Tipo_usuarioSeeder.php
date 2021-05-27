<?php

use App\Models\tipo_usuario;
use Illuminate\Database\Seeder;

class Tipo_usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tipo_usuario::class, 5)->create();
    }
}
