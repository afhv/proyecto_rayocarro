@extends('layouts.app')

@section('content_title')
Editar Registro Usuario
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\Perfils\index') }}">Perfil</a></li>
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
'route' => ['perfils.update', $data->id]
]) !!}
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('nombre', 'Perfil', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('nombre', $data->nombre, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
