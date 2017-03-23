@extends('layouts.app')

@section('content_title')
Editar Registro Persona
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\Persona\index') }}">Persona</a></li>
<li class="active">Editar</li>
@stop

@section('content')
@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
{!! Form::model($data, [
'method' => 'PUT',
'route' => ['personas.update', $data->id]
]) !!}
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('documento', 'Documento', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('documento', $data->documento, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('nombre', 'Nombre', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('nombre', $data->nombre, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('apellido', 'Apellido', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('apellido', $data->apellido, ['class' => 'form-control']) !!} </h3>
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
                    <option value="M" {{ ($data->genero == 'M')?'selected' : '' }}>Masculino</option>
                    <option value="F" {{ ($data->genero == 'F')?'selected' : '' }}>Femenino</option>
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
            <h3>{!! Form::text('telefono', $data->telefono, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
