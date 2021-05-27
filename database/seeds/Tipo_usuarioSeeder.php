<?php

use App\Models\Tipo_usuario;
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
        factory(Tipo_usuario::class, 5)->create();
    }
}
