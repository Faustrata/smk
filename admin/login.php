
<?php
include_once('../config/koneksi.php');
$user=$_POST['username'];
$pass=$_POST['password'];

//Menacari username dan password

$cari=$conn->query("SELECT * FROM tb_staff WHERE nik='$user' AND password='$pass'");

if ((mysqli_num_rows($cari))>0){
	$row=$cari->fetch_assoc();

		// atur session
		session_start();
			//variabel sesi = dari field database
		  $_SESSION['id']=$row['nik'];	
          $_SESSION['nama']=$row['nama_lengkap'];
          $_SESSION['level']=$row['level'];
        if($_SESSION['level']=='admin'){
        	echo "	<script>
				alert('Selamat Datang');
				document.location='../layout.php';
			</script>";
        }
        else if($_SESSION['level']=='pengajar'){
        	echo "	<script>
				alert('Selamat Datang');
				document.location='siswa/beranda.php';
			</script>";
        }

		
}
 else{
        echo  "<script>
        document.location='index.php';
        alert('Username / Password tidak cocok');
        </script>";
    
}

?>