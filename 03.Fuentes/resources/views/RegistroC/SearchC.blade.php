@extends('layouts.app')


@section('content_title')
Consulta Registros Entrada / Salida
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroES\index">Consultar Conductor</a></li>
<li class="active">Modificar</li>
@stop


@section('content')

<div class="alert alert-success alert-dismissable">
    <a href="\RegistroES\new" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Consulte el conductor a modificar</strong>
</div>

<form action="/RegistroES/find" method="get">
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="nro_doc" class="label label-primary">Documento</label></h3>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="nro_doc">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success">Buscar</button>
            </div>
        </div>
    </div>
</form>
@stop
