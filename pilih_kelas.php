			  <div class="card">
                <div class="card-header">
                  <h4><?=getAddress();?></h4>
                </div>
                <div class="card-body">
				
				<h2 class="page-header">Kelas VII</h2>
				<div class="row">
				<?php 
				$lkelas1 = mysqli_query($connect,"select * from tbkelas where kelas ='VII' and id_kelas not in (select id_kelas from tbwali_kelas)");
				while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)){
				?>
					<div class="col-md-3 bagi-kelas" align="center">
					<a href="proses_pilih_kelas.php?username=<?=$_GET['username'];?>&idk=<?=$dkelas1['id_kelas'];?>">
					<i class="fa fa-home fa-3x"></i>
					<br>
					<?=$dkelas1['ruang'];?>
					</a>
					</div>
				<?php } ?>
				</div>
				<br><hr>
				
				<h2 class="page-header">Kelas VIII</h2>
				<div class="row">
				<?php 
				$lkelas1 = mysqli_query($connect,"select * from tbkelas where kelas ='VIII' and id_kelas not in (select id_kelas from tbwali_kelas)");
				while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)){
				?>
					<div class="col-md-3 bagi-kelas" align="center">
					<a href="proses_pilih_kelas.php?username=<?=$_GET['username'];?>&idk=<?=$dkelas1['id_kelas'];?>">
					<i class="fa fa-home fa-3x"></i>
					<br>
					<?=$dkelas1['ruang'];?>
					</a>
					</div>
				<?php } ?>
				</div>
				<br><hr>
				
				<h2 class="page-header">Kelas IX</h2>
				<div class="row">
				<?php 
				$lkelas1 = mysqli_query($connect,"select * from tbkelas where kelas ='IX' and id_kelas not in (select id_kelas from tbwali_kelas)");
				while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)){
				?>
					<div class="col-md-3 bagi-kelas" align="center">
					<a href="proses_pilih_kelas.php?username=<?=$_GET['username'];?>&idk=<?=$dkelas1['id_kelas'];?>">
					<i class="fa fa-home fa-3x"></i>
					<br>
					<?=$dkelas1['ruang'];?>
					</a>
					</div>
				<?php } ?>
				</div>
				<br><hr>
				
				</div>
              </div>