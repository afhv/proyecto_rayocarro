@extends('layouts.app')


@section('content_title')
Nuevo Registro Conductores
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroC\index">Registro Conductor</a></li>
<li class="active">Nuevo</li>
@stop

@section('content')

<div class="alert alert-success alert-dismissable">
    <a href="\RegistroC\save" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Conductor añadido con éxito</strong>
</div>

<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>No se puede registrar el Conductor</strong>
    <strong>No todos los campos han sido debidamente diligenciados</strong>
</div>

<form action="/RegistroC/save" method="post">

    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="fecha" class="label label-primary">Fecha</label></h3>
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" id="fecha">
            </div>

    </div>



    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="nombre" class="label label-primary">Nombre</label></h3>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nombre">
            </div>
            <div class="col-md-2">
                <h3><label for="apellido" class="label label-primary">Apellido</label></h3>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="apellido">
            </div>
        </div>
    </div>


        <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="tipo_doc" class="label label-primary">Tipo doc</label></h3>
            </div>
            <div class="col-md-8">
                <select class="form-control" id="tipo_doc">
                    <option value="1">C.C.</option>
                    <option value="2">N.I.T.</option>
                    <option value="3">D.N.I.</option>
                    <option value="4">C.E.</option>
                </select>
            </div>
        </div>
    </div>


        <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="nro_doc" class="label label-primary">Numero</label></h3>
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control" id="nro_doc">
            </div>
            </div>
        </div>



    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="genero" class="label label-primary">Genero</label></h3>
            </div>
            <div class="col-md-10">
                <div class="radio-inline">
                    <label><input type="radio" name="genero" value="H">Hombre</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="genero" value="M">Mujer</label>
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
