@extends('layout')

@section('content')
   <h1 class="title">Edit Project</h1>

   <form method="POST" action="/user/{{$user->id}}">
   	{{ method_field('PATCH') }}
   	{{ csrf_field() }}
   	<div class="field">
   		<label class="label">Customer Name</label>
   	</div>
   	<div class="control">
   		<input type="text" name="name" value="{{$user->customer_name}}">
   	</div>
   	   	<div class="field">
   		<label class="label">Customer Phone</label>
   	</div>
   	<div class="control">
   		<input type="text" name="phone" value="{{$user->phone}}">
   	</div>
   <div>
   	    <button type="submit">Save</button>
   </div>
   </form>

   <form method="POST" action="/user/{{$user->id}}">
   	{{ method_field('DELETE') }}
   	{{ csrf_field() }}
   	<button type="submit">Delete</button>
   </form>


@endsection