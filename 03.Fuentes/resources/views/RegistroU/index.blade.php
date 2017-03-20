@extends('layouts.app')

@section('content_title')
Listado Usuarios
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li class="active">Usuarios</li>
@stop

@section('content')
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Perfil</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $user)
        <tr>
            <td class="col-md-3">
                {{ $user->name }}
            </td>
            <td class="col-md-3">
                {{ $user->email }}
            </td>
            <td class="col-md-3">
                {{ $user->Perfil->nombre }}
            </td>
            <td class="col-md-3">
                <table>
                    <tr>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Ver</a>
                        </td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['users.destroy', $user->id]
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



<!--@foreach($list as $user)
<h3>{{ $user->name }}</h3>
<p>{{ $user->email }}</p>
<p>
    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">View
        User</a>
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit
        User</a>
    {!! Form::open([
    'method' => 'DELETE',
    'route' => ['users.destroy', $user->id]
    ]) !!}
    {!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>
@endforeach-->
@stop
