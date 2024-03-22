<?php

namespace Database\Seeders;

use App\Models\Funcion;
use App\Models\Ocupacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        // Obtener todas las ocupaciones
        $ocupaciones = Ocupacion::all();
    
        $funcionesPorOcupacion = [
            
            'Miembros del poder ejecutivo y legislativo' => [
                ['funcion' => 'Promulgar, modificar y revocar leyes, acuerdos y ordenanzas. '],
            ],

            'Personal directivo de la administración pública' => [
                ['funcion' => 'Establecer objetivos de la organización de acuerdo con políticas estatales y leyes establecidas por los cuerpos legislativos; formular y aprobar programas y procedimientos conjuntamente con comités principales. '],
            ],

            'Directores y gerentes generales de servicios financieros' => [
                ['funcion' => 'Establecer, formular y aprobar objetivos, políticas y programas para la empresa. '],
            ],

            'Directores y gerentes generales de salud' => [
                ['funcion' => 'Establecer, formular y aprobar objetivos, políticas y programas de educación y/o sociales para la entidad. '],
            ],

            'Directores y gerentes generales de comercio' => [
                ['funcion' => 'Establecer, formular y aprobar objetivos, políticas y programas para la empresa. '],
            ],

            'Directores y gerentes generales de producción de bienes' => [
                ['funcion' => 'Establecer, formular y aprobar políticas y programas para la empresa. '],
            ],

            'Directores y gerentes generales de servicios y procesos de negocio' => [
                ['funcion' => 'Evaluar la solución de procesos de negocio según metodologías de buenas prácticas. '],
            ],

            'Gerentes financieros' => [
                ['funcion' => 'Establecer los sistemas de gestión según el marco estratégico y plan financiero'],
            ],

            'Gerentes de talento humano' => [
                ['funcion' => 'Realizar seguimiento a los informes de auditoría financiera de acuerdo con estándares de calidad internos y normativas. '],
            ],

            'Gerentes de compras y adquisiciones' => [
                ['funcion' => 'Planear, organizar, dirigir y controlar las actividades de compras de una empresa. '],
            ],

            'Gerentes de otros servicios administrativos' => [
                ['funcion' => 'Planear, organizar, dirigir y controlar operaciones de departamentos que proveen uno o varios servicios administrativos. '],
            ],

            'Gerentes de seguros, bienes raíces y corretaje financiero' => [
                ['funcion' => 'Gerentes de seguros: planear, organizar, dirigir y controlar operaciones de un establecimiento o departamento que provee seguros de cualquier tipo: de vida, contra incendio, automóviles, propiedades, etc. '],
            ],

            'Gerentes de banca, crédito e inversiones' => [
                ['funcion' => 'Planear, organizar, dirigir y controlar operaciones de sucursales bancarias, fiduciarias, instituciones financieras, de intermediación financiera, mesas de dinero en entidades financieras y de mercado de valores; administran operaciones de fondos de inversión, negocios fiduciarios y otras actividades relacionadas'],
            ],

            'Gerentes de otros servicios a las empresas' => [
                ['funcion' => 'Planear, organizar, dirigir y controlar las operaciones de empresas que proveen servicios, como: consultoría administrativa, investigación de mercados, servicios de personal, de nómina, de publicidad o seguridad. '],
            ],

            'Gerentes de empresas de telecomunicaciones' => [
                ['funcion' => 'Planear, organizar, dirigir y controlar las operaciones de empresas, departamentos o instalaciones de telecomunicaciones. '],
            ],

            'Gerentes de servicios de correo y mensajería' => [
                ['funcion' => 'Controlar los planes de operación logística según métodos de seguimiento. '],
            ],

            'Gerentes de ingeniería' => [
                ['funcion' => 'Desarrollar e implementar políticas, normas y procedimientos para la ingeniería y trabajo técnico ejecutado en el departamento, servicio, laboratorio o empresa. '],
            ],

            'Gerentes de investigación y desarrollo en ciencias naturales y aplicadas' => [
                ['funcion' => 'Planear organizar, dirigir y controlar las actividades de un departamento de investigación y desarrollo científico, firma o servicio de control de calidad. '],
            ],

            'Gerentes de sistemas de información y procesamiento de datos' => [
                ['funcion' => 'Desarrollar e implementar políticas y procedimientos para el procesamiento electrónico de información y desarrollo de sistemas computarizados. '],
            ],

            'Gerentes de servicios a la salud' => [
                ['funcion' => 'Recuperando datos. Espere unos segundos e intente cortar o copiar de nuevo.'],
            ],

            'Gerentes de programas de política social y de salud' => [
                ['funcion' => 'Organizar grupos de trabajo y establecer procedimientos para cumplir los objetivos establecidos por la administración principal. '],
            ],

            'Gerentes de programas de política de desarrollo económico' => [
                ['funcion' => 'Participar en el desarrollo de políticas nacionales, proporcionando asesoría a otros funcionarios. '],
            ],

            'Gerentes de programas de política educativa' => [
                ['funcion' => 'Participar en el desarrollo de políticas educativas, asesorando a otros funcionarios. '],
            ],

            'Otros gerentes de administración pública' => [
                ['funcion' => 'Participar en el desarrollo de políticas y programas, asesorando a otros funcionarios del gobierno, cuerpos colegiados o dependencias involucradas en actividades propias de la administración pública. '],
            ],

            'Directores y administradores de instituciones de educación y formación' => [
                ['funcion' => 'Planear, organizar, dirigir, controlar y evaluar la prestación del servicio educativo, actividades académicas, del personal docente, de apoyo y administrativo relacionados con los programas e instituciones de educación y formación, basados en los marcos establecidos por las autoridades educativas y los órganos de gobierno. '],
            ],

            'Gerentes de servicios social, comunitario y correccional' => [
                ['funcion' => 'Manejar operaciones y actividades de correccionales y centros de detención. '],
            ],

            'Gerentes de biblioteca, museo y galería de arte' => [
                ['funcion' => 'Desarrollar, administrar, implementar y promover las políticas, relaciones públicas, programas promocionales y alianzas estratégicas de cooperación con otras entidades de prestación de servicios en el mismo campo o en campos afines. '],
            ],

            'Gerentes de medios de comunicación y artes escénicas' => [
                ['funcion' => 'Planear y mantener programaciones de producción para publicaciones, películas, teatro y transmisiones. '],
            ],

            'Directores y gerentes de recreación, esparcimiento y deportes' => [
                ['funcion' => 'Caracterizar, planear, organizar, dirigir y controlar las operaciones, planes, programas, proyectos, eventos y servicios de recreación, deporte, actividad física y manejo del tiempo libre'],
            ],

            'Gerentes de ventas, mercadeo y publicidad' => [
                ['funcion' => 'Planear y dirigir actividades de ventas en empresas industriales y comerciales de ventas al por mayor. '],
            ],

        ];
    
        // Crear registros de cargos para cada ocupación

        foreach ($funcionesPorOcupacion as $nombreOcupacion => $funciones) {
            $ocupacion = $ocupaciones->where('nombre_ocupacion', $nombreOcupacion)->first();
        
            if ($ocupacion) {
                foreach ($funciones as $funcionData) {
                    $funcion = new Funcion();
                    $funcion->funcion = $funcionData['funcion'];
                    $funcion->id_ocupacion = $ocupacion->id;
                    $funcion->save();
                }
            }
        }
    }
}
