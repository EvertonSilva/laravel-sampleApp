@extends('layouts.application')

@section('content')
	<h2>Tasks List</h2>
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
					<td>{{ $task->created_at->format('d/m/Y') }}</td>
					<td>{{ ($task->completed ? $task->updated_at->format('d/m/Y') : "") }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a class="btn btn-primary" href="/tasks/create">Add new TODO</a>
@endsection