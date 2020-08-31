<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_empleados', function (Blueprint $table) {
          $table->id();
          $table->string('nomEmpleado',50);
          $table->string('apePaterno',50);
          $table->string('apeMaterno',50)->nullable();
          $table->date('fnacimiento');
          $table->string('clave',10)->nullable();
          $table->unsignedBigInteger('aby_departamentos_id');
          $table->unsignedBigInteger('aby_puestos_id');
          $table->unsignedBigInteger('aby_estado_id');
          $table->foreign('aby_departamentos_id')->references('id')->on('aby_departamentos');
          $table->foreign('aby_puestos_id')->references('id')->on('aby_puestos');
          $table->foreign('aby_estado_id')->references('id')->on('aby_estado');
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
        Schema::table('”aby_empleados”', function (Blueprint $table) {
          Schema::dropIfExists('aby_empleados');
        });
    }
}
