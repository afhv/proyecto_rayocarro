<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');

            $table->date('f_ingreso')->nullable();
            $table->string('placaV', 5)->unique();
            $table->string('marcaV', 20)->nullable();
            $table->string('modeloV', 20)->nullable();
            $table->string('colorV', 20)->nullable();

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
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropUnique(['placaV']);
        });
        Schema::dropIfExists('vehiculos');
    }
}
