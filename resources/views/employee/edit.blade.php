<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>
	<h1>Edit Account</h1>

	<a href="">Back to List</a> |
	<a href="">Logout</a> 

<form method="post">
	<table>
		<tr>
			<td>Emp No</td>
			<td><input disabled="true" type="text" name="accNo" value="{{ $emp[0]->id }}"></td>
		</tr>
		<tr>
			<td>Emap Name</td>
			<td><input type="text" name="accName" value="{{ $emp[0]->name }}"></td>
		</tr>
	
		<tr>
			<td>Account Type</td>
			<td><input type="text" name="typeId" value="{{ $emp[0]->type }}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
</form>
</body>
</html>