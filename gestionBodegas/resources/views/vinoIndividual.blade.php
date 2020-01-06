@extends('layout')

@section('contenido')
    <div>
        <h2>{{$titulo}}</h2>
        <a href="/editarVino/{{$vino->id}}">Editar</a>
        <a href="/">Volver</a>
        <a href="/borrarVino/{{$vino->id}}">Borrar</a>
        <form>
            <label>Nombre</label>
            <input type="text" disabled value="{{$vino->nombre}}">
            <label>Descripcion</label>
            <textarea disabled>{{$vino->descripcion}}</textarea>
            <label>año</label>
            <input type="text" disabled value="{{$vino->anno}}">
            <label>alcohol</label>
            <input type="text" disabled value="{{$vino->alcohol}}">
            <label>tipo de vino</label>
            <input type="text" disabled value="{{$vino->tipo}}">
            <input type="submit" value="Actualizar Vino">
        </form>
    </div>
@endsection
