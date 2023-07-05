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
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='I'");
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
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='II'");
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
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='III'");
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
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='IV'");
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
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='V'");
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
									$lkelas1 = mysqli_query($connect, "select * from tbkelas where kelas ='VI'");
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