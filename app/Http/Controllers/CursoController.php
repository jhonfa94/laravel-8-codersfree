<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index()
    {
        // return 'Bienvenido a la página principal';
        // $cursos  = Curso::all();
        $cursos  = Curso::paginate();//Por defecto se tiene 15 registros
        // return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        // return "Esta es la página donde podrás crear un curso";
        return view('cursos.create');
    }

    public function show($id){
    //    return "Bienvendo al curso de: $curso";
    //    return view('cursos.show', ['curso' => $curso]);
        $curso = Curso::findOrFail($id);
       return view('cursos.show', compact('curso'));
    }


}
