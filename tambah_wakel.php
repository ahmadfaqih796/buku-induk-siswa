			  <div class="card">
			      <div class="card-header">
			          <h4><?=getAddress();?></h4>
			      </div>
			      <div class="card-body">
			          <form method="post" action="proses_tambah_wk.php">
			              <div class="form-group">
			                  <label>NIP / NUPTK</label>
			                  <input type="text" class="form-control" name="nip_nuptk">
			              </div>
			              <div class="form-group">
			                  <label>Nama</label>
			                  <input type="text" class="form-control" name="nama_wk">
			              </div>
			              <div class="form-group">
			                  <label>Tempat Lahir</label>
			                  <input type="text" class="form-control" name="tmpt_lhr">
			              </div>
			              <div class="form-group">
			                  <label>Tanggal Lahir</label>
			                  <input type="text" class="form-control" name="tgl_lhr">
			              </div>
			              <div class="form-group">
			                  <label>Kelas</label>
			                  <select name="id_kelas" class="form-control col-md-1">
			                      <option></option>
			                      <option>I</option>
			                      <option>II</option>
			                      <option>III</option>
			                      <option>IV</option>
			                      <option>V</option>
			                      <option>VI</option>
			                  </select>
			              </div>
			              <div class="form-group">
			                  <label>Tahun Pelajaran</label>
			                  <select name="id_thpelajaran" class="form-control col-md-2">
			                      <option></option>
			                      <option>2018</option>
			                      <option>2019</option>
			                      <option>2020</option>
			                      <option>2021</option>
			                      <option>2022</option>
			                      <option>2023</option>
			                  </select>
			              </div>
			              <div class="form-group">
			                  <input type="submit" class="btn btn-primary" value="Simpan">
			                  <input type="reset" class="btn btn-danger" value="Batal">
			              </div>
			          </form>
			      </div>
			  </div>