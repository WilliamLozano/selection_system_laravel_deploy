<?php

namespace Database\Seeders;

use App\Models\Cargo;
use App\Models\Ocupacion;
use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
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

        // Lista de cargos para cada ocupación
        $cargosPorOcupacion = [
            'Miembros del poder ejecutivo y legislativo' => [
                ['nombre_cargo' => 'Miembros del poder ejecutivo y legislativo', 'descripcion' => 'Definen, formulan y orientan la política del poder público en todos sus niveles; promulgan, modifican o derogan leyes y normas. Por lo general son elegidos por voto popular. '],
            ],

            'Personal directivo de la administración pública' => [
                ['nombre_cargo' => 'Personal directivo de la administración pública', 'descripcion' => 'Planean, organizan, dirigen y controlan a través de otros directores, las principales actividades gubernamentales del orden nacional, departamental, municipal, entidades territoriales, consejos y comisiones; establecen directrices; vigilan la interpretación y aplicación de políticas y leyes; actúan en nombre y representación del país en el extranjero. '],
            ],

            'Directores y gerentes generales de servicios financieros' => [
                ['nombre_cargo' => 'Directores y gerentes generales de servicios financieros', 'descripcion' => 'Planean, organizan, dirigen y controlan, con la asistencia de otros directores, organizaciones financieras, de comunicación y otros servicios a las empresas. Formulan y definen políticas de estas empresas u organizaciones; generalmente, siguen orientación de un órgano directivo. '],
            ],

            'Directores y gerentes generales de salud' => [
                ['nombre_cargo' => 'Directores y gerentes generales de salud', 'descripcion' => 'Planean, organizan, dirigen y controlan, a través de otros directores, organizaciones de membresía y otras instituciones que prestan servicios de salud, educación, servicios comunitarios y sociales. Formulan y definen políticas de estas organizaciones; generalmente, siguen orientación de un órgano directivo. '],
            ],

            'Directores y gerentes generales de comercio' => [
                ['nombre_cargo' => 'Directores y gerentes generales de comercio', 'descripcion' => 'Planean, organizan, dirigen y controlan, a través de otros directores, empresas de comercio, radio y televisión y otros servicios no clasificados en otra parte. Formulan y definen políticas de estas empresas; generalmente, siguen orientación de un órgano directivo. '],
            ],

            'Directores y gerentes generales de producción de bienes' => [
                ['nombre_cargo' => 'Directores y gerentes generales de producción de bienes', 'descripcion' => 'Planean, organizan, dirigen y controlan, a través de otros directores, empresas de producción de bienes, servicios, transporte y construcción; formulan políticas que establecen la dirección a tomar por las empresas; generalmente, siguen orientaciones de un órgano directivo.  '],
            ],

            'Directores y gerentes generales de servicios y procesos de negocio' => [
                ['nombre_cargo' => 'Directores y gerentes generales de servicios y procesos de negocio', 'descripcion' => ' Evalúan tendencias de la industria y riesgos aplicables al negocio. Planean, organizan, dirigen y controlan los recursos involucrados en la prestación del servicio en el contexto de procesos de negocio. Están empleados por el sector público y privado. '],
            ],

            'Gerentes financieros' => [
                ['nombre_cargo' => 'Gerentes financieros', 'descripcion' => ' Planifican, dirigen, coordinan, verifican y controlan las actividades de los departamentos financieros, proponen y estudian nuevos proyectos, inversiones y cálculos de retornos de la inversión, desarrollan e implementan políticas y sistemas financieros de la empresa u organización, supervisan y realizan seguimiento a los informes de auditoría financiera. Están empleados por departamentos financieros de empresas del sector público y privado. '],
            ],

            'Gerentes de talento humano' => [
                ['nombre_cargo' => 'Gerentes de talento humano', 'descripcion' => 'Planean, diseñan, implementan y evalúan políticas, programas, proyectos y procedimientos de talento humano, contratos, salarios, beneficios laborales, capacitación y desarrollo de personal; consultan y asesoran a los directivos de otros departamentos y demás empleados sobre la interpretación de políticas de personal, materia de seguridad y salud ocupacional, acuerdos colectivos y análisis ocupacional, ya sea como director de un departamento de una gran empresa u organización o de una empresa que ofrece este tipo de servicios a otras empresas y organizaciones. Están empleados por el sector público y privado.  '],
            ],

            'Gerentes de compras y adquisiciones' => [
                ['nombre_cargo' => 'Gerentes de compras y adquisiciones', 'descripcion' => ' Planean, organizan, dirigen y controlan actividades de los departamentos de compras y adquisiciones; desarrollan e implementan políticas de compras de un negocio o institución. Están empleados por el sector público y privado. '],
            ],

            'Gerentes de otros servicios administrativos' => [
                ['nombre_cargo' => 'Gerentes de otros servicios administrativos', 'descripcion' => 'Planean, organizan, dirigen y controlan departamentos responsables por registros administrativos, inventarios, servicios de seguridad, admisiones y otros servicios administrativos no clasificados. Incluyen gerentes que tienen bajo su responsabilidad departamentos que involucran una o más de las siguientes actividades: finanzas, recursos humanos, compras, sistemas o servicios administrativos. Están empleados por el sector público y privado.  '],
            ],

            'Gerentes de seguros, bienes raíces y corretaje financiero' => [
                ['nombre_cargo' => 'Gerentes de seguros, bienes raíces y corretaje financiero', 'descripcion' => 'Planean, organizan, dirigen y controlan actividades de departamentos o empresas que proveen seguros, servicios de propiedad raíz y de inversión. Están empleados por empresas de seguros, bienes raíces, corredores de bolsa o inversionistas.  '],
            ],

            'Gerentes de banca, crédito e inversiones' => [
                ['nombre_cargo' => 'Gerentes de banca, crédito e inversiones', 'descripcion' => 'Planean, organizan, dirigen y controlan actividades de establecimientos financieros y bancarios o departamentos de crédito en establecimientos industriales y comerciales. Los gerentes están empleados por bancos, sociedades fiduciarias, entidades de inversión y corporaciones. Los gerentes de fiducia están empleados por sociedades fiduciarias, empresas de servicios, y otras organizaciones comerciales y financieras. Los gerentes de mercado de valores están empleados por firmas de inversión, mesas de dinero, comisionistas de bolsa y otros establecimientos financieros y de inversiones del sector público y privado.  '],
            ],

            'Gerentes de otros servicios a las empresas' => [
                ['nombre_cargo' => 'Gerentes de otros servicios a las empresas', 'descripcion' => 'Planean, organizan, dirigen y controlan operaciones de empresas proveedoras de servicios como consultoría administrativa, investigación de mercados, servicios de personal, de nómina, de publicidad y de seguridad.  '],
            ],

            'Gerentes de empresas de telecomunicaciones' => [
                ['nombre_cargo' => 'Gerentes de empresas de telecomunicaciones', 'descripcion' => 'Gestionan, administran, planean, lideran, organizan, dirigen, desarrollan y controlan empresas prestadoras de servicios, operadoras o todas aquellas que requieran infraestructura de telecomunicaciones. Formulan y definen políticas de estas empresas u organizaciones, para alcanzar los objetivos y metas propuestas; generalmente, siguen orientación de un órgano directivo.  '],
            ],

            'Gerentes de servicios de correo y mensajería' => [
                ['nombre_cargo' => 'Gerentes de servicios de correo y mensajería', 'descripcion' => 'Planean, organizan, dirigen y controlan actividades en establecimientos que ofrecen servicios de correo, encomiendas y courier. Están empleados por empresas de servicios de correo y mensajería.  '],
            ],

            'Gerentes de ingeniería' => [
                ['nombre_cargo' => 'Gerentes de ingeniería', 'descripcion' => 'Planean, organizan, dirigen y controlan las actividades de departamentos, servicios o firmas de ingeniería o arquitectura. Están empleados por establecimientos públicos, privados y por empresas de consultoría e investigación científica.  '],
            ],

            'Gerentes de investigación y desarrollo en ciencias naturales y aplicadas' => [
                ['nombre_cargo' => 'Gerentes de investigación y desarrollo en ciencias naturales y aplicadas', 'descripcion' => 'Planean, organizan, dirigen y controlan las actividades de un departamento científico o estadístico, servicio o firma relacionada. Están empleados por empresas del sector público y privado y empresas de investigación científica.  '],
            ],
            
            'Gerentes de sistemas de información y procesamiento de datos' => [
                ['nombre_cargo' => 'Gerentes de sistemas de información y procesamiento de datos', 'descripcion' => 'Planean, organizan, dirigen y controlan los recursos y actividades de sistemas de información computarizada, departamentos y empresas de procesamiento electrónico de datos, servicios de BPO. Formulan y definen estrategias para alcanzar los objetivos y metas propuestas. Están empleados por el sector público y privado, departamentos y empresas de sistemas e información computarizada o de servicios de tercerización.  '],
            ],
            
            'Gerentes de servicios a la salud' => [
                ['nombre_cargo' => 'Gerentes de servicios a la salud', 'descripcion' => 'Planean, organizan, dirigen y controlan las actividades propias de las instituciones prestadoras de servicios de salud tales como diagnóstico, tratamiento, terapia y enfermería. Están empleados por hospitales, clínicas, centros médicos y otras instituciones de la rama de la salud.  '],
            ],

            'Gerentes de programas de política social y de salud' => [
                ['nombre_cargo' => 'Gerentes de programas de política social y de salud', 'descripcion' => 'Planean, organizan, dirigen y controlan el desarrollo y administración de políticas sociales y de salud, programas diseñados para proteger y promover la salud y el bienestar de individuos y comunidades. Están empleados por el gobierno.  '],
            ], 

            'Gerentes de programas de política de desarrollo económico' => [
                ['nombre_cargo' => 'Gerentes de programas de política de desarrollo económico', 'descripcion' => 'Planean, organizan, dirigen y controlan la política económica, investigaciones y programas gubernamentales en áreas como impuestos, comercio internacional, transporte o agricultura. Planean y dirigen políticas y programas para promover el desarrollo de negocios comerciales e industriales en áreas rurales y urbanas. Están empleados por el gobierno.  '],
            ],

            'Gerentes de programas de política educativa' => [
                ['nombre_cargo' => 'Gerentes de programas de política educativa', 'descripcion' => 'Planean, organizan, dirigen y controlan el desarrollo y administración de políticas y programas de educación básica primaria, secundaria, formación para el trabajo y superior. Están empleados por el gobierno, entidades públicas y privadas.  '],
            ], 

            'Otros gerentes de administración pública' => [
                ['nombre_cargo' => 'Otros gerentes de administración pública', 'descripcion' => 'Planean, organizan, dirigen y controlan el desarrollo de políticas y programas exclusivos de la administración pública como asuntos intergubernamentales, electorales y otros. Están empleados por el gobierno.  '],
            ],

            'Directores y administradores de instituciones de educación y formación' => [
                ['nombre_cargo' => 'Directores y administradores de instituciones de educación y formación', 'descripcion' => ' Dirigen, administran, planean, gestionan, coordinan y evalúan las actividades curriculares, académicas, administrativas y de apoyo al proceso de educación; desarrollan los procesos y procedimientos relacionados con admisión, registro, profesores y otro personal. Están empleados por instituciones de educación preescolar, básica primaria, secundaria, formación para el trabajo y educación superior, públicos y privados, entre otros. '],
            ], 

            'Gerentes de servicios social, comunitario y correccional' => [
                ['nombre_cargo' => 'Gerentes de servicios social, comunitario y correccional', 'descripcion' => 'Planean, organizan, dirigen y controlan los programas y actividades de entidades de servicio social y comunitario, instituciones correccionales, departamentos de consejería, organizaciones sindicales, asociaciones profesionales, partidos políticos y organizaciones no gubernamentales involucradas en la promoción de asuntos sociales.  '],
            ],

            'Gerentes de biblioteca, museo y galería de arte' => [
                ['nombre_cargo' => 'Gerentes de biblioteca, museo y galería de arte', 'descripcion' => ' Gestionan estratégicamente planes, actividades y servicios de bibliotecas, museos y galerías de arte de acuerdo con políticas internas y normativa vigente. '],
            ], 

            'Gerentes de medios de comunicación y artes escénicas' => [
                ['nombre_cargo' => 'Directores y gerentes generales de comercio', 'descripcion' => 'Planean, organizan, dirigen y controlan actividades de empresas editoriales, de teatro, cine y medios de comunicación. Están empleados por empresas de radio y televisión, periódicos, editoriales y compañías de cine, teatro y grabación.  '],
            ],

            'Directores y gerentes de recreación, esparcimiento y deportes' => [
                ['nombre_cargo' => 'Directores y gerentes de recreación, esparcimiento y deportes', 'descripcion' => 'Gerencian, administran y gestionan planes programas y proyectos en organizaciones públicas y privadas que ofertan productos y servicios asociados al deporte, recreación, actividad física y aprovechamiento del tiempo libre. Están empleados por organizaciones deportivas estatales y privadas, entre otros.  '],
            ],

            'Gerentes de ventas, mercadeo y publicidad' => [
                ['nombre_cargo' => 'Gerentes de ventas, mercadeo y publicidad', 'descripcion' => 'Planean, organizan, dirigen y controlan las actividades de establecimientos y departamentos en empresas comerciales e industriales comprometidos con ventas, mercadeo, publicidad y relaciones públicas. Están empleados por empresas de comercio al por mayor, industriales y comerciales, empresas de consultoría de mercadeo y relaciones públicas, y por el gobierno.  '],
            ],

        ];

        // Crear registros de cargos para cada ocupación
        foreach ($cargosPorOcupacion as $nombreOcupacion => $cargos) {
            $ocupacion = Ocupacion::where('nombre_ocupacion', $nombreOcupacion)->first();

            if ($ocupacion) {
                foreach ($cargos as $cargoData) {
                    $cargo = new Cargo();
                    $cargo->nombre_cargo = $cargoData['nombre_cargo'];
                    $cargo->descripcion = $cargoData['descripcion'];
                    $cargo->id_ocupacion = $ocupacion->id;
                    $cargo->save();
                }
            }
        }
    }
}
