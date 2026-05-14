<?php

namespace App\Http\Controllers;

use App\Models\baja;
use App\Models\registro;
use Illuminate\Http\Request;


class BajaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $bajas=baja::with('registros')->get();
        return view ('bajas.index', compact('bajas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registros = registro::all();
          return view('bajas.create',compact('registros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'id_registro'=>['required','exists:registros,id'],
            'concepto'=>'required',
        ]);

        baja::create($request->all());

        return to_route('bajas.index')->with('success','registrado con exito');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(baja $baja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(baja $baja)
    {
        $registros = registro::all();
        $bajas = baja::all();
        return view('bajas.edit', compact('baja', 'registros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, baja $baja)
    {
        $request->validate([
            'id_registro'=>['required','exists:registros,id'],
            'concepto'=>['required'],
        ]);

        $baja->update($request->all());

        return to_route('bajas.index')->with('success','editado con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(baja $baja)
    {
        $baja->delete();
        return to_route('bajas.index');
    }
}
