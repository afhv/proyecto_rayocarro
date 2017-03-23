@extends('layouts.app')

@section('content_title')
Listado Perfiles
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li class="active">Perfiles</li>
@stop


@section('content')
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Perfil</th>
            <th>Opciones</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($perfiles as $perfil)
        <tr>
            <td class="col-md-8">
                {{ $perfil->nombre }}
            </td>
            @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Perfiles','Opciones'))
            <td>
                <a href="{{ route('opcionperfil.edit', $perfil->id) }}" class="btn btn-primary">Opciones</a>
            </td>
            @else
            <td>
            </td>
            @endif
            <td class="col-md-4">
                <table>
                    <tr>
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Perfiles','Ver'))
                        <td>
                            <a href="{{ route('perfils.show', $perfil->id) }}" class="btn btn-primary">Ver</a>
                        </td>
                        @endif
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Perfiles','Editar'))
                        <td>
                            <a href="{{ route('perfils.edit', $perfil->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                        @endif
                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Perfiles','Eliminar'))
                        <td>
                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['perfils.destroy', $perfil->id]
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
