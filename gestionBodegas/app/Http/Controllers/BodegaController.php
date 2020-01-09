<?php

namespace App\Http\Controllers;

use App\Bodega;
use App\Vino;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodegasLista = Bodega::all();
        return view('bodegas', ['bodegas' => $bodegasLista,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bodegaNueva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bodega = new Bodega();
        $bodega->nombre = request('nombre');
        $bodega->direccion = request('direccion');
        $bodega->email = request('email');
        $bodega->telefono = request('telefono');
        $bodega->personaContacto = request('personaContacto');
        $bodega->annoFundacion = request('annoFundacion');
        $bodega->restaurante = request('restaurante');
        $bodega->hotel = request('hotel');

        $bodega->save();

        return redirect()->route('bodegas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bodega = Bodega::find($id);
        $vinosLista = $bodega->vinos;
        return view('bodegaIndividual', ['bodega' => $bodega, 'vinos' => $vinosLista, 'titulo' => 'Datos Bodega']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bodega = Bodega::find($id);
        $vinosLista = $bodega->vinos;
        return view('bodegaIndividual', ['bodega' => $bodega, 'vinos' => $vinosLista, 'titulo' => 'Editar Bodega']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bodega = Bodega::find($id);
        $bodega->nombre = request('nombre');
        $bodega->direccion = request('direccion');
        $bodega->email = request('email');
        $bodega->telefono = request('telefono');
        $bodega->personaContacto = request('personaContacto');
        $bodega->annoFundacion = request('annoFundacion');
        $bodega->restaurante = request('restaurante');
        $bodega->hotel = request('hotel');

        $bodega->save();

        $vinosLista = $bodega->vinos;
        return view('bodegaIndividual', ['bodega' => $bodega, 'vinos' => $vinosLista, 'titulo' => 'Datos Bodega']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $bodega = Bodega::find($id);
        $vinosLista = $bodega->vinos;
        foreach ($vinosLista as $vino) {
            $vino->delete();
        }
        $bodega->delete();
        $bodegasLista = Bodega::all();
        return view('bodegas', ['bodegas' => $bodegasLista,]);
    }
}
