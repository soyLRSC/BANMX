<?php

namespace App\Http\Controllers;

use App\Models\entrgadespensa;
use App\Models\registro;
use App\Http\Requests\StoreentrgadespensaRequest;
use App\Http\Requests\UpdateentrgadespensaRequest;
use function PHPUnit\Framework\returnArgument;
use Illuminate\Http\Request;
class EntrgadespensaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrgadespensas= entrgadespensa::with('registros')->get();
        return view('entregadespensas.index', compact('entrgadespensas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registros= registro::all();
        return view('entregadespensas.create', compact('registros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreentrgadespensaRequest $request)
    {
        $request ->validate([
            'id_registro'=>['required','exists:registros,id'],
            'fecha'=>['required'],
            'cantidad'=>['required'],
            'responsable'=>['required'],
        ]);

        entrgadespensa::create($request->all());

        return to_route('entregadespensas.index')->with('success','creado con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(entrgadespensa $entrgadespensa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entrgadespensa $entrgadespensa)
    {
        $registros= registro::all();
        $entrgadespensa = entrgadespensa::all();
        return view('entregadespensa.edit', compact('entrgadespensa', 'registros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateentrgadespensaRequest $request, entrgadespensa $entrgadespensa)
    {
        $request ->validate([
            'id_registro'=>['required','exists:registros,id'],
            'fecha'=>['required'],
            'cantidad'=>['required'],
            'responsable'=>['required'],
        ]);

        $entrgadespensa->update($request->all());

        return to_route('entregadespensas.index')->with('success','creado con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entrgadespensa $entrgadespensa)
    {
        $entrgadespensa->delete();
        return to_route('entregadespensas.index');
    }
}
