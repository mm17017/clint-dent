<?php

namespace Tests\Feature;

use App\Models\Detalle_cita;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class PostManagementTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_post_can_be_created()
    {
        
        $response = $this->postJson('/detalle', [
            'descripcion'=>'Cosas',
            'fecha_cita'=>'2021-06-20',
            'user_id'=>1,
            'estado_cita_id'=>1,
            'jornada_id'=>1,
            'serviciosSeleccionados'=>[1,2]
        ]);

        

        $response->assertStatus(201)->assertJson([
            'res'=>true
        ]);
    }



}
