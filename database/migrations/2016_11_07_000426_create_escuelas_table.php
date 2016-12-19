<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ESC_nombre')->nullable();
            $table->string('ESC_clave')->nullable();
            $table->integer('DIR_id')->unsigned()->nullable();
            $table->integer('DI_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('DIR_id')->references('id')->on('direcciones');
            $table->foreign('DI_id')->references('id')->on('directores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('escuelas');
    }
}
