<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $curso = new Curso;

        $curso->name = 'Laravel';
        $curso->description = 'El Mejor Framework';
        $curso->categoria = 'Desarrollo Web';
        $curso->save();
    }
}
