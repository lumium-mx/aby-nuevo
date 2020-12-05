<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyCompraComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_compraCompras', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('aby_compraSolicitudes_id');
          $table->unsignedBigInteger('aby_articulos_id');
          $table->string('umc',4);
          $table->float('precio1');
          $table->float('precio2');
          $table->float('precio3');
          $table->date('fCompara');
          $table->foreign('aby_compraSolicitudes_id')->references('id')->on('aby_compraSolicitudes');
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
        Schema::dropIfExists('aby_compraCompras');
    }
}
