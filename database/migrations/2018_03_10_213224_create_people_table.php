<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_boleta');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('celular');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('estado_civil');
            $table->string('profesion');
            $table->string('como_llego');
            $table->string('miembro_otraigle');
            $table->text('peticion');
            $table->string('email');
            $table->string('encuestador');
            $table->date('fecha_registro');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('leader_id')->unsigned();
            $table->foreign('leader_id')->references('id')->on('leaders')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('consolidator_id')->unsigned();
            $table->foreign('consolidator_id')->references('id')->on('consolidators')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('people');
    }
}
