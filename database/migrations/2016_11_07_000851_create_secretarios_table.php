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
            $table->string('SEC_nombre')->nullable();
            $table->string('SEC_apellido_p')->nullable();
            $table->string('SEC_apellido_m')->nullable();
            $table->string('SEC_tel')->nullable();
            $table->string('SEC_cel')->nullable();
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
