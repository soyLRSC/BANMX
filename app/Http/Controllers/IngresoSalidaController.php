<?php

namespace App\Http\Controllers;

use App\Models\ingreso_salida;
use App\Http\Requests\Storeingreso_salidaRequest;
use App\Http\Requests\Updateingreso_salidaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngresoSalidaController extends Controller
{
    /**
     * Muestra todos los registros.
     */
    public function index()
    {
        $ingreso_salidas = ingreso_salida::with('registro')->latest()->get();
        return view('ingreso_salidas.index', compact('ingreso_salidas'));
    }

    /**
     * Muestra el formulario para registrar entrada o salida.
     */
    public function create()
    {
        return view('ingreso_salidas.create', ['ingreso_salida' => new ingreso_salida()]);
    }

    /**
     * Registra la hora de entrada.
     */
    public function registrarEntrada(Request $request)
    {
     $request->validate([
        'id_registro' => 'required|exists:registros,id',
    ]);

    $fechaHoy = now('America/Mexico_city')->toDateString();

    $registro = ingreso_salida::where('id_registro', $request->id_registro)
                              ->where('fecha', $fechaHoy)
                              ->first();

    if (!$registro) {
        // Si no hay entrada, registramos la entrada
        ingreso_salida::create([
            'id_registro' => $request->id_registro,
            'hora_entrada' => now('America/Mexico_city')->format('H:i:s'),
            'fecha' => $fechaHoy,
        ]);

        return redirect()->back()->with('success', 'Entrada registrada.');
    }

    if (!$registro->hora_salida) {
        // Si ya hay entrada pero no salida, registramos la salida
        $registro->update([
            'hora_salida' => now('America/Mexico_city')->format('H:i:s'),
        ]);

        return redirect()->back()->with('success', 'Salida registrada.');
    }

    // Si ya hay entrada y salida
    return redirect()->back()->with('info', 'Ya registraste entrada y salida hoy.');
}

    /**
     * Elimina un registro.
     */
    public function destroy(ingreso_salida $ingreso_salida)
    {
        $ingreso_salida->delete();
        return redirect()->route('ingreso_salidas.index')->with('success', 'Registro eliminado.');
    }
}
