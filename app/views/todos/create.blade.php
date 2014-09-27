@extends('layouts.main')
@section('content')
	{{ Form::open(['url'=>route('todos.store')])}}
		<div class="form-group">
			{{ Form::label('title', 'Todo Title') }}
			{{ Form::text('title', null, ['class'=>'form-control']) }}
		</div>

		{{ Form::submit('Save', ['class'=>'btn btn-default']) }}
	{{ Form::close() }}
@stop
