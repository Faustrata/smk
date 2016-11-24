
<?php
include_once('config/koneksi.php');
$user=$_POST['username'];
$pass=$_POST['password'];

//Menacari username dan password

$cari=$conn->query("SELECT * FROM tb_siswa WHERE nis='$user' AND tanggal_lahir='$pass'");

if ((mysqli_num_rows($cari))>0){
	$row=$cari->fetch_assoc();

		// atur session
		session_start();
			//variabel sesi = dari field database
		  $_SESSION['id']=$row['nis'];	
          $_SESSION['nama']=$row['nama_lengkap'];
          $_SESSION['level']="Siswa";

		echo "	<script>
				alert('Selamat Datang');
				document.location='siswa/beranda.php';
			</script>";
}
 else{
        echo  "<script>
        document.location='index.php';
        alert('Username / Password tidak cocok');
        </script>";
}


?>