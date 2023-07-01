<?php
include "koneksi.php";

$nip_nuptk = $_POST['nip_nuptk'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tmp = $_POST['tempat'];
$tgl = $_POST['tgl'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];

$simpan = mysqli_query($connect,"insert into tbadmin values ('','$nip_nuptk','$nama','$jk','$tmp','$tgl','$email','$user','$pass','$level')");
if ($level == "Wali Kelas"){
	$wali = mysqli_query($connect,"insert into tbwali_kelas values ('','$user','')");
}

if ($simpan){
	echo "<script>alert('Tambah Data Admin Berhasil!');
	document.location='index.php?hal=data_admin'</script>";
} else {
	echo "<script>alert('Tambah Data Admin Gagal!');
	document.location='index.php?hal=tambah_data_admin'</script>";
}
?>