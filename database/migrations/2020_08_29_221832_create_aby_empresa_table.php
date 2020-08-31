<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbyEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aby_empresa', function (Blueprint $table) {
          $table->id();
          $table->string('clave', 3);
          $table->string('nombre', 30);
          $table->string('representante', 30)->nullable();
          $table->string('rfc',13)->nullable();
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
        Schema::dropIfExists('aby_empresa');
      });
    }
}
