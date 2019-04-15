<!DOCTYPE html>

<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="post" >
		<!--
			1. @csrf
			2. {{@csrf_field()}} 
		-->
		<h1>Login</h1>
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		
		Email: 		<input type="text" name="email"><br>

		Password: 	<input type="text" name="password"><br>
		
		<input type="submit" name="submit" value="Submit">
	</form>
	<div></div>
</body>
</html>