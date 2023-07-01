<?php
session_start();
include "koneksi.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$login = mysqli_query($connect,"select * from tbadmin where username = '$user' and password = '$pass'");
$data = $login->fetch_array(MYSQLI_ASSOC);
$cek = mysqli_num_rows($login);

if ($cek > 0){
	$_SESSION['u_abis'] = $user;
	$_SESSION['p_abis'] = $pass;
	$_SESSION['n_abis'] = $data['nama_lengkap'];
	$_SESSION['i_abis'] = $data['user_id'];
	$_SESSION['l_abis'] = $data['akses_level'];
	header("location:index.php");
} else {
	echo "<script>alert('Username atau Password Salah!');
	document.location='login.php'</script>";
}

?>