@extends('layouts.app')


@section('content_title')
Consulta Registros Entrada / Salida
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroES\index">Registro Conductor</a></li>
<li class="active">Listar Conductores</li>
@stop


@section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Fecha Entrada</th>
                <th>Conductor</th>
                <th>Numero documento</th>
                <th>Placa</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01/01/2017</td>
                <td>Pepito Perez</td>
                <td>1054</td>
                <td>UET456</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>02/01/2017</td>
                <td>Lucia Suarez</td>
                <td>1054</td>
                <td>UET457</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>03/01/2017</td>
                <td>Pepito Perez</td>
                <td>1054</td>
                <td>UET459</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>03/01/2017</td>
                <td>Pepito Perez</td>
                <td>1054</td>
                <td>UET450</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@stop
