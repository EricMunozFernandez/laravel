<?php

namespace App\Http\Controllers;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vino  $vino
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $vino=Vino::find($id);
        return view('vinoIndividual',['vino'=>$vino,'titulo'=>'Detalle Vino']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vino  $vino
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $vino=Vino::find($id);
        return view('vinoIndividual',['vino'=>$vino,'titulo'=>'Detalle Vino']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vino  $vino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vino $vino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vino  $vino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vino $vino)
    {
        //
    }
}
