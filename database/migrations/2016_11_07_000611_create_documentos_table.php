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
            $table->string('DOC_nombre')->nullable();
            $table->longText('DOC_descripcion')->nullable();
            $table->date('DOC_fecha')->nullable();
            $table->date('DOC_fecha_entrega')->nullable();
            $table->time('DOC_hora_entrega')->nullable();
            $table->string('DOC_archivo')->nullable();
            $table->integer('ANT_id')->unsigned(); 
            $table->integer('EST_id')->unsigned()->default(9); 
            $table->timestamps();
            $table->foreign('ANT_id')->references('id')->on('anteproyectos');
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
        Schema::drop('documentos');
    }
}
