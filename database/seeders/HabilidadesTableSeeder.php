<?php

namespace Database\Seeders;

use App\Models\Habilidad;
use App\Models\Ocupacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabilidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habilidadesPorOcupacion = [
            'Miembros del poder ejecutivo y legislativo' => [
                'Comunicación asertiva',
                'Pensamiento crítico',
                'Evaluación y control de actividades',
            ],

            'Personal directivo de la administración pública' => [
                'Comprensión de lectura',
                'Escucha activa',
                'Comunicación asertiva',
            ],

            'Directores y gerentes generales de servicios financieros' => [
                'Comprensión de lectura',
                'Pensamiento crítico',
                'Resolución de problemas complejos',
            ],

            'Directores y gerentes generales de salud' => [
                'Comunicación asertiva',
                'Pensamiento crítico',
                'Escucha activa',
            ],

            'Directores y gerentes generales de comercio' => [
                'Comunicación asertiva',
                'Pensamiento crítico',
                'Relaciones interpersonales',
            ],

            'Directores y gerentes generales de producción de bienes' => [
                'Comunicación asertiva',
                'Pensamiento crítico',
                'Evaluación y control de actividades',
            ],


            'Directores y gerentes generales de servicios y procesos de negocio' => [
                'Comunicación asertiva',
                'Pensamiento crítico',
                'Persuasión',
            ],

            'Gerentes financieros' => [
                'Comunicación asertiva',
                'Pensamiento crítico',
                'Criterio y toma de decisiones',
            ],

            'Gerentes de talento humano' => [
                'Trabajo bajo presión',
                'Comprensión de lectura',
                'Escucha activa',
            ],

            'Gerentes de compras y adquisicionesComprensión de lectura' => [
                'Comprensión de lectura',
                'Comunicación asertiva',
                'Pensamiento crítico',
            ],


            'Gerentes de otros servicios administrativos' => [
                'Escucha activa',
                'Comunicación asertiva',
                'Pensamiento crítico',
            ],


            'Gerentes de seguros, bienes raíces y corretaje financiero' => [
                'Pensamiento crítico',
                'Evaluación y control de actividades',
                'Criterio y toma de decisiones',
            ],


            'Gerentes de banca, crédito e inversiones' => [
                'Comunicación asertiva',
                'Pensamiento crítico',
                'Evaluación y control de actividades',
            ],


            'Gerentes de otros servicios a las empresas' => [
                'Evaluación y control de actividades',
                'Comunicación asertiva',
                'Comprensión de lectura',
            ],


            'Gerentes de empresas de telecomunicaciones' => [
                'Comprensión de lectura',
                'Resolución de problemas complejos',
                'Análisis de necesidades',
            ],


            'Gerentes de servicios de correo y mensajería' => [
                'Escucha activa',
                'Comprensión de lectura',
                'Escucha activa',
            ],


            'Gerentes de ingeniería' => [
                'Comprensión de lectura',
                'Pensamiento crítico',
                'Evaluación y control de actividades',
            ],


            'Gerentes de investigación y desarrollo en ciencias naturales y aplicadas' => [
                'Comprensión de lectura',
                'Escucha activa',
                'Redacción de textos',
            ],


            'Gerentes de sistemas de información y procesamiento de datos' => [
                'Escucha activa',
                'Pensamiento crítico',
                'Evaluación y control de actividades',
            ],


            'Gerentes de servicios a la salud' => [
                'Comunicación asertiva',
                'Escucha activa',
                'Comprensión de lectura',
            ],


            'Gerentes de programas de política social y de salud' => [
                'Comprensión de lectura',
                'Escucha activa',
                'Comunicación asertiva',
            ],


            'Gerentes de programas de política de desarrollo económico' => [
                'Comprensión de lectura',
                'Escucha activa',
                'Comunicación asertiva',
            ],


            'Gerentes de programas de política educativa' => [
                'Escucha activa',
                'Comprensión de lectura',
                'Redacción de textos',
            ],

            'Otros gerentes de administración pública' => [
                'Comprensión de lectura',
                'Escucha activa',
                'Pensamiento crítico',
            ],

            'Directores y administradores de instituciones de educación y formación' => [
                'Comprensión de lectura',
                'Escucha activa',
                'Redacción de textos',
            ],

            'Gerentes de servicios social, comunitario y correccional' => [
                'Gestión del tiempo',
                'Relaciones interpersonales',
                'Gestión de recursos de personal',
            ],

            'Gerentes de biblioteca, museo y galería de arte' => [
                'Comunicación asertiva',
                'Orientación al servicio',
                'Análisis de procesos',
            ],

            'Gerentes de medios de comunicación y artes escénicas ' => [
                'Escucha activa',
                'Redacción de textos',
                'Pensamiento crítico',
            ],

            'Directores y gerentes de recreación, esparcimiento y deportes' => [
                'Comunicación asertiva',
                'Pensamiento crítico',
                'Liderazgo',
            ],

            'Gerentes de ventas, mercadeo y publicidad ' => [
                'Pensamiento crítico',
                'Evaluación y control de actividades',
                'Relaciones interpersonales',
            ],

        ];

        foreach ($habilidadesPorOcupacion as $nombreOcupacion => $habilidades) {
            $ocupacion = Ocupacion::where('nombre_ocupacion', $nombreOcupacion)->first();

            if ($ocupacion) {
                foreach ($habilidades as $habilidadData) {
                    $habilidad = new Habilidad();
                    $habilidad->habilidad = $habilidadData;
                    $habilidad->id_ocupacion = $ocupacion->id;
                    $habilidad->save();
                }
            }
        }
    }

}
