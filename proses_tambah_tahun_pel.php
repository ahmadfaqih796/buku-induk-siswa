<?php
include "koneksi.php";

$th_pelajaran = $_POST['th_pelajaran'];


$simpan = mysqli_query($connect, "insert into tbth_pelajaran values ('','$th_pelajaran')");
if ($simpan){
	echo "<script>alert('Tambah Data Tahun Pelajaran Berhasil!');
	document.location='index.php?hal=data_tahun_pel'</script>";
} else {
	echo "<script>alert('Tambah Data Tahun Pelajaran Gagal!');
	document.location='index.php?hal=tambah_tahun_pel'</script>";
}
?>