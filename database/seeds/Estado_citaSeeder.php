<?php

use App\Models\Estado_cita;
use Illuminate\Database\Seeder;

class Estado_citaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Estado_cita::class, 10)->create();
    }
}
