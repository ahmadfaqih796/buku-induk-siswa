			  <div class="card">
			  	<div class="card-header">
			  		<h4><?= getAddress(); ?></h4>
			  	</div>
			  	<div class="card-body">
			  		<form method="post" action="proses_tambah_admin.php">
			  			<input hidden name="level" value="Wali Kelas">
			  			<div class="form-group">
			  				<label>NIP/NUPTK</label>
			  				<input type="text" class="form-control" name="nip_nuptk" id="nip">
			  			</div>
			  			<div class="form-group">
			  				<label>Nama Lengkap</label>
			  				<input type="text" class="form-control" name="nama" required="required" id="nama_lengkap">
			  			</div>
			  			<div class="form-group">
			  				<label>Jenis Kelamin</label>
			  				<div class="well well-sm" style="background:#eee;padding:10px;border-radius:4px;">
			  					<input type="radio" class="flat" name="jk" value="Laki-laki" checked> Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;
			  					<input type="radio" class="flat" name="jk" value="Perempuan"> Perempuan
			  				</div>
			  			</div>
			  			<div class="form-group">
			  				<label>Tempat Lahir</label>
			  				<input type="text" class="form-control" name="tempat" required="required">
			  			</div>
			  			<div class="form-group">
			  				<label>Tanggal Lahir</label>
			  				<input type="date" class="form-control" name="tgl" id="tanggal" required="required">
			  			</div>
			  			<div class="form-group">
			  				<label>Email</label>
			  				<input type="email" class="form-control" name="email" required="required">
			  			</div>
			  			<div class="form-group">
			  				<label>Username</label>
			  				<input type="text" class="form-control" name="username" required="required">
			  			</div>
			  			<div class="form-group">
			  				<label>Password</label>
			  				<input type="password" class="form-control" name="password" required="required">
			  			</div>

			  			<div class="form-group">
			  				<input type="submit" class="btn btn-primary" value="Simpan">
			  				<input type="reset" class="btn btn-danger" value="Batal">
			  			</div>
			  		</form>
			  	</div>
			  </div>