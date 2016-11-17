<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SEG_nombre');
            $table->string('SEG_descripcion');
            $table->string('SEG_fecha');
            $table->string('SEG_archivo');
            $table->integer('ESQ_id')->unsigned(); 
            $table->timestamps();
            $table->foreign('ESQ_id')->references('id')->on('esquemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seguimientos');
    }
}
