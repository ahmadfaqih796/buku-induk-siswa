			  <div class="card">
                <div class="card-header">
                  <h4><?=getAddress();?></h4>
                </div>
                <div class="card-body">
				
				<h2 class="page-header">Kelas VII</h2>
				<div class="row">
				<?php 
				$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='VII'");
				while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)){
				?>
					<div class="col-md-3 bagi-kelas" align="center">
					<a href="index.php?hal=masuk_kelas&idk=<?=$dkelas1['id_kelas'];?>">
					<i class="fa fa-user fa-3x"></i>
					<br>
					<?=$dkelas1['ruang'];?>
					</a>
					</div>
				<?php } ?>
				</div>
				<br><hr>
				
				</div>
              </div>