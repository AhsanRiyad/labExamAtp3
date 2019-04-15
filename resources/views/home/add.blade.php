<!DOCTYPE html>

<html>
<head>
	<title>Add Page</title>
</head>
<body>

	<form method="post" >
		<!--
			1. @csrf
			2. {{@csrf_field()}} 
		-->

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		ID: <input type="text" name="sid"><br>
		Name: <input type="text" name="sname"><br>
		CGPA: <input type="text" name="scgpa"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>