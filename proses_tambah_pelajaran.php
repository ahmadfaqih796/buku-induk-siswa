<?php
include "koneksi.php";

$nama_pelajaran = $_POST['nama_pelajaran'];
$kkm_1 = $_POST['kkm_1'];
$kkm_2 = $_POST['kkm_2'];
$kkm_3 = $_POST['kkm_3'];
$kkm_4 = $_POST['kkm_4'];
$kkm_5 = $_POST['kkm_5'];
$kkm_6 = $_POST['kkm_6'];

$simpan = mysqli_query($connect, "INSERT INTO tbpelajaran values ('','$nama_pelajaran','$kkm_1','$kkm_2','$kkm_3','$kkm_4','$kkm_5','$kkm_6', '', '', '', '')");
if ($simpan) {
	echo "<script>alert('Tambah Data Pelajaran Berhasil!');
	document.location='index.php?hal=data_pelajaran'</script>";
} else {
	echo "<script>alert('Tambah Data Pelajaran Gagal!');
	document.location='index.php?hal=tambah_pelajaran'</script>";
}
