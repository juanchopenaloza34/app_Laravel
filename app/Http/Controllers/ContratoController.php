<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;

class ContratoController extends Controller
{
    public function create()
    {
        return view('contrato.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idCargo' => 'required|numeric',
            'codTipoContrato' => 'required|string|max:255',
            'salario' => 'required|numeric',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'nullable|date',
            'jornadaLaboral' => 'required|string|max:255',
        ]);

        $contrato = Contrato::create($validatedData);

        return redirect()->back()->with('success', 'Contrato creado exitosamente.');
    }

    public function index()
    {
        $contratos = Contrato::all();

        return view('contrato.index', ['contratos' => $contratos]);
    }
}
