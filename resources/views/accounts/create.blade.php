<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>
	<h1>Account Details</h1>

	<a href="{{route('account.index')}}">Back to List</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

<form method="post">
	<table>
		<tr>
			<td>Account No</td>
			<td><input type="text" name="accNo"></td>
		</tr>
		<tr>
			<td>Account Name</td>
			<td><input type="text" name="accName"></td>
		</tr>
		<tr>
			<td>Balance</td>
			<td><input type="text" name="balance"></td>
		</tr>
		<tr>
			<td>Account Type</td>
			<td><input type="number" name="typeId"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Create"></td>
		</tr>
	</table>
</form>
</body>
</html>