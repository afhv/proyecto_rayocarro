@extends('layouts.app')

@section('content_title')
Listado Conductores por Vehiculo
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('vehiculos/') }}">Vehiculos</a></li>
<li class="active">Conductores por Vehiculo</li>
@stop


@section('content')
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('vehiculo1', 'Vehiculo', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-5">
            <h3>{!! Form::label('vehiculo2', $data->placaV, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
{!! Form::model($data, [
'method' => 'PUT',
'route' => ['conductorsC.update', $data->id]
]) !!}
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
            <td class="col-md-4">
                {{ $persona->nombre }}
            </td>
            <td class="col-md-4">
                {{ $persona->apellido }}
            </td>
            <td class="col-md-1">
                {{ Form::checkbox('per_'.$persona->id, $persona->id, $data->conductors->contains($persona)) }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
