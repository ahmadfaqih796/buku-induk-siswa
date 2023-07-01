			  <div class="card">
                <div class="card-header">
                  <h4>Edit Admin</h4>
                </div>
                <div class="card-body">
					
					<?php
						$uid = $_GET['edit'];
						$tampil=mysqli_query($connect,"select * from tbadmin where id_admin ='$uid'"); 
						$data=$tampil->fetch_array(MYSQLI_ASSOC);
					?> 
					<form method="post" action="proses_edit_admin.php?udi=<?php echo $data['id_admin']; ?>">
					<div class="form-group">
						<label>NIP/NUPTK</label>
						<input type="text" class="form-control" name="nip_nuptk" value="<?php echo $data['nip_nuptk'];?>">
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $data['nama_lengkap'];?>">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<div class="well well-sm" style="background:#eee;padding:10px;border-radius:4px;">
						<input type="radio" class="flat" name="jk" value="Laki-laki" checked> Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" class="flat" name="jk" value="Perempuan"> Perempuan
						</div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="<?php echo $data['email'];?>">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo $data['username'];?>">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" value="<?php echo $data['password'];?>">
					</div>
					<div class="form-group">
						<label>Akses Level</label>
						<select name="akses" id="select" class="form-control">
							  <?php
							  if ($data['akses_level']=="Admin")
							  {
								$opt1="selected";
							  }
							  else 	
							  {
								$opt1="";
							  }
							  if ($data['akses_level']=="Kurikulum")
							  {
								$opt2="selected";
							  }
							  else
							  {
								$opt2="";
							  }
							   if ($data['akses_level']=="Wali Kelas")
							  {
								$opt3="selected";
							  }
							  else
							  {
								$opt3="";
							  }
							  if ($data['akses_level']=="TU")
							  {
								$opt4="selected";
							  }
							  else
							  {
								$opt4="";
							  }
							  ?>
				              <option>&nbsp;</option>
                              <option value="Admin" <?php echo "$opt1";?>>Admin</option>
                              <option value="Kurikulum" <?php echo "$opt2";?>>Kurikulum</option> 
							  <option value="Wali Kelas" <?php echo "$opt3";?>>Wali Kelas</option>
							  <option value="TU" <?php echo "$opt4";?>>TU</option> 
                              </select>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Edit"> 
						<input type="reset" class="btn btn-danger" value="Batal">
					</div>
					</form>
				</div>
              </div>