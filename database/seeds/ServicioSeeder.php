<?php

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([
            'descripcion'=>'Limpieza Dental',
            'precio'=>'35.00',
            'tiempo_tratamiento'=>'00:40:00',
        ]);
        Servicio::create([
            'descripcion'=>'Resina Dental',
            'precio'=>'40.00',
            'tiempo_tratamiento'=>'00:50:00',
        ]);
        Servicio::create([
            'descripcion'=>'Endodoncia',
            'precio'=>'155.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Coronas Dentales',
            'precio'=>'285.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Implantes dentales',
            'precio'=>'800.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Extraccion',
            'precio'=>'50.00',
            'tiempo_tratamiento'=>'00:40:00',
        ]);
        Servicio::create([
            'descripcion'=>'Guarda Oclusal',
            'precio'=>'75.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Puentes Dentales',
            'precio'=>'860.00',
            'tiempo_tratamiento'=>'02:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Brackets Tradicionales',
            'precio'=>'335.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Brackets Esteticos',
            'precio'=>'675.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Brackets Autoligados',
            'precio'=>'575.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Invisaling',
            'precio'=>'1255.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);
        Servicio::create([
            'descripcion'=>'Blanqueamiento Dental',
            'precio'=>'200.00',
            'tiempo_tratamiento'=>'01:00:00',
        ]);

        //factory(Servicio::class, 10)->create();
    }
}
