@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <h2>Listado de Contratos</h2>
    <div class="container_table">
        <table>
            <thead>
                <tr>
                    <th>ID Contrato</th>
                    <th>ID Cargo</th>
                    <th>Tipo de Contrato</th>
                    <th>Salario</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Jornada Laboral</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contratos as $contrato)
                <tr>
                    <td>{{ $contrato->idContrato }}</td>
                    <td>{{ $contrato->idCargo }}</td>
                    <td>{{ $contrato->codTipoContrato }}</td>
                    <td>{{ $contrato->salario }}</td>
                    <td>{{ $contrato->fechaInicio }}</td>
                    <td>{{ $contrato->fechaFin ?? 'Indefinido' }}</td>
                    <td>{{ $contrato->jornadaLaboral }}</td>
                    <th>
                        <a href="{{ route('contrato.create') }}" class="btn">Crear contrato</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
