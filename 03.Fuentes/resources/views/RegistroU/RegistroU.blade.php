@extends('layouts.app')
@section('content_title')
Nuevo Registro Usuario
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroU\index">Registro Usuario</a></li>
<li class="active">Nuevo</li>
@stop

@section('content')

<div class="alert alert-success alert-dismissable">
    <a href="\RegistroV\save" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Cuenta de usuario creada con éxito</strong>
</div>

<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error en la creación de cuenta de usuario.</strong>
    <strong>No todos los campos han sido debidamente diligenciados</strong>
</div>

<form action="/RegistroU/save" method="post">

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
                <h3><label for="correo" class="label label-primary">Email</label></h3>
            </div>
            <div class="col-md-4">
                <input type="email" class="form-control" id="correo">
            </div>

    </div>
    </div>





 <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="usuario" class="label label-primary">Usuario</label></h3>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="usuario">
            </div>

    </div>
    </div>


      <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="tipo_cuenta" class="label label-primary">Tipo doc</label></h3>
            </div>
            <div class="col-md-8">
                <select class="form-control" id="tipo_cuenta">
                    <option value="1">Administrador</option>
                    <option value="2">Operario</option>
                </select>
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
