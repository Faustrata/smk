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
					<td>Inputkan Angka</td>
					<td>:</td>
					<td><input type="number" name="angka" required maxlength="6"></td>
				</tr>
			</thead>
			<tbody>
			<!-- contoh komentar ini tidak akan di tampilkan 
				<tr>
					<td>Nama Siswa</td>
					<td>:</td>
					<td><input type="text" name="nama" required ></td>
				</tr>
			-->
				<tr>
					<td><button type="submit" name="simpan">Looping</button></td>
				<!--
					<td><button type="reset" name="reset">Ulang</button></td>
				-->
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
<?php 
	if(isset($_POST['simpan'])){
		$angka=$_POST['angka'];
		$total=0;
		
		for ($awal=5;$awal>=$angka;$awal--){
			for($dalam=1;$dalam<=$awal;$dalam++){
				echo $awal;
				$total=$total+$awal;
			}

			echo "<br>";
		}
		echo "Total Jumlah adalah =".$total;
	}
?>