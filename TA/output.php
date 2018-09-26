<?php  
	session_start();

	$user		= $_SESSION["user"];
	$minuman	= $_POST["minuman"];
	$pengiriman	= $_POST["pengiriman"];
	$alamat		= $_POST["alamat"];
	$tanggal	= $_POST["tanggal"];

	$harga		= 0;
	$harga_peng	= 0;

	for ($i=0; $i <count($minuman); $i++) { 
			if ($minuman[$i] == "Mizone") 
				$harga += 10000;
			
			else if ($minuman[$i] == "Pulpy")
				$harga += 5000;
			elseif ($minuman[$i] == "Orange") 
				$harga += 7000;
			elseif ($minuman[$i] == "Niu")
				$harga += 6000;
			elseif ($minuman[$i] == "Aqua")
				$harga += 6000;

	}

	if ($pengiriman == "JNE") 
		$harga_peng = 20000;
	if($pengiriman == "JT")
		$harga_peng = 18000;
	if($pengiriman == "Tiki")
		$harga_peng = 22000;
	if($pengiriman == "POS")
		$harga_peng = 15000;

	function totalharga($y, $z){
		return $y + $z;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center">
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><?php echo $tanggal; ?></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $user["nama"];?></td>
		</tr>

		<tr>
			<td>No.Telepon</td>
			<td>:</td>
			<td><?php echo $user["notelp"]; ?></td>
		</tr>

		<tr valign="top">
			<td>Daftar Barang Belanja Anda</td>
			<td>:</td>
			<td>
				<?php 
					foreach($minuman as $key => $value) {
						echo $value. "<br>";
					}
				?>
			</td>
		</tr>

		<tr>
			<td>Pengiriman</td>
			<td>:</td>
			<td><?php echo totalharga($harga, $harga_peng); ?></td>
		</tr>

	</table>
</body>
</html>