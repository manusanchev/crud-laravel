@extends('plantilla')
@section('section')
<a href="{{route('coches.create')}}"><div class="crear">Crear</div></a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Matricula</th>
            <th>Color</th>
            <th>Año de fabricacion</th>
            <th>Foto</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($coches as $coche)
           <tr>
           <td>{{$coche->id}}</td>
           <td>{{$coche->nombre}}</td>
           <td>{{$coche->matricula}}</td>
           <td>{{$coche->color}}</td>
           <td>{{$coche->año_fabricacion}}</td>
           <td><img src="images/{{$coche->foto}}" alt="" width="50px" height="50px"></td>
           <td><a href="{{route('coches.edit',$coche->id)}}">Editar</a></td>
           <td>
               <form action="{{route('coches.destroy',$coche->id)}}" method="POST">
                    <input type="submit" value="Eliminar">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                </form>
            </td>
           </tr>
        @endforeach
    </table>
@endsection