<?php

namespace Database\Seeders;

use App\Models\Candidato;
use Illuminate\Database\Seeder;

class CandidatosTableSeeder extends Seeder
{
    public function run()
    {
        // Crear candidatos de ejemplo
        $candidato1 = new Candidato;
        $candidato1->id_rol = 4; // ID del rol de candidato
        $candidato1->tipo_doc = 'CC';
        $candidato1->documento = '444444444';
        $candidato1->nombre_usuario = 'candidato6';
        $candidato1->nombre = 'Gabriel';
        $candidato1->apellido = 'Martínez';
        $candidato1->telefono = '4444444444';
        $candidato1->correo = 'gabrielmartinez@example.com';
        $candidato1->contraseña = bcrypt('contraseña6');
        $candidato1->save();

        $candidato2 = new Candidato;
        $candidato2->id_rol = 4; // ID del rol de candidato
        $candidato2->tipo_doc = 'TI';
        $candidato2->documento = '555555555';
        $candidato2->nombre_usuario = 'candidato7';
        $candidato2->nombre = 'Valentina';
        $candidato2->apellido = 'López';
        $candidato2->telefono = '5555555555';
        $candidato2->correo = 'valentinalopez@example.com';
        $candidato2->contraseña = bcrypt('contraseña7');
        $candidato2->save();

        $candidato3 = new Candidato;
        $candidato3->id_rol = 4; // ID del rol de candidato
        $candidato3->tipo_doc = 'CC';
        $candidato3->documento = '111111111';
        $candidato3->nombre_usuario = 'candidato3';
        $candidato3->nombre = 'Luisa';
        $candidato3->apellido = 'Rodríguez';
        $candidato3->telefono = '1111111111';
        $candidato3->correo = 'luisarodriguez@example.com';
        $candidato3->contraseña = bcrypt('contraseña3');
        $candidato3->save();

        $candidato4 = new Candidato;
        $candidato4->id_rol = 4; // ID del rol de candidato
        $candidato4->tipo_doc = 'TI';
        $candidato4->documento = '222222222';
        $candidato4->nombre_usuario = 'candidato4';
        $candidato4->nombre = 'Andrés';
        $candidato4->apellido = 'González';
        $candidato4->telefono = '2222222222';
        $candidato4->correo = 'andresgonzalez@example.com';
        $candidato4->contraseña = bcrypt('contraseña4');
        $candidato4->save();

        $candidato5 = new Candidato;
        $candidato5->id_rol = 4; // ID del rol de candidato
        $candidato5->tipo_doc = 'CC';
        $candidato5->documento = '333333333';
        $candidato5->nombre_usuario = 'candidato5';
        $candidato5->nombre = 'Camila';
        $candidato5->apellido = 'Hernández';
        $candidato5->telefono = '3333333333';
        $candidato5->correo = 'camilahernandez@example.com';
        $candidato5->contraseña = bcrypt('contraseña5');
        $candidato5->save();

        // Agregar más candidatos según sea necesario
    }
}
