					<br>
					<table class="table table-bordered">
						<tr>
							<td>Semester</td>
							<td>
								<form method="post" action="print_data_nilai.php?&semester=3&ids=<?= $_GET['ids']; ?>&print=ok" class="d-flex justify-content-between align-items-center">
									<input type="hidden" name="ids" id="ids" value="<?= $_GET['ids']; ?>">
									<select name="semester" class="form-control" id="pilih-semester" style="width:70px">
										<?php
										for ($i = 1; $i <= 6; $i++) {
											$ls = mysqli_query($connect, "select * from tbnilai,tbsiswa where tbnilai.id_siswa=tbsiswa.id_siswa and tbnilai.semester='$i' AND tbsiswa.id_siswa=" . $_GET['ids'] . "");
											$js = mysqli_num_rows($ls);
											if ($js !== 0) {
										?>
												<option><?= $i; ?></option>
										<?php
											}
										}
										?>
									</select>
									<!-- <select name="semester" class="form-control" id="pilih-semester" style="width:70px">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select> -->
									<button type="submit" style="padding:10px;border:1px solid #aaa;border-radius:4px;">
										<i class="fa fa-print"></i>
									</button>
								</form>
							</td>
						</tr>
					</table>

					<div class="box-nilai-siswa">
						<?php include "ambil_nilai_siswa.php"; ?>
					</div>