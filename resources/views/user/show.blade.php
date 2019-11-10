@extends('layout')

@section('content')

<h1>{{ $user->phone }}</h1><br>
<h1>{{ $user->customer_name }}</h1>

<div>
	@foreach($user->tasks as $task)
<form class="box" method="POST" action="/tasks/{{$task->id}}">
	@method('PATCH')
    {{ csrf_field() }}
	<label class="checkbox" for="completed"></label>
	<input type="checkbox" name="completed" onchange="this.form.submit()">
	    {{$task->description}}
</form>

	@endforeach
</div>

<div class="field">

	<form class="box" method="POST" action="/user/{{$user->id}}/tasks">
		{{ csrf_field() }}
		<label class="label">New Task</label>

		<div class="control">
			<input type="text" name="description" placeholder="new task">
		</div>
		<div class="control">
			<button type="submit" class="button is-link">Create</button>
		</div>
	</form>
</div>

@endsection