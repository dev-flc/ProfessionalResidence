<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NOT_nombre');
            $table->string('NOT_descripcion');
            $table->string('NOT_archivo');
            $table->integer('DIA_id')->unsigned();
            $table->timestamps();
            $table->foreign('DIA_id')->references('id')->on('diarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notas');
    }
}
