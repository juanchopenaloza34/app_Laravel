<!-- resources/views/create_empresa.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empresa</title>
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
    <h1>Crear Empresa</h1>

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

    <!-- Formulario para crear una empresa -->
    <form action="{{ route('empresa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nit">NIT:</label>
        <input type="text" id="nit" name="nit" value="{{ old('nit') }}" required>

        <label for="tipoContribuyente">Tipo de Contribuyente:</label>
        <input type="text" id="tipoContribuyente" name="tipoContribuyente" value="{{ old('tipoContribuyente') }}" required>

        <label for="digitoVerificacion">Dígito de Verificación:</label>
        <input type="text" id="digitoVerificacion" name="digitoVerificacion" value="{{ old('digitoVerificacion') }}" required>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}">

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}">

        <label for="rut">RUT:</label>
        <input type="text" id="rut" name="rut" value="{{ old('rut') }}">

        <label for="logo">Logo:</label>
        <input type="file" id="logo" name="logo">

        <label for="camaraComercio">Cámara de Comercio:</label>
        <input type="text" id="camaraComercio" name="camaraComercio" value="{{ old('camaraComercio') }}">

        <button type="submit">Guardar Empresa</button>
    </form>
</div>
</body>
</html>
