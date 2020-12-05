<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_pedidos', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('aby_clientes_id');
          $table->unsignedBigInteger('aby_articulos_id');
          $table->float('cantidad');
          $table->date('fPedido');
          $table->date('fEntrega');
          $table->foreign('aby_clientes_id')->references('id')->on('aby_clientes');
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
        Schema::dropIfExists('aby_pedidos');
    }
}
