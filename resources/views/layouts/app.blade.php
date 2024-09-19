<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Mi App')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('prueba.mision') }}">Misión</a></li>
                <li><a href="{{ route('prueba.vision') }}">Visión</a></li>
                <li><a href="{{ route('prueba.calculadora') }}">Calculadora</a></li>
                <li><a href="{{ route('producto.index') }}">Productos</a></li>
                <li><a href="{{ route('cargo.index') }}">Cargo</a></li>
                <li><a href="{{ route('contrato.index') }}">Contrato</a></li>
                <li><a href="{{ route('rol.index') }}">Rol</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
