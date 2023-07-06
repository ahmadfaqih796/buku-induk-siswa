<?php
include"koneksi.php";
$ids=$_GET['ids'];
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
$tgl_diterima = $_POST['tgl_diterima'];
$asal_sd = $_POST['asal_sd'];
$alamat_sd = $_POST['alamat_sd'];
$tgl_ijazah_sd = $_POST['tgl_ijazah_sd'];
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
$pnd_ayah = $_POST['pnd_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$penghasilan_ayah = $_POST['penghasilan_ayah'];
$alamat_ayah = $_POST['alamat_ayah'];
$nm_ibu = $_POST['nm_ibu'];
$tmpt_lhr_ibu = $_POST['tmpt_lhr_ibu'];
$tgl_lhr_ibu = $_POST['tgl_lhr_ibu'];
$pnd_ibu = $_POST['pnd_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_ibu = $_POST['penghasilan_ibu'];
$alamat_ibu = $_POST['alamat_ibu'];

$ubah=mysqli_query($connect,"UPDATE tbsiswa set 
nisn='$nisn',
nm_lengk_siswa='$nm_lengk_siswa',
nm_pang_siswa='$nm_pang_siswa',
jenis_kelamin='$jk',
tmpt_lhr_siswa='$tempat_lahir',
tgl_lhr_siswa='$tgl_lahir',
agama_siswa='$agama',
anak_ke='$anak_ke',
jml_sdr='$jml_sdr',
anak_yp='$anak_yp',
bahasa='$bahasa',
alamat_peserta_didik='$alamat_peserta_didik',
tinggal_dg='$tinggal_dg',
jarak='$jarak',
transportasi='$transportasi',
bb_diterima='$bb_diterima',
bb_meninggalkan='$bb_meninggalkan',
tb_diterima='$tb_diterima',
tb_meninggalkan='$tb_meninggalkan',
goldar='$goldar',
tgl_diterima='$tgl_diterima',
asal_sd='$asal_sd',
alamat_sd='$alamat_sd',
tgl_ijazah_sd='$tgl_ijazah_sd',
tgl_diterima_pindahan='$tgl_diterima_pindahan',
kelas_diterima='$kelas_diterima',
dari_smp='$dari_smp',
alamat_smp='$alamat_smp',
asal_no_ijazah_sd_pindahan='$asal_no_ijazah_sd_pindahan',
alamat_sd_pindahan='$alamat_sd_pindahan',
alasan_pindah='$alasan_pindah',
nama_ayah='$nm_ayah',
tmpt_lhr_ayah='$tmpt_lhr_ayah',
tgl_lhr_ayah='$tgl_lhr_ayah',
pend_ayah='$pnd_ayah',
pekerjaan_ayah='$pekerjaan_ayah',
penghasilan_ayah='$penghasilan_ayah',
alamat_ayah='$alamat_ayah',
nama_ibu='$nm_ibu',
tmpt_lhr_ibu='$tmpt_lhr_ibu',
tgl_lhr_ibu='$tgl_lhr_ibu',
pend_ibu='$pnd_ibu',
pekerjaan_ibu='$pekerjaan_ibu',
penghasilan_ibu='$penghasilan_ibu',
alamat_ibu='$alamat_ibu' where id_siswa='$ids'");
if ($ubah)
{
	header("location:index.php?hal=data_siswa&berhasil=ok");
}
else
{
	echo"<script>alert('Data Gagal Diubah')
	document.location='index.php?hal=data_siswa'</script>";
}
