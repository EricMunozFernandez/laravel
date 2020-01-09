@extends('layouts/app')

@section('content')
    <a class="btn btn-primary" href="{{route('article.create')}}">Crear Articulo</a>
    <div class="d-flex flex-wrap mt-2">
        @foreach($articulos as $articulo)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$articulo->titulo}}</h5>
                    <p class="card-text">{{$articulo->subtitulo}}</p>
                    <div class="d-flex">
                        <a href="{{route('article.show',$articulo->id)}}" class="btn btn-primary">Ver</a>
                        @if($logeado)
                            <form method="POST" action="{{route('article.destroy',$articulo->id)}}">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger" value="Borrar">
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
