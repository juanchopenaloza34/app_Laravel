<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @extends('layouts.app')
    @section('title', 'Menu')
    @section('content')
    @endsection

    <title>Misión</title>
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li><a href="mision">Misión</a></li>
                <li><a href="vision">Visión</a></li>
                <li><a href="calculadora">Calculadora</a></li>
                <li><a href="productos/create">Productos</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Misión</h1>
        <p>Nuestra misión es ofrecer a los estudiantes del área contable del centro de formación una herramienta avanzada para simular la gestión de nóminas de manera precisa y realista. Queremos proporcionar un entorno seguro y accesible que facilite el aprendizaje y la práctica efectiva de los procesos de nómina. Nos comprometemos a desarrollar un software intuitivo e innovador que permita a los usuarios familiarizarse con las tareas de nómina de manera eficiente y segura.</p>
    </div>
</body>
</html>
