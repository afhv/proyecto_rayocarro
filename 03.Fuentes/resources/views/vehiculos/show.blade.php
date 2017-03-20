@extends('layouts.app')
@section('content_title')
Consulta Registros Vechiculo
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\vehiculos\index">Registro Vehiculo</a></li>
<li class="active">Listar Vehiculos</li>
@stop


@section('content')

<h1>{{ $data->name }}</h1>
<p class="lead">Vehiculo</p>
<table class="table table-striped table-hover">
    <tr>
        <td style="width: 200px;">Email</td>
        <td>{{ $data->email }}</td>
    </tr>
    <tr>
        <td>Created At</td>
        <td>{{ $data->created_at }}</td>
    </tr>
    <tr>
        <td>Updated At</td>
        <td>{{ $data->updated_at }}</td>
    </tr>
</table>
<hr>
<a href="{{ route('vehiculos.edit', $data->id) }}" class="btn btn-primary">Edit
    User</a>
{!! Form::open([
'method' => 'DELETE',
'route' => ['users.destroy', $data->id]
]) !!}
{!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
<a href="{{ route('vehiculos.index') }}" class="btn btn-info">Back to all users</a>
@stop
