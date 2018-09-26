<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<form action="login-proses.php" method="post">
		<table align="center">
			<tr><td colspan="3" align="center"><h2> Form Login</h2></td></tr>
			<?php if(isset($_SESSION["pesan"])) : ?>
			<tr><td><?php echo $pesan; ?></td></tr>
			<?php endif; ?>
			<tr><td>Username</td></tr>
			<tr><td><input type="text" name="username"></td></tr>
			<tr><td>Password</td></tr>
			<tr><td><input type="password" name="password"></td></tr>
			<tr><td><input type="submit" name="submit" value="login"></td></tr>
		</table>
	</form>
</body>
</html>