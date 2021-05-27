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
        $this->call([ServicioSeeder::class, Estado_citaSeeder::class, Tipo_jornadaSeeder::class, Tipo_usuarioSeeder::class]);        
    }
}
