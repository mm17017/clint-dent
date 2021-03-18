<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCitaServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_cita_servicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detalle_cita_id');
            $table->unsignedBigInteger('servicio_id');
            $table->foreign('detalle_cita_id')->references('id')->on('detalle_citas')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_cita_servicio');
    }
}
