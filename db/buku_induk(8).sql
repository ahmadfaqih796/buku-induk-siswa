-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 03:48 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buku_induk`
--
CREATE DATABASE IF NOT EXISTS `buku_induk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `buku_induk`;

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE IF NOT EXISTS `tbadmin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `nip_nuptk` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(55) NOT NULL,
  `akses_level` varchar(11) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id_admin`, `nip_nuptk`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `email`, `username`, `password`, `akses_level`) VALUES
(1, '199612012019091002', 'Drs. Ise Koswara, M.Pd', 'Laki-laki', '', '0000-00-00', 'isekoswara@gmail.com', 'admin', 'admin', 'Admin'),
(12, '198201122018011001', 'Teguh Maulana Winaya, S.Pd', 'Laki-laki', '', '0000-00-00', 'teguhmaulan@gmail.com', 'teguh', 'teguh', 'Kurikulum'),
(27, '-', 'Yeni Nuraini', 'Laki-laki', 'Tasikmalaya', '0000-00-00', 'yeninura3008@bsi.ac.id', 'yenura', 'yenura', 'TU'),
(28, '198206092016091001', 'Dewi Nuraini, S.Pd', 'Perempuan', 'Garut', '1982-09-06', 'dewinuraini@gmail.com', 'dewi', 'dewi', 'Wali Kelas'),
(29, '-', 'Mia Rosmiati', 'Perempuan', 'Tasikmalaya', '1990-07-02', 'mia@gmail.com', 'mia', 'mia', 'Wali Kelas'),
(30, '', 'Poppy Sri ', 'Perempuan', 'Tasikmalaya', '2018-04-07', 'poppy@gmail.com', 'poppy', 'poppy', 'Wali Kelas');

-- --------------------------------------------------------

--
-- Table structure for table `tbdetail_kelas`
--

