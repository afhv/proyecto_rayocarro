@extends('layouts.app')
@section('content')
<h1>Vehicles List</h1>

<p class="lead">Here's a list of all your users.
    <a href="{{ route('vehiculos/create') }}">Add a new one?</a></p>
<hr>

@foreach($list as $vehiculos)
<h3>{{ $vehiculos->f_ingreso }}</h3>
<p>{{ $vehiculos->placaV }}</p>
<p>{{ $vehiculos->marcaV }}</p>
<p>{{ $vehiculos->modeloV }}</p>
<p>{{ $vehiculos->colorV }}</p>
<p>
    <a href="{{ route('vehiculos.show', $vehiculos->id) }}" class="btn btn-primary">View
        User</a>
    <a href="{{ route('vehiculos.edit', $vehiculos->id) }}" class="btn btn-primary">Edit
        User</a>

    {!! Form::open([
    'method' => 'DELETE',
    'route' => ['vehiculos.destroy', $vehiculos->id]
    ]) !!}
    {!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>
@endforeach
@stop
