<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipiosPorDepartamento = [
            'Amazonas' => ['Leticia', 'Puerto Nariño', 'La Pedrera', 'Tarapacá', 'Puerto Santander'],
            'Antioquia' => ['Medellín', 'Envigado', 'Bello', 'Itagüí', 'Rionegro'],
            'Arauca' => ['Arauca', 'Saravena', 'Tame', 'Fortul', 'Arauquita'],
            'Atlántico' => ['Barranquilla', 'Soledad', 'Malambo', 'Sabanalarga', 'Baranoa'],
            'Bolívar' => ['Cartagena de Indias', 'Turbaco', 'Magangué', 'El Carmen de Bolívar', 'San Juan Nepomuceno'],
            'Boyacá' => ['Tunja', 'Duitama', 'Sogamoso', 'Chiquinquirá', 'Paipa'],
            'Caldas' => ['Manizales', 'Chinchiná', 'La Dorada', 'Villamaría', 'Aguadas'],
            'Caquetá' => ['Florencia', 'San Vicente del Caguán', 'Belén de los Andaquíes', 'Solano', 'Cartagena del Chairá'],
            'Casanare' => ['Yopal', 'Paz de Ariporo', 'Aguazul', 'Villanueva', 'Tauramena'],
            'Cauca' => ['Popayán', 'Santander de Quilichao', 'Patía', 'Piendamó', 'Timbío'],
            'Cesar' => ['Valledupar', 'Aguachica', 'Aguazul', 'La Paz', 'San Diego'],
            'Chocó' => ['Quibdó', 'Istmina', 'Tadó', 'Riosucio', 'Bahía Solano'],
            'Córdoba' => ['Montería', 'Sahagún', 'Cereté', 'Lorica', 'Planeta Rica'],
            
            'Cundinamarca' => [
            'Agua de Dios', 'Albán', 'Anapoima', 'Anolaima', 'Apulo', 'Arbeláez', 'Beltrán', 'Bituima',
            'Bojacá', 'Cabrera', 'Cachipay', 'Cajicá', 'Caparrapí', 'Cáqueza', 'Carmen de Carupa', 'Chaguaní',
            'Chía', 'Chipaque', 'Choachí', 'Chocontá', 'Cogua', 'Cota', 'Cucunubá', 'El Colegio', 'El Peñón',
            'El Rosal', 'Facatativá', 'Fomeque', 'Fosca', 'Funza', 'Fúquene', 'Fusagasugá', 'Gachalá', 'Gachancipá',
            'Gachetá', 'Gama', 'Girardot', 'Granada', 'Guachetá', 'Guaduas', 'Guasca', 'Guataquí', 'Guatavita',
            'Guayabal de Síquima', 'Guayabetal', 'Gutierrez', 'Jerusalén', 'Junín', 'La Calera', 'La Mesa', 'La Palma',
            'La Peña', 'La Vega', 'Lenguazaque', 'Machetá', 'Madrid', 'Manta', 'Medina', 'Mosquera', 'Nariño', 'Nemocón',
            'Nilo', 'Nimaima', 'Nocaima', 'Pacho', 'Paime', 'Pandi', 'Paratebueno', 'Pasca', 'Puerto Salgar', 'Pulí',
            'Quebradanegra', 'Quetame', 'Quipile', 'Ricaurte', 'San Antonio del Tequendama', 'San Bernardo', 'San Cayetano',
            'San Francisco', 'San Juan de Rioseco', 'Sasaima', 'Sesquilé', 'Sibaté', 'Silvania', 'Simijaca', 'Soacha', 'Sopó',
            'Subachoque', 'Suesca', 'Supatá', 'Susa', 'Sutatausa', 'Tabio', 'Tausa', 'Tena', 'Tenjo', 'Tibacuy', 'Tibirita',
            'Tocaima', 'Tocancipá', 'Topaipí', 'Ubalá', 'Ubaque', 'Ubaté', 'Une', 'Útica', 'Venecia', 'Vergara', 'Vianí',
            'Villa de San Diego de Ubaté', 'Villa de Leyva', 'Villeta', 'Viotá', 'Yacopí', 'Zipacón', 'Zipaquirá'],

            'Guainía' => ['Inírida', 'Barranco Minas', 'Cacahual', 'Mapiripana', 'Morichal'],
            'Guaviare' => ['San José del Guaviare', 'Calamar', 'El Retorno', 'Miraflores', 'San Juan de Arama'],
            'Huila' => ['Neiva', 'Pitalito', 'Garzón', 'La Plata', 'Campoalegre'],
            'La Guajira' => ['Riohacha', 'Maicao', 'Uribia', 'Fonseca', 'Villanueva'],
            'Magdalena' => ['Santa Marta', 'Ciénaga', 'Fundación', 'Plato', 'Aracataca'],
            'Meta' => ['Villavicencio', 'Acacías', 'Granada', 'Guamal', 'San Martín'],
            'Nariño' => ['Pasto', 'Tumaco', 'Ipiales', 'Tuquerres', 'Túquerres'],
            'Norte de Santander' => ['Cúcuta', 'Ocaña', 'Pamplona', 'Villa del Rosario', 'Chinácota'],
            'Putumayo' => ['Mocoa', 'Puerto Asís', 'Puerto Leguízamo', 'Sibundoy', 'Villagarzón'],
            'Quindío' => ['Armenia', 'Calarcá', 'Circasia', 'Montenegro', 'Quimbaya'],
            'Risaralda' => ['Pereira', 'Dosquebradas', 'La Virginia', 'Marsella', 'Santa Rosa de Cabal'],
            'San Andrés y Providencia' => ['San Andrés', 'Providencia', 'Santa Catalina', 'San Luis', 'North End'],
            'Santander' => ['Bucaramanga', 'Barrancabermeja', 'Floridablanca', 'Girón', 'Piedecuesta'],
            'Sucre' => ['Sincelejo', 'Corozal', 'Tolú', 'San Marcos', 'Coveñas'],
            'Tolima' => ['Ibagué', 'Espinal', 'Melgar', 'Honda', 'Lérida'],
            'Valle del Cauca' => ['Cali', 'Buenaventura', 'Palmira', 'Buga', 'Tuluá'],
            'Vaupés' => ['Mitú', 'Carurú', 'Papanoa', 'Taraira', 'Yavaraté'],
            'Vichada' => ['Puerto Carreño', 'La Primavera', 'Santa Rosalía', 'Cumaribo', 'Guaviare'],
            'Bogotá, Distrito Capital' => ['Usaquén', 'Chapinero', 'Santa Fe', 'San Cristóbal', 'Usme'],
        ];

        foreach ($municipiosPorDepartamento as $departamento => $municipios) {
            $departamentoId = Departamento::where('nombre_departamento', $departamento)->first()->id;

            foreach ($municipios as $municipio) {
                Municipio::create([
                    'nombre_municipio' => $municipio,
                    'id_departamento' => $departamentoId,
                ]);
            }
        }
    }
}
