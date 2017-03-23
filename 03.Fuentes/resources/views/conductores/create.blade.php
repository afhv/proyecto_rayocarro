@extends('layouts.app')
@section('content_title')
Nuevo Registro Conductor
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


{!! Form::open(['route' => 'conductores.store']) !!}
{!! Form::hidden('vehiculo_id', 1) !!}
<form action="/conductores/create" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                {!! Form::date('f_registroC', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Fecha ingreso vehiculo']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('nombreC', null, ['class' => 'form-control', 'placeholder' => 'Nombre conductor']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('apellidoC', null, ['class' => 'form-control', 'placeholder' => 'Apellidos']) !!}
            </div>
            <div class="form-group">
                {!! Form::select('tipo_doc', [''=>'Seleccione Tipo de documento','CC' => 'CC', 'TI' => 'TI', 'CE' => 'CE'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('numero_doc', null, ['class' => 'form-control', 'placeholder' => 'Numero de documento']) !!}
            </div>
            <div class="form-group">
                <select name="vehiculo_id" class="form-control">
                   <option value="">Seleccione el vehiculo...</option>
                    @foreach($vehiculos as $v)
                    <option value="{{$v->id}}">
                        {{$v->placaV}} - {{$v->marcaV}}
                    </option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <div class="radio">
                    <label>{!! Form::radio('generoC', 'Femenino') !!}Femenino</label>
                    <label>{!! Form::radio('generoC', 'Masculino') !!}Masculino</label>
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
