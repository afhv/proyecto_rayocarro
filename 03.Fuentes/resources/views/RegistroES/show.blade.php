@extends('layouts.app')

@section('content_title')
Detalles Registro E/S
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('registros/') }}">Registro E/S</a></li>
<li class="active">Ver</li>
@stop

@section('content')
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('vehiculo1', 'Vehiculo', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-6">
            <h4>{!! Form::label('vehiculo2', $data->conductor->vehiculo->placaV, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('conductor1', 'Conductor', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-6">
            <h4>{!! Form::label('conductor2', $data->conductor->persona->nombre.' '.$data->conductor->persona->apellido, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('tipo1', 'Conductor', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-6">
            <h4>{!! Form::label('tipo2', ($data->tipo == 'E') ? 'Entrada' : 'Salida' , ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('usuario1', 'Registrado Por', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-6">
            <h4>{!! Form::label('usuario2', $data->usuario->name , ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('creationDate1', 'Fecha Creación', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-6">
            <h4>{!! Form::label('creationDate2', $data->created_at, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('modifDate1', 'Fecha Modificación', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-6">
            <h4>{!! Form::label('modifDate2', $data->updated_at, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>

<a href="{{ route('registros.index') }}" class="btn btn-info">Regresar</a>
@stop
