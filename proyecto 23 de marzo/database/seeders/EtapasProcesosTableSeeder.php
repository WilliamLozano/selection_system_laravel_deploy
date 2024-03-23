<?php

namespace Database\Seeders;

use App\Models\EtapaProceso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtapasProcesosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etapa1 = new EtapaProceso;
        $etapa1->nombre = 'Solicitud de vacante';
        $etapa1->save();

        $etapa2 = new EtapaProceso;
        $etapa2->nombre = 'Publicación de la vacante';
        $etapa2->save();

        $etapa3 = new EtapaProceso;
        $etapa3->nombre = 'Revisión y filtro de currículums';
        $etapa3->save();

        $etapa4 = new EtapaProceso;
        $etapa4->nombre = 'Entrevistas y evaluaciones';
        $etapa4->save();

        $etapa5 = new EtapaProceso;
        $etapa5->nombre = 'Gestión de referencias y verificaciones';
        $etapa5->save();

        $etapa6 = new EtapaProceso;
        $etapa6->nombre = 'Oferta y contratación';
        $etapa6->save();

        $etapa7 = new EtapaProceso;
        $etapa7->nombre = 'Integración y seguimiento del nuevo empleado';
        $etapa7->save();

        $etapa8 = new EtapaProceso;
        $etapa8->nombre = 'Análisis y reportes';
        $etapa8->save();
    }
}
