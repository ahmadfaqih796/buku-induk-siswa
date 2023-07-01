			  <div class="card">
			      <div class="card-header">
			          <h4>Edit Pelajaran</h4>
			      </div>
			      <div class="card-body">

			          <?php
						$idp = $_GET['edit'];
						$tampil=mysqli_query($connect,"select * from tbpelajaran where id_pelajaran ='$idp'"); 
						$data=$tampil->fetch_array(MYSQLI_ASSOC);
					?>
			          <form method="post" action="proses_edit_pel.php?idp=<?php echo $data['id_pelajaran']; ?>">
			              <div class="form-group">
			                  <label>Nama Pelajaran</label>
			                  <input type="text" class="form-control" name="nama_pelajaran"
			                      value="<?php echo $data['nama_pelajaran'];?>">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas I</label>
			                  <input type="text" class="form-control" name="kkm_1" value="<?php echo $data['kkm_1'];?>">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas II</label>
			                  <input type="text" class="form-control" name="kkm_2" value="<?php echo $data['kkm_2'];?>">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas III</label>
			                  <input type="text" class="form-control" name="kkm_3" value="<?php echo $data['kkm_3'];?>">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas IV</label>
			                  <input type="text" class="form-control" name="kkm_4" value="<?php echo $data['kkm_4'];?>">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas V</label>
			                  <input type="text" class="form-control" name="kkm_5" value="<?php echo $data['kkm_5'];?>">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas VI</label>
			                  <input type="text" class="form-control" name="kkm_6" value="<?php echo $data['kkm_6'];?>">
			              </div>
			              <div class="form-group">
			                  <input type="submit" class="btn btn-primary" value="Edit">
			                  <input type="reset" class="btn btn-danger" value="Batal">
			              </div>
			          </form>
			      </div>
			  </div>