<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function create ()
    {
        return view('producto.create');
    }

    public function store (Request $request)
    {
        $validados = $request->validate([
            'nombre'=>'required|string|min:2|max:30',
            'descripcion'=>'required|string|min:10|max:255',
            'presentacion'=>'required|string|min:10|max:255',
            'pais_origen'=>'required|string|min:3|max:255',
            'precio'=>'required|numeric',
            'stock'=>'required|numeric',
        ]);

        $producto=Producto::create([
            'nombre'=>$validados['nombre'],
            'descripcion'=>$validados['descripcion'],
            'presentacion'=>$validados['presentacion'],
            'pais_origen'=>$validados['pais_origen'],
            'precio'=>$validados['precio'],
            'stock'=>$validados['stock'],

        ]);

        return redirect()->back()->with('success', 'Producto guardado con éxito.');

        
    }

    public function index()
    {

        $productos = Producto::all();

        return view('producto.index', ['producto'=> $productos]);
    }

    
}
