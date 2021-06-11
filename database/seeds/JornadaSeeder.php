<?php

use App\Models\Jornada;
use Illuminate\Database\Seeder;

class JornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Jornada::create([
             'hora_inicio'=>'08:00:00',
             'tipo_jornada_id'=>1,
         ]);

         Jornada::create([
            'hora_inicio'=>'09:00:00',
            'tipo_jornada_id'=>1,
        ]);

        Jornada::create([
            'hora_inicio'=>'10:00:00',
            'tipo_jornada_id'=>1,
        ]);

        Jornada::create([
            'hora_inicio'=>'11:00:00',
            'tipo_jornada_id'=>1,
        ]);

        Jornada::create([
            'hora_inicio'=>'12:00:00',
            'tipo_jornada_id'=>1,
        ]);

        Jornada::create([
            'hora_inicio'=>'01:00:00',
            'tipo_jornada_id'=>2,
        ]);

        Jornada::create([
            'hora_inicio'=>'02:00:00',
            'tipo_jornada_id'=>2,
        ]);

        Jornada::create([
            'hora_inicio'=>'03:00:00',
            'tipo_jornada_id'=>2,
        ]);

        Jornada::create([
            'hora_inicio'=>'04:00:00',
            'tipo_jornada_id'=>2,
        ]);

        Jornada::create([
            'hora_inicio'=>'05:00:00',
            'tipo_jornada_id'=>2,
        ]);

        // factory(Jornada::class, 10)->create();
    }
}
