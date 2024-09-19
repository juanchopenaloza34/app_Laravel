<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #343a40;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .alert {
            padding: 15px;
            background-color: #f8d7da;
            color: #721c24;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .alert.success {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>
<div class="container">
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
    <h1>Crear Producto</h1>

    <!-- Mensajes de éxito o error -->
    @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @elseif($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf        

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" required >

        <label for="presentacion">Presentacion del Producto:</label>
        <input type="text" id="presentacion" name="presentacion" required >

        <label for="pais_origen">Pais de Origen:</label>
        <input type="text" id="pais" name="pais_origen" required>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>    

        <button type="submit">Guardar Producto</button>
    </form>
</div>
</body>
</html>