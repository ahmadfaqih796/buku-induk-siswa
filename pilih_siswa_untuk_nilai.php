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
					  $la = mysqli_query($connect, "select * from tbsiswa where id_kelas='".$dwakel['id_kelas']."' limit $start,$ph");
					  while ($da = $la->fetch_array(MYSQLI_ASSOC)){
					  ?>
                        <tr>
                          <th scope="row"><?=$no;?></th>
                          <td><?=$da['nm_lengk_siswa'];?></td>
                          <td><?=$da['jenis_kelamin'];?></td>
                          <td><?=$da['tmpt_lhr_siswa'];?>, <?=$da['tgl_lhr_siswa'];?></td>
                          <td>
							<a href="index.php?hal=input_nilai&nm=<?php echo $da['nm_lengk_siswa'];?>" class="label label-primary">Pilih</a> 
						  </td>
                        </tr>
					  <?php
					  $no++;
					  }
					  ?>
                      </tbody>
                    </table>
					</form>
                  </div>
                </div>
              </div>