@extends('layout')

@section('contenido')
    <a href="{{route('bodegas.create')}}" class="btn btn-primary">Añadir Bodega</a>
    <table class="table table-bordered mt-2">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Localizacion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
        </tr>
        @foreach($bodegas as $bodega)
            <tr>
                <td>{{$bodega->nombre}}</td>
                <td>{{$bodega->direccion}}</td>
                <td>{{$bodega->telefono}}</td>
                <td>{{$bodega->email}}</td>
                <td class="d-flex">
                    <a href="{{route('bodegas.show',$bodega->id)}}" class="btn btn-outline-primary">Entrar</a>
                    <form method="POST" action="{{route('bodegas.destroy',$bodega->id)}}">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
