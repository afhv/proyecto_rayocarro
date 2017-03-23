@extends('layouts.app')

@section('content_title')
Listado Personas
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li class="active">Personas</li>
@stop


@section('content')
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
        <tr>
            <td class="col-md-3">
                {{ $persona->documento }}
            </td>
            <td class="col-md-3">
                {{ $persona->nombre }}
            </td>
            <td class="col-md-3">
                {{ $persona->apellido }}
            </td>S
            <td class="col-md-3">
                <table>
                    <tr>
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Personas','Ver'))
                        <td>
                            <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-primary">Ver</a>
                        </td>
                        @endif
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Personas','Editar'))
                        <td>
                            <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                        @endif
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Personas','Eliminar'))
                        <td>
                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['personas.destroy', $persona->id]
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
