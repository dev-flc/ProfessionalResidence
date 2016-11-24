<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosasignacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguitosasignacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SEGS_nombre');
            $table->date('SEGS_fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seguitosasignacion');
    }
}
