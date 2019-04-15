<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>
	<h1>Account Details</h1>

	<a href="">Back to List</a> |
	<a href="">Edit</a> |
	<a href="">Delete</a> |
	<a href="">Logout</a> 


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
</body>
</html>