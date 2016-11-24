<?php
include ('koneksi.php');

$kduser=$_GET['edit-siswa'];

echo "ini form edit untuk nis = ".$id;
// 
$sql=$conn->query("SELECT * FROM tb_user WHERE kodeuser='$kduser'");
$data=$sql->fetch_assoc();


print_r($data);
echo "<br>";
echo "<br>";

echo $data['kodeuser']; // dalam $data adalah nama field
?>
Kode User : <input type="text" name="kodeuser" value="<?php echo $data['kodeuser']; ?>"><br>
Nama User : <input type="text" name="namauser" value="<?php echo $data['namauser']; ?>"><br>
Level : <select name="level">
			<option><?php echo $data['level']; ?></option>
			<option>admin</option>
		</select><br>
