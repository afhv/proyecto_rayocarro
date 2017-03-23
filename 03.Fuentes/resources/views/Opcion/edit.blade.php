@extends('layouts.app')

@section('content_title')
Editar Opción Menu
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\Opcions\index') }}">Opción Menu</a></li>
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
'route' => ['opcions.update', $data->id]
]) !!}
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('menu', 'Menu', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('menu', $data->menu, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('submenu', 'Sub - Menu', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('submenu', $data->submenu, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('url', 'Url', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('url', $data->url, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
