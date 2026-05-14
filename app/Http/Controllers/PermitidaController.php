<?php

namespace App\Http\Controllers;

use App\Models\permitida;
use App\Models\registro;
use App\Http\Requests\StorepermitidaRequest;
use App\Http\Requests\UpdatepermitidaRequest;
use Illuminate\Http\Request;
class PermitidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permitidas= permitida::with('registro')->get();
       return view('permitidas.index', compact('permitidas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registros= registro::all();
        return view('permitidas.create',compact('registros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepermitidaRequest $request)
    {
        $request->validate([
            'id_registro'=>['required', 'exists:registros,id'],
            'hora'=>['required'],
            'fecha'=>['required'],
            'motivo'=>['required'],
            'encargado'=>['required'],
        ]);

        permitida::create($request->all());

        return to_route('permitidas.index')->with('success','creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(permitida $permitida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(permitida $permitida)
    {
        $registros= registro::all();
        return view('permitidas.edit', compact('permitida'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepermitidaRequest $request, permitida $permitida)
    {
        $request->validate([
            'id_registro'=>['required', 'exists:registros,id'],
            'hora'=>['required'],
            'fecha'=>['required'],
            'motivo'=>['required'],
            'encargado'=>['required'],
        ]);

        $permitida->update($request->all());

        return to_route('permitidas.index')->with('success','creado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(permitida $permitida)
    {
        $permitida ->delete();
        return  to_route('permitidas.index');
    }
}
