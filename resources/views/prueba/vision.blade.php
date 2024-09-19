<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @extends('layouts.app')
    @section('title', 'Menu')
    @section('content')
    @endsection

    <title>Visión</title>
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
        <h1>Visión</h1>
        <p>En los próximos seis meses, nuestro objetivo es alcanzar una funcionalidad casi completa en nuestro software de gestión de nóminas. Diseñado para satisfacer las necesidades específicas del centro de formación en contabilidad, nuestro software será una herramienta altamente eficiente, accesible y actualizable. Permitirá a los aprendices simular de manera realista el funcionamiento de una empresa, gestionando procesos de nómina como el cálculo de salarios, deducciones y beneficios, y generando informes detallados.</p>
        <p>Nos comprometemos a proporcionar una solución integral que facilite el aprendizaje del manejo de software de nómina de forma eficiente y efectiva. Esto se logrará mediante un enfoque en la seguridad de los datos, una interfaz intuitiva y una precisión en los cálculos.</p>
        <p>Además, nuestro software estará diseñado para ofrecer una alta seguridad, protegiendo la información confidencial de la empresa y los empleados. También nos comprometemos a mantener el software actualizado, integrando nuevas funciones y adaptándonos a los cambios en la legislación fiscal y laboral.</p>
    </div>
</body>
</html>
