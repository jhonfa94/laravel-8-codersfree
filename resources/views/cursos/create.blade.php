@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>Crear un nuevo curso</h1>
    <form action="{{route('cursos.store')}}" method="post">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" id="name" value="{{old('name')}}" >
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <textarea name="description" id="description" row='2'>{{old('description')}}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Categoría:
            <input type="text" name="categoria" id="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <button type="submit">Enviar</button>        

    </form>
@endsection