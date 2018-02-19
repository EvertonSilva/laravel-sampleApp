@extends('layouts.application')

@section('content')
	<h2>Create a TODO</h2>
	<form action="/tasks" method="POST">
		{{ csrf_field() }}
		<div>
			<label for="todo-title">Title</label>
			<input type="text" id="todo-title" name="title">
		</div>

		{{-- <div>
			<label for="todo-status">
				<input type="checkbox" id="todo-status" name="completed">
				Completed
			</label>
		</div> --}}

		<button type="submit">Create TODO</button>
	</form>
@endsection