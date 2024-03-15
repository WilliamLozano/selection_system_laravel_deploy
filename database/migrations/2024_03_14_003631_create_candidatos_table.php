<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rol'); // Usamos unsignedBigInteger para la clave externa
            $table->enum('tipo_doc', ['CC', 'TI']);
            $table->string('documento');
            $table->string('nombre_usuario')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo')->unique();
            $table->string('contraseña');
            $table->timestamps();

            // Definimos la clave externa de forma separada
            $table->foreign('id_rol')->references('id')->on('roles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
