@extends('layouts.app')


@section('content_title')
Nuevo Registro Entrada / Salida
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroES\index">Registro E/S</a></li>
<li class="active">Eliminar</li>
@stop

@section('content')

<!-- Modal -->
{{ Form::open() }}
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
{{ Form::close() }}


<script>
$(document).ready(function(){
    $("#myModal").modal();
});
</script>
@stop
