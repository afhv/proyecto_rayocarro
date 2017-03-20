@extends('layouts.app')
@section('content')
<h1>{{ $data->placaV }}</h1>
<p class="lead">Vehiculo</p>
<table class="table table-striped table-hover">
    <tr>
        <td style="width: 200px;">Marca</td>
        <td>{{ $data->marcaV }}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Modelo</td>
        <td>{{ $data->modeloV }}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Color</td>
        <td>{{ $data->colorV }}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Fecha Ingreso</td>
        <td>{{ $data->f_ingreso }}</td>
    </tr>


</table>
<hr>
<a href="{{ route('vehiculos.edit', $data->id) }}" class="btn btn-primary">Edit
    User</a>
{!! Form::open([
'method' => 'DELETE',
'route' => ['vehiculos.destroy', $data->id]
]) !!}
{!! Form::submit('Delete this vehicle?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
<a href="{{ url('\vehiculos\index')}}" class="btn btn-info">Back to all vehicles</a>
@stop


