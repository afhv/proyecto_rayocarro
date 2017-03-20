@extends('layouts.app')

@section('content_title')
Detalle Usuario
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\users\index') }}">Usuario</a></li>
<li class="active">Ver</li>
@stop

@section('content')
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('name1', 'Nombre', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::label('name2', $data->name, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('email1', 'Correo Electrónico', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::label('email2', $data->email, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('name1', 'Perfil', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::label('name2', $data->perfil->nombre, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('creationDate1', 'Fecha Creación', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::label('creationDate2', $data->created_at, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('modifDate1', 'Fecha Modificación', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::label('modifDate2', $data->updated_at, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>

<a href="{{ route('users.index') }}" class="btn btn-info">Regresar</a>
@stop
