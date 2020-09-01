<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyEmisionFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_emisionFacturas', function (Blueprint $table) {
            $table->id();
            $table->decimal('subtotal', 20,2);
            $table->decimal('iva',20,2);
            $table->decimal('total',20,2);
            $table->longtext('letratotal');
            $table->tinyinteger('dias');
            $table->string('tipo',3);
            $table->string('usoCFDI',10);
            $table->string('metodoPago',3);
            $table->boolean('timbrado');
            $table->string('serie',10);
            $table->integer('numero');
            $table->boolean('esNotaCredito');
            $table->boolean('tieneNotaCredito');
            $table->string('nombreReceptor');
            $table->string('direccionReceptor');
            $table->integer('status');
            $table->boolean('facturaManual');
            $table->string('usuarioElaboroFactura');
            $table->string('noFacturaOriginal');
            $table->boolean('pagada');
            $table->tinyinteger('parcialComplemento');
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
        Schema::dropIfExists('aby_emisionFacturas');
    }
}
