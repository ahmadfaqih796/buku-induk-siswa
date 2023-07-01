<?php
include "koneksi.php";

$id=$_GET['id'];
$nip_nuptk = $_POST['nip_nuptk'];
$nama_wk = $_POST['nama_wk'];
$tmpt_lhr = $_POST['tmpt_lhr'];
$tgl_lhr = $_POST['tgl_lhr'];
$id_kelas = $_POST['id_kelas'];
$id_thpelajaran = $_POST['id_thpelajaran'];

$ubah = mysqli_query($connect, "update tbwali_kelas set nip_nuptk='$nip_nuptk', nama_wk='$nama_wk', tmpt_lhr='$tmpt_lhr', tgl_lhr='$tgl_lhr', id_kelas='$id_kelas', id_thpelajaran='$id_thpelajaran' where id_wk='$id'");
if ($ubah)
{
	header("location:index.php?hal=data_wakel&berhasil=ok");
}
else
{
	echo"<script>alert('Data Gagal Diubah')
	document.location='index.php?hal=data_wakel'</script>";
}
?>