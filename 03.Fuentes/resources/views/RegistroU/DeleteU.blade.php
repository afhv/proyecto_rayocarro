@extends('layouts.app')
@section('content_title')
Consulta Registros Usuarios
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroU\index">Eliminar Usuario</a></li>
<li class="active">Eliminar</li>
@stop


@section('content')
<div class="alert alert-success alert-dismissable">
    <a href="\RegistroU\save" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Consulte la cuenta de usuario a eliminar</strong>
</div>
<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>No existen la cuenta del usuario consultado</strong>
</div>

<form action="/RegistroU/find" method="get">
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <h3><label for="nombreU" class="label label-primary">Usuario</label></h3>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="nombreU">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success">Buscar</button>
            </div>
        </div>
    </div>
</form>
@stop
