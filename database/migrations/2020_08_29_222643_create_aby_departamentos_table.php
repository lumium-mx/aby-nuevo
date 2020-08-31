<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_departamentos', function (Blueprint $table) {
          $table->id();
          $table->string('clave', 3)->nullable();
          $table->string('nombre', 30);
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
        Schema::table('aby_departamentos', function (Blueprint $table) {
          Schema::dropIfExists('aby_departamentos');
        });
    }
}
