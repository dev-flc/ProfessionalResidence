<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DOC_nombre');
            $table->longText('DOC_descripcion');
            $table->dateTime('DOC_fecha');
            $table->string('DOC_archivo');
            $table->integer('ANT_id')->unsigned(); 
            $table->timestamps();
            $table->foreign('ANT_id')->references('id')->on('anteproyectos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documentos');
    }
}
