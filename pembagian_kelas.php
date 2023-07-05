			  <div class="card">
			  	<div class="card-header">
			  		<h4><?= getAddress(); ?></h4>
			  	</div>
			  	<div class="card-body">
			  		<div class="container">
			  			<div class="row">
			  				<div class="col-12 col-sm-4">
			  					<h2 class="page-header">Kelas I</h2>
			  					<?php
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='I' ORDER BY ruang");
									while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)) {
									?>
			  						<div class="bagi-kelas text-center">
			  							<a href="index.php?hal=masuk_kelas&idk=<?= $dkelas1['id_kelas']; ?>">
			  								<i class="fa fa-user fa-3x"></i>
			  								<br>
			  								<?= $dkelas1['ruang']; ?>
			  							</a>
			  						</div>
			  					<?php } ?>
			  				</div>
			  				<div class="col-12 col-sm-4">
			  					<h2 class="page-header">Kelas II</h2>
			  					<?php
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='II' ORDER BY ruang");
									while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)) {
									?>
			  						<div class="bagi-kelas text-center">
			  							<a href="index.php?hal=masuk_kelas&idk=<?= $dkelas1['id_kelas']; ?>">
			  								<i class="fa fa-user fa-3x"></i>
			  								<br>
			  								<?= $dkelas1['ruang']; ?>
			  							</a>
			  						</div>
			  					<?php } ?>
			  				</div>
			  				<div class="col-12 col-sm-4">
			  					<h2 class="page-header">Kelas III</h2>
			  					<?php
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='III' ORDER BY ruang");
									while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)) {
									?>
			  						<div class="bagi-kelas text-center">
			  							<a href="index.php?hal=masuk_kelas&idk=<?= $dkelas1['id_kelas']; ?>">
			  								<i class="fa fa-user fa-3x"></i>
			  								<br>
			  								<?= $dkelas1['ruang']; ?>
			  							</a>
			  						</div>
			  					<?php } ?>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-12 col-sm-4">
			  					<h2 class="page-header">Kelas IV</h2>
			  					<?php
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='IV' ORDER BY ruang");
									while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)) {
									?>
			  						<div class="bagi-kelas text-center">
			  							<a href="index.php?hal=masuk_kelas&idk=<?= $dkelas1['id_kelas']; ?>">
			  								<i class="fa fa-user fa-3x"></i>
			  								<br>
			  								<?= $dkelas1['ruang']; ?>
			  							</a>
			  						</div>
			  					<?php } ?>
			  				</div>
			  				<div class="col-12 col-sm-4">
			  					<h2 class="page-header">Kelas V</h2>
			  					<?php
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='V' ORDER BY ruang");
									while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)) {
									?>
			  						<div class="bagi-kelas text-center">
			  							<a href="index.php?hal=masuk_kelas&idk=<?= $dkelas1['id_kelas']; ?>">
			  								<i class="fa fa-user fa-3x"></i>
			  								<br>
			  								<?= $dkelas1['ruang']; ?>
			  							</a>
			  						</div>
			  					<?php } ?>
			  				</div>
			  				<div class="col-12 col-sm-4">
			  					<h2 class="page-header">Kelas VI</h2>
			  					<?php
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='VI' ORDER BY ruang");
									while ($dkelas1 = $lkelas1->fetch_array(MYSQLI_ASSOC)) {
									?>
			  						<div class="bagi-kelas text-center">
			  							<a href="index.php?hal=masuk_kelas&idk=<?= $dkelas1['id_kelas']; ?>">
			  								<i class="fa fa-user fa-3x"></i>
			  								<br>
			  								<?= $dkelas1['ruang']; ?>
			  							</a>
			  						</div>
			  					<?php } ?>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  </div>