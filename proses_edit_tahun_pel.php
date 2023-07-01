<?php
include"koneksi.php";

$idt=$_GET['idt'];
$th_pelajaran = $_POST['th_pelajaran'];

$ubah=mysqli_query($connect,"UPDATE tbth_pelajaran set th_pelajaran='$th_pelajaran' where id_thpelajaran ='$idt'") or die (mysqli_error());
if ($ubah)
{
	header("location:index.php?hal=data_tahun_pel&berhasil=ok");
}
else
{
	echo"<script>alert('Data Gagal Diubah')
	document.location='index.php?hal=data_tahun_pel'</script>";
}
?>
