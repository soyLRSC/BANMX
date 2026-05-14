<?php

namespace App\Http\Controllers;

use App\Models\anticipada;
use App\Models\registro;
use App\Http\Requests\StoreanticipadaRequest;
use App\Http\Requests\UpdateanticipadaRequest;

use Illuminate\Http\Request;

class AnticipadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anticipadas = anticipada::with('registro')->get();
        return view('anticipadas.index', compact('anticipadas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registros = registro::all();
        return view('anticipadas.create', compact('registros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_registro'=>['required','exists:registros,id'],
            'hora'=>['required'],
            'fecha'=>['required'],
            'motivo'=>['required'],
            'encargado'=>['required'],        
            ]
        );

        anticipada::create($request->all());

        return to_route('anticipadas.create')->with('success','registrada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(anticipada $anticipada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(anticipada $anticipada)
    {   $registros = registro::all();
        $anticipadas= anticipada::all();
        return view('anticipadas.edit', compact('anticipada', 'registros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, anticipada $anticipada)
    {
         $request->validate([
            'id_registro'=>['required','exists:registros,id'],
            'hora'=>['required'],
            'fecha'=>['required'],
            'motivo'=>['required'],
            'encargado'=>['required'],        
            ]
        );

        $anticipada->update($request->all());

        return to_route('anticipadas.index')->with('success','editada con exito');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(anticipada $anticipada)
    {
        $anticipada->delete();
        return to_route('anticipadas.index');
    }
}
