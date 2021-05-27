<?php

use App\Models\tipo_jornada;
use Illuminate\Database\Seeder;

class Tipo_jornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tipo_jornada::class, 5)->create();
    }
}