CREATE TABLE IF NOT EXISTS `tbdetail_kelas` (
  `id_detail` int(10) NOT NULL AUTO_INCREMENT,
  ` nis` varchar(10) NOT NULL,
  `id_thpelajaran` varchar(10) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE IF NOT EXISTS `tbkelas` (
  `id_kelas` int(5) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(25) NOT NULL,
  `ruang` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`id_kelas`, `kelas`, `ruang`) VALUES
(1, 'I', 'A'),
(2, 'II', 'B'),
(3, 'III', 'D'),
(4, 'IV', 'C'),
(5, 'V', 'A'),
(6, 'VI', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `tbnilai`
--

CREATE TABLE IF NOT EXISTS `tbnilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelajaran` int(10) NOT NULL,
  `thpelajaran` varchar(10) NOT NULL,
  `semester` int(2) NOT NULL,
  `angka_pengetahuan` int(5) NOT NULL,
  `angka_keterampilan` int(5) NOT NULL,
  `angka_sikap` varchar(15) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbnilai`
--

INSERT INTO `tbnilai` (`id_nilai`, `id_pelajaran`, `thpelajaran`, `semester`, `angka_pengetahuan`, `angka_keterampilan`, `angka_sikap`, `id_siswa`, `username`, `tgl`) VALUES
(1, 3, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(2, 4, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(3, 5, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(4, 6, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(5, 7, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(6, 8, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(7, 9, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(8, 10, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(9, 11, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(10, 12, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(11, 13, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(12, 14, '2018/2019', 1, 90, 90, 'Sangat Baik', 11, 'dewi', '2018-07-03'),
(13, 3, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(14, 4, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(15, 5, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(16, 6, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(17, 7, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(18, 8, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(19, 9, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(20, 10, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(21, 11, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(22, 12, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(23, 13, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03'),
(24, 14, '2018/2019', 1, 90, 90, 'Sangat Baik', 7, 'dewi', '2018-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbpelajaran`
--

CREATE TABLE IF NOT EXISTS `tbpelajaran` (
  `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(50) NOT NULL,
  `kkm_7` varchar(3) NOT NULL,
  `kkm_8` varchar(3) NOT NULL,
  `kkm_9` varchar(3) NOT NULL,
  `kelompok` varchar(2) NOT NULL,
  PRIMARY KEY (`id_pelajaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbpelajaran`
--

INSERT INTO `tbpelajaran` (`id_pelajaran`, `nama_pelajaran`, `kkm_7`, `kkm_8`, `kkm_9`, `kelompok`) VALUES
(3, 'Pendidikan Agama', '70', '75', '82', 'A'),
(4, 'Pendidikan Kewarganegaraan', '70', '70', '75', 'A'),
(5, 'Bahasa Indonesia', '70', '75', '90', 'A'),
(6, 'Bahasa Inggris', '70', '75', '80', 'A'),
(7, 'Matematika', '70', '75', '80', 'A'),
(8, 'Ilmu Pengetahuan Sosial', '60', '70', '80', 'A'),
(9, 'Ilmu Pengetahuan Alam', '80', '80', '85', 'A'),
(10, 'Seni Budaya', '75', '77', '70', 'B'),
(11, 'PJOK', '75', '75', '75', 'B'),
(12, 'TIK', '75', '75', '76', 'B'),
(13, 'Bahasa Sunda', '70', '70', '70', 'B'),
(14, 'PLH', '70', '70', '70', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbprofil`
--

CREATE TABLE IF NOT EXISTS `tbprofil` (
  `mkks` varchar(25) NOT NULL,
  `npsn` varchar(10) NOT NULL,
  `nama_Sekolah` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nip_kepsek` varchar(18) NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  PRIMARY KEY (`mkks`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbprofil`
--

INSERT INTO `tbprofil` (`mkks`, `npsn`, `nama_Sekolah`, `alamat`, `nip_kepsek`, `nama_kepsek`) VALUES
('Singaparna', '20251851', 'SMPN SATAP 1 Cigalontang', 'Kp. Nangtang', '196607101995121001', 'Drs. Ise Koswara, M.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE IF NOT EXISTS `tbsiswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `NIS` varchar(9) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nm_lengk_siswa` varchar(30) NOT NULL,
  `nm_pang_siswa` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tmpt_lhr_siswa` varchar(35) NOT NULL,
  `tgl_lhr_siswa` varchar(15) NOT NULL,
  `agama_siswa` varchar(10) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `jml_sdr` varchar(2) NOT NULL,
  `anak_yp` varchar(2) NOT NULL,
  `bahasa` varchar(15) NOT NULL,
  `alamat_peserta_didik` varchar(30) NOT NULL,
  `tinggal_dg` varchar(20) NOT NULL,
  `jarak` varchar(10) NOT NULL,
  `transportasi` varchar(15) NOT NULL,
  `bb_diterima` varchar(4) NOT NULL,
  `bb_meninggalkan` varchar(4) NOT NULL,
  `tb_diterima` varchar(4) NOT NULL,
  `tb_meninggalkan` varchar(4) NOT NULL,
  `goldar` varchar(4) NOT NULL,
  `kalainan` varchar(30) NOT NULL,
  `tgl_diterima` varchar(10) NOT NULL,
  `asal_sd` varchar(30) NOT NULL,
  `alamat_sd` varchar(30) NOT NULL,
  `tgl_ijazah_sd` varchar(20) NOT NULL,
  `no_ijazah_sd` varchar(10) NOT NULL,
  `tgl_diterima_pindahan` varchar(20) NOT NULL,
  `kelas_diterima` varchar(4) NOT NULL,
  `dari_smp` varchar(30) NOT NULL,
  `alamat_smp` varchar(30) NOT NULL,
  `asal_no_ijazah_sd_pindahan` varchar(50) NOT NULL,
  `alamat_sd_pindahan` varchar(30) NOT NULL,
  `alasan_pindah` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `tmpt_lhr_ayah` varchar(15) NOT NULL,
  `tgl_lhr_ayah` varchar(15) NOT NULL,
  `kwn_ayah` varchar(20) NOT NULL,
  `pend_ayah` varchar(15) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `penghasilan_ayah` varchar(15) NOT NULL,
  `alamat_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `tmpt_lhr_ibu` varchar(30) NOT NULL,
  `tgl_lhr_ibu` varchar(15) NOT NULL,
  `kwn_ibu` varchar(15) NOT NULL,
  `pend_ibu` varchar(15) NOT NULL,
  `pekerjaan_ibu` varchar(15) NOT NULL,
  `penghasilan_ibu` varchar(15) NOT NULL,
  `alamat_ibu` varchar(30) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`id_siswa`, `NIS`, `nisn`, `nm_lengk_siswa`, `nm_pang_siswa`, `jenis_kelamin`, `tmpt_lhr_siswa`, `tgl_lhr_siswa`, `agama_siswa`, `anak_ke`, `jml_sdr`, `anak_yp`, `bahasa`, `alamat_peserta_didik`, `tinggal_dg`, `jarak`, `transportasi`, `bb_diterima`, `bb_meninggalkan`, `tb_diterima`, `tb_meninggalkan`, `goldar`, `kalainan`, `tgl_diterima`, `asal_sd`, `alamat_sd`, `tgl_ijazah_sd`, `no_ijazah_sd`, `tgl_diterima_pindahan`, `kelas_diterima`, `dari_smp`, `alamat_smp`, `asal_no_ijazah_sd_pindahan`, `alamat_sd_pindahan`, `alasan_pindah`, `nama_ayah`, `tmpt_lhr_ayah`, `tgl_lhr_ayah`, `kwn_ayah`, `pend_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `alamat_ayah`, `nama_ibu`, `tmpt_lhr_ibu`, `tgl_lhr_ibu`, `kwn_ibu`, `pend_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `alamat_ibu`, `id_kelas`) VALUES
(7, '181907002', '1996234765', 'PUJI ASTUTI', 'PUJI', 'Perempuan', 'TASIKMALAYA', '2004/03/08', 'Islam', '2', '1', '-', 'INDONESIA', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SULAIMAN', '', '', '', '', '', '', '', 'SUKMARIYAH', '', '', '', '', '', '', '', 5),
(8, '181907001', '1996234098', 'DINI INDRIANI', 'DINI', 'Perempuan', 'TASIKMALAYA', '2004/04/07', 'Islam', '2', '3', '-', '', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FIKI', '', '', '', '', '', '', '', 'VIKA', '', '', '', '', '', '', '', 5),
(9, '181907005', '1996123456', 'VIKA DWI HARVINI', 'VIKA', 'Perempuan', 'TASIKMALAYA', '2004/09/09', 'Islam', '2', '1', '-', '', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UAN', '', '', '', '', '', '', '', 'MARYAMIH', '', '', '', '', '', '', '', 6),
(10, '181907004', '1996345678', 'EGA SUKMADAMAYANTI', 'EGA', 'Perempuan', 'TASIKMALAYA', '2004/13/06', 'Islam', '1', '2', '-', '', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'AGUS', '', '', '', '', '', '', '', 'NUNUNG', '', '', '', '', '', '', '', 6),
(11, '181907003', '1996543212', 'YENI NURAINI', 'YENI', 'Perempuan', 'TASIKMALAYA', '2004/23/08', 'Islam', '1', '1', '-', '', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'AJO', '', '', '', '', '', '', '', 'DEDE', '', '', '', '', '', '', '', 5),
(12, '181907007', '1996098765', 'MUHAMMAD RISTAN GIFARI SYAFAAT', 'RISTAN', 'Laki-laki', 'TASIKMALAYA', '2004/19/07', 'Islam', '1', '1', '-', '', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'CECEP', '', '', '', '', '', '', '', 'LENI', '', '', '', '', '', '', '', 8),
(13, '181907006', '1996543456', 'AHMAD AZAM FATHURAHMAN', 'AZAM', 'Laki-laki', 'TASIKMALAYA', '2004/08/07', 'Islam', '2', '1', '-', '', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'CECEP', '', '', '', '', '', '', '', 'LENI', '', '', '', '', '', '', '', 8),
(16, '181907009', '1234567892', 'Mahmubin', 'mubin', 'Laki-laki', 'Banjarmasin', '2002/11/07', 'Islam', '', '', '-', '', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Syam', '', '', '', '', '', '', '', 'Aisyah', '', '', '', '', '', '', '', 12),
(17, '181907008', '9980909098', 'ITA ISDAYATI', 'Ita', 'Perempuan', 'TASIKMALAYA', '2018/16/07', 'Islam', '', '', '-', '', '', '', '', 'Jalan Kaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mahmubin', '', '', '', '', '', '', '', 'Mira', '', '', '', '', '', '', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbwali_kelas`
--

CREATE TABLE IF NOT EXISTS `tbwali_kelas` (
  `id_wakel` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(8) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_wakel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbwali_kelas`
--

INSERT INTO `tbwali_kelas` (`id_wakel`, `username`, `id_kelas`) VALUES
(1, 'maya', '8'),
(2, 'ega', '7'),
(4, 'dewi', '5'),
(5, 'mia', '6'),
(6, 'poppy', '12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
