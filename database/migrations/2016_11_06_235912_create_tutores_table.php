<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function(Blueprint $table){
            $table->increments('id');
            $table->string('TUT_nombre',45);
            $table->string('TUT_apellido_p',45);
            $table->string('TUT_apellido_m',45);
            $table->string('TUT_correo',50);
            $table->string('TUT_tel',14);
            $table->string('TUT_cel',14);
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
        Schema::drop('tutores');
    }
}
