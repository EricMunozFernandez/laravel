@extends('layouts/app')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h2>Crear Articulo</h2>
        <a class="btn btn-outline-primary" href="{{route('article.index')}}">Volver</a>
    </div>
    <form method="post" action="{{route('article.store')}}">
    @csrf
    <!--sin esto da error 419-->
        <div class="form-group">
            <input type="text" name="titulo" placeholder="Titulo" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="subtitulo" placeholder="subtitulo" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="cuerpo" placeholder="cuerpo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
