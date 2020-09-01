<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_entradas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aby_compraOrdenes_id');
            $table->float('cantidadRecibida');
            $table->foreign('aby_compraOrdenes_id')->references('id')->on('aby_compraOrdenes');
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
        Schema::dropIfExists('aby_entradas');
    }
}
