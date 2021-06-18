<?php

namespace Tests\Feature;

use App\Models\Detalle_cita;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class PostManagementTest extends TestCase
{
    use RefreshDatabase;
protected function setUp():void
{
    parent::setUp();
        Artisan::call('db:seed');
}

    /** @test */
    public function a_post_can_be_created()
    {        
        $response = $this->postJson('/api/tipousuario', [
            'tipo_usuario'=>'Cliente',
            'descripcion'=>'Cliente baboso'
        ]);
        $response->assertStatus(201)->assertJson([
            'res'=>true
        ]);
    }



}
