<?php 
session_start();
if (isset($_SESSION["detail"])) {
	$pengguna = $_SESSION["detail"];
?>
<table>
	<tr>
		<th>Nama</th>
		<th>Genre Film</th>
		<th>Tujuan Wisata</th>
		<th>Gambar</th>
	</tr>
	<tr>
		<td><?php echo $pengguna["nama"]; ?></td>
		<td>
			<?php
				foreach ($pengguna["genre"] as $values) {
					echo $values . "<br>";
				}	
			?>
		</td>
		<td>
			<?php
				foreach ($pengguna["wisata"] as $values) {
					echo $values . "<br>";
				}	
			?>
		</td>
		<td>
			<img width="200px" src="<?php echo $pengguna["image"]; ?>" alt="">
		</td>
	</tr>
	<tr>
		<td><a href="delarray.php">Hapus</a></td>
	</tr>
</table>
<?php
}else {
	?>
	<table width="800px" align="center">
		<tr align="left">
			<th>Nama</th>
			<th>Hobi</th>
			<th>Gambar</th>
		</tr>
		<tr>
			<td>-</td>
			<td>
				-
			</td>
			<td>
				-
			</td>
		</tr>
		<tr><td><a href="form.php">Tambah</a></td></tr>
	</table>
<?php } ?>