<?php
include "koneksi.php";

$nisn = $_POST['nisn'];
$nm_lengk_siswa = $_POST['nm_lengk_siswa'];
$nm_pang_siswa = $_POST['nm_pang_siswa'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$anak_ke = $_POST['anak_ke'];
$jml_sdr = $_POST['jml_sdr'];
$anak_yp = $_POST['anak_yp'];
$bahasa = $_POST['bahasa'];
$alamat_peserta_didik = $_POST['alamat_peserta_didik'];
$tinggal_dg = $_POST['tinggal_dg'];
$jarak = $_POST['jarak'];
$transportasi = $_POST['transportasi'];
$bb_diterima = $_POST['bb_diterima'];
$bb_meninggalkan = $_POST['bb_meninggalkan'];
$tb_diterima = $_POST['tb_diterima'];
$tb_meninggalkan = $_POST['tb_meninggalkan'];
$goldar = $_POST['goldar'];
$kelainan = $_POST['kelainan'];
$tgl_diterima = $_POST['tgl_diterima'];
$asal_sd = $_POST['asal_sd'];
$alamat_sd = $_POST['alamat_sd'];
$tgl_ijazah_sd = $_POST['tgl_ijazah_sd'];
$no_ijazah_sd = $_POST['no_ijazah_sd'];
$tgl_diterima_pindahan = $_POST['tgl_diterima_pindahan'];
$kelas_diterima = $_POST['kelas_diterima'];
$dari_smp = $_POST['dari_smp'];
$alamat_smp = $_POST['alamat_smp'];
$asal_no_ijazah_sd_pindahan = $_POST['asal_no_ijazah_sd_pindahan'];
$alamat_sd_pindahan = $_POST['alamat_sd_pindahan'];
$alasan_pindah = $_POST['alasan_pindah'];
$nm_ayah = $_POST['nm_ayah'];
$tmpt_lhr_ayah = $_POST['tmpt_lhr_ayah'];
$tgl_lhr_ayah = $_POST['tgl_lhr_ayah'];
$kwn_ayah = $_POST['kwn_ayah'];
$pnd_ayah = $_POST['pnd_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$penghasilan_ayah = $_POST['penghasilan_ayah'];
$alamat_ayah = $_POST['alamat_ayah'];
$nm_ibu = $_POST['nm_ibu'];
$tmpt_lhr_ibu = $_POST['tmpt_lhr_ibu'];
$tgl_lhr_ibu = $_POST['tgl_lhr_ibu'];
$kwn_ibu = $_POST['kwn_ibu'];
$pnd_ibu = $_POST['pnd_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_ibu = $_POST['penghasilan_ibu'];
$alamat_ibu = $_POST['alamat_ibu'];


$simpan = mysqli_query($connect, "insert into tbsiswa values ('','',
'$nisn',
'$nm_lengk_siswa',
'$nm_pang_siswa',
'$jk',
'$tempat_lahir',
'$tgl_lahir',
'$agama',
'$anak_ke',
'$jml_sdr',
'$anak_yp',
'$bahasa',
'$alamat_peserta_didik',
'$tinggal_dg',
'$jarak',
'$transportasi',
'$bb_diterima',
'$bb_meninggalkan',
'$tb_diterima',
'$tb_meninggalkan',
'$goldar',
'$kelainan',
'$tgl_diterima',
'$asal_sd',
'$alamat_sd',
'$tgl_ijazah_sd',
'$no_ijazah_sd',
'$tgl_diterima_pindahan',
'$kelas_diterima',
'$dari_smp',
'$alamat_smp',
'$asal_no_ijazah_sd_pindahan',
'$alamat_sd_pindahan',
'$alasan_pindah',
'$nm_ayah',
'$tmpt_lhr_ayah',
'$tgl_lhr_ayah',
'$kwn_ayah',
'$pnd_ayah',
'$pekerjaan_ayah',
'$penghasilan_ayah',
'$alamat_ayah',
'$nm_ibu',
'$tmpt_lhr_ibu',
'$tgl_lhr_ibu',
'$kwn_ibu',
'$pnd_ibu',
'$pekerjaan_ibu',
'$penghasilan_ibu',
'$alamat_ibu',
' '
)");

if ($simpan) {
	echo "<script>alert('Tambah Data Siswa Berhasil!');
	document.location='index.php?hal=data_siswa'</script>";
} else {
	echo "<script>alert('Tambah Data Siswa Gagal!');
	document.location='index.php?hal=tambah_data_siswa'</script>";
}
