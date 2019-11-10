<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<form method="POST" action="/flight">
			{{ csrf_field() }}
			<div class="form-group"> 
				<div class="col-sm-4">
					<label>From</label>
					<input type="text" name="from" placeholder="From Where">
				</div>
				<div class="col-sm-4">
					<label>To</label>
					<input type="text" name="to" placeholder="To Where">
				</div>
			</div>
			<div class="form-group">
				<button type="submit">Add Record</button>
			</div>
		</form>
	</div>

</body>
</html>