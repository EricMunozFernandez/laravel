@extends('layout')

@section('articulo')
    <h2>Crear Anuncio</h2>
    <form method="post" action="guardar">
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
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" name="user_id" id="inputGroupSelect01">
                @foreach($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->email}}</option>
                    @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
