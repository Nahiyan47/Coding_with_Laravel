<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body> 
<h1>Create a new user</h1>
<form method="POST" action="/user">
	{{ csrf_field()}}
	<div>
		<input type="text" name="name" value="{{old('name')}}" placeholder="type name here">
		 {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	</div>
	<div> 
		<input type="number" name="phone" value="{{old('phone')}}" placeholder="type phone number">
		 {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
	</div>
	<div>
		<button type="submit">Create user</button>
	</div>


</form>
</body>
</html>