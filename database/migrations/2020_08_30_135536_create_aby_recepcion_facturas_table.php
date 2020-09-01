<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyRecepcionFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_recepcionFacturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aby_proveedores_id');
            $table->integer('folio');
            $table->boolean('estaPendiente');
            $table->boolean('estaPagada');
            $table->float('monto');
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
        Schema::dropIfExists('aby_recepcionFacturas');
    }
}
