			  <div class="card">
			  	<div class="card-header">
			  		<h4><?= getAddress(); ?></h4>
			  	</div>
			  	<div class="card-body">
			  		<?php
						// $lsiswa = mysqli_query($connect, "select * from tbsiswa,tbkelas where tbsiswa.id_kelas=tbkelas.id_kelas and tbsiswa.id_siswa = '" . $_GET['edit'] . "'");
						$lsiswa = mysqli_query($connect, "select * from tbsiswa where tbsiswa.id_siswa = '" . $_GET['edit'] . "'");
						$dsiswa = $lsiswa->fetch_array(MYSQLI_ASSOC);
						?>
			  		<form method="post" action="proses_edit_siswa.php?ids=<?php echo $dsiswa['id_siswa']; ?>">
			  			<table class="table table-bordered">

			  				<tr>
			  					<td>NISN</td>
			  					<td><input type="text" class="form-control" name="nisn" value="<?= $dsiswa['nisn']; ?>"></td>
			  				</tr>
			  			</table>

			  			<b>A. KETERANGAN PRIBADI SISWA</b>
			  			<table class="table table-bordered">
			  				<tr>
			  					<td width="20%">Nama Lengkap</td>
			  					<td><input type="text" class="form-control" name="nm_lengk_siswa" value="<?= $dsiswa['nm_lengk_siswa']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Nama Panggilan</td>
			  					<td><input type="text" class="form-control" name="nm_pang_siswa" value="<?= $dsiswa['nm_pang_siswa']; ?>">
			  					</td>
			  				</tr>
			  				<tr>
			  					<td>Jenis Kelamin</td>
			  					<td><input type="text" class="form-control" name="jk" value="<?= $dsiswa['jenis_kelamin']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Tempat dan tanggal lahir</td>
			  					<td><input type="text" class="form-control" name="tempat_lahir" value="<?= $dsiswa['tmpt_lhr_siswa']; ?>">
			  					<td><input type="text" class="form-control" name="tgl_lahir" value="<?= $dsiswa['tgl_lhr_siswa']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Agama</td>
			  					<td><input type="text" class="form-control" name="agama" value="<?= $dsiswa['agama_siswa']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Anak ke</td>
			  					<td><input type="text" class="form-control" name="anak_ke" value="<?= $dsiswa['anak_ke']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Jumlah Saudara</td>
			  					<td><input type="text" class="form-control" name="jml_sdr" value="<?= $dsiswa['jml_sdr']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Anak yatim/piatu,yatim piatu</td>
			  					<td><input type="text" class="form-control" name="anak_yp" value="<?= $dsiswa['anak_yp']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Bahasa sehari-hari dirumah</td>
			  					<td><input type="text" class="form-control" name="bahasa" value="<?= $dsiswa['bahasa']; ?>"></td>
			  				</tr>
			  			</table>

			  			<b>B. KETERANGAN TEMPAT TINGGAL SISWA</b>
			  			<table class="table table-bordered">
			  				<tr>
			  					<td>Alamat Peserta Didik</td>
			  					<td><input type="text" class="form-control" name="alamat_peserta_didik" value="<?= $dsiswa['alamat_peserta_didik']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Selama bersekolah tinggal dengan</td>
			  					<td><input type="text" class="form-control" name="tinggal_dg" value="<?= $dsiswa['tinggal_dg']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Jarak dari tempat tinggal ke sekolah</td>
			  					<td><input type="text" class="form-control" name="jarak" value="<?= $dsiswa['jarak']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Ke sekolah dengan kendaraan / jalan kaki</td>
			  					<td><input type="text" class="form-control" name="transportasi" value="<?= $dsiswa['transportasi']; ?>"></td>
			  				</tr>
			  			</table>

			  			<b>C. KETERANGAN JASMANI DAN KESEHATAN SISWA</b>
			  			<table class="table table-bordered">
			  				<tr>
			  					<td>Berat badan pada waktu diterima </td>
			  					<td><input type="text" class="form-control" name="bb_diterima" value="<?= $dsiswa['bb_diterima']; ?>"> kg</td>
			  				</tr>
			  				<tr>
			  					<td>Pada waktu meninggalkan sekolah</td>
			  					<td><input type="text" class="form-control" name="bb_meninggalkan" value="<?= $dsiswa['bb_meninggalkan']; ?>"> kg</td>
			  				</tr>
			  				<tr>
			  					<td>Tinggi badan pada waktu diterima</td>
			  					<td><input type="text" class="form-control" name="tb_diterima" value="<?= $dsiswa['tb_diterima']; ?>"> cm</td>
			  				</tr>
			  				<tr>
			  					<td>Pada waktu meninggalkan sekolah</td>
			  					<td><input type="text" class="form-control" name="tb_meninggalkan" value="<?= $dsiswa['tb_meninggalkan']; ?>"> cm</td>
			  				</tr>
			  				<tr>
			  					<td>Golongan darah</td>
			  					<td><input type="text" class="form-control" name="goldar" value="<?= $dsiswa['goldar']; ?>"></td>
			  				</tr>
			  			</table>

			  			<b>D. KETERANGAN TENTANG PENDIDIKAN SEBELUMNYA</b>
			  			<table class="table table-bordered">
			  				<tr>
			  					<td>Diterima di sekolah ini sebagai siswa baru tanggal</td>
			  					<td><input type="text" class="form-control" name="tgl_diterima" value="<?= $dsiswa['tgl_diterima']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Asal Sekolah Dasar</td>
			  					<td><input type="text" class="form-control" name="asal_sd" value="<?= $dsiswa['asal_sd']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Alamat</td>
			  					<td><input type="text" class="form-control" name="alamat_sd" value="<?= $dsiswa['alamat_sd']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Tanggal dan No.Ijazah</td>
			  					<td><input type="text" class="form-control" name="tgl_ijazah_sd" value="<?= $dsiswa['tgl_ijazah_sd']; ?>"> . <input type="text" class="form-control" name="agama_siswa" value="<?= $dsiswa['no_ijazah_sd']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Diterima disekolah sebagai siswa pindahan pada tanggal</td>
			  					<td><input type="text" class="form-control" name="tgl_diterima_pindahan" value="<?= $dsiswa['tgl_diterima_pindahan']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Di kelas</td>
			  					<td><input type="text" class="form-control" name="kelas_diterima" value="<?= $dsiswa['kelas_diterima']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Dari SMP</td>
			  					<td><input type="text" class="form-control" name="dari_smp" value="<?= $dsiswa['dari_smp']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Alamat SMP</td>
			  					<td><input type="text" class="form-control" name="alamat_smp" value="<?= $dsiswa['alamat_smp']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Asal SD/ No Ijazah</td>
			  					<td><input type="text" class="form-control" name="asal_no_ijazah_sd_pindahan" value="<?= $dsiswa['asal_no_ijazah_sd_pindahan']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Alamat</td>
			  					<td><input type="text" class="form-control" name="alamat_sd_pindahan" value="<?= $dsiswa['alamat_sd_pindahan']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Alasan pindah ke sekolah ini</td>
			  					<td><input type="text" class="form-control" name="alasan_pindah" value="<?= $dsiswa['alasan_pindah']; ?>"></td>
			  				</tr>
			  			</table>

			  			<b>E. KETERANGAN TENTANG ORANG TUA KANDUNG</b>
			  			<table class="table table-bordered">
			  				<tr>
			  					<th>Data Orang Tua Kandung</th>
			  					<th>Ayah</th>
			  					<th>Ibu</th>
			  				</tr>
			  				<tr>
			  					<td>Nama</td>
			  					<td><input type="text" class="form-control" name="nm_ayah" value="<?= $dsiswa['nama_ayah']; ?>"></td>
			  					<td><input type="text" class="form-control" name="nm_ibu" value="<?= $dsiswa['nama_ibu']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Tempat & tanggal lahir</td>
			  					<td><input type="text" class="form-control" name="tmpt_lhr_ayah" value="<?= $dsiswa['tmpt_lhr_ayah']; ?>"></td>
			  					<td><input type="text" class="form-control" name="tmpt_lhr_ibu" value="<?= $dsiswa['tmpt_lhr_ibu']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Kewarganegaraan</td>
			  					<td><input type="text" class="form-control" name="tgl_lhr_ayah" value="<?= $dsiswa['tgl_lhr_ayah']; ?>"></td>
			  					<td><input type="text" class="form-control" name="tgl_lhr_ibu" value="<?= $dsiswa['tgl_lhr_ibu']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Pendidikan Tertinggi</td>
			  					<td><input type="text" class="form-control" name="pnd_ayah" value="<?= $dsiswa['pend_ayah']; ?>"></td>
			  					<td><input type="text" class="form-control" name="pnd_ibu" value="<?= $dsiswa['pend_ibu']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Pekerjaan</td>
			  					<td><input type="text" class="form-control" name="pekerjaan_ayah" value="<?= $dsiswa['pekerjaan_ayah']; ?>"></td>
			  					<td><input type="text" class="form-control" name="pekerjaan_ibu" value="<?= $dsiswa['pekerjaan_ibu']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Penghasilan/bulan/tahun</td>
			  					<td><input type="text" class="form-control" name="penghasilan_ayah" value="<?= $dsiswa['penghasilan_ayah']; ?>"></td>
			  					<td><input type="text" class="form-control" name="penghasilan_ibu" value="<?= $dsiswa['penghasilan_ibu']; ?>"></td>
			  				</tr>
			  				<tr>
			  					<td>Alamat</td>
			  					<td><input type="text" class="form-control" name="alamat_ayah" value="<?= $dsiswa['alamat_ayah']; ?>"></td>
			  					<td><input type="text" class="form-control" name="alamat_ibu" value="<?= $dsiswa['alamat_ibu']; ?>"></td>
			  				</tr>
			  			</table>
			  			<div class="form-group">
			  				<input type="submit" class="btn btn-primary" value="Edit">
			  				<input type="reset" class="btn btn-danger" value="Batal">
			  			</div>
			  			</fieldset>
			  		</form>
			  	</div>
			  </div>