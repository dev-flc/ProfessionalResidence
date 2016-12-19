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
            $table->string('ANT_nombre')->nullable();
            $table->longText('ANT_descripcion')->nullable();
            $table->integer('EST_id')->unsigned()->nullable();
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
