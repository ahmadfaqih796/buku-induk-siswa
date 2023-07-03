<?php
session_start();
include "koneksi.php";

$ids = $_POST['ids'];
$apel = $_POST['a_pel'];
$bpel = $_POST['b_pel'];
$an_peng = $_POST['a_n_peng'];
$bn_peng = $_POST['b_n_peng'];
$an_ket = $_POST['a_n_ket'];
$bn_ket = $_POST['b_n_ket'];
$an_sikap = $_POST['a_n_sikap'];
$bn_sikap = $_POST['b_n_sikap'];
$semester = $_POST['semester'];
$tgl = date("Y-m-d");
$thpel = $_POST['th_pel'];
$user = $_SESSION['u_abis'];
$nm = $_POST['nm'];

$cek = mysqli_query($connect, "select * from tbnilai where semester='$semester' and id_siswa='$ids' and username='$user'");
$jml = mysqli_num_rows($cek);

if ($jml > 0) {
	echo "<script>alert('Nilai Siswa sudah pernah diinput!');
	document.location='index.php?hal=input_nilai&nm=$nm'</script>";
} else if (!$semester) {
	echo "<script>alert('semester tidak boleh kosong');
	document.location='index.php?hal=input_nilai&nm=$nm'</script>";
} else {
	$i = 0;
	foreach ($an_peng as $nilai1) {
		$query1 = "insert into tbnilai values ('','$apel[$i]','$thpel','$semester','$nilai1','$an_ket[$i]','$an_sikap[$i]','$ids','$user','$tgl')";
		$simpan1 = mysqli_query($connect, $query1);
		$i++;
	}

	$j = 0;
	foreach ($bn_peng as $nilai2) {
		$query2 = "insert into tbnilai values ('','$bpel[$j]','$thpel','$semester','$nilai2','$bn_ket[$j]','$bn_sikap[$j]','$ids','$user','$tgl')";
		$simpan2 = mysqli_query($connect, $query2);
		$j++;
	}

	if ($simpan1 && $simpan2) {
		echo "<script>alert('Nilai Berhasil Diinput!');
	document.location='index.php?hal=input_nilai'</script>";
	} else {
		echo "<script>alert('Nilai Gagal Diinput!');
	document.location='index.php?hal=input_nilai'</script>";
	}
}
