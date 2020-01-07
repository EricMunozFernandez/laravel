<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Usuario;
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
        $usuario = Usuario::find($articulo->user_id);
        return view('articulo', ["articulo" => $articulo, 'usuarioArticulo' => $usuario]);
    }

    public function create()
    {
        $usuarios = Usuario::all();
        return view('crearArticulo', ['usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {

        $articulo = new Articulo();

        $articulo->titulo = request('titulo');
        $articulo->subtitulo = request('subtitulo');
        $articulo->cuerpo = request('cuerpo');
        $articulo->user_id = request('user_id');
        $articulo->save();

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        Articulo::destroy($id);

        return redirect()->route('article.index');
    }
}
