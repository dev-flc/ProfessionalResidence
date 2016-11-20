<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ACT_nombre');
            $table->longText('ACT_descripcion');
            $table->dateTime('ACT_fecha');
            $table->integer('SEC_id')->unsigned();
            $table->timestamps();
            $table->foreign('SEC_id')->references('id')->on('secretarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actas');
    }
}
