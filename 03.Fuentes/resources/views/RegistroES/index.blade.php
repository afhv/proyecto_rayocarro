@extends('layouts.app')

@section('content_title')
Listado Registros E/S
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li class="active">Registro E/S</li>
@stop


@section('content')
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Tipo</th>
            <th>Conductor</th>
            <th>Vehiculo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td class="col-md-3">
                {{ $registro->fecha }}
            </td>
            <td class="col-md-1">
                {{ ($registro->tipo == 'E') ? 'Entrada' : 'Salida' }}
            </td>
            <td class="col-md-4">
                {{ $registro->conductor->persona->nombre.' '.$registro->conductor->persona->apellido }}
            </td>
            <td class="col-md-1">
                {{ $registro->conductor->vehiculo->placaV }}
            </td>
            <td class="col-md-3">
                <table>
                    <tr>
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Registro E/S','Ver'))
                        <td>
                            <a href="{{ route('registros.show', $registro->id) }}" class="btn btn-primary">Ver</a>
                        </td>
                        @endif
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Registro E/S','Editar'))
                        <td>
                            <a href="{{ route('registros.edit', $registro->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                        @endif
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Registro E/S','Eliminar'))
                        <td>
                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['registros.destroy', $registro->id]
                            ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                        @endif
                    </tr>
                </table>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
