<!--
<div class="container">
	<div class="row">
		<div class="col-md-12 column">
			<h3>
				h3. Lorem ipsum dolor sit amet.
			</h3>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-4">
						<input class="form-control" id="inputEmail3" type="email">
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-4">
						<input class="form-control" id="inputPassword3" type="password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
						<div class="checkbox">
							 <label><input type="checkbox"> Remember me</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
-->

<form  method="POST">
<table>
	<tr>
		<td width="200">NIS</td>
		<td>:</td>
		<td width="400"><input readonly type="text" name="nis" value="
		<?php echo ltrim($row['nis']) ?>"></td>
	</tr>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td><input type="text" required name="nisn" value="
		<?php echo $row['nisn'] ?>"></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><input type="text" required  name="nama" value="
		<?php echo $row['nama_lengkap'] ?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="radio" required  name="gender" <?php echo $cek1 ?>>Laki-laki
		<input type="radio" name="gender" <?php echo $cek2 ?>>Perempuan
		</td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" required  name="tempat" value="
		<?php echo $row['tempat_lahir']?>"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="text" required  name="tanggal" value="
		<?php echo $row['tanggal_lahir']?>" ></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td><select name="agama" required >
			<option><?php echo $row['agama']; ?></option>
			<option>Islam</option>
			<option>Kristen</option>
			<option>Budha</option>
			<option>Hindu</option>
			<option>Khatolik</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat" required ><?php echo $row['alamat']?>
		</textarea></td>
	</tr>
	<tr>
		<td>Nama Orang Tua</td>
		<td>:</td>
		<td><input type="text" required  name="ortu" value="
		<?php echo $row['nama_ortu']?>" ></td>
	</tr>
	<tr>
		<td>Pekerjaan Orang tua</td>
		<td>:</td>
		<td><input type="text" required  name="pekerjaan" value="
		<?php echo $row['peker_ortu']?>"" ></td>
	</tr>
	<tr>
		<td>No Ijazah</td>
		<td>:</td>
		<td><input type="text" required  name="ijazah" value="
		<?php echo $row['no_ijazah']?>"" ></td>
	</tr>
	<tr>
		<td>
		<button name="update-siswa" class="btn btn-primary" type="submit" >Update</button>
		<button type="reset" name="back" title="kembali"  onclick="history.go(-1)">Back</button>
		</td>
	</tr>
</table>
</form>

