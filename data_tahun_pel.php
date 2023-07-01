			  <div class="card">
                <div class="card-header">
                  <h4><small><a href="index.php?hal=tambah_data_tahun_pel" class="btn btn-primary"><i class="fa fa-plus"></i></a></small> <?=getAddress();?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tahun Pelajaran</th>
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
					  $ph = 1;
					  $start = ($nohal - 1) * $ph;
					  $no = $start+1;
					  $la = mysqli_query($connect,"select * from tbth_pelajaran limit $start,$ph");
					  while ($da = $la->fetch_array(MYSQLI_ASSOC)){
					  ?>
                        <tr>
                          <th scope="row"><?=$no;?></th>
                          <td><?=$da['th_pelajaran'];?></td>
                          <td>
						  <a href="index.php?hal=edit_tahun_pel&edit=<?php echo $da ['id_thpelajaran'];?>" class="label label-primary">Edit</a> 
						  <a href="hapus.php?data=th_pelajaran&id=<?=$da['id_thpelajaran'];?>" class="label label-warning" onclick="return confirm('Yakin Hapus ini?')">Hapus</a>
						  </td>
                        </tr>
					  <?php
					  $no++;
					  }
					  $lb = mysqli_query($connect,"select * from tbth_pelajaran");
					  $jd = mysqli_num_rows($lb);
					  $jumhal = ceil($jd/$ph);
					  ?>
                      </tbody>
                    </table>
                  </div>
				  <?php
				  include "pagination.php";
				  pagination($jumhal,$nohal,"data_tahun_pel");
				  ?>
				</div>
              </div>