<?php

namespace App\Http\Controllers;

use App\Bodega;
use App\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('vinoIndividual', [
            'bodega_id' => $id,
            'titulo' => 'Nuevo Vino',
            'tiposVinos' => array('tinto', 'blanco', 'rosado', 'espumoso', 'dulce')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vino = new Vino();

        $vino->nombre = request('nombre');
        $vino->descripcion = request('descripcion');
        $vino->anno = request('anno');
        $vino->alcohol = request('alcohol');
        $vino->tipo = request('tipo');
        $vino->bodega_id = request('bodega_id');

        $vino->save();
        $bodega = Bodega::find($vino->bodega_id);
        $vinosLista = $bodega->vinos;
        return view('bodegaIndividual', ['bodega' => $bodega, 'vinos' => $vinosLista]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function show($bodega_id, $vino_id)
    {
        $vino = Vino::find($vino_id);
        return view('vinoIndividual', [
            'vino' => $vino,
            'bodega_id'=>$bodega_id,
            'titulo' => 'Detalle Vino',
            'tiposVinos' => array('tinto', 'blanco', 'rosado', 'espumoso', 'dulce')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function edit($bodega_id, $vino_id)
    {
        $vino = Vino::find($vino_id);
        return view('vinoIndividual', [
            'vino' => $vino,
            'bodega_id'=>$bodega_id,
            'titulo' => 'Editar Vino',
            'tiposVinos' => array('tinto', 'blanco', 'rosado', 'espumoso', 'dulce')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bodega_id, $vino_id)
    {
        $vino = Vino::find($vino_id);
        $vino->nombre = request('nombre');
        $vino->descripcion = request('descripcion');
        $vino->anno = request('anno');
        $vino->alcohol = request('alcohol');
        $vino->tipo = request('tipo');
        $vino->bodega_id = request('bodega_id');

        $vino->save();
        return view('vinoIndividual', [
            'vino' => $vino,
            'titulo' => 'Detalle Vino',
            'bodega_id'=>$bodega_id,
            'tiposVinos' => array('tinto', 'blanco', 'rosado', 'espumoso', 'dulce')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function destroy($bodega_id, $vino_id)
    {
        $vino = Vino::find($vino_id);

        $vino->delete();
        $bodega = Bodega::find($bodega_id);
        $vinosLista = $bodega->vinos;
        return view('bodegaIndividual', [
            'bodega' => $bodega,
            'vinos' => $vinosLista,
            'titulo' => 'Datos Bodega'
        ]);

    }
}
