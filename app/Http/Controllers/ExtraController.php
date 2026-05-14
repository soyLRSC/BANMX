<?php

namespace App\Http\Controllers;

use App\Models\extra;
use App\Models\registro;
use App\Http\Requests\StoreextraRequest;
use App\Http\Requests\UpdateextraRequest;
use function PHPUnit\Framework\returnArgument;
use Illuminate\Http\Request;
class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $extras=extra::with('registro')->get();
      return view('extras.index', compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registros=registro::all();
        return view('extras.create', compact('registros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreextraRequest $request)
    {
        $request ->validate([
            'id_registro'=>['required','exists:registros,id'],
            'entrada'=>['required'],
            'salida'=>['required'],
            'encargado'=>['required'],
            'motivo'=>['required'],
        ]);

        extra::create($request->all());

        return to_route('extras.index')->with('success','registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(extra $extra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(extra $extra)
    {
        $registros= registro::all();
        return view('extras.edit', compact('extra') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateextraRequest $request, extra $extra)
    {
        $request ->validate([
            'id_registro'=>['required','exists:registros,id'],
            'entrada'=>['required'],
            'salida'=>['required'],
            'encargado'=>['required'],
            'motivo'=>['required'],
        ]);

        $extra->update($request->all());

        return to_route('extras.index')->with('success','editado con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(extra $extra)
    {
        $extra->delete();
        return to_route('extras.index');
    }
}
