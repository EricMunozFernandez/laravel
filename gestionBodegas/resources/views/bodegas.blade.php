@extends('layout')

@section('contenido')
    <a href="/crearBodega" class="btn btn-primary">Añadir Bodega</a>
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
                    <a href="/bodega/{{$bodega->id}}" class="btn btn-outline-primary">Entrar</a>
                    <a href="/borrarBodega/{{$bodega->id}}" class="btn btn-outline-danger">Borrar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
