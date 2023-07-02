			<?php
			error_reporting(0);
			$lk = mysqli_query($connect, "select * from tbkelas where id_kelas = '" . $_GET['idk'] . "'");
			$dk = $lk->fetch_array(MYSQLI_ASSOC);

			$lb = mysqli_query($connect, "select * from tbsiswa where id_kelas='0'");
			$jd = mysqli_num_rows($lb);

			$thn_ajar = date("y") . date("y") + 1;

			$lns = mysqli_query($connect, "select right(NIS,3) as niss from tbsiswa order by NIS Desc");
			$dns = $lns->fetch_array(MYSQLI_ASSOC);

			$lnis = mysqli_query($connect, "select right(NIS,3) as niss from tbsiswa where id_kelas = '" . $_GET['idk'] . "' order by NIS Desc");
			$dnis = $lnis->fetch_array(MYSQLI_ASSOC);

			if ($dnis['niss'] == "" and $dns['niss'] != "") {
				$nis_tmp = $thn_ajar . "07" . $dns['niss'] + 1;
			} else if ($dns['niss'] == "") {
				$nis_tmp = $thn_ajar . "07001";
			}
			?>
			<div class="card">
				<div class="card-header">
					<h4><?= getAddress(); ?> <?= $dk['kelas']; ?> <?= $dk['ruang']; ?></h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nis</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Tanggal Lahir</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;

								$la = mysqli_query($connect, "select * from tbsiswa where id_kelas = '" . $_GET['idk'] . "' order by nm_lengk_siswa Asc");
								while ($da = $la->fetch_array(MYSQLI_ASSOC)) {
								?>
									<tr>
										<th scope="row"><?= $no; ?></th>
										<?php if (isset($_GET['bagi_nis'])) { ?>
											<td>
												<input type="hidden" value="<?= $da['id_siswa']; ?>" name="id[]">
												<input type="text" value="<?= $nis_tmp++; ?>" name="nis[]" class="form-control" size="2">
											</td>
										<?php } elseif ($da['NIS'] != "") { ?>
											<td><?= $da['NIS']; ?></td>
										<?php } else { ?>
											<td>-</td>
										<?php } ?>
										<td><?= $da['nm_lengk_siswa']; ?></td>
										<td><?= $da['jenis_kelamin']; ?></td>
										<td><?= $da['tmpt_lhr_siswa']; ?>, <?= $da['tgl_lhr_siswa']; ?></td>
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