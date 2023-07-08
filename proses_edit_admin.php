<?php
include"koneksi.php";
$udi=$_GET['udi'];
$nama=$_POST['nama'];
$nip_nuptk=$_POST['nip_nuptk'];
$jenkel=$_POST['jk'];
$email=$_POST['email'];
$username=$_POST['username'];
$pass =$_POST['password'];
$akses=$_POST['akses'];

$ubah=mysqli_query($connect, "UPDATE tbadmin set nama_lengkap='$nama',nip_nuptk='$nip_nuptk', jenis_kelamin='$jenkel', email='$email', username='$username', password='$pass', akses_level='$akses' where id_admin='$udi'");
if ($ubah)
{
	header("location:index.php?hal=data_admin&berhasil=ok");
}
else
{
	echo"<script>alert('Data Gagal Diubah')
	document.location='index.php?hal=data_admin'</script>";
}
