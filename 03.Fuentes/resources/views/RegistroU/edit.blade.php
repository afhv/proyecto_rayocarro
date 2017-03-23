@extends('layouts.app')

@section('content_title')
Editar Registro Usuario
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\users\index') }}">Usuario</a></li>
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
'route' => ['users.update', $data->id]
]) !!}
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('name', 'Nombre', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('name', null, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<!-- <div class="form-group">
<div class="row">
<div class="col-md-3">
<h3>{!! Form::label('lastName', 'Apellido', ['class' => 'label label-default']) !!} </h3>
</div>
<div class="col-md-4">
<h3>{!! Form::text('lastName', null, ['class' => 'form-control']) !!} </h3>
</div>
</div>
</div> -->
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('email', 'Correo electrónico', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('email', null, ['class' => 'form-control']) !!} </h4>
        </div>

    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('password', 'Contraseña', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::password('password', null, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('password_confirmation', 'Confirmación contraseña', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('perfil', 'Perfil', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4><select class="form-control" name="perfil_id">
                @foreach($perfiles as $perfil)
                <option value="{{$perfil->id}}" {{ ($data->perfil_id == $perfil->id)?'selected' : '' }}>{{$perfil->nombre}}</option>
                @endforeach
                </select>
            </h4>
        </div>
    </div>
</div>

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
