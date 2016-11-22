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
            $table->longText('SEG_descripcion')->nullable();
            $table->date('SEG_fecha');
            $table->date('SEG_fecha_entrega')->nullable();
            $table->time('SEG_hora_entrega')->nullable();
            $table->string('SEG_archivo')->nullable();
            $table->integer('ESQ_id')->unsigned(); 
            $table->integer('EST_id')->unsigned()->default(9); 
            $table->timestamps();
            $table->foreign('ESQ_id')->references('id')->on('esquemas');
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
        Schema::drop('seguimientos');
    }
}
