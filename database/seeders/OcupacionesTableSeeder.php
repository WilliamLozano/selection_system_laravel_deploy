<?php

namespace Database\Seeders;

use App\Models\Ocupacion;
use Illuminate\Database\Seeder;

class OcupacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ocupaciones = [
            'Miembros del poder ejecutivo y legislativo',
            'Personal directivo de la administración pública',
            'Directores y gerentes generales de servicios financieros',
            'Directores y gerentes generales de salud',
            'Directores y gerentes generales de comercio',
            'Directores y gerentes generales de producción de bienes',
            'Directores y gerentes generales de servicios y procesos de negocio',
            'Gerentes financieros',
            'Gerentes de talento humano',
            'Gerentes de compras y adquisiciones',
            'Gerentes de otros servicios administrativos',
            'Gerentes de seguros, bienes raíces y corretaje financiero',
            'Gerentes de banca, crédito e inversiones',
            'Gerentes de otros servicios a las empresas',
            'Gerentes de empresas de telecomunicaciones',
            'Gerentes de servicios de correo y mensajería',
            'Gerentes de ingeniería',
            'Gerentes de investigación y desarrollo en ciencias naturales y aplicadas',
            'Gerentes de sistemas de información y procesamiento de datos',
            'Gerentes de servicios a la salud',
            'Gerentes de programas de política social y de salud',
            'Gerentes de programas de política de desarrollo económico',
            'Gerentes de programas de política educativa',
            'Otros gerentes de administración pública',
            'Directores y administradores de instituciones de educación y formación',
            'Gerentes de servicios social, comunitario y correccional',
            'Gerentes de biblioteca, museo y galería de arte',
            'Gerentes de medios de comunicación y artes escénicas',
            'Directores y gerentes de recreación, esparcimiento y deportes',
            'Gerentes de ventas, mercadeo y publicidad',
        ];


        foreach ($ocupaciones as $ocupacion) {
            Ocupacion::create([
                'nombre_ocupacion' => $ocupacion,
            ]);
        }
    }
}
