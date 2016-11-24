<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

session_start();
if(empty($_SESSION)){
	echo  "<script>
        document.location='../index.php';
        alert('Anda Harus Login');
        </script>";
}
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
<ul>
	<li><a href="/">Home </a></li>
	<li><a href="#">Jadwal </a></li>
	<li><a href="#">Nilai </a></li>
	<li><a href="logout.php">Logout </a></li>
</ul>


</body>
</html>
