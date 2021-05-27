<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->string('lastname_usuario', 50);
            $table->string('name_usuario', 50);
            $table->date('fecha_nacimiento');
            $table->string('telefono', 13)->nullable();
            $table->unsignedBigInteger('tipo_usuario_id')->default(1);
            $table->foreign('tipo_usuario_id')
                ->references('id')
                ->on('tipo_usuarios')
                ->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
