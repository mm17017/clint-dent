<?php

use App\Models\Detalle_cita;
use Illuminate\Database\Seeder;

class Detalle_citaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalles = factory(Detalle_cita::class, 10)->create();

        foreach ($detalles as $detalle) {
            $detalle->servicios()->attach([
                rand(1, 5),
                rand(6,10),
            ]);
        }
    }
}
