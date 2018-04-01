<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cells', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('anfitrion');
            $table->string('celular_anfitrion');
            $table->string('lider');
            $table->string('celular_lider');
            $table->string('consolidador');
            $table->string('celular_consolidador');
            $table->string('timoteo');
            $table->string('celular_timoteo');
            $table->date('fecha_inicio');
            $table->string('email');
            $table->text('descripcion');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cells');
    }
}
