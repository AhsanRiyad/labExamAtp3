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

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<div>{{session('msg')}}</div>
</body>
</html>