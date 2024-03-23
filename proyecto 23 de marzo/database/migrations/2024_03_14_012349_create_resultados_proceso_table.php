<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosProcesoTable extends Migration
{
    public function up()
    {
        Schema::create('resultados_proceso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proceso_seleccion_id');
            $table->foreign('proceso_seleccion_id')->references('id')->on('proceso_seleccion')->onDelete('cascade');
            $table->unsignedBigInteger('etapa_proceso_id');
            $table->foreign('etapa_proceso_id')->references('id')->on('etapas_proceso')->onDelete('cascade'); // Definimos la relación con la tabla de etapas_proceso
            $table->string('resultado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resultados_proceso');
    }
}
