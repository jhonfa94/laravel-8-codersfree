@extends('layouts.plantilla')

@section('title', 'Actualizar curso')

@section('content')
    <h1>Editar Curso, </h1>
    <form action="{{route('cursos.update',$curso->id)}}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" id="name" value="{{$curso->name}}" >
        </label>
        <br>
        <label>
            Descripción:
            <textarea name="description" id="description" row='2'>{{$curso->description}}</textarea>
        </label>
        <br>

        <label>
            Categoría:
            <input type="text" name="categoria" id="categoria" value="{{$curso->categoria}}">
        </label>
        <br>

        <button type="submit">Actualizar curso</button>        

    </form>
@endsection