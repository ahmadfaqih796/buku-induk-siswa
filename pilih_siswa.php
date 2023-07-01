			  <div class="card">
                <div class="card-header">
                  <h4><?=getAddress();?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
				  <form method="post" action="proses_masuk_kelas.php">
				  <input type="hidden" value="<?=$_GET['idk'];?>" name="idk">
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>Jenis Kelamin</th>
                          <th>Tempat Tanggal Lahir</th>
                          <th width="6%" align="center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  if (isset($_GET['nohal'])){
						  $nohal = $_GET['nohal'];
					  } else {
						  $nohal = 1;
					  }
					  $ph = 10;
					  $start = ($nohal - 1) * $ph;
					  $no = $start+1;
					  $la = mysqli_query($connect, "select * from tbsiswa where id_kelas='0' limit $start,$ph");
					  while ($da = $la->fetch_array(MYSQLI_ASSOC)){
					  ?>
                        <tr>
                          <th scope="row"><?=$no;?></th>
                          <td><?=$da['nm_lengk_siswa'];?></td>
                          <td><?=$da['jenis_kelamin'];?></td>
                          <td><?=$da['tmpt_lhr_siswa'];?>, <?=$da['tgl_lhr_siswa'];?></td>
                          <td>
							<div class="i-checks">
								<input id="<?=$da['id_siswa'];?>" type="checkbox" name="ids[]" value="<?=$da['id_siswa'];?>" class="form-control-custom">
								<label for="<?=$da['id_siswa'];?>">&nbsp;&nbsp;</label>
							</div>
						  </td>
                        </tr>
					  <?php
					  $no++;
					  }
					  $lb = mysqli_query($connect, "select * from tbsiswa where id_kelas='0'");
					  $jd = mysqli_num_rows($lb);
					  $jumhal = ceil($jd/$ph);
					  ?>
					  <tr>
					  <td colspan="4"></td>
					  <td><input type="submit" value="Pilih" class="btn btn-primary"></td>
					  </tr>
                      </tbody>
                    </table>
					</form>
                  </div>
				  <?php
				  include "pagination.php";
				  pagination($jumhal,$nohal,"pilih_siswa");
				  ?>
                </div>
              </div>