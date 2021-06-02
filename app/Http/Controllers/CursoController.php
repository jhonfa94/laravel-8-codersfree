<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index()
    {
        // return 'Bienvenido a la página principal';
        return view('cursos.index');
    }

    public function create()
    {
        // return "Esta es la página donde podrás crear un curso";
        return view('cursos.create');
    }

    public function show($curso){
    //    return "Bienvendo al curso de: $curso";
    //    return view('cursos.show', ['curso' => $curso]);
       return view('cursos.show', compact('curso'));
    }


}
