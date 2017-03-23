@extends('layouts.app')
@section('content')
<h1>Drivers List</h1>
<p class="lead">Here's a list of all your drivers.
    <a href="{!! url('conductores/create') !!}">Add a new one?</a></p>
<hr>
@foreach($list as $conductor)
<h3>{{ $conductor->f_registroC }}</h3>
<p>{{ $conductor->nombreC }}</p>
<p>{{ $conductor->apellidoC }}</p>
<p>{{ $conductor->tipo_doc }}</p>
<p>{{ $conductor->numero_doc }}</p>
<p>{{ $conductor->generoC }}</p>
<p>
    <a href="{{ route('$conductores.show', $conductor->id) }}" class="btn btn-primary">View
        Driver</a>
    <a href="{{ route('$conductores.edit', $conductor->id) }}" class="btn btn-primary">Edit
        Driver</a>
    {!! Form::open([
    'method' => 'DELETE',
    'route' => ['$conductores.destroy', $conductor->id]
    ]) !!}
    {!! Form::submit('Delete this driver?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>
@endforeach
@stop
