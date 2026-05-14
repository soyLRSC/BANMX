<?php

namespace App\Http\Controllers;

use App\Models\incidente;
use App\Models\registro;
use App\Http\Requests\StoreincidenteRequest;
use App\Http\Requests\UpdateincidenteRequest;
use Illuminate\Http\Request;
class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidentes = incidente::with('registros')->get();
        return view ('incidentes.index', compact('incidentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registros = registro::all();
        return view ('incidentes.create', compact('registros'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreincidenteRequest $request)
    {
        $request->validate([
            'id_registro'=>['required','exists:registros,id'],
            'motivo'=>['required'],
            'fecha'=>['required'],
            'hora'=>['required'],
            'encargado'=>['required'],
        ]);


        incidente::create($request->all());

        return to_route('incidentes.index')->with('success','registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(incidente $incidente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(incidente $incidente)
    {
       $registros= registro::all();
        return view('incidentes.edit', compact('incidente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateincidenteRequest $request, incidente $incidente)
    {
         $request->validate([
            'id_registro'=>['required','exists:registros,id'],
            'motivo'=>['required'],
            'fecha'=>['required'],
            'hora'=>['required'],
            'encargado'=>['required'],
        ]);


        $incidente->update($request->all());

        return to_route('incidentes.index')->with('success','editado con exito');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(incidente $incidente)
    {
        $incidente->delete();
        return to_route('incidentes.index');
    }
}
