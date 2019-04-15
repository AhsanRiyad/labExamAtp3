<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome Home! {{session('uname')}}</h1>

	<a href="{{route('account.index')}}">Account List</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

</body>
</html>