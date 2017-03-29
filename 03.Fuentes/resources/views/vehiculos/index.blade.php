@extends('layouts.app')

@section('content_title')
Listado Vehiculos
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li class="active">Vehiculos</li>
@stop


@section('content')
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Conductores</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $vehiculo)
        <tr>
            <td class="col-md-8">
                {{ $vehiculo->placaV }}
            </td>
            <td class="col-md-8">
                {{ $vehiculo->marcaV }}
            </td>
            <td class="col-md-8">

                {{ $vehiculo->modeloV }}
            </td>
            @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Vehiculos','Conductores'))
            <td>
                <a href="{{ route('conductorsC.edit', $vehiculo->id) }}" class="btn btn-primary">Conductores</a>
            </td>
            @else
            <td>
            </td>
            @endif
            <td class="col-md-4">
                <table>
                    <tr>
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Vehiculos','Ver'))
                        <td>
                            <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="btn btn-primary">Ver</a>
                        </td>
                        @endif
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Vehiculos','Editar'))
                        <td>
                            <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                        @endif
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Vehiculos','Eliminar'))
                        <td>
                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['vehiculos.destroy', $vehiculo->id]
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
