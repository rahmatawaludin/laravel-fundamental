@extends('layouts.main')
@section('content')
	@foreach (TodoList::all() as $todo)
		<h1>{{{ $todo->title }}}</h1>
	@endforeach
@stop
