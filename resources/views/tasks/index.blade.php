@extends('layouts.application')

@section('content')
	<h2>Tasks List</h2>
	<div>
		<form action="/tasks/filter">
			{{-- {{ csrf_field() }} --}}
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="">Task status</label>
						<select class="form-control" name="completed" id="tasks-status">
							<option value=""></option>
							<option value="0">Not completed</option>
							<option value="1">Completed</option>
						</select>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="">Finished date</label>
						<input type="date" class="form-control" name="updated_at">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit">Filter</button>
			</div>
		</form>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Completed</th>
				<th scope="col">Title</th>
				<th scope="col">Started</th>
				<th scope="col">Finished</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tasks as $task)
				<tr scope="row">
					<td>
						<input type="checkbox" {{ ($task->completed ? "checked" : "") }}>
					</td>
					<td>{{ $task->title }}</td>
					<td>{{ $task->created_at->diffForHumans() }}</td>
					<td>{{ ($task->completed ? $task->updated_at->toFormattedDateString() : "") }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a class="btn btn-primary" href="/tasks/create">Add new TODO</a>
@endsection