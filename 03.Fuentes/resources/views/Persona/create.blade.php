@extends('layouts.app')

@section('content_title')
Nuevo Registro Persona
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\personas\index') }}">Registro Persona</a></li>
<li class="active">Nuevo</li>
@stop

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

{!! Form::open(['route' => 'personas.store']) !!}
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('documento', 'Documento', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('documento', null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('nombre', 'Nombre', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('nombre', null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('apellido', 'Apellido', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('apellido', null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('genero', 'Genero', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>
                <select class="form-control" name="genero">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('telefono', 'Teléfono', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('telefono', null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
            {!! Form::submit('Registrar', ['class' => 'btn btn-default']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::reset('Cancelar', ['class' => 'btn btn-default']) !!}
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
{!! Form::close() !!}
@stop
