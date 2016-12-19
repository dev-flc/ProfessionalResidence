<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DI_nombre')->nullable();
            $table->string('DI_apellido_p')->nullable();
            $table->string('DI_apellido_m')->nullable();
            $table->string('DI_correo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('directores');
    }
}
