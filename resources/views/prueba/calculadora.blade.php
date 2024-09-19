<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @extends('layouts.app')
    @section('title', 'Menu')
    @section('content')
    @endsection

    <title>Calculadora</title>
    
</head>
<body>
    <form action="{{route('ruta_calculadora')}}" method="POST" class="container">
        @csrf
        <h1>Calculadora</h1>
        <label for="numero1">Numero 1:</label>
        <input type="text" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Numero 2:</label>
        <input type="text" id="numero2" name="numero2" required><br><br>

        <label for="operacion">Operacion:</label>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>

        <button type="submit">Enviar y Calcular</button>
        @if (@isset($resultado))
    
        <h2>Resultado: {{$resultado}}</h2> 
               
        @endif
    </form>

    
    
</body>
</html>