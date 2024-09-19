@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <h2>Bienvenido a la Página de Inicio</h2>
    <div class="container_table">
        <table>
            <thead>
                <tr>
                    <th>ID Cargo</th>
                    <th>ID Departamento</th>
                    <th>Código Nivel Riesgo</th>
                    <th>Descripción del Cargo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cargos as $cargo)
                <tr>
                    <td> {{ $cargo->idCargo }}</td>
                    <td> {{ $cargo->idDepartamento }}</td>
                    <td> {{ $cargo->codNivelRiesgo }}</td>
                    <td> {{ $cargo->descripcionCargo }}</td>
                    <th>
                        <a href="{{ route('cargo.create') }}" class="btn">Crear Cargo</a>
                    </th>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
