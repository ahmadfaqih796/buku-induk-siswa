<?php
include "koneksi.php";
require_once 'vendor/autoload.php';

$lsiswa = mysqli_query($connect, "select * from tbsiswa,tbkelas where tbsiswa.id_kelas=tbkelas.id_kelas and tbsiswa.id_siswa = '" . $_GET['ids'] . "'");
$dsiswa = $lsiswa->fetch_array(MYSQLI_ASSOC);

$ns = str_replace(" ", "_", $dsiswa['nm_lengk_siswa']);
$nama_file = date("Y-m-d") . "_data_nilai_" . $ns;

if (isset($_GET['semester'])) {
	$sm = $_GET['semester'];
} else {
	$sm = 1;
}

use Dompdf\Dompdf;
// Buat objek Dompdf baru
$dompdf = new Dompdf();

$html = '
<h4 class="page-header" align="center">LEMBAR NILAI BUKU INDUK PESERTA DIDIK SDN CAKUNG BARAT 06</h4>
<table border="1">
    <tr>
        <th width="5%">No</th>
        <th>Mata Pelajaran</th>
        <th width="10%" colspan="2">KI 3 <br>Pengetahuan</th>
        <th width="10%" colspan="2">KI 4 <br>Keterampilan</th>
        <th width="18%" colspan="2">KI 1&2 Sikap <br>Sosial & Spiritual</th>
    </tr>
    <tr>
        <th colspan="2">Kelompok A</th>
        <td>Angka</td>
        <td>Predikat</td>
        <td>Angka</td>
        <td>Predikat</td>
        <th colspan="2">Dalam Mapel <br>SB/B/C/K</th>
    </tr>';

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

	$html .= '<tr>
        <td>' . $no_a++ . '</td>
        <td>' . $dpel_a['nama_pelajaran'] . '</td>
        <td>' . $ap . '</td>
        <td>' . $p1 . '</td>
        <td>' . $ak . '</td>
        <td>' . $p2 . '</td>
        <td colspan="2">' . $dpel_a['angka_sikap'] . '</td>
    </tr>';
}

$html .= '<tr>
    <th colspan="2">Kelompok B</th>
    <th colspan="5"></th>
</tr>';

$jnb_p = 0;
$jnb_k = 0;
$no_b = 1;
$lpel_b = mysqli_query($connect, "select * from tbpelajaran,tbnilai where tbpelajaran.id_pelajaran=tbnilai.id_pelajaran and tbnilai.id_siswa='" . $_GET['ids'] . "' and tbnilai.semester='$sm' and tbpelajaran.kelompok = 'B'");
while ($dpel_b = $lpel_b->fetch_array(MYSQLI_ASSOC)) {
	$apb = $dpel_b['angka_pengetahuan'];
	$akb = $dpel_b['angka_keterampilan'];

	if ($dsiswa['kelas'] == "VII") {
		$kkmb = $dpel_b['kkm_7'];
	} elseif ($dsiswa['kelas'] == "VIII") {
		$kkmb = $dpel_b['kkm_8'];
	} else {
		$kkmb = $dpel_b['kkm_9'];
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

	$html .= '<tr>
        <td>' . $no_b++ . '</td>
        <td>' . $dpel_b['nama_pelajaran'] . '</td>
        <td>' . $apb . '</td>
        <td>' . $p1b . '</td>
        <td>' . $akb . '</td>
        <td>' . $p2b . '</td>
        <td colspan="2">' . $dpel_b['angka_sikap'] . '</td>
    </tr>';
}

$html .= '<tr>
    <th colspan="2">Jumlah</th>
    <td>' . $jna_p . '</td>
    <td></td>
    <td>' . $jna_k . '</td>
    <td></td>
    <td colspan="2"></td>
</tr>';

$html .= '<tr>
    <th colspan="2">Rata-rata</th>
    <td>' . round($jna_p / ($no_a - 1), 2) . '</td>
    <td></td>
    <td>' . round($jna_k / ($no_a - 1), 2) . '</td>
    <td></td>
    <td colspan="2"></td>
</tr>';

$html .= '</table>';

$dompdf->loadHtml($html);

$dompdf->render();


// Set header untuk file PDF
header('Content-Type: application/pdf');
header("Content-Disposition: attachment; filename=$nama_file.pdf");
header('Content-Length: ' . strlen($dompdf->output()));

// Tampilkan file PDF
echo $dompdf->output();
