<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	session_start();

	$user = array( 
		"nama" => "arif", 
		"password" => "410",
		"notelp"	=> "100");

	$nama 		= $_POST["nama"];
	$password	= $_POST["password"];

	if ($user["nama"] == $nama && $user["password"] == $password) {
		$_SESSION["nama"] = $user["nama"];
		$_SESSION["user"] = $user;

		echo("<br>");
		echo"Selamat Datang di Indomaret";
		echo "<br>";
		echo "Terima Kasih $nama, Telah mengunjungi kami";
	}else{
		header("Location: Login.php");
	}
?><br>
<a href="Databelanja.php"> Lanjut Belanja</a>
</body>
</html>
