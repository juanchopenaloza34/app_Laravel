@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <h2>Bienvenido a la Página de Inicio</h2>
    <div class="container_table">
        <table>
            <thead>
                <tr>
                    <th>Id Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Pais</th>
                    <th>Presentación</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($producto as $producto)
                <tr>
                    <th> {{ $producto->id }}</th>
                    <th> {{ $producto->nombre }}</th>
                    <th> {{ $producto->descripcion }}</th>
                    <th> {{ $producto->pais_origen }}</th>
                    <th> {{ $producto->presentacion }}</th>
                    <th> {{ $producto->precio }}</th>
                    <th> {{ $producto->stock }}</th>
                    <th>
                        <a href="{{ route('producto.create') }}" class="btn">Crear Producto</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection