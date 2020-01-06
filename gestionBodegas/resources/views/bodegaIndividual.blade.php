@extends('layout')

@section('contenido')
    <div>
        <h2>Datos Bodega</h2>
        <a href="/editarBodega/{{$bodega->id}}">Editar</a>
        <a href="/">Volver</a>
        <a href="/borrarBodega/{{$bodega->id}}">Eliminar</a>
        <form>
            <label>Nombre</label>
            <input type="text" disabled value="{{$bodega->nombre}}">
            <label>Direccion</label>
            <input type="text" disabled value="{{$bodega->direccion}}">
            <label>email</label>
            <input type="text" disabled value="{{$bodega->email}}">
            <label>telefono</label>
            <input type="text" disabled value="{{$bodega->telefono}}">
            <label>Persona de Contacto</label>
            <input type="text" disabled value="{{$bodega->personaContacto}}">
            <label>Año de fundacion</label>
            <input type="text" disabled value="{{$bodega->annoFundacion}}">
            <label>¿Dispone de restaurante?</label>
            @if($bodega->restaurante)
                <input type="radio" name="restaurante" checked disabled>Si
                <input type="radio" name="restaurante" disabled>No
                @else
                <input type="radio" name="restaurante"  disabled>Si
                <input type="radio" name="restaurante" checked disabled>No
            @endif
            <label>¿Dispone de hotel?</label>
            @if($bodega->hotel)
                <input type="radio" name="hotel" checked disabled>Si
                <input type="radio" name="hotel" disabled>No
            @else
                <input type="radio" name="hotel"  disabled>Si
                <input type="radio" name="hotel" checked disabled>No
            @endif
            <input type="submit" value="Guardar">
        </form>
    </div>
    <div>
        <h2>Vinos Disponibles</h2>
        <a href="/bodega/{{$bodega->id}}/createVino">Añadir Vino</a>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
            @foreach($vinos as $vino)
                <tr>
                    <td>{{$vino->nombre}}</td>
                    <td>{{$vino->tipo}}</td>
                    <td><a href="/vino/{{$vino->id}}">Ver</a><a href="/borrarVino/{{$vino->id}}">Borrar</a></td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection

