<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página principal del proyecto Nómina">
    <meta name="keywords" content="nómina, gestión, empresa">
    <meta name="author" content="Tu Nombre o Empresa">
    <link rel="stylesheet" href="css/styleHome.css">
    <title>Página Principal - Proyecto Nómina</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Página Principal</h1>
            <h2>Proyecto Nómina</h2>   
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
        </div>
    </header>

    <main>
        @yield('content')
        <div class="container">          
            <h1>Bienvenido a la página de inicio</h1>
            <p>Este es el contenido de la página principal.</p>
            <p>Bienvenido a la página principal de nuestro proyecto de nómina. Aquí encontrarás información sobre nuestra misión y visión.</p>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Proyecto Nómina. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
