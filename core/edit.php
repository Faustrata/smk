<?php 
// ini adalah komemntar
if(isset($_GET['edit-siswa'])){
	$id=htmlentities($_GET['edit-siswa']);
	$stmt=$conn->query("SELECT * FROM tb_siswa WHERE nis=$id");
    $row=$stmt->fetch_array(); // mengambil data berdasarkan field
        if($row['gender']=="Perempuan"){
            $cek1="";
            $cek2="checked";
        } 
        else{
            $cek1="checked";
            $cek2="";           
        } 
    // jika button update-siswa di klik
    if(isset($_POST['update-siswa'])){
    	print_r($_POST);

    	$nisn=htmlspecialchars($_POST['nisn']); 
        // yang didalam kurunag dalaah nama textbox
    	$nmlengkap=htmlspecialchars($_POST['nama']);
        $gender=htmlspecialchars($_POST['gender']);

        // UPDATE nama_tabel SET nama_field='Data'
    	$sql="UPDATE tb_siswa SET nisn='$nisn',nama_lengkap='$nmlengkap',
        gender='$gender' WHERE nis='$id'";
    	
        echo $sql;
    	
        $update=$conn->query($sql);
    	if($update){
    		echo "<script>alert('Data Berhasil dilakukan update');
    		</script><meta http-equiv='refresh' content='0;URL=?page=tabel-siswa'>";
    	}
    }
}//akhir else edit-siswa

else if(isset($_GET['edit-kelas'])){

}