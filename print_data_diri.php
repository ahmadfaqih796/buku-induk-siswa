<?php
include "koneksi.php";
require_once 'vendor/autoload.php';
$ID = $_GET['id_siswa'];
$query = mysqli_query($connect, "SELECT * FROM tbsiswa WHERE id_siswa = $ID");
$data = mysqli_fetch_array($query);
$nm_lengk_siswa = str_replace(' ', '-', $data['nm_lengk_siswa']);
$file_name = $nm_lengk_siswa . '.pdf';

use Dompdf\Dompdf;

// Buat objek Dompdf baru
$dompdf = new Dompdf();

// Generate HTML
$html = '<html>

<head>
    <style>
    .page-break {
        page-break-before: always;
    }
    .tabel {
      margin-left: auto;
      margin-right: auto;
    }
    .tabel,
    .tabel th,
    .tabel td {
      border-collapse: collapse;
      border: 1px solid black;
    }
    .tabel td {
      padding: 10px;
    }
    </style>
   <br>
   <h4 class="page-header" align="center">LEMBAR BUKU INDUK PESERTA DIDIK SDN CAKUNG BARAT 06</h4>
   <br>
</head>

<body>
   <table>
      <tr>
         <td width="20%">Nomor Induk</td>
         <td>
            : ' . $data['NIS'] . '
         </td>
      </tr>
      <tr>
         <td>NISN</td>
         <td>: ' . $data['nisn'] . '</td>
      </tr>
   </table>
   <b>A. KETERANGAN PRIBADI SISWA</b>
   <table>
      <tr>
         <td width="20%">Nama Lengkap</td>
         <td>: ' . $data['nm_lengk_siswa'] . '</td>
      </tr>
      <tr>
         <td>Nama Panggilan</td>
         <td>: ' . $data['nm_pang_siswa'] . '</td>
      </tr>
      <tr>
         <td>Jenis Kelamin</td>
         <td>: ' . $data['jenis_kelamin'] . '</td>
      </tr>
      <tr>
         <td>Tempat dan tanggal lahir</td>
         <td>: ' . $data['tmpt_lhr_siswa'] . ', ' . $data['tgl_lhr_siswa'] . '</td>
      </tr>
      <tr>
         <td>Agama</td>
         <td>: ' . $data['agama_siswa'] . '</td>
      </tr>
      <tr>
         <td>Anak ke</td>
         <td>: ' . $data['anak_ke'] . '</td>
      </tr>
      <tr>
         <td>Jumlah Saudara</td>
         <td>: ' . $data['jml_sdr'] . '</td>
      </tr>
      <tr>
         <td>Anak yatim/piatu,yatim piatu</td>
         <td>: ' . $data['anak_yp'] . '</td>
      </tr>
      <tr>
         <td>Bahasa sehari-hari dirumah</td>
         <td>: ' . $data['bahasa'] . '</td>
      </tr>
   </table>
   <b>B. KETERANGAN TEMPAT TINGGAL SISWA</b>
   <table>
      <tr>
         <td>Alamat Peserta Didik</td>
         <td>: ' . $data['alamat_peserta_didik'] . '</td>
      </tr>
      <tr>
         <td>Selama bersekolah tinggal dengan</td>
         <td>: ' . $data['tinggal_dg'] . '</td>
      </tr>
      <tr>
         <td>Jarak dari tempat tinggal ke sekolah</td>
         <td>: ' . $data['jarak'] . '</td>
      </tr>
      <tr>
         <td>Ke sekolah dengan kendaraan / jalan kaki</td>
         <td>: ' . $data['transportasi'] . '</td>
      </tr>
   </table>
   <b>C. KETERANGAN JASMANI DAN KESEHATAN SISWA</b>
   <table>
      <tr>
         <td>Berat badan pada waktu diterima </td>
         <td>: ' . $data['bb_diterima'] . ' kg</td>
      </tr>
      <tr>
         <td>Pada waktu meninggalkan sekolah</td>
         <td>: ' . $data['bb_meninggalkan'] . ' kg</td>
      </tr>
      <tr>
         <td>Tinggi badan pada waktu diterima</td>
         <td>: ' . $data['tb_diterima'] . ' cm</td>
      </tr>
      <tr>
         <td>Pada waktu meninggalkan sekolah</td>
         <td>: ' . $data['tb_meninggalkan'] . ' cm</td>
      </tr>
      <tr>
         <td>Golongan darah</td>
         <td>: ' . $data['goldar'] . '</td>
      </tr>
   </table>
   <b>D. KETERANGAN TENTANG PENDIDIKAN SEBELUMNYA</b>
   <table>
      <tr>
         <td>Diterima di sekolah ini sebagai siswa baru tanggal</td>
         <td>: ' . $data['tgl_diterima'] . '</td>
      </tr>
      <tr>
         <td>Asal Sekolah Dasar</td>
         <td>: ' . $data['asal_sd'] . '</td>
      </tr>
      <tr>
         <td>Alamat</td>
         <td>: ' . $data['alamat_sd'] . '</td>
      </tr>
      <tr>
         <td>Tanggal dan No.Ijazah</td>
         <td>: ' . $data['tgl_ijazah_sd'] . ' . ' . $data['no_ijazah_sd'] . '</td>
      </tr>
      <tr>
         <td>Diterima disekolah sebagai siswa pindahan pada tanggal</td>
         <td>: ' . $data['tgl_diterima_pindahan'] . '</td>
      </tr>
      <tr>
         <td>Di kelas</td>
         <td>: ' . $data['kelas_diterima'] . '</td>
      </tr>
      <td>Asal SD/ No Ijazah</td>
      <td>: ' . $data['asal_no_ijazah_sd_pindahan'] . '</td>
      </tr>
      <tr>
         <td>Alamat</td>
         <td>: ' . $data['alamat_sd_pindahan'] . '</td>
      </tr>
      <tr>
         <td>Alasan pindah ke sekolah ini</td>
         <td>: ' . $data['alasan_pindah'] . '</td>
      </tr>
   </table>
   <div class="page-break"></div>
   <b>E. KETERANGAN TENTANG ORANG TUA KANDUNG</b>
   <table border="1" class="tabel">
      <tr>
         <th>Data Orang Tua Kandung</th>
         <th>Ayah</th>
         <th>Ibu</th>
      </tr>
      <tr>
         <td>Nama</td>
         <td>' . $data['nama_ayah'] . '</td>
         <td>' . $data['nama_ibu'] . '</td>
      </tr>
      <tr>
         <td>Tempat & tanggal lahir</td>
         <td>' . $data['tmpt_lhr_ayah'] . '</td>
         <td>' . $data['tmpt_lhr_ibu'] . '</td>
      </tr>
      <tr>
         <td>Kewarganegaraan</td>
         <td>' . $data['tgl_lhr_ayah'] . '</td>
         <td>' . $data['tgl_lhr_ibu'] . '</td>
      </tr>
      <tr>
         <td>Pendidikan Tertinggi</td>
         <td>' . $data['pend_ayah'] . '</td>
         <td>' . $data['pend_ibu'] . '</td>
      </tr>
      <tr>
         <td>Pekerjaan</td>
         <td>' . $data['pekerjaan_ayah'] . '</td>
         <td>' . $data['pekerjaan_ibu'] . '</td>
      </tr>
      <tr>
         <td>Penghasilan/bulan/tahun</td>
         <td>' . $data['penghasilan_ayah'] . '</td>
         <td>' . $data['penghasilan_ibu'] . '</td>
      </tr>
      <tr>
         <td>Alamat</td>
         <td>' . $data['alamat_ayah'] . '</td>
         <td>' . $data['alamat_ibu'] . '</td>
      </tr>
   </table>
   <div
   style="
   width: 300px;
   text-align: center;
   font-weight: 700;
   margin-left: auto;
   "
   >
   <p style="margin-bottom: -10px">Jakarta, 02 Juli 2023</p>
   <p style="margin-bottom: 100px">Kepala SDN Cakung Barat 06,</p>

   <p style="margin-bottom: -10px">TUSANTO, S.Pd, M.Si</p>
   <p>NIP. 196409121986031014</p>
   </div>
</body>

</html>';
$dompdf->loadHtml($html);

// Render PDF
$dompdf->render();

// Set header untuk file PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $file_name . '"');
header('Content-Length: ' . strlen($dompdf->output()));

// Tampilkan file PDF
echo $dompdf->output();
