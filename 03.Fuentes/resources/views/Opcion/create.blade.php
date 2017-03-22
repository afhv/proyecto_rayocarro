@extends('layouts.app')

@section('content_title')
Nuevo Registro Opción Menu
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\opcions\index') }}">Opción Menu</a></li>
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

{!! Form::open(['route' => 'opcions.store']) !!}
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('menu', 'Menu', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('menu', null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('submenu', 'Sub - Menu', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('submenu', null, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('url', 'Url', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::text('url', null, ['class' => 'form-control']) !!} </h3>
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
