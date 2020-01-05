@extends('plantilla')

@section('section')
<form action="{{route('coches.store')}}" method="post">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <label>Matricula</label>
        <input type="text" name="matricula">
        <label>color</label>
        <input type="text" name="color">
        <label>Año de fabricacion</label>
        <input type="text" name="año_fabricacion">
        <input type="submit" value="Crear Registro">
        {{ csrf_field() }}


    </form>
    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    @endif
@endsection