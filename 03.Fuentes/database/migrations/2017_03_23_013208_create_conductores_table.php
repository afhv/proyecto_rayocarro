<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->increments('id');

            $table->date('f_registroC')->nullable();
            $table->string('numero_doc', 12)->unique();
            $table->string('nombreC', 20)->nullable();
            $table->string('apellidoC', 20)->nullable();
            $table->string('tipo_doc', 20)->nullable();
            $table->string('generoC', 20)->nullable();
            $table->integer('vehiculo_id')->unsigned();

            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::table('conductores', function (Blueprint $table) {
            $table->dropUnique(['numero_doc']);
            $table->dropForeign(['vehiculo_id']);
        });
        Schema::dropIfExists('conductores');
    }
}
