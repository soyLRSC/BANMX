<?php

namespace App\Http\Controllers;

use App\Models\guardia;
use App\Http\Requests\StoreguardiaRequest;
use App\Http\Requests\UpdateguardiaRequest;

class GuardiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guardias = guardia::all();
        return view('guardias.index', compact('guardias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guardias.create', ['guardia'=> new guardia()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreguardiaRequest $request)
    {
        
        $request->validate([
            'nombre'=> 'required',
            'apellido'=>'required',
            'area'=>'required'
        ]);

        guardia::create($request->all());

        return to_route('guardias.index')->with('success', 'registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(guardia $guardia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guardia $guardia)
    {
        $guardia = guardia::all();
        return view('guardias.edit', compact('guardia') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateguardiaRequest $request, guardia $guardia)
    {
        

        $request->validate([
            'nombre'=> 'required',
            'apellido'=>'required',
            'area'=>'required'
        ]);

        $guardia->update($request->all());

        return to_route('guardias.index')->with('success', 'actualizadc con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(guardia $guardia)
    {
        $guardia->delete();
        return to_route('guardias.index');
    }
}
