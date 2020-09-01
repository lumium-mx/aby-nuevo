<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyCompraOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_compraOrdenes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aby_proveedores_id');
            $table->unsignedBigInteger('aby_empresa_id');
            $table->integer('folio');
            $table->unsignedBigInteger('aby_articulos_id');
            $table->string('umc',4);
            $table->float('cantidad');
            $table->float('precio');
            $table->integer('partida');
            $table->foreign('aby_proveedores_id')->references('id')->on('aby_proveedores');
            $table->foreign('aby_empresa_id')->references('id')->on('aby_empresa');
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
        Schema::dropIfExists('aby_compraOrdenes');
    }
}
