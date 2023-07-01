			  <div class="card">
			      <div class="card-header">
			          <h4><?=getAddress();?></h4>
			      </div>
			      <div class="card-body">
			          <form method="post" action="proses_tambah_pelajaran.php">
			              <div class="form-group">
			                  <label>Nama Pelajaran</label>
			                  <input type="text" class="form-control" name="nama_pelajaran" required="required" id="pelajaran">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas I</label>
			                  <input type="text" class="form-control" name="kkm_1" required="required" id="kkm7">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas II</label>
			                  <input type="text" class="form-control" name="kkm_2" required="required" id="kkm8">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas III</label>
			                  <input type="text" class="form-control" name="kkm_3" required="required" id="kkm9">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas IV</label>
			                  <input type="text" class="form-control" name="kkm_4" required="required" id="kkm9">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas V</label>
			                  <input type="text" class="form-control" name="kkm_5" required="required" id="kkm9">
			              </div>
			              <div class="form-group">
			                  <label>KKM Kelas VI</label>
			                  <input type="text" class="form-control" name="kkm_6" required="required" id="kkm9">
			              </div>
			              <div class="form-group">
			                  <input type="submit" class="btn btn-primary" value="Simpan">
			                  <input type="reset" class="btn btn-danger" value="Batal">
			              </div>
			          </form>
			      </div>
			  </div>