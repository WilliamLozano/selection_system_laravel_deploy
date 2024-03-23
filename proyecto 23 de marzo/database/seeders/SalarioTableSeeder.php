<?php

namespace Database\Seeders;
use App\Models\Salario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Salario1 = new Salario;
        $Salario1->tipo_salario = 'Salario fijo';
        $Salario1->save();

        $Salario2 = new Salario;
        $Salario2->tipo_salario = 'Salario por horas';
        $Salario2->save();

        $Salario3 = new Salario;
        $Salario3->tipo_salario = 'Salario por comisión';
        $Salario3->save();

        $Salario4 = new Salario;
        $Salario4->tipo_salario = 'Salario por rendimiento o producción';
        $Salario4->save();

        $Salario5 = new Salario;
        $Salario5->tipo_salario = 'Salario por tarea o proyecto';
        $Salario5->save();

        $Salario6 = new Salario;
        $Salario6->tipo_salario = 'Salario mixto';
        $Salario6->save();

        $Salario7 = new Salario;
        $Salario7->tipo_salario = 'Salario por habilidades o capacitación';
        $Salario7->save();

    }
}
