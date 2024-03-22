<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([RolesTableSeeder::class]);

        $this->call([DepartamentsTableSeeder::class]);

        $this->call([MunicipiosTableSeeder::class]);

        $this->call([OcupacionesTableSeeder::class]);

        $this->call([CargosTableSeeder::class]);

        $this->call([FuncionesTableSeeder::class]);

        $this->call([HabilidadesTableSeeder::class]);
    }
}


