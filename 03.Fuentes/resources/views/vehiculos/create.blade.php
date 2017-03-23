@extends('layouts.app')
@section('content_title')
Nuevo Registro Vehiculo
@stop

@section('breadcrumb')
@section('content')

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif


{!! Form::open(['route' => 'vehiculos.store']) !!}
{!! Form::hidden('user_id', 2) !!}
<form action="/vehiculos/create" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                {!! Form::date('f_ingreso', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Fecha ingreso vehiculo']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('placaV', null, ['class' => 'form-control', 'placeholder' => 'Placa vehiculo']) !!}
            </div>
            <div class="form-group">
                {!! Form::select('marcaV', [''=>'Seleccione marca del vehiculo','Fiat' => 'Fiat', 'Toyota' => 'Toyota', 'Mazda' => 'Mazda','Renoult' => 'Renoult', 'Ford' => 'Ford','BMW' => 'BMW'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('modeloV', null, ['class' => 'form-control', 'placeholder' => 'Modelo']) !!}
            </div>
            <div class="form-group">
                <div class="radio">
                    <label>{!! Form::radio('colorV', 'Blanco') !!}Femenino</label>
                    <label>{!! Form::radio('colorV', 'Azul') !!}Masculino</label>
                    <label>{!! Form::radio('colorV', 'Rojo') !!}Femenino</label>
                    <label>{!! Form::radio('colorV', 'Negro') !!}Masculino</label>
                    <label>{!! Form::radio('colorV', 'Gris') !!}Femenino</label>
                    <label>{!! Form::radio('colorV', 'Verde') !!}Masculino</label>
                    <label>{!! Form::radio('colorV', 'Amarillo') !!}Femenino</label>
                    <label>{!! Form::radio('colorV', 'Otro') !!}Masculino</label>
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
            </div>
        </div>

    </div>

    {!! Form::close() !!}
</form>
@stop
