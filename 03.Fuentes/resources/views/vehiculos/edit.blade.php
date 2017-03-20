@extends('layouts.app')
@section('content_title')
Actualizar información de Vehiculo
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\vehiculos\index">Editar Vehiculo</a></li>
<li class="active">Modificar</li>
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
'route' => ['vehiculos.update', $data->id]
]) !!}
<div class="form-group">

       <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('f_ingreso', 'Fecha Ingreso', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::date('f_ingreso', $data->f_ingreso, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('placaV', 'Placa', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('placaV', $data->placaV, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('marcaV', 'Marca', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('marcaV', $data->marcaV, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('modeloV', 'Modelo', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('modeloV', $data->modeloV, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('colorV', 'Color', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('colorV', $data->colorV, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>
</div>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
