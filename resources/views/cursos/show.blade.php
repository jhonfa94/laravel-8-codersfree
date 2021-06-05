@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>Bienvenido al curso de: {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a lista de cursos</a>
    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>
    <p><strong>Categoría: {{ $curso->categoria }}</strong></p>
    <p>{{ $curso->description }}</p>
    <form action="{{ route('cursos.destroy', $curso) }}" method="post">
        @csrf
        @method('delete')
        <button onclick="return(confirm('Deseas eliminar este registro ? '))">Eliminar</button>
    </form>
@endsection
