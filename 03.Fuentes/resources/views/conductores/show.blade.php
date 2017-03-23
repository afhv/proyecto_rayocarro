@extends('layouts.app')
@section('content')
<h1>{{ $data->numero_doc }}</h1>
<p class="lead">Conductor</p>
<table class="table table-striped table-hover">
    <tr>
        <td style="width: 200px;">Fecha de registro</td>
        <td>{{ $data->f_registroC }}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Nombre</td>
        <td>{{ $data->nombreC }}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Apellido</td>
        <td>{{ $data->apellidoC }}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Numero de documento</td>
        <td>{{ $data->numero_doc }}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Genero</td>
        <td>{{ $data->generoC }}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Vehiculo</td>
        <td>{{ $data->vehiculo_id }}</td>
    </tr>

</table>
<hr>
<a href="{{ route('conductores.edit', $data->id) }}" class="btn btn-primary">Edit
    User</a>
{!! Form::open([
'method' => 'DELETE',
'route' => ['conductores.destroy', $data->id]
]) !!}
{!! Form::submit('Delete this driver?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
<a href="{{ url('\conductores\index')}}" class="btn btn-info">Back to all drivers</a>
@stop
