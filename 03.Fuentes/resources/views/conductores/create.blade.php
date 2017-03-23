@extends('layouts.app')
@section('content_title')
Nuevo Registro Conductor
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\conductores\index') }}">Registro Conductor</a></li>
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


{!! Form::open(['route' => 'conductores.store']) !!}
{!! Form::hidden('vehiculo_id', 1) !!}
<form action="/conductores/create" method="post">


    <div class="form-group">
        <div class="row">

            <div class="col-md-3">
                <h3>{!! Form::label('f_registroC', 'Fecha registro', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-4">
                <h3>{!! Form::date('f_registroC', \Carbon\Carbon::now()) !!} </h3>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">

            <div class="col-md-1">
                <h3>{!! Form::label('nombreC', 'Nombre', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-2">
                <h3>{!! Form::text('nombreC', null, ['class' => 'form-control']) !!} </h3>
            </div>

            <div class="col-md-3">
                <h3>{!! Form::label('apellidoC', 'Apellidos', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-4">
                <h3>{!! Form::text('apellidoC', null, ['class' => 'form-control']) !!} </h3>
            </div>


        </div>
    </div>







    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3>{!! Form::label('tipo_doc', 'Numero', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-3">
                <h3>{!! Form::select('tipo_doc', ['CC' => 'CC', 'TI' => 'TI', 'CE' => 'CE'], null, ['class' => 'form-control']) !!} </h3>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">

            <div class="col-md-3">
                <h3>{!! Form::label('numero_doc', 'Numero', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-4">
                <h3>{!! Form::number('numero_doc', null, ['class' => 'form-control']) !!} </h3>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3>{!! Form::label('generoC', 'Genero', ['class' => 'label label-default']) !!} </h3>
            </div>
            <div class="col-md-3">
                <h3>{!! Form::radio('generoC', 'Femenino', ['class' => 'form-control']) !!}</h3><br>
                <h3>{!! Form::radio('generoC', 'Masculino',['class' => 'form-control']) !!}</h3>
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
