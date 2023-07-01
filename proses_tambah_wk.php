<?php
include "koneksi.php";

$nip_nuptk = $_POST['nip_nuptk'];
$nama_wk = $_POST['nama_wk'];
$tmpt_lhr = $_POST['tmpt_lhr'];
$tgl_lhr = $_POST['tgl_lhr'];
$id_kelas = $_POST['id_kelas'];
$id_thpelajaran = $_POST['id_thpelajaran'];

$simpan = mysqli_query($connect, "insert into tbwali_kelas values ('','$nip_nuptk','$nama_wk','$tmpt_lhr','$tgl_lhr','$id_kelas','$id_thpelajaran')");
if ($simpan){
	echo "<script>alert('Tambah Data Wali Kelas Berhasil!');
	document.location='index.php?hal=data_wakel'</script>";
} else {
	echo "<script>alert('Tambah Data Wali Kelas Gagal!');
	document.location='index.php?hal=tambah_wali_kelas'</script>";
}
?>