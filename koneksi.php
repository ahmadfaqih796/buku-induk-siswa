<?php
$connect = mysqli_connect("localhost", "root", "", "buku_induk", 3306, true);
//mysqli_select_db("buku_induk");

function getAktif($url)
{
	if (isset($_GET['hal'])) {
		if ($url == $_GET['hal']) {
			echo "class='active'";
		}
	}
}

function getAddress()
{
	if (isset($_GET['hal'])) {
		$kata = "";
		$a = explode("_", $_GET['hal']);
		foreach ($a as $b) {
			$kata .= ucfirst($b) . " ";
		}
		return $kata;
	}
}
