<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="proses.php" method="post" enctype="multipart/form-data">
		<table align="center">
			<tr><td colspan="3" align="center"><h2> Input Data </h2></td></tr>
			<tr><td>Nama</td><td>:</td>
			<td><input type="text" name="nama"></td></tr>

			<tr><td>Genre Film</td><td>:</td>
			<td><input type="checkbox" name="genre[]" value="Horror">Horror<br>
			<input type="checkbox" name="genre[]" value="Action">Action<br>
			<input type="checkbox" name="genre[]" value="Thriller">Thriller<br>
			<input type="checkbox" name="genre[]" value="Animasi">Animasi<br>
			<input type="checkbox" name="genre[]" value="Anime">Anime</td></tr>

			<tr><td>Tujuan Travelling</td><td>:</td>
			<td><input type="checkbox" name="wisata[]" value="Bali">Bali<br>
			<input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat<br>
			<input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan<br>
			<input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo<br>
			<input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung</td></tr>

			<tr><td>Upload</td><td>:</td><td><input type="file" name="image" id="image"></td></tr>
			<tr><td colspan="3" align="center"><input type="submit" value="Submit" name="submit"></td></tr></table>
	</form>
</body>
</html>