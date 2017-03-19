@extends('layouts.app')

@section('content_title')
Nuevo Registro Usuario
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\RegistroU\index') }}">Registro Usuario</a></li>
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

<!-- <div class="alert alert-success alert-dismissable">
<a href="\RegistroV\save" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Cuenta de usuario creada con éxito</strong>
</div>

<div class="alert alert-danger alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Error en la creación de cuenta de usuario.</strong>
<strong>No todos los campos han sido debidamente diligenciados</strong>
</div> -->

{!! Form::open(['route' => 'users.store']) !!}
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('name', 'Nombre', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('name', null, ['class' => 'form-control']) !!} </h3>
        </div>
        <div class="col-md-2">
            <h3>{!! Form::label('lastName', 'Apellido', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-3">
            <h3>{!! Form::text('lastName', null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('email', 'Correo electrónico', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('email', null, ['class' => 'form-control']) !!} </h3>
        </div>

    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('password', 'Contraseña', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::password('password', null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('perfil', 'Perfil', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::select('perfil', $perfiles, null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>


<!--<div class="form-group">
<div class="row">
<div class="col-md-3">
<h3><label for="tipo_cuenta" class="label label-default">Tipo</label></h3>
</div>
<div class="col-md-4">
<h3><select class="form-control" id="tipo_cuenta">
<option value="1">Administrador</option>
<option value="2">Operario</option>
</select></h3>
</div>
</div>
</div> -->



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
