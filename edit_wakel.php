			  <div class="card">
			      <div class="card-header">
			          <h4>Edit Wali Kelas</h4>
			      </div>
			      <div class="card-body">

			          <?php
						$id = $_GET['edit'];
						$tampil=mysqli_query($connect,"select * from tbwali_kelas where id_wk ='$id'"); 
						$data=$tampil->fetch_array(MYSQLI_ASSOC);
					?>
			          <form method="post" action="proses_edit_wk.php?id=<?php echo $data['id_wk']; ?>">
			              <div class="form-group">
			                  <label>NIP / NUPTK</label>
			                  <input type="text" class="form-control" name="nip_nuptk" value="<?php echo $data['nip_nuptk'];?>">
			              </div>
			              <div class="form-group">
			                  <label>Nama</label>
			                  <input type="text" class="form-control" name="nama_wk" value="<?php echo $data['nama_wk'];?>">
			              </div>
			              <div class="form-group">
			                  <label>Tempat Lahir</label>
			                  <input type="text" class="form-control" name="tmpt_lhr" value="<?php echo $data['tmpt_lhr'];?>">
			              </div>
			              <div class="form-group">
			                  <label>Tanggal Lahir</label>
			                  <input type="text" class="form-control" name="tgl_lhr" value="<?php echo $data['tgl_lhr'];?>">
			              </div>
			              <div class="form-group">
			                  <label>Wali Kelas</label>
			                  <select name="id_kelas" class="form-control col-md-1">
			                      <?php
								$tampil=mysqli_query($connect,"select * from tbkelas");
								while($w=$tampil->fetch_array(MYSQLI_ASSOC)){
								echo "<option value=$w[id_kelas] selected>$w[kelas]</option>";
								}
								echo"</select>";
								?>
			              </div>
			              <div class="form-group">
			                  <label>Tahun Pelajaran</label>
			                  <select name="id_thpelajaran" class="form-control col-md-2">
			                      <?php
								$tampil=mysqli_query($connect,"select * from tbth_pelajaran");
								while($w=$tampil->fetch_array(MYSQLI_ASSOC)){
								echo "<option value=$w[id_thpelajaran] selected>$w[th_pelajaran]</option>";
								}
								echo"</select>";
								?>
			              </div>
			              <div class="form-group">
			                  <input type="submit" class="btn btn-primary" value="Edit">
			                  <input type="reset" class="btn btn-danger" value="Batal">
			              </div>
			          </form>
			      </div>
			  </div>