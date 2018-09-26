<!DOCTYPE html>
<html>
<head>
	<title> Form Login </title>
</head>
<body>
	<table align="center">
		<form action = "Loginproses.php" method="POST" enctype = "multipart/form-data">
				<tr>
					<td colspan="3" align="center"><h2> Form Login </h2></td>
				</tr>
				<tr>
					<td> Username </td>
					<td>:</td>
					<td> <input type="text" name="nama"></td>
				</tr>
				<tr></tr>
				<tr>
					<td> Password</td>
					<td> :</td>
					<td> <input type="password" name="password"></td>
				</tr>
				<tr>
					<td> No.Telepon</td>
					<td> :</td>
					<td> <input type="number" name="notelp"></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="kirim" value="SEND"></td>
				</tr>
		</form>
	</table>
</body>
</html>