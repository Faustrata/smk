<!DOCTYPE html>
<html>
<head>
	<title>Form Siswa</title>
</head>
<body>
	<form action="" method="post">
		<table width="50%">
			<thead>
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><input type="text" name="nis" required maxlength="6"></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nama Siswa</td>
					<td>:</td>
					<td><input type="text" name="nama" required ></td>
				</tr>
				<tr>
					<td><button type="submit" name="simpan">SIMPAN</button></td>
					<td><button type="reset" name="reset">Ulang</button></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
<?php 
	if(isset($_POST['simpan'])){
		

		$a=$_POST['nis'];
		$b=$_POST['nama'];

		if(($a=="siswa") OR ($b=='123')){
			echo "Login";
		}
		else{
			echo "Gagal";
		}
	}
?>