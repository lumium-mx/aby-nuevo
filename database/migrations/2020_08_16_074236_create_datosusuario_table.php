<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosusuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosusuario', function (Blueprint $table) {
            $table->id();
            $table->string('iduser')->unique();
            $table->string('nombre',255);
            $table->string('foto')->nullable();
            $table->integer('edad');
            $table->string('genero',1);
            $table->string('numero',15)->nullable();
            $table->string('idonesignal',255)->nullable();
            $table->integer('visitas');
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
        Schema::dropIfExists('datosusuario');
    }
}
