@extends('layout')

@section('contenido')
    <div class="d-flex justify-content-between">
        <h3>Nueva Bodega</h3>
        <a href="{{route('bodegas.index')}}" class="btn btn-info">Volver</a>
    </div>
    <hr>
    <form method="post" action="{{route('bodegas.store')}}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" id="direccion" class="form-control" name="direccion">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label for="personaContacto">Persona de contacto</label>
            <input type="text" id="personaContacto" class="form-control" name="personaContacto">
        </div>
        <div class="form-group">
            <label for="annoFundacion">Año de fundacion</label>
            <input type="number" id="annoFundacion" class="form-control" name="annoFundacion">
        </div>
        <div class="form-group">
            <label>¿Dispone de restaurante?</label>
            <div><input type="radio" name="restaurante" value="1"> Si</div>
            <div><input type="radio" name="restaurante" value="0" checked> No</div>
        </div>
        <div class="form-group">
            <label>¿Dispone de hotel?</label>
            <div><input type="radio" name="hotel" value="1"> Si</div>
            <div><input type="radio" name="hotel" value="0" checked> No</div>
        </div>
        <input type="submit" class="btn btn-primary" value="Añadir">
    </form>
@endsection
