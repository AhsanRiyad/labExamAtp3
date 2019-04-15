<!DOCTYPE html>

<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<form method="post" >
		<!--
			1. @csrf
			2. {{@csrf_field()}} 
		-->
		<h1>Registration</h1>
		<h4>{{ $msg }}</h4>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		name: 	<input type="text" name="name"><br>

		Password: 	<input type="text" name="password"><br>

		Email: 		<input type="text" name="email"><br>

		
		<input type="submit" name="submit" value="Submit">
	</form>
	<div></div>
</body>
</html>