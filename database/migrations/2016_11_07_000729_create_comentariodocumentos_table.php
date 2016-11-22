<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariodocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('comentarios_documentos', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('CODO_usuario');
            $table->dateTime('CODO_fecha');
            $table->longText('CODO_comentario');
            $table->integer('DOC_id')->unsigned();
            $table->timestamps();
            $table->foreign('DOC_id')->references('id')->on('documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentarios_documentos');
    }
}
