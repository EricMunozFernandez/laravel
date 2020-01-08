<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Comentario;
use Illuminate\Http\Request;


class ArticleController extends Controller
{


    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos', ["articulos" => $articulos]);
    }

    public function show($id)
    {
        $articulo = Articulo::find($id);
        $listacomentarios = $articulo->comentarios;
        return view('articulo', ["articulo" => $articulo, 'comentarios' => $listacomentarios]);
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
