<div class="row">
    <div class="col-md-9">
        <a href="?page=input-siswa" class="btn btn-success"><i class="glyphicon glyphicon-user"></i>Tambah data </a>
    </div>
    <div class="col-md-3">
            
            <div class="form-group">
            <a href="?edit-siswa=<?php echo $row['nis'] ?>" class="btn btn-info"> <i class="glyphicon glyphicon-search"></i></a>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email">
                    </div>
            </div>
    </div>
</div><br>
<div class="row">
    <table  width="100%" class="table table-bordered">
    	<tr style="background:grey; color:#ffffff">
    		<th>No</th>
    		<th>NIS</th>
    		<th>NISN</th>
    		<th>Nama Lengkap</th>
    		<th>Tempat / Tangal Lahir</th>
    		<th>Alamat</th>
    		<th>Agama</th>
    		<th>Aksi</th>
    	</tr>
    	<?php 
        	$no=0;
            $hal=1;
            $perHalaman=5;
            if (isset($_GET['hal']) && !empty($_GET['hal']))
                $hal = (int)$_GET['hal'];

            $dataTable = ambilData('tb_siswa',$hal,$perHalaman);
            
            foreach ($dataTable as $row){
            $no++;
        ?>
        <tr>
        	<td width="30"><?php echo $no; ?></td>
        	<td width="100"><?php echo $row['nis']; ?></td>
        	<td width="100"><?php echo $row['nisn']; ?></td>
            <td><?php echo strtoupper($row['nama_lengkap']); ?></td>
            <td><?php echo ucwords(strtolower($row['tempat_lahir'])).", "
            				.$row['tanggal_lahir']; ?>
            </td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['agama']; ?></td>
            <td>
            <a href="?edit-siswa=<?php echo $row['nis'] ?>" class="btn btn-info"> <i class="glyphicon glyphicon-check"></i></a>
            <a href="CEK.PHP" class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php
        echo "<br>";
        echo  tampilHalaman('tb_siswa',$perHalaman);
    ?>
</div>