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
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Conductor</th>
                <th>Tipo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01/01/2017</td>
                <td>11:45</td>
                <td>Pepito Perez</td>
                <td>Entrada</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>02/01/2017</td>
                <td>10:15</td>
                <td>Lucia Suarez</td>
                <td>Salida</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>03/01/2017</td>
                <td>16:45</td>
                <td>Pepito Perez</td>
                <td>Entrada</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>03/01/2017</td>
                <td>17:20</td>
                <td>Pepito Perez</td>
                <td>Salida</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@stop
