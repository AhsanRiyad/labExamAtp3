<!DOCTYPE html>
<html>
<head>
	<title>List of Account</title>
</head>
<body>
	<h1>List of Account</h1>

	<a href="{{route('account.create')}}">Create New</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

	<ul>
		@foreach($accounts as $acc)
		<li><a href="{{route('account.show', $acc['accId'])}}">{{$acc['accNo']}}</a></li>
		@endforeach
	</ul>
</body>
</html>