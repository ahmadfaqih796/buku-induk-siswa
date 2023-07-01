<div class="card">
    <div class="card-header">
        <h4><small><a href="index.php?hal=tambah_wakel" class="btn btn-primary"><i class="fa fa-plus"></i></a></small>
            <?=getAddress();?></h4>
    </div>
    <div class="card-body">
        <form method="get" action="">
            <div class="form-group">
                <input type="hidden" name="hal" value="data_WaliKelas">
                <input type="text" name="cari" placeholder="Masukan kata kunci..." class="form-control">
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP/NUPTK</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th width="15%">Aksi</th>
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
					  
					if(isset($_GET["cari"])){
						$cari = $_GET["cari"];
						$st="SELECT twk.*, tba.*, tbk.ruang_kelas from tbwali_kelas As twk
							 INNER JOIN tbadmin AS tba ON tba.username=twk.username
							 INNER JOIN tbkelas AS tbk ON tbk.id_kelas=twk.id_kelas
							 WHERE twk.username LIKE '%$cari%' OR tbk.ruang_kelas like '%$cari%' limit $start,$ph
							";
						$la = mysqli_query($connect, $st);
					}else{
						$st="SELECT twk.*, tba.*, tbk.ruang_kelas, tbk.ruang from tbwali_kelas As twk
							 INNER JOIN tbadmin AS tba ON tba.username=twk.username
							 INNER JOIN tbkelas AS tbk ON tbk.id_kelas=twk.id_kelas limit $start,$ph
							";
						$la = mysqli_query($connect, $st);
					}
					  	while ($da = $la->fetch_array(MYSQLI_ASSOC)){
					  ?>
                    <tr>
                        <th scope="row"><?=$no;?></th>
                        <td><?=$da['nip_nuptk'];?></td>
                        <td><?=$da['nama_lengkap'];?></td>
                        <td><?=$da['tempat_lahir'];?>, <?=$da['tgl_lahir'];?></td>
                        <td><?=$da['ruang_kelas'];?></td>
                        <td>
                            <a href="index.php?hal=pilih_kelas&username=<?php echo $da['username'];?>"
                                class="label label-primary">Pilih Kelas</a>
                            <a href="hapus.php?data=WaliKelas&id=<?=$da['username'];?>" class="label label-warning"
                                onclick="return confirm('Yakin Hapus ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
					  $no++;
					  }
					  $lb = mysqli_query($connect,"select * from tbwali_kelas");
					  $jd = mysqli_num_rows($lb);
					  $jumhal = ceil($jd/$ph);
					  ?>
                </tbody>
            </table>
        </div>
        <?php
				  include "pagination.php";
				  pagination($jumhal,$nohal,"data_WaliKelas");
				  ?>
    </div>
</div>