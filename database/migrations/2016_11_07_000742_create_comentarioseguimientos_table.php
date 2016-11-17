<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioseguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_seguimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('COSE_usuario');
            $table->string('COSE_fecha');
            $table->string('COSE_hora');
            $table->string('COSE_comentario');
            $table->integer('SEG_id')->unsigned();
            $table->timestamps();
            $table->foreign('SEG_id')->references('id')->on('seguimientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentarios_seguimientos');
    }
}
