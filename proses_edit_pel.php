<?php
include"koneksi.php";

$idp=$_GET['idp'];
$nama_pelajaran = $_POST['nama_pelajaran'];
$kkm_1 = $_POST['kkm_1'];
$kkm_2 = $_POST['kkm_2'];
$kkm_3 = $_POST['kkm_3'];
$kkm_4 = $_POST['kkm_4'];
$kkm_5 = $_POST['kkm_5'];
$kkm_6 = $_POST['kkm_6'];

$ubah=mysqli_query($connect,"UPDATE tbpelajaran set nama_pelajaran='$nama_pelajaran', kkm_1='$kkm_1', kkm_2='$kkm_2', kkm_3='$kkm_3', kkm_4='$kkm_4', kkm_5='$kkm_5', kkm_6='$kkm_6' where id_pelajaran ='$idp'") or die (mysqli_error());
if ($ubah)
{
	header("location:index.php?hal=data_pelajaran&berhasil=ok");
}
else
{
	echo"<script>alert('Data Gagal Diubah')
	document.location='index.php?hal=data_pelajaran'</script>";
}
?>