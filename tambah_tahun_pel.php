			  <div class="card">
			      <div class="card-header">
			          <h4><?=getAddress();?></h4>
			      </div>
			      <div class="card-body">
			          <form method="post" action="proses_tambah_tahun_pel.php">
			              <div class="form-group">
			                  <label>Tahun Pelajaran</label>
			                  <input type="text" class="form-control" name="th_pelajaran">
			              </div>
			              <div class="form-group">
			                  <input type="submit" class="btn btn-primary" value="Simpan">
			                  <input type="reset" class="btn btn-danger" value="Batal">
			              </div>
			          </form>
			      </div>
			  </div>