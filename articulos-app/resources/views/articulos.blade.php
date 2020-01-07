@extends('layout')

@section('articulo')
    <ol>
        @foreach($articulos as $articulo)
            <li>{{$articulo->titulo}} <a href="/articulos/{{$articulo->id}}">Ver</a></li>
        @endforeach
    </ol>
@endsection
