<?php
include"koneksi.php";
$ik=$_GET['ik'];
$kelas=$_POST['kelas'];
$ruang=$_POST['ruang'];
$ubah=mysqli_query($connect,"UPDATE tbkelas set kelas='$kelas', ruang='$ruang' where id_kelas='$ik'") or die (mysqli_error());
if ($ubah)
{
	header("location:index.php?hal=data_kelas&berhasil=ok");
}
else
{
	echo"<script>alert('Data Gagal Diubah')
	document.location='index.php?hal=data_kelas'</script>";
}
?>