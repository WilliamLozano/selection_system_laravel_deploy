<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funciones', function (Blueprint $table) {
            $table->id();
            $table->text('funcion');
            $table->unsignedBigInteger('id_ocupacion');
            $table->foreign('id_ocupacion')->references('id')->on('ocupaciones');
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
        Schema::dropIfExists('funciones');
    }
};
