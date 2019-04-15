<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

<h1>Edit User</h1> 

	<a href="/home">Back</a> |
	<a href="/logout">logout</a> 
	<br>
	<br>

<form method="post">
	{{csrf_field()}}
	<table border="0" width="300px" >
		<tr>
			<td width="35%">ID</td>
			<td width="2%">:</td>
			<td>{{$std[0]}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>:</td>
			<td><input type="text"  name="sname" value="{{$std[1]}}" /></td>
		</tr>
		<tr>
			<td>Taken</td>
			<td>:</td>
			<td><input type="text"  name="taken" value="{{$std[2]}}" /></td>
		</tr>
		<tr>
			<td>Completed</td>
			<td>:</td>
			<td><input type="text" name="completed" value="{{$std[3]}}" readonly /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit"  name="update" value="Update" /></td>
		</tr>
	</table>
</form>

</body>
</html>