@extends('layouts.app')
@section('content_title')
Consulta Registros Vechiculo
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroV\index">Registro Conductor</a></li>
<li class="active">Listar Conductores</li>
@stop


@section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>UET456</td>
                <td>Mazda</td>
                <td>XXXX</td>
                <td>UET456</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>UET456</td>
                <td>Mazda</td>
                <td>XXXX</td>
                <td>UET456</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>UET456</td>
                <td>Mazda</td>
                <td>XXXX</td>
                <td>UET456</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>UET456</td>
                <td>Mazda</td>
                <td>XXXX</td>
                <td>UET456</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>UET456</td>
                <td>Mazda</td>
                <td>XXXX</td>
                <td>UET456</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@stop
