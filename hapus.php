<?php
include "koneksi.php";
$id = $_GET['id'];

if (isset($_GET['data']) and ($_GET['data'] == "admin")){
	mysqli_query($connect,"delete from tbadmin where id_admin = '$id'");
	header("location:index.php?hal=data_admin");
	
} elseif (isset($_GET['data']) and ($_GET['data'] == "siswa")){
	mysqli_query($connect,"delete from tbsiswa where id_siswa = '$id'");
	header("location:index.php?hal=data_siswa");
	
} elseif (isset($_GET['data']) and ($_GET['data'] == "wakel")){
	mysqli_query($connect,"delete from tbwali_kelas where username = '$id'");
	header("location:index.php?hal=data_wakel");
	
} elseif (isset($_GET['data']) and ($_GET['data'] == "pelajaran")){
	mysqli_query($connect,"delete from tbpelajaran where id_pelajaran = '$id'");
	header("location:index.php?hal=data_pelajaran");
	
} elseif (isset($_GET['data']) and ($_GET['data'] == "th_pelajaran")){
	mysqli_query($connect,"delete from tbth_pelajaran where id_thpelajaran = '$id'");
	header("location:index.php?hal=data_tahun_pel");
	
}elseif (isset($_GET['data']) and ($_GET['data'] == "kelas")){
	mysqli_query($connect,"delete from tbkelas where id_kelas = '$id'");
	header("location:index.php?hal=data_kelas");
}
?>