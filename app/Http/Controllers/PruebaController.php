<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function showVista1()
    {
        return view('prueba.vista1');
    }

    public function vision()
    {
        return view('prueba.vision');
    }

    public function mision()
    {
        return view('prueba.mision');
    }

    // public function mostrar_calculadora()
    // {
    //     return view('prueba.calculadora');
    // }

    public function calcular (Request $request)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $operacion = $request->input('operacion');
        $resultado = null;

        switch ($operacion) {

            case 'suma':
                $resultado = $numero1 + $numero2;
                break;

            case 'resta':
                $resultado = $numero1 - $numero2;
                break;
            
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;

            case 'division':
                if ($numero2 !=0)
                {
                    $resultado = $numero1 / $numero2;
                }
                else
                {
                    $resultado = '∞';
                }                
                break;  

            default:
                print 'Operacion no Valida' ; 
                break;               
        }

        return view('prueba.calculadora', compact('resultado'));
    }

}

