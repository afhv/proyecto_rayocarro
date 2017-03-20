@extends('layouts.app')
@section('content')
<h1>Vehicles List</h1>
<p class="lead">Here's a list of all your vehicles.
    <a href="{!! url('vehiculos/create') !!}">Add a new one?</a></p>
<hr>
@foreach($list as $vehiculo)
<h3>{{ $vehiculo->f_ingreso }}</h3>
<p>{{ $vehiculo->placaV }}</p>
<p>{{ $vehiculo->marcaV }}</p>
<p>{{ $vehiculo->modeloV }}</p>
<p>{{ $vehiculo->color_V }}</p>
<p>
    <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="btn btn-primary">View
        Vehicle</a>
    <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-primary">Edit
        Vehicle</a>
    {!! Form::open([
    'method' => 'DELETE',
    'route' => ['vehiculos.destroy', $vehiculo->id]
    ]) !!}
    {!! Form::submit('Delete this vehicle?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>
@endforeach
@stop
