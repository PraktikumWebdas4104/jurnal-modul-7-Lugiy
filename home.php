<form>
	<center>
		<td><input type="text" name="kotakcari"></td>
		<td><input type="submit" name="cari" value="Cari"></td>
	</center>
</form>
<br>
<br>
<table border="1">
	<tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Aksi</th>
	</tr>

	<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "dbmahasiswa";

	$conn = new mysqli($host, $username, $password, $db); 

	if (isset($_POST['cari'])) {
		$nim = $_POST['kotakcari'];

		$qry = "SELECT nama, nim FROM data_mahasiswa WHERE nim = $nim";
		$has = mysqli_query($conn, $qry);

		$nomor=1;
		while($row=mysqli_fetch_array($has)){
			echo "<tr>
					<td>$row[0]</td>
					<td>$row[1]</td>
					<td>Delete</td>
				</tr>";

			$nomor++;
		}
		# code...
	}else{
		$host = "localhost";
	$username = "root";
	$password = "";
	$db = "dbmahasiswa";

	$conn = new mysqli($host, $username, $password, $db);

	$qry = "SELECT * FROM datamahasiswa";
		$has = mysqli_query($conn, $qry);

		$nomor=1;
		while($row=mysqli_fetch_array($has)){
			echo "<tr>
					<td>$row[0]</td>
					<td>$row[1]</td>
					<td>Delete</td>
				</tr>";

			$nomor++;
		}

	}

	 ?>
</table>