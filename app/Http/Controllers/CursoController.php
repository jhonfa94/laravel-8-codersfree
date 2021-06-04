<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;


class CursoController extends Controller
{

    public function index()
    {
        // return 'Bienvenido a la página principal';
        // $cursos  = Curso::all();
        $cursos  = Curso::orderBy('id', 'desc')->paginate(); //Por defecto se tiene 15 registros
        // return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        // return "Esta es la página donde podrás crear un curso";
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'description' => 'required|min:10',
        //     'categoria' => 'required',
        // ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show', ['id' => $curso->id]);
    }

    public function show($id)
    {
        //    return "Bienvendo al curso de: $curso";
        //    return view('cursos.show', ['curso' => $curso]);
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        // $curso = Curso::findOrFail($id);
        // return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'description' => 'required|min:10',
        //     'categoria' => 'required',
        // ]);
        // return $request->all();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}
