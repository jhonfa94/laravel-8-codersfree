<?php

namespace Database\Seeders;

use App\Models\Curso;
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
        // $this->call(CursoSeeder::class); # LLAMAMOS EL SEEDER DE CURSO APRA QUE SE EJECUTE
        Curso::factory(50)->create();# SE CREAN 50 REGISTROS
    }
}
