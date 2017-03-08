@extends('layouts.app')


@section('content_title')
Nuevo Registro Entrada / Salida
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroES\index">Registro E/S</a></li>
<li class="active">Nuevo</li>
@stop

@section('content')

<div class="alert alert-success alert-dismissable">
    <a href="\RegistroES\new" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Registro realizado con éxito</strong>
</div>

<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Los datos ingresados no son válidos, corrijalos e intente de nuevo</strong>
    <strong>No puede registrar la salida de un vehículo que no tiene registro de ingreso</strong>
    <strong>No puede registrar el ingreso de un vehículo que ya tiene registro de ingreso</strong>
    <strong>El vehículo con placas XXX000 no existe en el sistema</strong>
</div>

<form action="/RegistroES/save" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="placa" class="label label-primary">Placa</label></h3>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="placa">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-info">Adicionar</button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="conductor" class="label label-primary">Conductor</label></h3>
            </div>
            <div class="col-md-8">
                <select class="form-control" id="conductor">
                    <option value="1">Conductor 1</option>
                    <option value="2">Conductor 2</option>
                    <option value="3">Conductor 3</option>
                    <option value="4">Conductor 4</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-info">Adicionar</button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="fecha" class="label label-primary">Fecha</label></h3>
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" id="fecha">
            </div>
            <div class="col-md-2">
                <h3><label for="hora" class="label label-primary">Hora</label></h3>
            </div>
            <div class="col-md-4">
                <input type="time" class="form-control" id="hora">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="tipo" class="label label-primary">Tipo</label></h3>
            </div>
            <div class="col-md-10">
                <div class="radio-inline">
                    <label><input type="radio" name="tipo" value="E">Entrada</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="tipo" value="S">Salida</label>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-default">Registrar</button>
            </div>
            <div class="col-md-2">
                <button type="clear" class="btn btn-default col-md4">Cancelar</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</form>
@stop
