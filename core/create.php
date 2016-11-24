<?php
if (isset($_POST['create-siswa'])){ // nama button
	
	$nis=htmlspecialchars($_POST['nis']);
	$nisn=htmlspecialchars($_POST['nisn']);
	$nama=htmlspecialchars($_POST['nama']);
	$gender=htmlspecialchars($_POST['gender']);
	$tempat=htmlspecialchars($_POST['tempat']);
	$tanggal=htmlspecialchars($_POST['tanggal']);
	$agama=htmlspecialchars($_POST['agama']);
	$alamat=htmlspecialchars($_POST['alamat']);
	$ortu=htmlspecialchars($_POST['ortu']);
	$pekerjaan=htmlspecialchars($_POST['pekerjaan']);
	$ijazah=htmlspecialchars($_POST['ijazah']);

	$sql="INSERT INTO tb_siswa 
		VALUES('$nis','$nisn','$nama','$gender','$tempat',
				'$tanggal','$agama','$alamat','$ortu',
				'$pekerjaan','$ijazah')";

	$simpan=mysqli_query($conn,$sql);
	if($simpan){ // jika berhasil disimpan
		echo "<script>alert('Data berhasil tersimpan');</script>
				<meta http-equiv='refresh' content='0;URL=
				?page=tabel-siswa'>";
	}
	else{ // jika gagal
		echo "gagal";
	}
}
else if (isset($_POST['create-jadwal'])){ // nama button
	$nik=htmlspecialchars($_POST['nik']);
	$idkelas=htmlspecialchars($_POST['idkelas']);
	$idmapel=htmlspecialchars($_POST['idmapel']);
	$hari=htmlspecialchars($_POST['hari']);
	$jam=htmlspecialchars($_POST['jam']);
	$semester=htmlspecialchars($_POST['semester']);


	$sql="INSERT INTO tb_jadwal
		VALUES('','$nik','$idkelas','$idmapel','$hari','$jam',
				'$semester')";
	echo $sql;

	$simpan=mysqli_query($conn,$sql);
	if($simpan){ // jika berhasil disimpan
		echo "<script>alert('Data berhasil tersimpan');</script>
				<meta http-equiv='refresh' content='0;URL=
				?page=tabel-jadwal'>";
	}
	else{ // jika gagal
		echo "gagal";
	}
}
















else if (isset($_POST['create-jadwal'])){ // nama button
	
	$nik=htmlspecialchars($_POST['nik']);
	$idkelas=htmlspecialchars($_POST['idkelas']);
	$idmapel=htmlspecialchars($_POST['idmapel']);
	$hari=htmlspecialchars($_POST['hari']);
	$jam=htmlspecialchars($_POST['jam']);
	$semester=htmlspecialchars($_POST['semester']);

	$sql="INSERT INTO tb_jadwal
		VALUES('','$nik','$idkelas','$idmapel','$hari','$jam','$semester')";
	//echo $sql;
	$simpan=mysqli_query($conn,$sql);
	if($simpan){ // jika berhasil disimpan
		echo "<script>alert('Data berhasil tersimpan');</script>
				<meta http-equiv='refresh' content='0;URL=
				?page=tabel-jadwal'>";
	}
	else{ // jika gagal
		echo "gagal";
	}
}

?>
