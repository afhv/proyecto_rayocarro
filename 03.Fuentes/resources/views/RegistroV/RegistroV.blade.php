@extends('layouts.app')
@section('content_title')
Nuevo Registro Vehiculo
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroV\index">Registro Conductor</a></li>
<li class="active">Nuevo</li>
@stop

@section('content')

<div class="alert alert-success alert-dismissable">
    <a href="\RegistroV\save" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Conductor añadido con éxito</strong>
</div>

<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>No se puede refistrar el Conductor</strong>
    <strong>No todos los campos han sido debidamente diligenciados</strong>
</div>

<form action="/RegistroV/save" method="post">

    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="placa" class="label label-primary">Placa</label></h3>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="placa">
            </div>

    </div>
    </div>


        <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="marca" class="label label-primary">Marca</label></h3>
            </div>
            <div class="col-md-8">
                <select class="form-control" id="tipo_doc">
                    <option value="1">Mazda</option>
                    <option value="2">Chevrolet</option>
                    <option value="3">VW</option>
                    <option value="4">Audi</option>
                    <option value="5">Ford</option>
                    <option value="6">Renoult</option>
                </select>
            </div>
        </div>
    </div>



 <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="modelo" class="label label-primary">Modelo</label></h3>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="modelo">
            </div>

    </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="color" class="label label-primary">Color</label></h3>
            </div>
            <div class="col-md-10">
                <div class="radio-inline">
                    <label><input type="radio" name="color" value="B">Blanco</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="color" value="N">Negro</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="color" value="G">Gris</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="color" value="R">Rojo</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="color" value="A">Azul</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="color" value="V">Verde</label>
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
