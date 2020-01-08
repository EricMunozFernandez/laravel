@extends('layout')

@section('contenido')
    <div>
        <div class="d-flex align-items-center justify-content-between">
            <h2>{{$titulo}}</h2>
            <div class="d-flex">
                <a href="{{route('bodegas.show',$bodega_id)}}" class="btn btn-outline-primary">Volver</a>
        @if($titulo!='Nuevo Vino')
                    <a href="{{route('vinos.edit',['bodega_id'=>$bodega_id,'vino_id'=>$vino->id])}}"
                       class="btn btn-outline-warning">Editar</a>
                    <form method="POST"
                          action="{{route('vinos.destroy',['bodega_id'=>$bodega_id,'vino_id'=>$vino->id])}}">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                    </form>
                </div>
            </div>
            <form method="post" action="{{route('vinos.update',['bodega_id'=>$bodega_id,'vino_id'=>$vino->id])}}">
                @else
                        </div>
                    </div>
                    <form method="post" action="{{route('vinos.store',$bodega_id)}}">
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            @if($titulo!='Detalle Vino')
                                <input type="text" id="nombre" class="form-control" name="nombre"
                                       value="{{$vino->nombre ?? ''}}">
                            @else
                                <input type="text" id="nombre" class="form-control" name="nombre" disabled
                                       value="{{$vino->nombre ?? ''}}">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            @if($titulo!='Detalle Vino')
                                <textarea name="descripcion" id="descripcion"
                                          class="form-control">{{$vino->descripcion ?? ''}}</textarea>
                            @else
                                <textarea name="descripcion" id="descripcion" class="form-control"
                                          disabled>{{$vino->descripcion ?? ''}}</textarea>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="anno">año</label>
                            @if($titulo!='Detalle Vino')
                                <input type="number" id="anno" class="form-control" name="anno"
                                       value="{{$vino->anno ?? ''}}">
                            @else
                                <input type="number" id="anno" class="form-control" name="anno" disabled
                                       value="{{$vino->anno ?? ''}}">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="alcohol">alcohol</label>
                            @if($titulo!='Detalle Vino')
                                <input type="number" id="alcohol" class="form-control" name="alcohol" min="0" max="100"
                                       step=".01" value="{{$vino->alcohol ?? ''}}">
                            @else
                                <input type="number" id="alcohol" class="form-control" name="alcohol" min="0" max="100"
                                       step=".01" disabled value="{{$vino->alcohol ?? ''}}">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="tipo">tipo de vino</label>
                            @if($titulo!='Detalle Vino')
                                <select name="tipo" id="tipo" class="form-control">
                                    @else
                                        <select name="tipo" id="tipo" class="form-control" disabled>
                                            @endif
                                            @foreach($tiposVinos as $tipovino)
                                                @if($titulo!='Nuevo Vino' && $tipovino==$vino->tipo ?? '')
                                                    <option selected>{{$tipovino}}</option>
                                                @else
                                                    <option>{{$tipovino}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                        </div>
                        @if($titulo=='Nuevo Vino')
                            <input type="hidden" name="bodega_id" value="{{$bodega_id}}">
                            <input type="submit" value="Nuevo Vino">
                        @else
                            <input type="hidden" name="bodega_id" value="{{$vino->bodega_id}}">
                            <input type="submit" class="btn btn-primary" value="Actualizar Vino">
                        @endif
                    </form>
    </div>
@endsection
