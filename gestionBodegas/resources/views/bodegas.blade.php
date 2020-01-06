@extends('layout')

@section('contenido')
    <a href="/crearBodega">Añadir Bodega</a>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Localizacion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        @foreach($bodegas as $bodega)
        <tr>
            <td>{{$bodega->nombre}}</td>
            <td>{{$bodega->direccion}}</td>
            <td>{{$bodega->telefono}}</td>
            <td>{{$bodega->email}}</td>
            <td><a href="/bodega/{{$bodega->id}}">Entrar</a><a href="/borrarBodega/{{$bodega->id}}">Borrar</a></td>
        </tr>
        @endforeach
    </table>
@endsection
