<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamoController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Prestamo::all(), 200);
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
        Prestamo::create($request->all());
        return response("guardado correcto", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        return response($prestamo, 200);
    }  

    /**
    * Show the form for editing the specified resource.
    *
    * @param \App\Prestamo $Prestamo
    * @return \Illuminate\Http\Response
    */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Prestamo $prestamo
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Prestamo $prestamo)
    {
        $prestamo->update($request->all());
        return response("Actualizado",200);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Prestamo $prestamo
    * @return \Illuminate\Http\Response
    */
    public function destroy(Prestamo $prestamo) 
    {
        //
        $prestamo->delete();
        return response("Prestamo Borrado",200);
    }
}
