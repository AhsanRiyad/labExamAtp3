<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>
	<h1>Account Details</h1>

	<a href="">Back to List</a> 
	<a href="">Logout</a> 


	<table border="1">
		
		<tr>
			<td>emp name</td>
			<td>emp email</td>
			<td>delete</td>
			<td>edit</td>

		</tr>

		@foreach($emp as $e)

		<tr>
			<td>{{ $e->name }}</td>
			<td>{{ $e->email }}</td>
			<td><a href="">edit</a></td>
			<td><a href="">delete</a></td>
			
		</tr>
		
		@endforeach
		
	</table>
</body>
</html>