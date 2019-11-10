<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="form-group">
		<div align="right">
		<a class="btn btn-success" href="/flight/create">Add more</a>
	</div>
		
	</div>
	<div>
		<table class="table table-bordered">
			<tr>
				<th>From</th>
				<th>To</th>
				<th>Action</th>

			</tr>
			@foreach($data as $key)
			<tr>
				<td>{{$key->from}}</td>
				<td>{{$key->to}}</td>
			    <td>
			    	<form method="POST" action="/flight/{{$key->id}}">
  					{{ method_field('DELETE') }}
   					{{ csrf_field() }}
			    	<button type="submit" class="btn btn-danger">Delete</button>
			    </form>
			</td>
			</tr>
			@endforeach
		</table>

	</div>


</body>
</html>