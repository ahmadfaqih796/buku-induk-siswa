<?php
if (isset($_GET['semester'])) {
	include "koneksi.php";
	$sm = $_GET['semester'];
} else {
	$sm = 1;
}
echo $sm;
$lsiswa = mysqli_query($connect, "select * from tbsiswa,tbkelas where tbsiswa.id_kelas=tbkelas.id_kelas and tbsiswa.id_siswa = '" . $_GET['ids'] . "'");
$dsiswa = $lsiswa->fetch_array(MYSQLI_ASSOC);
?>

<table class="table table-bordered">
	<tr>
		<th width="5%">No</th>
		<th>Mata Pelajaran</th>
		<th width="10%" colspan="2">KI - 3 <br>Pengetahuan</th>
		<th width="10%" colspan="2">KI - 4 <br>Keterampilan</th>
		<th width="18%" colspan="2">KI - 1 & KI - 2 <br>Spiritual & Sikap Sosial</th>
	</tr>
	<tr>
		<th colspan="2">Kelompok A</th>
		<td>Angka</td>
		<td>Predikat</td>
		<td>Angka</td>
		<td>Predikat</td>
		<th colspan="2">Dalam Mapel <br>SB/B/C/K</th>
	</tr>
	<?php
	$jna_p = 0;
	$jna_k = 0;
	$no_a = 1;
	$lpel_a = mysqli_query($connect, "select * from tbpelajaran,tbnilai where tbpelajaran.id_pelajaran=tbnilai.id_pelajaran and tbnilai.id_siswa='" . $_GET['ids'] . "' and tbnilai.semester='$sm' and tbpelajaran.kelompok = 'A'");
	while ($dpel_a = $lpel_a->fetch_array(MYSQLI_ASSOC)) {
		$ap = $dpel_a['angka_pengetahuan'];
		$ak = $dpel_a['angka_keterampilan'];

		if ($dsiswa['kelas'] == "VII") {
			$kkm = $dpel_a['kkm_7'];
		} elseif ($dsiswa['kelas'] == "VIII") {
			$kkm = $dpel_a['kkm_8'];
		} else {
			$kkm = $dpel_a['kkm_9'];
		}

		$rentang = (100 - $kkm) / 3;

		$s1 = (100 - ceil($rentang * 1));
		$s2 = (100 - ceil($rentang * 2));
		$s3 = (100 - ceil($rentang * 3));
		$s4 = (100 - ceil($rentang * 4));

		if (($ap >= $s1) && ($ap <= 100)) {
			$p1 = "A";
		} elseif (($ap >= $s2) && ($ap <= $s1)) {
			$p1 = "B";
		} elseif (($ap >= $s3) && ($ap <= $s2)) {
			$p1 = "C";
		} else {
			$p1 = "D";
		}

		if (($ak >= $s1) && ($ak <= 100)) {
			$p2 = "A";
		} elseif (($ak >= $s2) && ($ak <= $s1)) {
			$p2 = "B";
		} elseif (($ak >= $s3) && ($ak <= $s2)) {
			$p2 = "C";
		} else {
			$p2 = "D";
		}

		$jna_p += $ap;
		$jna_k += $ak;

	?>
		<tr>
			<td><?= $no_a++; ?></td>
			<td><?= $dpel_a['nama_pelajaran']; ?></td>
			<td><?= $ap; ?></td>
			<td><?= $p1; ?></td>
			<td><?= $ak; ?></td>
			<td><?= $p2; ?></td>
			<td colspan="2"><?= $dpel_a['angka_sikap']; ?></td>
		</tr>
	<?php } ?>
	<tr>
		<th colspan="2">Kelompok B</th>
		<th colspan="5"></th>
	</tr>
	<?php
	$jnb_p = 0;
	$jnb_k = 0;
	$no_b = 1;
	$lpel_b = mysqli_query($connect, "select * from tbpelajaran,tbnilai where tbpelajaran.id_pelajaran=tbnilai.id_pelajaran and tbnilai.id_siswa='" . $_GET['ids'] . "' and tbnilai.semester='$sm' and tbpelajaran.kelompok = 'B'");
	while ($dpel_b = $lpel_b->fetch_array(MYSQLI_ASSOC)) {
		$apb = $dpel_b['angka_pengetahuan'];
		$akb = $dpel_b['angka_keterampilan'];

		if ($dsiswa['kelas'] == "I") {
			$kkmb = $dpel_b['kkm_1'];
		} elseif ($dsiswa['kelas'] == "II") {
			$kkmb = $dpel_b['kkm_2'];
		} elseif ($dsiswa['kelas'] == "III") {
			$kkmb = $dpel_b['kkm_3'];
		} elseif ($dsiswa['kelas'] == "IV") {
			$kkmb = $dpel_b['kkm_4'];
		} elseif ($dsiswa['kelas'] == "V") {
			$kkmb = $dpel_b['kkm_5'];
		} elseif ($dsiswa['kelas'] == "VI") {
			$kkmb = $dpel_b['kkm_6'];
		} else {
			$kkmb = $dpel_b['kkm_5'];
		}

		$rentangb = (100 - $kkmb) / 3;

		$s1b = (100 - ceil($rentangb * 1));
		$s2b = (100 - ceil($rentangb * 2));
		$s3b = (100 - ceil($rentangb * 3));
		$s4b = (100 - ceil($rentangb * 4));

		if (($apb >= $s1b) && ($apb <= 100)) {
			$p1b = "A";
		} elseif (($apb >= $s2b) && ($apb <= $s1b)) {
			$p1b = "B";
		} elseif (($apb >= $s3b) && ($apb <= $s2b)) {
			$p1b = "C";
		} else {
			$p1b = "D";
		}

		if (($akb >= $s1b) && ($akb <= 100)) {
			$p2b = "A";
		} elseif (($akb >= $s2b) && ($akb <= $s1b)) {
			$p2b = "B";
		} elseif (($akb >= $s3b) && ($akb <= $s2b)) {
			$p2b = "C";
		} else {
			$p2b = "D";
		}

		$jnb_p += $apb;
		$jnb_k += $akb;

	?>
		<tr>
			<td><?= $no_b++; ?></td>
			<td><?= $dpel_b['nama_pelajaran']; ?></td>
			<td><?= $apb; ?></td>
			<td><?= $p1b; ?></td>
			<td><?= $akb; ?></td>
			<td><?= $p2b; ?></td>
			<td colspan="2"><?= $dpel_b['angka_sikap']; ?></td>
		</tr>
	<?php
	}
	$lpel = mysqli_query($connect, "select * from tbpelajaran");
	$jpel = mysqli_num_rows($lpel);

	$jns = ($jna_p + $jnb_p) + ($jna_k + $jnb_k);

	$n = 1;
	$rank = 0;
	$lnil = mysqli_query($connect, "SELECT sum(tbnilai.angka_pengetahuan)+sum(tbnilai.angka_keterampilan) as jumlah,tbsiswa.id_siswa FROM tbnilai,tbkelas,tbsiswa where tbnilai.id_siswa=tbsiswa.id_siswa and tbsiswa.id_kelas=tbkelas.id_kelas and tbsiswa.id_kelas='5' GROUP BY tbsiswa.id_siswa order by sum(tbnilai.angka_pengetahuan)+sum(tbnilai.angka_keterampilan) desc");
	while ($dnil = $lnil->fetch_array(MYSQLI_ASSOC)) {
		if ($dsiswa['id_siswa'] == $dnil['id_siswa']) {
			$rank = $n;
		}
		$n++;
	}


	?>
	<tr>
		<td colspan="2">Jumlah Nilai <?= $jns; ?></td>
		<td colspan="2"><?= ($jna_p + $jnb_p); ?></td>
		<td colspan="2"><?= ($jna_k + $jnb_k); ?></td>
	</tr>
	<tr>
		<td colspan="2">Nilai Rata-rata</td>
		<td colspan="2"><?= ceil(($jna_p + $jnb_p) / $jpel); ?></td>
		<td colspan="2"><?= ceil(($jna_k + $jnb_k) / $jpel); ?></td>
	</tr>
	<tr>
		<td colspan="2">Ranking</td>
		<td colspan="4"><?= $rank; ?></td>
	</tr>
</table>
</form>