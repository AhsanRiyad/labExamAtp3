<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>
	<h1>Edit Account</h1>

	<a href="{{route('account.index')}}">Back to List</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

<form method="post">
	<table>
		<tr>
			<td>Account No</td>
			<td><input type="text" name="accNo" value="{{$account['accNo']}}"></td>
		</tr>
		<tr>
			<td>Account Name</td>
			<td><input type="text" name="accName" value="{{$account['accName']}}"></td>
		</tr>
		<tr>
			<td>Balance</td>
			<td><input type="text" name="balance" value="{{$account['balance']}}"></td>
		</tr>
		<tr>
			<td>Account Type</td>
			<td><input type="number" name="typeId" value="{{$account['typeId']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Create"></td>
		</tr>
	</table>
</form>
</body>
</html>