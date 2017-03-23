@extends('layouts.app')

@section('content_title')
Editar Opciones Menú Por Perfil
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('\Perfils\index') }}">Perfil</a></li>
<li class="active">Editar Opciones Menu</li>
@stop

@section('content')
@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <h3>{!! Form::label('perfil1', 'Perfil', ['class' => 'label label-default']) !!} </h3>
        </div>
        <div class="col-md-4">
            <h3>{!! Form::label('perfil2', $data->nombre, ['class' => 'form-control']) !!} </h3>
        </div>
    </div>
</div>
{!! Form::model($data, [
'method' => 'PUT',
'route' => ['opcionperfil.update', $data->id]
]) !!}
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Menu</th>
            <th>Sub - Menu</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($opciones as $opcion)
        <tr>
            <td class="col-md-5">
                {{ $opcion->menu }}
            </td>
            <td class="col-md-5">
                {{ $opcion->submenu }}
            </td>
            <td class="col-md-2">
                {{ Form::checkbox('op'.$opcion->id, $opcion->id, $data->opcions->contains($opcion)) }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
