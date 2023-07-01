					<?php
					if (isset($_GET['print'])){
					$nama_file = "siswa_".$_GET['ids'];
					header("Content-type: application/vnd-ms-excel");
					header("Content-Disposition: attachment; filename=aa.xls");
					echo "<h2>Ada</h2>";
					}
					?>
					<br>
					<h4 class="page-header" align="center">LEMBAR BUKU INDUK PESERTA DIDIK SD</h4>
					<br>

					<?php
					$lsiswa = mysqli_query($connect,"select * from tbsiswa,tbkelas where tbsiswa.id_kelas=tbkelas.id_kelas and tbsiswa.id_siswa = '".$_GET['ids']."'");
					$dsiswa = $lsiswa->fetch_array(MYSQLI_ASSOC);
					?>

					<table class="table table-bordered">
					    <tr>
					        <td width="20%">Nomor Induk</td>
					        <td><?=$dsiswa['NIS'];?></td>
					    </tr>
					    <tr>
					        <td>NISN</td>
					        <td><?=$dsiswa['nisn'];?></td>
					    </tr>
					</table>

					<b>A. KETERANGAN PRIBADI SISWA</b>
					<table class="table table-bordered">
					    <tr>
					        <td width="20%">Nama Lengkap</td>
					        <td><?=$dsiswa['nm_lengk_siswa'];?></td>
					    </tr>
					    <tr>
					        <td>Nama Panggilan</td>
					        <td><?=$dsiswa['nm_pang_siswa'];?></td>
					    </tr>
					    <tr>
					        <td>Jenis Kelamin</td>
					        <td><?=$dsiswa['jenis_kelamin'];?></td>
					    </tr>
					    <tr>
					        <td>Tempat dan tanggal lahir</td>
					        <td><?=$dsiswa['tmpt_lhr_siswa'];?> <?=$dsiswa['tgl_lhr_siswa'];?></td>
					    </tr>
					    <tr>
					        <td>Agama</td>
					        <td><?=$dsiswa['agama_siswa'];?></td>
					    </tr>
					    <tr>
					        <td>Anak ke</td>
					        <td><?=$dsiswa['anak_ke'];?></td>
					    </tr>
					    <tr>
					        <td>Jumlah Saudara</td>
					        <td><?=$dsiswa['jml_sdr'];?></td>
					    </tr>
					    <tr>
					        <td>Anak yatim/piatu,yatim piatu</td>
					        <td><?=$dsiswa['anak_yp'];?></td>
					    </tr>
					    <tr>
					        <td>Bahasa sehari-hari dirumah</td>
					        <td><?=$dsiswa['bahasa'];?></td>
					    </tr>
					</table>

					<b>B. KETERANGAN TEMPAT TINGGAL SISWA</b>
					<table class="table table-bordered">
					    <tr>
					        <td>Alamat Peserta Didik</td>
					        <td><?=$dsiswa['alamat_peserta_didik'];?></td>
					    </tr>
					    <tr>
					        <td>Selama bersekolah tinggal dengan</td>
					        <td><?=$dsiswa['tinggal_dg'];?></td>
					    </tr>
					    <tr>
					        <td>Jarak dari tempat tinggal ke sekolah</td>
					        <td><?=$dsiswa['jarak'];?></td>
					    </tr>
					    <tr>
					        <td>Ke sekolah dengan kendaraan / jalan kaki</td>
					        <td><?=$dsiswa['transportasi'];?></td>
					    </tr>
					</table>

					<b>C. KETERANGAN JASMANI DAN KESEHATAN SISWA</b>
					<table class="table table-bordered">
					    <tr>
					        <td>Berat badan pada waktu diterima </td>
					        <td><?=$dsiswa['bb_diterima'];?> kg</td>
					    </tr>
					    <tr>
					        <td>Pada waktu meninggalkan sekolah</td>
					        <td><?=$dsiswa['bb_meninggalkan'];?> kg</td>
					    </tr>
					    <tr>
					        <td>Tinggi badan pada waktu diterima</td>
					        <td><?=$dsiswa['tb_diterima'];?> cm</td>
					    </tr>
					    <tr>
					        <td>Pada waktu meninggalkan sekolah</td>
					        <td><?=$dsiswa['tb_meninggalkan'];?> cm</td>
					    </tr>
					    <tr>
					        <td>Golongan darah</td>
					        <td><?=$dsiswa['goldar'];?></td>
					    </tr>
					</table>

					<b>D. KETERANGAN TENTANG PENDIDIKAN SEBELUMNYA</b>
					<table class="table table-bordered">
					    <tr>
					        <td>Diterima di sekolah ini sebagai siswa baru tanggal</td>
					        <td><?=$dsiswa['tgl_diterima'];?></td>
					    </tr>
					    <tr>
					        <td>Asal Sekolah Dasar</td>
					        <td><?=$dsiswa['asal_sd'];?></td>
					    </tr>
					    <tr>
					        <td>Alamat</td>
					        <td><?=$dsiswa['alamat_sd'];?></td>
					    </tr>
					    <tr>
					        <td>Tanggal dan No.Ijazah</td>
					        <td><?=$dsiswa['tgl_ijazah_sd'];?> . <?=$dsiswa['no_ijazah_sd'];?></td>
					    </tr>
					    <tr>
					        <td>Diterima disekolah sebagai siswa pindahan pada tanggal</td>
					        <td><?=$dsiswa['tgl_diterima_pindahan'];?></td>
					    </tr>
					    <tr>
					        <td>Di kelas</td>
					        <td><?=$dsiswa['kelas_diterima'];?></td>
					    </tr>
					    <td>Asal SD/ No Ijazah</td>
					    <td><?=$dsiswa['asal_no_ijazah_sd_pindahan'];?></td>
					    <tr>
					        <td>Alamat</td>
					        <td><?=$dsiswa['alamat_sd_pindahan'];?></td>
					    </tr>
					    <tr>
					        <td>Alasan pindah ke sekolah ini</td>
					        <td><?=$dsiswa['alasan_pindah'];?></td>
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
					        <td><?=$dsiswa['nama_ayah'];?></td>
					        <td><?=$dsiswa['nama_ibu'];?></td>
					    </tr>
					    <tr>
					        <td>Tempat & tanggal lahir</td>
					        <td><?=$dsiswa['tmpt_lhr_ayah'];?></td>
					        <td><?=$dsiswa['tmpt_lhr_ibu'];?></td>
					    </tr>
					    <tr>
					        <td>Kewarganegaraan</td>
					        <td><?=$dsiswa['tgl_lhr_ayah'];?></td>
					        <td><?=$dsiswa['tgl_lhr_ibu'];?></td>
					    </tr>
					    <tr>
					        <td>Pendidikan Tertinggi</td>
					        <td><?=$dsiswa['pend_ayah'];?></td>
					        <td><?=$dsiswa['pend_ibu'];?></td>
					    </tr>
					    <tr>
					        <td>Pekerjaan</td>
					        <td><?=$dsiswa['pekerjaan_ayah'];?></td>
					        <td><?=$dsiswa['pekerjaan_ibu'];?></td>
					    </tr>
					    <tr>
					        <td>Penghasilan/bulan/tahun</td>
					        <td><?=$dsiswa['penghasilan_ayah'];?></td>
					        <td><?=$dsiswa['penghasilan_ibu'];?></td>
					    </tr>
					    <tr>
					        <td>Alamat</td>
					        <td><?=$dsiswa['alamat_ayah'];?></td>
					        <td><?=$dsiswa['alamat_ibu'];?></td>
					    </tr>
					</table>