@extends('layout')

@section('contenido')
    <div class="d-flex ">
        <div class="col-6">
            <div class="d-flex align-items-center justify-content-between">
                <h2>{{$titulo}}</h2>
                <div class="d-flex">
                    <a href="{{route('bodegas.edit',$bodega->id)}}" class="btn btn-outline-warning">Editar</a>
                    <a href="{{route('bodegas.index')}}" class="btn btn-outline-primary">Volver</a>
                    <form method="POST" action="{{route('bodegas.destroy',$bodega->id)}}">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                    </form>
                </div>
            </div>
            <form method="post" action="{{route('bodegas.update',$bodega->id)}}">
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
                        <input type="text" id="annoFundacion" class="form-control" name="annoFundacion"
                               value="{{$bodega->annoFundacion}}">
                    @else
                        <input type="text" id="annoFundacion" class="form-control" name="annoFundacion" disabled
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
                            <div><input type="radio" name="hotel" value="1" checked>Si</div>
                            <div><input type="radio" name="hotel" value="0">No</div>
                        @else
                            <div><input type="radio" name="hotel" value="1">Si</div>
                            <div><input type="radio" name="hotel" value="0" checked>No</div>
                        @endif
                    @else
                        @if($bodega->hotel)
                            <div><input type="radio" name="hotel" value="1" checked disabled>Si</div>
                            <div><input type="radio" name="hotel" value="0" disabled>No</div>
                        @else
                            <div><input type="radio" name="hotel" value="1" disabled>Si</div>
                            <div><input type="radio" name="hotel" value="0" checked disabled>No</div>
                        @endif
                    @endif
                </div>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        </div>
        <div class="col-6">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Vinos Disponibles</h2>
                <a href="{{route('vinos.create',$bodega->id)}}" class="btn btn-outline-primary">Añadir Vino</a>
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
                            <a href="{{route('vinos.show',['bodega_id'=>$bodega->id,'vino_id'=>$vino->id])}}"
                               class="btn btn-outline-primary">Ver</a>
                            <form method="POST"
                                  action="{{route('vinos.destroy',['bodega_id'=>$bodega->id,'vino_id'=>$vino->id])}}">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

