

			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="layout.php">Home</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li >
							<a href="?page=tabel-staff">PENGAJAR</a>
						</li>
						<li>
							<a href="?page=tabel-siswa">PESERTA DIDIK</a>
						</li>
						<li>
							<a href="?page=tabel-jadwal">JADWAL</a>
						</li>
						<li>
							<a href="?page=tabel-laporan">LAPORAN</a>
						</li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li >
							 <a href="logout.php" ><?php echo $_SESSION['nama'];?>, Logout</a>
							
						</li>
					</ul>
				</div>
				
			</nav>
