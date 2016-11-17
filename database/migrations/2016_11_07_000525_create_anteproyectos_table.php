<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnteproyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anteproyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ANT_nombre');
            $table->string('ANT_descripcion');
            $table->integer('EST_id')->unsigned();
            $table->timestamps();
            $table->foreign('EST_id')->references('id')->on('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anteproyectos');
    }
}
