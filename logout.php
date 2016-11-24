<?php session_start();

session_destroy();

echo "	<script>
				alert('Anda keluar dari sistem.. !!');
				document.location='index.php';
		</script>";
?>