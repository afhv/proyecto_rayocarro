@extends('layouts.app')

@section('content_title')
Detalles Persona
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\personas\index') }}">Persona</a></li>
<li class="active">Ver</li>
@stop

@section('content')
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('documento1', 'Documento', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('documento2', $data->documento, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('nombre1', 'Nombre', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('nombre2', $data->nombre, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('apellido1', 'Apellido', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('apellido2', $data->apellido, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('genero1', 'Genero', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('genero2', ($data->genero == 'M') ? 'Masculino' : 'Femenino', ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('telefono1', 'Teléfono', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('telefono2', $data->telefono, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('creationDate1', 'Fecha Creación', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('creationDate2', $data->created_at, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('modifDate1', 'Fecha Modificación', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('modifDate2', $data->updated_at, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<a href="{{ route('personas.index') }}" class="btn btn-info">Regresar</a>


@stop
