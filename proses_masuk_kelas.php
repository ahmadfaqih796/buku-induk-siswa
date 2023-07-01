<?php
include "koneksi.php";
error_reporting(0);
if(isset($_POST["idk"]) && isset($_POST["ids"])){
	$idk = $_POST['idk'];
	$ids = $_POST['ids'];
	$lb = mysqli_query($connect, "select * from tbsiswa where idk=$idk ");
	$jd = mysqli_num_rows($lb);

	if ($jd >= 20) {
	echo"<script>alert('Kelas Penuh')
		document.location='index.php?hal=pilih_siswa'</script>";
	}else{
	foreach ($ids as $id){
		mysqli_query($connect,"update tbsiswa set id_kelas = '$idk' where id_siswa = '$id'");
	}
	header("location:index.php?hal=masuk_kelas&idk=".$idk);
	}
}else{
	echo"<script>alert('Mohon maaf, anda belum memilih siswa !')
		document.location='index.php?hal=pilih_siswa'</script>";
}
?>