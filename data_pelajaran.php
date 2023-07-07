			  <div class="card">
			  	<div class="card-header">
			  		<h4><small><a href="index.php?hal=tambah_data_pelajaran" class="btn btn-primary"><i class="fa fa-plus"></i></a></small> <?= getAddress(); ?></h4>
			  	</div>
			  	<div class="card-body">
			  		<form method="get" action="">
			  			<div class="form-group">
			  				<input type="hidden" name="hal" value="data_pelajaran">
			  				<input type="text" name="cari" placeholder="Masukan kata kunci..." class="form-control">
			  			</div>
			  		</form>

			  		<div class="table-responsive">
			  			<table class="table table-striped table-hover table-bordered">
			  				<thead>
			  					<tr>
			  						<th>No</th>
			  						<th>Nama Pelajaran</th>
			  						<th>
			  							<center>KKM Kelas I</center>
			  						</th>
			  						<th>
			  							<center>KKM Kelas II</center>
			  						</th>
			  						<th>
			  							<center>KKM Kelas III</center>
			  						</th>
			  						<th>
			  							<center>KKM Kelas IV</center>
			  						</th>
			  						<th>
			  							<center>KKM Kelas V</center>
			  						</th>
			  						<th>
			  							<center>KKM Kelas VI</center>
			  						</th>
			  						<th>
			  							<center>Aksi</center>
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<?php
									if (isset($_GET['nohal'])) {
										$nohal = $_GET['nohal'];
									} else {
										$nohal = 1;
									}
									$ph = 5;
									$start = ($nohal - 1) * $ph;
									$no = $start + 1;
									if (isset($_GET["cari"])) {
										$cari = $_GET["cari"];
										$st = "select * from tbpelajaran WHERE nama_pelajaran like '%$cari%' limit $start,$ph";
									} else {
										$st = "select * from tbpelajaran limit $start,$ph";
									}
									$la = mysqli_query($connect, $st);
									while ($da = $la->fetch_array(MYSQLI_ASSOC)) {
									?>
			  						<tr>
			  							<th scope="row"><?= $no; ?></th>
			  							<td><?= $da['nama_pelajaran']; ?></td>
			  							<td>
			  								<center><?= $da['kkm_7']; ?></center>
			  							</td>
			  							<td>
			  								<center><?= $da['kkm_2']; ?></center>
			  							</td>
			  							<td>
			  								<center><?= $da['kkm_3']; ?></center>
			  							</td>
			  							<td>
			  								<center><?= $da['kkm_4']; ?></center>
			  							<td>
			  								<center><?= $da['kkm_5']; ?></center>
			  							</td>
			  							<td>
			  								<center><?= $da['kkm_6']; ?></center>
			  							</td>
			  							<td>
			  								<center>
			  									<a href="index.php?hal=edit_pelajaran&edit=<?php echo $da['id_pelajaran']; ?>" class="label label-primary">Edit</a>
			  									<a href="hapus.php?data=pelajaran&id=<?= $da['id_pelajaran']; ?>" class="label label-warning" onclick="return confirm('Yakin Hapus ini?')">Hapus</a>
			  								</center>
			  							</td>
			  						</tr>
			  					<?php
										$no++;
									}
									$lb = mysqli_query($connect, "select * from tbpelajaran");
									$jd = mysqli_num_rows($lb);
									$jumhal = ceil($jd / $ph);
									?>
			  				</tbody>
			  			</table>
			  		</div>
			  		<?php
						include "pagination.php";
						pagination($jumhal, $nohal, "data_pelajaran");
						?>
			  	</div>
			  </div>