<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionPerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('opcion_perfil', function(Blueprint $table)
        {
            $table->integer('opcion_id')->unsigned()->nullable();
            $table->integer('perfil_id')->unsigned()->nullable();

            $table->foreign('opcion_id')->references('id')
                ->on('opcions')->onDelete('cascade');
            $table->foreign('perfil_id')->references('id')
                ->on('perfils')->onDelete('cascade');

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
        //
        Schema::dropIfExists('opcion_perfil');
    }
}
