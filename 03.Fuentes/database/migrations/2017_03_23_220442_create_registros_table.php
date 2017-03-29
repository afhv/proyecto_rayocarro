<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conductor_id');
            $table->datetime('fecha');
            $table->char('tipo',1);
            $table->integer('usuario_id');
            $table->timestamps();

            $table->foreign('conductor_id')->references('id')->on('conductors');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('registros');
    }
}
