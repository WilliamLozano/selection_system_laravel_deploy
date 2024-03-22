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
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->string('numero_vacante');
            $table->string('meses_experiencia');
            $table->string('pais');
            $table->string('salario');
            $table->string('fecha_inicio');
            $table->string('fecha_cierre');
            $table->UnsignedBigInteger('id_municipio');
            $table->foreign('id_municipio')->references('id')->on('municipalities');
            $table->UnsignedBigInteger('id_horario');
            $table->foreign('id_horario')->references('id')->on('horarios');
            $table->UnsignedBigInteger('id_salario');
            $table->foreign('id_salario')->references('id')->on('salarios');
            $table->UnsignedBigInteger('id_contrato');
            $table->foreign('id_contrato')->references('id')->on('contratos');
            $table->UnsignedBigInteger('id_cargo');
            $table->foreign('id_cargo')->references('id')->on('cargos');
            $table->UnsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresas');

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
        Schema::dropIfExists('vacantes');
    }
};
