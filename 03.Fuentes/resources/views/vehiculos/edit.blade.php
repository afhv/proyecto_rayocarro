@extends('layouts.app')
@section('content_title')
Consulta Registros Vehiculo
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\vehiculos\index">Consultar Vehiculo</a></li>
<li class="active">Modificar</li>
@stop

@section('content')
<h1>Edit Vehicle</h1>
<p class="lead">Edit this vehicle below.
    <a href="{{ route('vehiculos.index') }}">Go back to all vehicles.</a></p>
<hr>
@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
{!! Form::model($data, [
'method' => 'PUT',
'route' => ['vehiculos.update', $data->id]
]) !!}
<div class="form-group">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Update Vehicle', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
