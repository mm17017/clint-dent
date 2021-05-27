<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ServicioSeeder::class);
        $this->call(Estado_citaSeeder::class);
        $this->call(Tipo_jornadaSeeder::class);
        $this->call(Tipo_usuarioSeeder::class);
    }
}
