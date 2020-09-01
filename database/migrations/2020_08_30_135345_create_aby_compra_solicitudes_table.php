<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyCompraSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_compraSolicitudes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aby_pedidos_id');
            $table->unsignedBigInteger('aby_articulos_id');
            $table->float('cantidad');
            $table->date('fSolicitud');
            $table->date('fEntrada');
            $table->foreign('aby_pedidos_id')->references('id')->on('aby_pedidos');
            $table->foreign('aby_articulos_id')->references('id')->on('aby_articulos');
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
        Schema::dropIfExists('aby_compraSolicitudes');
    }
}
