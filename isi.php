<?php
if(isset($_GET['page'])){
 	if($_GET['page']=='tabel-siswa'){
 		include_once ('tables/siswa.php');
 	}
 	else if($_GET['page']=='input-siswa'){
 		include_once ('forms/inputsiswa.php'); // form
 		include_once ('core/create.php'); // proses data ke database
 	}
 	// contoh
 	else if($_GET['page']=='tabel-staff'){
 		include_once ('tables/staff.php');
 	}
 	else if($_GET['page']=='tabel-jadwal'){
 		include_once ('tables/jadwal.php');
 		include_once ('core/create.php'); // proses data ke database
 	}

 	else{
 		include_once ('tables/siswa.php');
 	}
}

else if (isset($_GET['edit-siswa'])){
	echo $_GET['edit-siswa'];
	include_once('core/edit.php');
	include_once('forms/editsiswa.php');
}
else if(isset($_GET['edit-kelas'])){
	include_once('core/edit.php');
	include_once('forms/editkelas.php');
}
else {
	include_once ('core/artikel.php');
}
