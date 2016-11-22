<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ALU_nombre');
            $table->string('ALU_apellido_p');
            $table->string('ALU_apellido_m');
            $table->string('ALU_sexo');
            $table->string('ALU_tel');
            $table->string('ALU_cel');
            $table->string('ALU_matricula');
            $table->string('ALU_semestre');
            $table->string('ALU_periodo');
            $table->integer('EST_id')->unsigned()->nullable();
            $table->integer('USU_id')->unsigned()->nullable();
            $table->integer('TUT_id')->unsigned()->nullable();
            $table->integer('DIR_id')->unsigned()->nullable();
            $table->integer('ESC_id')->unsigned()->nullable();
            $table->integer('ANT_id')->unsigned()->nullable();
            $table->integer('ESQ_id')->unsigned()->nullable();

            $table->foreign('EST_id')->references('id')->on('estatus');
            $table->foreign('USU_id')->references('id')->on('users');
            $table->foreign('TUT_id')->references('id')->on('tutores');
            $table->foreign('DIR_id')->references('id')->on('direcciones');
            $table->foreign('ESC_id')->references('id')->on('escuelas');
            $table->foreign('ANT_id')->references('id')->on('anteproyectos');
            $table->foreign('ESQ_id')->references('id')->on('esquemas');
            $table->timestamps();
        });

        Schema::create('alumnos_asesores', function (Blueprint $table){
            $table->increments('id');
            $table->integer('ALU_id')->unsigned();
            $table->integer('ASE_id')->unsigned();
            $table->string('ALAS_tipo');

            $table->foreign('ALU_id')->references('id')->on('alumnos');
            $table->foreign('ASE_id')->references('id')->on('asesores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alumnos');
    }
}
