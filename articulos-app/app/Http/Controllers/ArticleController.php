<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{


    public function index()
    {
        $articulos = Articulo::all();
        $logeado=false;
        if (Auth::check()){
            $logeado=true;
        }
        return view('articulos', ["articulos" => $articulos,'logeado'=>$logeado]);
    }

    public function show($id)
    {
        $articulo = Articulo::find($id);
        $logeado=false;
        if (Auth::check()){
            $logeado=true;
        }
        $listacomentarios = $articulo->comentarios;
        return view('articulo', ["articulo" => $articulo, 'comentarios' => $listacomentarios,'logeado'=>$logeado]);
    }

    public function create()
    {

        return view('crearArticulo');
    }

    public function store(Request $request)
    {

        $articulo = new Articulo();

        $articulo->titulo = request('titulo');
        $articulo->subtitulo = request('subtitulo');
        $articulo->cuerpo = request('cuerpo');

        $articulo->save();

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $listacomentarios = $articulo->comentarios;
        foreach ($listacomentarios as $comentario) {
            Comentario::destroy($comentario->id);
        }
        Articulo::destroy($id);

        return redirect()->route('article.index');
    }
}
