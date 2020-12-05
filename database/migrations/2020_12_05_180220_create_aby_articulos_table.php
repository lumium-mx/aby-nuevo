<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_articulos', function (Blueprint $table) {
          $table->id();
          $table->string('clave');
          $table->unsignedBigInteger('aby_articuloCategorias_id');
          $table->string('descripcion');
          $table->unsignedBigInteger('aby_articuloMarcas_id');
          $table->string('modelo');
          $table->float('cUOM');
          $table->unsignedBigInteger('aby_articuloUOM_id');
          $table->timestamps();
          $table->foreign('aby_articuloCategorias_id')->references('id')->on('aby_articuloCategorias');
          $table->foreign('aby_articuloMarcas_id')->references('id')->on('aby_articuloMarcas');
          $table->foreign('aby_articuloUOM_id')->references('id')->on('aby_articuloUOM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aby_articulos');
    }
}
