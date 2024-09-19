<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa; // Asegúrate de que este modelo existe

class EmpresaController extends Controller
{
    /**
     * Muestra una lista de todas las empresas.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Obtener todas las empresas
        $empresas = Empresa::all();
        
        // Retornar la vista con los datos
        return view('empresas.index', compact('empresas'));
    }

    /**
     * Almacena una nueva empresa en la base de datos.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nit' => 'required|string|max:255|unique:empresa',
            'tipoContribuyente' => 'required|string|max:255',
            'digitoVerificacion' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:255',
            'email' => 'required|email|unique:empresa',
            'direccion' => 'nullable|string|max:255',
            'rut' => 'nullable|string|max:255|unique:empresa',
            'camaraComercio' => 'nullable|string|max:255',
            'logo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Crear una nueva instancia de la empresa
        $empresa = new Empresa();
        $empresa->fill($request->except('logo'));

        // Manejar el archivo del logo si se proporciona
        if ($request->hasFile('logo')) {
            $empresa->logo = $request->file('logo')->store('logos');
        }

        // Guardar la empresa en la base de datos
        $empresa->save();

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Empresa creada con éxito.');
    }
}
