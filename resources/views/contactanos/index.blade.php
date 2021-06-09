@extends('layouts.plantilla')

{{-- Titulo --}}
@section('title','Contáctanos')
    
{{-- Agregando contenido principal --}}
@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="post">
        @csrf
        <label >
            Nombre:
            <input type="text" name="name" id="name" value="{{old('name')}}">            
        </label>
        <br>
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror
        
        <label >
            Correo:
            <input type="email" name="correo" id="correo" value="{{old('correo')}}">            
        </label>
        <br>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label >
            Mensaje:
            <br>
            <textarea name="mensaje" id="mensaje" cols="30" rows="3">{{old('mensaje')}}</textarea>
        </label>
        <br>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit">Enviar</button>

        
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif

@endsection