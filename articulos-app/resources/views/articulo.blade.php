@extends('layout')

@section('articulo')
    <div>
        <div class=" d-flex align-items-center justify-content-between">
            <h1 class="">Anuncio {{$articulo->id}}</h1>
            <a class="btn btn-outline-primary" href="{{route('article.index')}}">Volver</a>
        </div>
        <h2 class="text-center">{{$articulo->titulo}}</h2>
        <p class="text-center">{{$articulo->subtitulo}}</p>
        <p class="">{{$articulo->cuerpo}}</p>
    </div>
    <div>
        <h4>Comentarios</h4>
        <form method="post" action="{{route('comentario.store',$articulo->id)}}">
            @csrf
            <div class="form-group">
            <textarea class="form-control" name="descripcion" placeholder="insertar comentario"></textarea>
            </div>
            <input type="hidden" name="articulo_id" value="{{$articulo->id}}">
            <input type="submit" class="btn btn-primary" value="Añadir Comentario">
        </form>
        @foreach($comentarios as $comentario)
            <p>{{$comentario->descripcion}}</p>
            @endforeach
    </div>
@endsection
