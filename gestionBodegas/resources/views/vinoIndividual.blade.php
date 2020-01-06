@extends('layout')

@section('contenido')
    <div>
        <h2>{{$titulo}}</h2>
        <a href="/">Volver</a>
        @if($titulo!='Nuevo Vino')
            <a href="/editarVino/{{$vino->id}}">Editar</a>
            <a href="/borrarVino/{{$vino->id}}">Borrar</a>
        <form method="post" action="/updateVino/{{$vino->id}}">
        @else
        <form method="post" action="/storeVino">
        @endif
            <label>Nombre</label>
            @if($titulo!='Detalle Vino')
                <input type="text" name="nombre" value="{{$vino->nombre ?? ''}}">
                @else
                <input type="text" name="nombre" disabled value="{{$vino->nombre ?? ''}}">
            @endif

            <label>Descripcion</label>
            @if($titulo!='Detalle Vino')
                <textarea name="descripcion" >{{$vino->descripcion ?? ''}}</textarea>
            @else
                <textarea name="descripcion" disabled>{{$vino->descripcion ?? ''}}</textarea>
            @endif
            <label>año</label>
            @if($titulo!='Detalle Vino')
                <input type="number" name="anno" value="{{$vino->anno ?? ''}}">
            @else
                <input type="number" name="anno" disabled value="{{$vino->anno ?? ''}}">
            @endif
            <label>alcohol</label>
            @if($titulo!='Detalle Vino')
                <input type="number" name="alcohol"  min="0" max="100" step=".01" value="{{$vino->alcohol ?? ''}}">
            @else
                <input type="number" name="alcohol"  min="0" max="100" step=".01" disabled value="{{$vino->alcohol ?? ''}}">
            @endif
            <label>tipo de vino</label>
            @if($titulo!='Detalle Vino')
                <select name="tipo">
            @else
                <select name="tipo" disabled>
            @endif
                @foreach($tiposVinos as $tipovino)
                            @if($titulo!='Nuevo Vino' && $tipovino==$vino->tipo ?? '')
                                <option selected>{{$tipovino}}</option>
                            @else
                        <option>{{$tipovino}}</option>
                        @endif
                @endforeach
                </select>

            @if($titulo=='Nuevo Vino')
                <input type="hidden" name="bodega_id" value="{{$bodega_id}}">
                <input type="submit" value="Nuevo Vino">
            @else
                <input type="hidden" name="bodega_id" value="{{$vino->bodega_id}}">
                <input type="submit" value="Actualizar Vino">
            @endif
        </form>
    </div>
@endsection
