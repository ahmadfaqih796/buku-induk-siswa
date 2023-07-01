<?php
include "koneksi.php";

$kls = $_POST['kelas'];
$ruang = strtoupper($_POST['ruang']);
$ruang_kelas = $kls." ".$ruang;

$lkelas = mysqli_query($connect,"select * from tbkelas where kelas='$kls' and ruang='$ruang'");
$jkelas = mysqli_num_rows($lkelas);

if ($jkelas > 0){
	echo "<script>alert('Kelas Suda Ada!');
	document.location='index.php?hal=tambah_data_kelas'</script>";
} else {
	$simpan = mysqli_query($connect,"insert into tbkelas values ('','$kls','$ruang','$ruang_kelas')");
}

if ($simpan){
	echo "<script>alert('Tambah Data Kelas Berhasil!');
	document.location='index.php?hal=data_kelas'</script>";
} else {
	echo "<script>alert('Tambah Data Kelas Gagal!');
	document.location='index.php?hal=tambah_data_kelas'</script>";
}
?>