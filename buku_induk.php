			  <div class="card">
                <div class="card-header">
                  <h4><?=getAddress();?></h4>
                </div>
                <div class="card-body"> 
				
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
						  <th>NIS</th>
                          <th>Nama Lengkap</th>
                          <th>Jenis Kelamin</th>
                          <th>Tempat Tanggal Lahir</th>
                          <th>Aksi</th>
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
					  
					  if ($level == "Wali Kelas"){
					  $la = mysqli_query($connect,"select * from tbsiswa where id_kelas='".$dwakel['id_kelas']."'");
					  } else {
					  $la = mysqli_query($connect,"select * from tbsiswa limit $start,$ph");
					  }
					  while ($da = $la->fetch_array(MYSQLI_ASSOC)){
					  ?>
                        <tr>
                          <th scope="row"><?=$no;?></th>
						  <td><?=$da['NIS'];?></td>
                          <td><?=$da['nm_lengk_siswa'];?></td>
                          <td><?=$da['jenis_kelamin'];?></td>
                          <td><?=$da['tmpt_lhr_siswa'];?>, <?=$da['tgl_lhr_siswa'];?></td>
                          <td>
						  <a href="index.php?hal=detail_buku_induk&ids=<?php echo $da['id_siswa'];?>" class="label label-primary">Detail</a> 
						  </td>
                        </tr>
					  <?php
					  $no++;
					  }
					  
					  if ($level == "Wali Kelas"){
					  $lb = mysqli_query($connect,"select * from tbsiswa where id_kelas='".$dwakel['id_kelas']."'");
					  } else {
					  $lb = mysqli_query($connect,"select * from tbsiswa");
					  }
					  
					  $jd = mysqli_num_rows($lb);
					  $jumhal = ceil($jd/$ph);
					  ?>
                      </tbody>
                    </table>
                  </div>
				  <?php
				  include "pagination.php";
				  pagination($jumhal,$nohal,"buku_induk");
				  ?>
                </div>
              </div>