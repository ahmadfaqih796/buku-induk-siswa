<?php
include "koneksi.php";

$idk = $_POST['idk'];
$id = $_POST['id'];
$nis = $_POST['nis'];

$i=0;
foreach ($nis as $nilai){
	$query = "update tbsiswa set NIS = '".$nilai."' where id_siswa = '".$id[$i]."'";
	mysqli_query($connect,$query);
	$i++;
}
header("location:index.php?hal=masuk_kelas&idk=".$idk);

?>