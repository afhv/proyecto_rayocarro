@extends('layouts.app')
@section('content_title')
Nuevo Registro Vehiculo
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\vehiculos\index') }}">Registro Vehiculo</a></li>
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


{!! Form::open(['route' => 'vehiculos.store']) !!}


<form action="/vehiculos/create" method="post">


    <div class="form-group">
        <div class="row">

            <div class="col-md-3">
                <h3>{!! Form::label('f_ingreso', 'Fecha Ingreso', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-4">
                <h3>{!! Form::date('f_ingreso', \Carbon\Carbon::now()) !!} </h3>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">

            <div class="col-md-1">
                <h3>{!! Form::label('placaV', 'Placa', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-2">
                <h3>{!! Form::text('placaV', null, ['class' => 'form-control']) !!} </h3>
            </div>

            <div class="col-md-3">
                <h3>{!! Form::label('marcaV', 'Marca', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-4">
                <h3>{!! Form::text('marcaV', null, ['class' => 'form-control']) !!} </h3>
            </div>


        </div>
    </div>





    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3>{!! Form::label('modeloV', 'Modelo', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-3">
                <h3>{!! Form::text('modeloV', null, ['class' => 'form-control']) !!} </h3>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3>{!! Form::label('colorV', 'Color', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-3">
                <h3>{!! Form::text('colorV', null, ['class' => 'form-control']) !!} </h3>
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
</form>


@stop
