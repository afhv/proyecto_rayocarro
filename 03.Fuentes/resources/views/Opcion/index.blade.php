@extends('layouts.app')

@section('content_title')
Listado Opciones Menu
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li class="active">Opción Menu</li>
@stop


@section('content')
<a href="{{ route('opcions.create') }}" class="btn btn-info">Nuevo</a>
<br>
<br>
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Menu</th>
            <th>Sub  - Menu</th>
            <th>URL</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($opciones as $opcion)
        <tr>
           <td class="col-md-2">
                {{ $opcion->menu }}
            </td>
            <td class="col-md-2">
                {{ $opcion->submenu }}
            </td>
            <td class="col-md-4">
                {{ $opcion->url }}
            </td>
            <td class="col-md-4">
                <table>
                    <tr>
                        <td>
                            <a href="{{ route('opcions.show', $opcion->id) }}" class="btn btn-primary">Ver</a>
                        </td>
                        <td>
                            <a href="{{ route('opcions.edit', $opcion->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['opcions.destroy', $opcion->id]
                            ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
