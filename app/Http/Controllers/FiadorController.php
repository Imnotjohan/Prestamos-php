<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiador;

class FiadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(Fiador::all(), 200);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fiador::create($request->all());
        return response("guardado correcto", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Fiador $fiador
     * @return \Illuminate\Http\Response
     */
    public function show(Fiador $fiador)
    {
        //
        return response($fiador, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Fiador $fiador
     * @return \Illuminate\Http\Response
     */
    public function edit(Fiador $fiador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Fiador $fiador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fiador $fiador)
    {
        //
        $fiador->update($request->all());
        return response("Actualizado", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Fiador $fiador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fiador $fiador)
    {
        //
        $fiador->delete();
        return response("Fiador Borrado", 200);
    }
}
