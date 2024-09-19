@extends('layouts.app')

@section('title', 'Listado de Roles')

@section('content')
    <h2>Listado de Roles</h2>
    <div class="container_table">
        <table>
            <thead>
                <tr>
                    <th>Código de Rol</th>
                    <th>Documento</th>
                    <th>Descripción del Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->codRol }}</td>
                    <td>{{ $rol->documento }}</td>
                    <td>{{ $rol->descripcionRol }}</td>
                </tr>
                <th>
                    <a href="{{ route('rol.create') }}" class="btn">Crear Rol</a>
                </th>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
