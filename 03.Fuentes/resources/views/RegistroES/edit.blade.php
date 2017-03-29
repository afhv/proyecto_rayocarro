@extends('layouts.app')

@section('content_title')
Editar Registro E / S
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="{{ url('registros/') }}">Registro E/S</a></li>
<li class="active">Editar</li>
@stop

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

{!! Form::model($data, [
'method' => 'PUT',
'route' => ['registros.update', $data->id]
]) !!}
<div class="form-group">
    <div class="row">
        <div class="col-md-2">
            <h3><label for="placa" class="label label-primary">Placa</label></h3>
        </div>
        <div class="col-md-8">
            <h3>
                {!! Form::select('vehiculo', $vehiculos, $data->conductor->vehiculo->id, ['id' => 'vehiculo', 'class' => 'form-control', 'placeholder' => '-- Seleccione un vehiculo --']) !!}
            </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-2">
            <h3><label for="conductor" class="label label-primary">Conductor</label></h3>
        </div>
        <div class="col-md-8">
            <h3>
                {!! Form::select('conductor', [''], $data->conductor->persona->id, ['id' => 'conductor', 'class' => 'form-control']) !!}
            </h3>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-2">
            <h3><label for="fecha" class="label label-primary">Fecha</label></h3>
        </div>
        <div class="col-md-4">
            <h3>
                {!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
            </h3>
        </div>
        <div class="col-md-2">
            <h3><label for="hora" class="label label-primary">Hora</label></h3>
        </div>
        <div class="col-md-4">
            <h3>
                {!! Form::time('hora', \Carbon\Carbon::now()->format('H:i:s'), ['class' => 'form-control']) !!}
            </h3>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-2">
            <h3><label for="tipo" class="label label-primary">Tipo</label></h3>
        </div>
        <div class="col-md-10">
            <h3>
                <div class="radio-inline">
                    <label>{{ Form::radio('tipo', 'E') }}Entrada</label>
                </div>
                <div class="radio-inline">
                    <label>{{ Form::radio('tipo', 'S') }}Salida</label>
                </div>
            </h3>
        </div>
    </div>
</div>
<br>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        loadConductor(true);
        //alert({{ $data->conductor->persona->id }});

        $('#vehiculo').change(function() {
            loadConductor(false);
        });

        function loadConductor(seleccionado) {
            $.ajax({
                url: "{{ url('listas/listConductores/') }}"+"/"+$('#vehiculo').val(),
                dataType: 'json',
                type: 'GET',
                data: {},
                success: function(json) {
                    var $el = $("#conductor");
                    $el.empty();
                    $el.append($("<option></option>")
                               .attr("value", "-1").text("-- Seleccione el conductor --"));
                    $.each(json, function(index, value) {
                        $el.append($("<option></option>")
                                   .attr("value", value.id).text(value.nombre + ' ' + value.apellido));
                    });
                    if (seleccionado) {
                        $el.val({{ $data->conductor->persona->id }});
                    }
                }
            });
        }
    });
</script>
@stop
