@extends('layout')

@section('articulo')
    <div class="row">
        <h2 class="w-25">Anuncio {{$articulo->id}}</h2>
        <a class="w-50" href="/articulos">Volver</a>
        <ol class="col-6">
            <div class="list-group" id="list-tab" role="tablist">
            <li class="list-group-item list-group-item-action">{{$articulo->titulo}}</li>
            <li class="list-group-item list-group-item-action">{{$articulo->subtitulo}}</li>
            <li class="list-group-item list-group-item-action">{{$articulo->cuerpo}}</li>
            <li class="list-group-item list-group-item-action">{{$usuarioArticulo->email}}</li>
            <li class="list-group-item list-group-item-action">{{$usuarioArticulo->descripcion}}</li>
            <a class="badge badge-primary" href="/crear">Crear</a>
            <a class="badge badge-danger" href="/destroy/{{$articulo->id}}">Borrar</a>
            </div>
        </ol>
    </div>
@endsection
