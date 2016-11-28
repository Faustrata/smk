<div class="col-md-3">
    <form class="form-horizontal" method="post" >
        <label>Pilih Guru</label>
            <select class="form-control" name="nik">
                <option></option>
                  <?php
                    $sql="SELECT * FROM tb_staff";
                    $data=$conn->query($sql);
                    while($r=mysqli_fetch_array($data)){ 
                    echo "
                            <option value='$r[0]'>$r[2] </option>
                     "; // akhir while
                    }
                   ?>
            </select>
        <label>Pilih Kelas</label>
            <select class="form-control" name="idkelas">
                <option></option>
                  <?php
                    $sql="SELECT * FROM tb_kelas";
                    $data=$conn->query($sql);
                    while($r=mysqli_fetch_array($data)){ 
                    echo "
                            <option value='$r[0]'>$r[1] </option>
                     "; // akhir while
                    }
                   ?>
            </select>
        <label>Pilih Mata Pelajaran</label>
            <select class="form-control" name="idmapel">
                <option></option>
                  <?php
                    $sql="SELECT * FROM tb_mapel";
                    $data=$conn->query($sql);
                    while($r=mysqli_fetch_array($data)){ 
                    echo "
                            <option value='$r[0]'>$r[1] </option>
                     "; // akhir while
                    }
                   ?>
            </select>
        <label>Pilih Hari</label>
            <select class="form-control" name="hari">
                <option></option>
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option>
                <option>Sabtu</option>
            </select>
        <label>Pilih Jam Ke-</label>
            <select class="form-control select2" name="jam">
                <option></option>
                <option>1-2</option>
                <option>3-4</option>
                <option>5-6</option>
                <option>7-8</option>
                <option>9-10</option>
            </select>
        <label>Pilih Semester</label>
            <select class="form-control" name="semester">
                <option></option>
                <option>Ganjil</option>
                <option>Genap</option>
            </select>   
        <br>
        <button class="btn btn-warning" type="submit" name="create-jadwal"> Simpan </button>
        <br>
    </form>
</div>
<div class="col-md-9">
    <table class="table table-condensed" id="example1">
        <thead>
            <tr>
                <td>No</td>
                <td>Kelas</td>
                <td>Guru</td>
                <td>Mapel</td>
            </tr>
        </thead>
        <?php
        $no=0;
        $sql="SELECT * FROM tb_jadwal a JOIN tb_kelas b ON a.idkelas=b.idkelas
                            JOIN tb_staff c ON a.nik=c.nik
                            JOIN tb_mapel d ON a.idmapel=d.idmapel
                         ";
        $tampil=$conn->query($sql);
            while ($row=$tampil->fetch_assoc()) { $no++;?>
             <tr>
                 <td><?php echo $no; ?></td>
                 <td><?php echo $row['namakelas']; ?></td>
                 <td><?php echo $row['nama_lengkap']; ?></td>
                 <td><?php echo $row['namamapel']; ?></td>
             </tr>

        <?php    }
         ?>
    </table>
    
</div>
