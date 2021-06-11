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
        Tipo_jornada::create([
            'nombre_tipo'=>'Matutino',
            'descripcion_tipo'=>'Turno de mañana',
        ]);

        Tipo_jornada::create([
            'nombre_tipo'=>'Vespertino',
            'descripcion_tipo'=>'Turno de tarde',
        ]);

        // factory(Tipo_jornada::class, 5)->create();
    }
}
