@extends('layouts.app')


@section('content_title')
Consulta Registros Entrada / Salida
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroES\index">Registro E/S</a></li>
<li class="active">Consulta</li>
@stop

@section('content')

<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>No existen registros para el vehículo con placas XXX000</strong>
</div>

<form action="/RegistroES/find" method="get">
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="placa" class="label label-primary">Placa</label></h3>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="placa">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success">Buscar</button>
            </div>
        </div>
    </div>
</form>
@stop
