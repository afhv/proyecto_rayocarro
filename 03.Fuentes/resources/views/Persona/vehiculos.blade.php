@extends('layouts.app')

@section('content_title')
Listado Vehiculos por Conductor
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('personas/') }}">Conductores</a></li>
<li class="active">Vehiculos por Conductor</li>
@stop


@section('content')
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('conductor1', 'Conductor', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-7">
            <h3>{!! Form::label('conductor2', $data->nombre.' '.$data->apellido.' ('.$data->documento.')', ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
{!! Form::model($data, [
'method' => 'PUT',
'route' => ['conductorsV.update',$data->id]
]) !!}
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
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
            <td>
                {{ Form::checkbox('veh_'.$vehiculo->id, $vehiculo->id, $data->vehiculos->contains($vehiculo)) }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
