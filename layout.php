<?php session_start();
	include_once ('config/koneksi.php');
	include_once ('core/function.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Layout</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/inputan.css">

	<!-- css dari luar (online)-->

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->

	<!-- end css online -->

	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="plugins/select2/select2.min.css">

</head>
<body>

<div class="container">

	<br>
	<div class="form-group">
		<img width="70" src="assets/image/smki.gif"><h1>SMK INFORMATIKA UTAMA</h1>
	  	<nav class="nav">
			<?php include ("layout/menu.php") ?>
		</nav>



	  	<?php require ("isi.php") ?>

</div>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="plugins/select2/select2.full.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        $(".select2").select2();
      });
    </script>
</body>
</html>
