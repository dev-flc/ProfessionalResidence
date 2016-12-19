<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubdirectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdirectores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SUB_nombre')->nullable();
            $table->string('SUB_apellido_p')->nullable();
            $table->string('SUB_apellido_m')->nullable();
            $table->string('SUB_tel')->nullable();
            $table->string('SUB_cel')->nullable();
            $table->integer('DIR_id')->unsigned()->nullable(); 
            $table->integer('USU_id')->unsigned()->nullable(); 
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
        Schema::drop('subdirectores');
    }
}
