			  <div class="card">
                <div class="card-header">
                  <h4><small><a href="index.php?hal=tambah_data_admin" class="btn btn-primary"><i class="fa fa-plus"></i></a></small> <?=getAddress();?></h4>
                </div>
                <div class="card-body">
				
				<form method="get" action="">
				<div class="form-group">
					<input type="hidden" name="hal" value="data_admin">
					<input type="text" name="cari" placeholder="Masukan kata kunci..." class="form-control">
				</div>
				</form>
				
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
						  <th>NIP/NUPTK</th>
                          <th>Nama Lengkap</th>
                          <th>Jenis Kelamin</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Akses Level</th>
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
					  $ph = 5;
					  $start = ($nohal - 1) * $ph;
					  $no = $start+1;
					  
					  if (isset($_GET['cari'])){
					  	$cari = $_GET['cari'];
						$la = mysqli_query($connect,"select * from tbadmin where nama_lengkap like '%$cari%' limit $start,$ph");
					  } else {
						$la = mysqli_query($connect,"select * from tbadmin limit $start,$ph");
					  }
					  $jml = mysqli_num_rows($la);
					  if ($jml > 0){
					  while ($da = $la->fetch_array(MYSQLI_ASSOC)){
					  ?>
                        <tr>
                          <th scope="row"><?=$no;?></th>
                          <td><?=$da['nip_nuptk'];?></td>
                          <td><?=$da['nama_lengkap'];?></td>
                          <td><?=$da['jenis_kelamin'];?></td>
                          <td><?=$da['email'];?></td>
                          <td><?=$da['username'];?></td>
                          <td><?=$da['akses_level'];?></td>
                          <td>
						  <a href="index.php?hal=edit_admin&edit=<?php echo $da ['id_admin'];?>" class="label label-primary">Edit</a> 
						  <a href="hapus.php?data=admin&id=<?=$da['id_admin'];?>" class="label label-warning" onclick="return confirm('Yakin Hapus ini?')">Hapus</a>
						  </td>
                        </tr>
					  <?php
					  $no++;
					  }
					  $lb = mysqli_query($connect,"select * from tbadmin");
					  $jd = mysqli_num_rows($lb);
					  $jumhal = ceil($jd/$ph);
					  } else {
					  ?>
					  <tr>
					  <td colspan="8" align="center">Data Kosong!</td>
					  </tr>
					  <?php } ?>
                      </tbody>
                    </table>
                  </div>
				  <?php
				  if (!isset($_GET['cari'])){
				  include "pagination.php";
				  pagination($jumhal,$nohal,"data_admin");
				  }
				  ?>
				</div>
              </div>