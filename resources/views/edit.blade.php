@extends('plantilla')

@section('section')
<h1 class="titulo">Editar</h1>
<form action="{{route('coches.update',$coche->id)}}" method="post" enctype="multipart/form-data">
        <label>Nombre</label>
        <input type="text" name="nombre" value={{$coche->nombre}}>
        <label>Matricula</label>
        <input type="text" name="matricula" value="{{$coche->matricula}}">
        <label>color</label>
        <input type="text" name="color" value="{{$coche->color}}">
        <label>Año de fabricacion</label>
        <input type="text" name="año_fabricacion" value="{{$coche->año_fabricacion}}">
        <input type="file" name="foto" id="">
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" value="Actualizar">
        {{ csrf_field() }}


    </form>
@endsection