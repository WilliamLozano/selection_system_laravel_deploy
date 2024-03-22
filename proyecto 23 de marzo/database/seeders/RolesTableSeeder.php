<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = new Rol;
        $rol1->nombre_rol = 'ADMINISTRADOR';
        $rol1->descripcion = 'ADMINISTRADOR DE USUARIOS';
        $rol1->save();

        $rol2 = new Rol;
        $rol2->nombre_rol = 'INSTRUCTOR';
        $rol2->descripcion = 'USUARIO INSTRUCTOR - FORMADOR';
        $rol2->save();

        $rol3 = new Rol;
        $rol3->nombre_rol = 'RECLUTADOR';
        $rol3->descripcion = 'USUARIO RECLUTADOR / SELECCIONDOR DE TALENTO HUMANO';
        $rol3->save();

        $rol4 = new Rol;
        $rol4->nombre_rol = 'CANDIDATO';
        $rol4->descripcion = 'USUARIO CANDIDATO A OCUPAR UNA VACANTE LABORAL';
        $rol4->save();

    }
}
