<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('secretarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SEC_nombre');
            $table->string('SEC_apellido_p');
            $table->string('SEC_apellido_m');
            $table->string('SEC_tel');
            $table->string('SEC_cel');
            $table->integer('DIR_id')->unsigned()->nullable();
            $table->integer('USU_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('DIR_id')->references('id')->on('direcciones');
            $table->foreign('USU_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('secretarios');
    }
}
