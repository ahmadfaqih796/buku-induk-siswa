<?php
include "koneksi.php";

$user = $_GET['username'];
$idk = $_GET['idk'];

$edit = mysqli_query($connect,"update tbwali_kelas set id_kelas = '$idk' where username='$user'");

if ($edit){
	echo "<script>alert('Pemilihan Kelas Berhasil!');
	document.location='index.php?hal=data_wakel'</script>";
} else {
	echo "<script>alert('Pemilihan Kelas Gagal!');
	document.location='index.php?hal=pilih_kelas&username=$user'</script>";
}