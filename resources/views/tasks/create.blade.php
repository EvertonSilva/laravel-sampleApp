@extends('layouts.application')

@section('content')
	<h2>Create a TODO</h2>
	@include('layouts.form-errors')
	<form action="/tasks" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="todo-title">Title</label>
			<input type="text" class="form-control" id="todo-title" name="title">
		</div>
		<button class="btn btn-primary" type="submit">Create TODO</button>
	</form>
@endsection