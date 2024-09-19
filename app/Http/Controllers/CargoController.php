<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function create()
    {
        return view('cargo.create');
    }

    public function store(Request $request)
    {
        $validados = $request->validate([
            'idDepartamento' => 'required|numeric',
            'codNivelRiesgo' => 'required|string|min:2|max:255',
            'descripcionCargo' => 'required|string|min:10|max:255',
        ]);

        $cargo = Cargo::create([
            'idDepartamento' => $validados['idDepartamento'],
            'codNivelRiesgo' => $validados['codNivelRiesgo'],
            'descripcionCargo' => $validados['descripcionCargo'],
        ]);

        return redirect()->back()->with('success', 'Cargo guardado con éxito.');
    }

    public function index()
    {
        $cargos = Cargo::all();

        return view('cargo.index', ['cargos' => $cargos]);
    }
}
