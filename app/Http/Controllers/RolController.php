<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function create()
    {
        return view('rol.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'codRol' => 'required|string|max:255',
            'documento' => 'required|string|max:255',
            'descripcionRol' => 'required|string|max:255',
        ]);

        $rol = Rol::create($validatedData);

        return redirect()->back()->with('success', 'Rol creado exitosamente.');
    }

    public function index()
    {
        $roles = Rol::all();

        return view('rol.index', ['roles' => $roles]);
    }
}
