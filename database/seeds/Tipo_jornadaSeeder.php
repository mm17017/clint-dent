<?php

use App\Models\Tipo_jornada;
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
        factory(Tipo_jornada::class, 5)->create();
    }
}
