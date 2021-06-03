@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>Crear un nuevo curso</h1>
    <form action="{{route('cursos.store')}}" method="post">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" id="name" >
        </label>
        <br>
        <label>
            Descripción:
            <textarea name="description" id="description" row='2'></textarea>
        </label>
        <br>

        <label>
            Categoría:
            <input type="text" name="categoria" id="categoria" >
        </label>
        <br>

        <button type="submit">Enviar</button>        

    </form>
@endsection