@extends('layouts.plantilla')

@section('title', 'Actualizar curso')

@section('content')
    <h1>Editar Curso, </h1>
    <form action="{{ route('cursos.update', $curso->id) }}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" id="name" value="{{ old('$curso->name', $curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <textarea name="description" id="description" row='2'>{{ old('description', $curso->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>

        <label>
            Categoría:
            <input type="text" name="categoria" id="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>

        <button type="submit">Actualizar curso</button>

    </form>
@endsection
