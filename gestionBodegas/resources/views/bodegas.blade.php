@extends('layout)

@section('contenido')
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
            <td>botones</td>
        </tr>
        @endforeach
    </table>
@endsection
