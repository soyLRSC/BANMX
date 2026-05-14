<?php

namespace App\Http\Controllers;

use App\Models\area;
use App\Models\registro;
use App\Http\Requests\StoreregistroRequest;
use App\Http\Requests\UpdateregistroRequest;
use Illuminate\Http\Request;
class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = registro::with('areaPrincipal', 'areaAlternativaUno', 'areaAlternativaDos')->get();
        return view('registros.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas= area::all();
        return view('registros.create', compact('areas')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreregistroRequest $request)
    {
          // 1. Validar todos los campos definidos en tu Form Request
    $data = $request->validated();

    // 2. Reemplazar los campos de archivos con la ruta de almacenamiento
    if ($request->hasFile('ine')) {
        $data['ine'] = $request->file('ine')->store('documentos', 'public');
    }

    if ($request->hasFile('domicilio')) {
        $data['domicilio'] = $request->file('domicilio')->store('documentos', 'public');
    }

    if ($request->hasFile('certificadom')) {
        $data['certificadom'] = $request->file('certificadom')->store('documentos', 'public');
    }

    if ($request->hasFile('acuerdo')) {
        $data['acuerdo'] = $request->file('acuerdo')->store('documentos', 'public');
    }

    if ($request->hasFile('autorizacion')) {
        $data['autorizacion'] = $request->file('autorizacion')->store('documentos', 'public');
    }

    if ($request->hasFile('reglamento')) {
        $data['reglamento'] = $request->file('reglamento')->store('documentos', 'public');
    }

    if ($request->hasFile('foto')) {
        $data['foto'] = $request->file('foto')->store('documentos', 'public');
    }

    // 3. Guardar todos los datos en la base
    Registro::create($data);

    // 4. Redireccionar con mensaje
    return to_route('registros.index')->with('success', 'Registrado con éxito');
}

    /**
     * Display the specified resource.
     */
    public function show(registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(registro $registro)
    {
        $registros= registro::all();
        return view('registros.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateregistroRequest $request, registro $registro)
    {
         // 1. Obtener los datos validados
    $data = $request->validated();

    // 2. Guardar archivos si se subieron nuevos, y reemplazar en $data
    if ($request->hasFile('ine')) {
        $data['ine'] = $request->file('ine')->store('documentos', 'public');
    }

    if ($request->hasFile('domicilio')) {
        $data['domicilio'] = $request->file('domicilio')->store('documentos', 'public');
    }

    if ($request->hasFile('certificadom')) {
        $data['certificadom'] = $request->file('certificadom')->store('documentos', 'public');
    }

    if ($request->hasFile('acuerdo')) {
        $data['acuerdo'] = $request->file('acuerdo')->store('documentos', 'public');
    }

    if ($request->hasFile('autorizacion')) {
        $data['autorizacion'] = $request->file('autorizacion')->store('documentos', 'public');
    }

    if ($request->hasFile('reglamento')) {
        $data['reglamento'] = $request->file('reglamento')->store('documentos', 'public');
    }

    if ($request->hasFile('foto')) {
        $data['foto'] = $request->file('foto')->store('documentos', 'public');
    }

    // 3. Actualizar el modelo
    $registro->update($data);

    // 4. Redireccionar
    return to_route('registros.index')->with('success', 'Actualizado con éxito');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(registro $registro)
    {
        $registro->delete();
        return to_route('registros.index');
    }
}
