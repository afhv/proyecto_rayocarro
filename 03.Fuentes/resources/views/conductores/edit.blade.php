@extends('layouts.app')
@section('content_title')
Actualizar información de Conductor
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\conductores\index">Editar Conductor</a></li>
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
'route' => ['conductores.update', $data->id]
]) !!}
<div class="form-group">

    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('f_registroC', 'Fecha Ingreso', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::date('f_registroC', $data->f_registroC, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('nombreC', 'Nombre', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('nombreC', $data->nombreC, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('apellidoC', 'Apellido', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('apellidoC', $data->apellidoC, ['class' => 'form-control']) !!} </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('tipo_doc', 'Tipo documento', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::select('tipo_doc', ['CC' => 'CC', 'TI' => 'TI', 'CE' => 'CE'], null, ['class' => 'form-control']) !!}</h4>
        </div>
    </div>



    <div class="row">
        <div class="col-md-3">
            <h4>{!! Form::label('numero_doc', 'Modelo', ['class' => 'label label-default']) !!} </h4>
        </div>
        <div class="col-md-4">
            <h4>{!! Form::text('numero_doc', $data->numero_doc, ['class' => 'form-control']) !!} </h4>
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



</div>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
