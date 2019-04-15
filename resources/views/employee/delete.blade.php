<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>
	<h1>Account Delete</h1>

	<a href="{{route('account.index')}}">Back to List</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

	<table>
		<tr>
			<td>Account No</td>
			<td>{{$account['accNo']}}</td>
		</tr>
		<tr>
			<td>Account Name</td>
			<td>{{$account['accName']}}</td>
		</tr>
		<tr>
			<td>Account Balance</td>
			<td>{{$account['balance']}}</td>
		</tr>
		<tr>
			<td>Account Type</td>
			<td>{{$account['typeId']}}</td>
		</tr>
		<tr>
			<td>Last Transaction</td>
			<td>{{$account['lastTransaction']}}</td>
		</tr>
	</table>
	
	<h2>Are you sure?</h2>
	<form method="post">
		<input type="hidden" name="accId" value="{{$account['accid']}}">
		<input type="submit" name="confirm" value="Confirm">
	</form>
</body>
</html>