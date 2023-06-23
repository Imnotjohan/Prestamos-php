<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;
use App\Models\Persona;
use Faker\Provider\ar_EG\Person;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch data from the database
        $personas = Persona::all();

        // Pass the data to the view and return it
        return view('index', ['personas' => $personas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonaRequest $request)
    {
        Persona::create($request->all());
        return response("Creado",200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        // Pass the data to the view and return it
        return view('show', ['persona' => $persona]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonaRequest $request, Persona $persona)
    {
        $persona->update($request->all());
        return response("Actualizado",200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return response("Persona borrada",200);
    }

    public function buscarPorNombre($nombre)
    {
        $personas= Persona::where("nombre","like","%".$nombre."%")->get();
        return response()->json($personas);
    }

    public function SuFiador(Persona $persona)
    {
        return response($persona->fiador, 200);
    }

    public function showConPrestamo(Persona $persona)
    {
        return response($persona->prestamos, 200);
    }
}
