@extends('layouts.app')

@section('content_title')
Detalles Opción Menu
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\Opcions\index') }}">Opción Menu</a></li>
<li class="active">Ver</li>
@stop

@section('content')
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('menu1', 'Menu', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('menu2', $data->menu, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('submenu1', 'Sub - Menu', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('submenu2', $data->submenu, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('url1', 'Url', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('url2', $data->url, ['class' => 'form-control']) !!} </h3>
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

<a href="{{ route('opcions.index') }}" class="btn btn-info">Regresar</a>
@stop
