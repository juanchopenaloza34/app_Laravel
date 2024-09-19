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
        input, select {
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
            background-color: #d4edda;
            color: #155724;
            margin-bottom: 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Crear Rol</h1>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rol.store') }}" method="POST">
        @csrf

        <label for="codRol">Código de Rol:</label>
        <input type="text" id="codRol" name="codRol" required>

        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="documento" required>

        <label for="descripcionRol">Descripción del Rol:</label>
        <input type="text" id="descripcionRol" name="descripcionRol" required>

        <button type="submit">Guardar Rol</button>
    </form>
</div>
</body>
</html>
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
        input, select {
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
            background-color: #d4edda;
            color: #155724;
            margin-bottom: 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Crear Rol</h1>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rol.store') }}" method="POST">
        @csrf

        <label for="codRol">Código de Rol:</label>
        <input type="text" id="codRol" name="codRol" required>

        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="documento" required>

        <label for="descripcionRol">Descripción del Rol:</label>
        <input type="text" id="descripcionRol" name="descripcionRol" required>

        <button type="submit">Guardar Rol</button>
    </form>
</div>
</body>
</html>
