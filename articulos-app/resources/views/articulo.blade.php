@extends('layouts/app')

@section('content')
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
        @if($logeado)
            <form method="post" action="{{route('comentario.store',$articulo->id)}}">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="descripcion" placeholder="insertar comentario"></textarea>
                </div>
                <input type="hidden" name="articulo_id" value="{{$articulo->id}}">
                <input type="submit" class="btn btn-primary" value="Añadir Comentario">
            </form>
            <div class="mt-3 mx-5">
                @foreach($comentarios as $comentario)
                    <div class="border mb-2 p-2">
                        <h5>Comentario:</h5>
                        <div>
                            <p>{{$comentario->descripcion}}</p>
                        </div>
                    </div>
                @endforeach
                @else
                    <p>Para ver los comentarios <a href="{{route('login')}}">logeate</a></p>
                @endif
            </div>
    </div>
@endsection
