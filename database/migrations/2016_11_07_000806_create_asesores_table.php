<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ASE_nombre')->nullable();
            $table->string('ASE_apellido_p')->nullable();
            $table->string('ASE_apellido_m')->nullable();
            $table->string('ASE_tel')->nullable();
            $table->string('ASE_cel')->nullable();
            $table->integer('DIR_id')->unsigned()->nullable();; 
            $table->integer('USU_id')->unsigned()->nullable();; 
            $table->timestamps();
            $table->foreign('DIR_id')->references('id')->on('direcciones');
            $table->foreign('USU_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asesores');
    }
}
