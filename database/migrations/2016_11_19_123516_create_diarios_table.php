<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DIA_nombre');
            $table->longText('DIA_descripcion');
            $table->dateTime('DIA_fecha');
            $table->integer('NOT_id')->unsigned();
            $table->integer('ALU_id')->unsigned();
            $table->timestamps();
            $table->foreign('NOT_id')->references('id')->on('notas');
            $table->foreign('ALU_id')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('diarios');
    }
}
