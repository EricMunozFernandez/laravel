@extends('layout')

@section('contenido')
    <div class="d-flex ">
        <div class="col-6">
            <div class="d-flex align-items-center justify-content-between">
                <h2>{{$titulo}}</h2>
                <div>
                    <a href="/editarBodega/{{$bodega->id}}" class="btn btn-outline-warning">Editar</a>
                    <a href="/" class="btn btn-outline-primary">Volver</a>
                    <a href="/borrarBodega/{{$bodega->id}}" class="btn btn-outline-danger">Eliminar</a>
                </div>
            </div>
            <form method="post" action="/updateBodega/{{$bodega->id}}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    @if($titulo=='Editar Bodega')
                        <input type="text" id="nombre" class="form-control" name="nombre" value="{{$bodega->nombre}}">
                    @else
                        <input type="text" id="nombre" class="form-control" name="nombre" disabled
                               value="{{$bodega->nombre}}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    @if($titulo=='Editar Bodega')
                        <input type="text" id="direccion" class="form-control" name="direccion"
                               value="{{$bodega->direccion}}">
                    @else
                        <input type="text" id="direccion" class="form-control" name="direccion" disabled
                               value="{{$bodega->direccion}}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    @if($titulo=='Editar Bodega')
                        <input type="text" id="email" class="form-control" name="email" value="{{$bodega->email}}">
                    @else
                        <input type="text" id="email" class="form-control" name="email" disabled
                               value="{{$bodega->email}}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="telefono">telefono</label>
                    @if($titulo=='Editar Bodega')
                        <input type="text" id="telefono" class="form-control" name="telefono"
                               value="{{$bodega->telefono}}">
                    @else
                        <input type="text" id="telefono" class="form-control" name="telefono" disabled
                               value="{{$bodega->telefono}}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="personaContacto">Persona de Contacto</label>
                    @if($titulo=='Editar Bodega')
                        <input type="text" id="personaContacto" class="form-control" name="personaContacto"
                               value="{{$bodega->personaContacto}}">
                    @else
                        <input type="text" id="personaContacto" class="form-control" name="personaContacto" disabled
                               value="{{$bodega->personaContacto}}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="personaContacto">Año de fundacion</label>
                    @if($titulo=='Editar Bodega')
                        <input type="text" id="personaContacto" class="form-control" name="annoFundacion"
                               value="{{$bodega->annoFundacion}}">
                    @else
                        <input type="text" id="personaContacto" class="form-control" name="annoFundacion" disabled
                               value="{{$bodega->annoFundacion}}">
                    @endif
                </div>
                <div class="form-group">
                    <label>¿Dispone de restaurante?</label>
                    @if($titulo=='Editar Bodega')
                        @if($bodega->restaurante)
                            <div><input type="radio" name="restaurante" value="1" checked>Si</div>
                            <div><input type="radio" name="restaurante" value="0">No</div>
                        @else
                            <div><input type="radio" name="restaurante" value="1">Si</div>
                            <div><input type="radio" name="restaurante" value="0" checked>No</div>
                        @endif
                    @else
                        @if($bodega->restaurante)
                            <div><input type="radio" name="restaurante" value="1" disabled checked>Si</div>
                            <div><input type="radio" name="restaurante" value="0" disabled>No</div>
                        @else
                            <div><input type="radio" name="restaurante" value="1" disabled>Si</div>
                            <div><input type="radio" name="restaurante" value="0" disabled checked>No</div>
                        @endif
                    @endif
                </div>
                <div class="form-group">
                    <label>¿Dispone de hotel?</label>
                    @if($titulo=='Editar Bodega')
                        @if($bodega->hotel)
                            <input type="radio" name="hotel" value="1" checked>Si
                            <input type="radio" name="hotel" value="0">No
                        @else
                            <input type="radio" name="hotel" value="1">Si
                            <input type="radio" name="hotel" value="0" checked>No
                        @endif
                    @else
                        @if($bodega->hotel)
                            <input type="radio" name="hotel" value="1" checked disabled>Si
                            <input type="radio" name="hotel" value="0" disabled>No
                        @else
                            <input type="radio" name="hotel" value="1" disabled>Si
                            <input type="radio" name="hotel" value="0" checked disabled>No
                        @endif
                    @endif
                </div>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        </div>
        <div class="col-6">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Vinos Disponibles</h2>
                <a href="/bodega/{{$bodega->id}}/createVino" class="btn btn-outline-primary">Añadir Vino</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
                @foreach($vinos as $vino)
                    <tr>
                        <td>{{$vino->nombre}}</td>
                        <td>{{$vino->tipo}}</td>
                        <td class="d-flex">
                            <a href="/vino/{{$vino->id}}" class="btn btn-outline-primary">Ver</a>
                            <a href="/borrarVino/{{$vino->id}}" class="btn btn-outline-danger">Borrar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

