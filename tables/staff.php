<div class="row">
    <div class="col-md-12">
        <button data-target="#myModal" class="btn btn-success col-sm-3"><i class="glyphicon glyphicon-user"></i>Tambah data </button>
    </div>
</div><br>
<div class="row">
    <table  width="100%" class="table table-bordered">
    	<tr style="background:grey; color:#ffffff">
    		<th>No</th>
    		<th>NIK</th>
    		<th>Nama Lengkap</th>
    		<th>Tempat / Tangal Lahir</th>
    		<th>Alamat</th>
    		<th>Mapel</th>
    		<th>Aksi</th>
    	</tr>
    	<?php 
        	$no=0;
            $hal=1;
            $perHalaman=5;
            $tabel='tb_staff';
            if (isset($_GET['hal']) && !empty($_GET['hal']))
                $hal = (int)$_GET['hal'];

            $dataTable = ambilData($tabel,$hal,$perHalaman);
            
            foreach ($dataTable as $row){
            $no++;
        ?>
        <tr>
        	<td width="30"><?php echo $no; ?></td>
        	<td width="100"><?php echo $row['nik']; ?></td>
            <td><?php echo strtoupper($row['nama_lengkap']); ?></td>
            <td><?php echo ucwords(strtolower($row['tempat_lahir'])).", "
            				.$row['tanggal_lahir']; ?>
            </td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['idmapel']; ?></td>
            <td>
            <a href="?edit-siswa=<?php echo $row['nik'] ?>" class="btn btn-info"> <i class="glyphicon glyphicon-check"></i></a>
            <a href="CEK.PHP" class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php
        echo "<br>";
        echo tampilHalaman($tabel,$perHalaman);
    ?>
</div>

<div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Bagian heading modal</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
            <p>bagian body modal.</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
        </div>
    </div>
   </div>
</div>