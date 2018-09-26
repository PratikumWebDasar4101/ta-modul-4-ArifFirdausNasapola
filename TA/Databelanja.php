<!DOCTYPE html>
<html>
<head>
	<title> FORM </title>
</head>
<body>
	<table align="center">
				<form action="output.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td colspan="3" align="center"><h2> Daftar Belanja Anda </h2></td>
					</tr>

					<tr>
						<td> Nama Pelanggan</td>
						<td> :</td>
						<td> <input type="text" name="nama"></td>
					</tr>

					<tr>
						<td> Daftar barang belanjaan </td>
						<td> :</td>			
						<td> 
							<input type="checkbox" name="minuman[]" value="Mizone">Mizone<br/>
							<input type="checkbox" name="minuman[]" value="Pulpy">Pulpy<br/>
							<input type="checkbox" name="minuman[]" value="Orange">Orange<br/>
							<input type="checkbox" name="minuman[]" value="Niu">Niu<br/>
							<input type="checkbox" name="minuman[]" value="Aqua">Aqua<br/>
						</td>
					</tr>

					<tr>
						<td> Jenis Pengiriman </td>
						<td> :</td>
						<td>
							<input type="radio" name="pengiriman" value="Jne">JNE<br/>
							<input type="radio" name="pengiriman" value="JT">J&T<br/>
							<input type="radio" name="pengiriman" value="POS">POS<br/>
							<input type="radio" name="pengiriman" value="Tiki">Tiki<br/>
						</td>
					</tr>

					<tr>
						<td> Alamat</td>
						<td>:</td>
						<td><input type="text" name="alamat"></td>
					</tr>

					<tr>
						<input type="hidden" name="tanggal" value="<?php echo date("Y/m/d");?>">
						<td colspan="3" align="center"><input type="submit" name="kirim" value="Send"></td>
					</tr>
				</form>
	</table>
</body>
</html>