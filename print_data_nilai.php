<?php
include "koneksi.php";
require_once 'vendor/autoload.php';

$lsiswa = mysqli_query($connect, "select * from tbsiswa,tbkelas where tbsiswa.id_kelas=tbkelas.id_kelas and tbsiswa.id_siswa = '" . $_GET['ids'] . "'");
$dsiswa = $lsiswa->fetch_array(MYSQLI_ASSOC);

$ns = str_replace(" ", "_", $dsiswa['nm_lengk_siswa']);
$nama_file = date("Y-m-d") . "_data_nilai_" . $ns;

if (isset($_POST['tgl'])) {
	$tgl = $_POST['tgl'];
} else {
	$tgl = "Jakarta, 02 Juli 2023";
}

if (isset($_POST['semester'])) {
	$sm = $_POST['semester'];
} else {
	$sm = 1;
}

use Dompdf\Dompdf;
// Buat objek Dompdf baru
$dompdf = new Dompdf();

$html = '
<style>
	th,
	td {
		border: 1px solid black;
	}
	td {
		padding: 5px;
	}
	th {
		padding: 10px;
	}
</style>
<h4 class="page-header" align="center">LEMBAR NILAI BUKU INDUK PESERTA DIDIK SDN CAKUNG BARAT 06</h4>
<table border="1" style="margin-left: auto; margin-right: auto; border-collapse: collapse;">
    <tr>
        <th style="width: 5%">No</th>
        <th style="width: 40%">Mata Pelajaran</th>
        <th style="width: 5%" colspan="2">KI - 3 <br>Pengetahuan</th>
        <th style="width: 5%" colspan="2">KI - 4 <br>Keterampilan</th>
        <th style="width: 35%" colspan="2">KI - 1 & KI - 2 <br>Spiritual & Sikap Sosial</th>
    </tr>
    <tr>
        <th colspan="2">Kelompok A</th>
        <td style="width: 50px">Angka</td>
        <td style="width: 50px">Predikat</td>
        <td style="width: 50px">Angka</td>
        <td style="width: 50px">Predikat</td>
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
        <td style="text-align: center;">' . $ap . '</td>
        <td style="text-align: center;">' . $p1 . '</td>
        <td style="text-align: center;">' . $ak . '</td>
        <td style="text-align: center;">' . $p2 . '</td>
        <td colspan="2">' . $dpel_a['angka_sikap'] . '</td>
    </tr>';
}

$html .= '<tr>
    <th colspan="2">Kelompok B</th>
    <th colspan="6"></th>
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
        <td style="text-align: center;">' . $apb . '</td>
        <td style="text-align: center;">' . $p1b . '</td>
        <td style="text-align: center;">' . $akb . '</td>
        <td style="text-align: center;">' . $p2b . '</td>
        <td colspan="2">' . $dpel_b['angka_sikap'] . '</td>
    </tr>';
}

$html .= '<tr>
    <th colspan="2">Jumlah</th>
    <td style="text-align: center;">' . $jna_p . '</td>
    <td></td>
    <td style="text-align: center;">' . $jna_k . '</td>
    <td></td>
    <td colspan="2"></td>
</tr>';

$html .= '<tr>
    <th colspan="2">Rata-rata</th>
    <td style="text-align: center;">' . round($jna_p / ($no_a - 1), 2) . '</td>
    <td></td>
    <td style="text-align: center;">' . round($jna_k / ($no_a - 1), 2) . '</td>
    <td></td>
    <td colspan="2"></td>
</tr>';

$html .= '
</table>
<div
style="
  width: 300px;
  text-align: center;
  font-weight: 700;
  margin-left: auto;
"
>
<p style="margin-bottom: -10px">' . $tgl . '</p>
<p style="margin-bottom: 100px">Kepala SDN Cakung Barat 06,</p>

<p style="margin-bottom: -10px">TUSANTO, S.Pd, M.Si</p>
<p>NIP. 196409121986031014</p>
</div>
';

$dompdf->loadHtml($html);

$dompdf->render();

// Set header untuk file PDF
header('Content-Type: application/pdf');
header("Content-Disposition: attachment; filename=$nama_file.pdf");
header('Content-Length: ' . strlen($dompdf->output()));

// Tampilkan file PDF
echo $dompdf->output();
