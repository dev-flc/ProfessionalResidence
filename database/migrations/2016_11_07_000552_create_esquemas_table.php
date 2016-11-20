<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsquemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esquemas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ESQ_nombre');
            $table->longText('ESQ_descripcion');
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
        Schema::drop('esquemas');
    }
}
