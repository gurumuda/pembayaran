-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2020 at 10:04 AM
-- Server version: 10.3.22-MariaDB-0+deb10u1
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya`
--

CREATE TABLE `tbl_biaya` (
  `id_` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` varchar(15) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `kategori` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya`
--

INSERT INTO `tbl_biaya` (`id_`, `jenis`, `kode`, `deskripsi`, `jumlah`, `status`, `kategori`) VALUES
(1, 'SPP', '#1', 'SPP bulanan', '300000', '1', '1'),
(2, 'SPP', '#2', 'SPP bulanan', '150000', '1', '2'),
(3, 'SPP', '#3', 'SPP bulanan', '75000', '1', '3'),
(4, 'Buku', '#4', 'Buku pelajaran untuk tp 2019/2020', '400000', '1', '1'),
(5, 'Seragam', '#5', 'Seragam batik dan olahraga', '250000', '1', '1'),
(6, 'Seragam', '#6', 'Seragam batik dan olahraga', '250000', '1', '2'),
(7, 'Seragam', '#7', 'Seragam batik dan olahraga', '250000', '1', '3'),
(8, 'Buku', '#8', 'Buku pelajaran untuk tp 2019/2020', '400000', '1', '2'),
(9, 'Buku', '#9', 'Buku pelajaran untuk tp 2019/2020', '400000', '1', '3'),
(10, 'Atribut', '#10', 'Atribut pelengkap seragam', '50000', '1', '1'),
(11, 'Atribut', '#11', 'Atribut pelengkap seragam', '50000', '1', '2'),
(12, 'Atribut', '#12', 'Atribut pelengkap seragam', '50000', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instansi`
--

CREATE TABLE `tbl_instansi` (
  `id_` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `npsn` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `site` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `th_pelajaran` varchar(15) NOT NULL,
  `logo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_instansi`
--

INSERT INTO `tbl_instansi` (`id_`, `nama`, `npsn`, `alamat`, `email`, `site`, `telepon`, `th_pelajaran`, `logo`) VALUES
(10, 'SMAN 1 Jorong', '30300700', 'Jl. A Yani Km 96 Jorong', 'sma_jorong@yahoo.com', 'https://sman1jrg.sch.id', '082153240501', '2019/2020', 'logo_instansi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_` int(11) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL,
  `level` varchar(2) NOT NULL,
  `kode_jurusan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_`, `kode_kelas`, `nama_kelas`, `level`, `kode_jurusan`) VALUES
(1, '10MIPA1', '10 MIPA 1', '10', 'MIPA'),
(2, '10MIPA2', '10 MIPA 2', '10', 'MIPA'),
(3, '10MIPA3', '10 MIPA 3', '10', 'MIPA'),
(4, '10IPS1', '10 IPS 1', '10', 'IPS'),
(5, '10IPS2', '10 IPS 2', '10', 'IPS'),
(6, '10IPS3', '10 IPS 3', '10', 'IPS'),
(8, '10IPS4', '10 IPS 4', '10', 'IPS'),
(9, '11MIPA1', '11 MIPA 1', '11', 'MIPA'),
(10, '11MIPA2', '11 MIPA 2', '11', 'MIPA'),
(11, '11MIPA3', '11 MIPA 3', '11', 'MIPA'),
(12, '11MIPA4', '11 MIPA 4', '11', 'MIPA'),
(13, '11IPS1', '11 IPS 1', '11', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `th_pelajaran` varchar(15) NOT NULL,
  `petugas` varchar(30) NOT NULL,
  `jumlah` varchar(12) NOT NULL,
  `seharusnya` varchar(12) NOT NULL,
  `selisih` varchar(12) NOT NULL,
  `kode_pembayaran` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_`, `nisn`, `jenis`, `tgl_bayar`, `bulan`, `th_pelajaran`, `petugas`, `jumlah`, `seharusnya`, `selisih`, `kode_pembayaran`, `deskripsi`) VALUES
(1, '0010299449', 'SPP', '2020-03-14', '01', '2019/2020', 'Administrator', '150000', '150000', '0', 'B-00001', 'SPP bulanan'),
(2, '0010299449', 'SPP', '2020-03-14', '02', '2019/2020', 'Administrator', '150000', '150000', '0', 'B-00002', 'SPP bulanan'),
(3, '0022522166', 'SPP', '2020-03-14', '01', '2019/2020', 'Administrator', '300000', '300000', '0', 'B-00003', 'SPP bulanan'),
(4, '0022522166', 'SPP', '2020-03-14', '02', '2019/2020', 'Administrator', '300000', '300000', '0', 'B-00004', 'SPP bulanan'),
(7, '0010299449', 'Atribut', '2020-03-14', '', '2019/2020', 'Administrator', '50000', '50000', '0', 'B-00005', 'Atribut pelengkap seragam'),
(9, '0010299449', 'Buku', '2020-03-14', '', '2019/2020', 'Administrator', '400000', '400000', '0', 'B-00006', 'Buku pelajaran untuk tp 2019/2020'),
(11, '0010299449', 'Seragam', '2020-03-14', '', '2019/2020', 'Administrator', '250000', '250000', '0', 'B-00007', 'Seragam batik dan olahraga'),
(14, '0025531063', 'SPP', '2020-03-14', '01', '2019/2020', 'Administrator', '75000', '75000', '0', 'B-00008', 'SPP bulanan'),
(15, '0025531063', 'SPP', '2020-03-14', '02', '2019/2020', 'Administrator', '75000', '75000', '0', 'B-00009', 'SPP bulanan'),
(16, '0010299449', 'SPP', '2020-03-15', '01', '2019/2020', 'Administrator', '150000', '150000', '0', 'B-00010', 'SPP bulanan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_` int(11) NOT NULL,
  `xUser` varchar(50) NOT NULL,
  `xPass` varchar(225) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_`, `xUser`, `xPass`, `nama`) VALUES
(1, 'admin', '$2y$10$d6WBeK6IfJC/nmmc39G5nO6QnVxRKgk66JYiAV1rGUdygnsEPJqGy', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jk` enum('1','2') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tg_lahir` varchar(20) NOT NULL,
  `kode_kelas` varchar(15) NOT NULL,
  `kategori` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_`, `nama`, `nisn`, `jk`, `tempat_lahir`, `tg_lahir`, `kode_kelas`, `kategori`) VALUES
(1, 'AANG TARYANA', '0025254480', '1', 'KOTA WARINGIN', '2000-04-04', '10MIPA3', '1'),
(2, 'ABDILLAH', '0002734964', '1', 'TANAH LAUT', '2000-04-05', '10MIPA3', '1'),
(3, 'AKHMAD SURYANATA', '0023071377', '1', 'JORONG', '2000-04-06', '10MIPA3', '1'),
(4, 'DESSY INDRIANI RAMADHANI', '0023070916', '2', 'KOTABARU', '2000-04-07', '10MIPA3', '1'),
(5, 'DWI NURISMA', '0023073543', '2', 'TANAH LAUT', '2000-04-08', '10MIPA3', '1'),
(6, 'EKA RAHMAWATI', '0022522166', '2', 'TANAH LAUT', '2000-04-09', '10IPS1', '1'),
(7, 'ENDANG SRI WAHYUNI', '0023070918', '2', 'TANAH LAUT', '2000-04-10', '10IPS1', '1'),
(8, 'EVA SAHRANI', '0012243495', '2', 'TANAH LAUT', '2000-04-11', '10IPS1', '1'),
(9, 'HAIRUL ADANI', '0011271914', '1', 'TANAH LAUT', '2000-04-12', '10IPS1', '1'),
(10, 'HALIMATUS SA\'DIAH', '0017945314', '2', 'DAMIT HULU', '2000-04-13', '10IPS1', '1'),
(11, 'HENDRA SATIMAN', '9994236823', '1', 'ASRI MULYA', '2000-04-14', '10IPS1', '1'),
(12, 'HENGKY ARDIANSYAH', '0017511992', '1', 'TANAH LAUT', '2000-04-15', '10IPS1', '1'),
(13, 'HOT MAHTU MAIMUN', '0021896882', '2', 'TANAH LAUT', '2000-04-16', '10IPS1', '1'),
(14, 'I PUTU MADA NUGRAHAYA', '0016732553', '1', 'TANAH LAUT', '2000-04-17', '10IPS1', '1'),
(15, 'M. IKMAL NIZAM', '0021896350', '1', 'TANAH LAUT', '2000-04-18', '10MIPA2', '1'),
(16, 'M. YOGA WIBAWA', '0024617677', '1', 'TANJUNG', '2000-04-19', '10MIPA2', '1'),
(17, 'MARLINA WULANDARI', '0033146429', '2', 'TANAH LAUT', '2000-04-20', '10MIPA2', '1'),
(18, 'MELINDA NUR FALAH SARI', '0023073517', '2', 'TANAH LAUT', '2000-04-21', '10MIPA2', '1'),
(19, 'MUHAMMAD RAMADHANI', '0021896346', '1', 'TANAH LAUT', '2000-04-22', '10MIPA2', '1'),
(20, 'NADILA APRILIA', '0024073554', '2', 'TANAH LAUT', '2000-04-23', '10MIPA2', '1'),
(21, 'NIA', '0002735092', '2', 'TANAH LAUT', '2000-04-24', '10MIPA2', '1'),
(22, 'NINA SUHARTINI', '0002734805', '2', 'TANAH LAUT', '2000-04-25', '10MIPA2', '1'),
(23, 'RAMADANI', '9994236769', '1', 'BATALANG', '2000-04-26', '10MIPA1', '2'),
(24, 'RIFKI ADITYA FAHMI', '0010299396', '1', 'TANAH LAUT', '2000-04-27', '10MIPA1', '2'),
(25, 'RIZKY FADILLAH', '9997145357', '2', 'SURABAYA', '2000-05-01', '10MIPA1', '2'),
(26, 'RIZKY WULANDARI', '0019588428', '2', 'TANAH LAUT', '2000-05-02', '10MIPA1', '2'),
(27, 'SIGIT PRIANTO', '0017512036', '1', 'TANAH LAUT', '2000-05-03', '10MIPA1', '2'),
(28, 'SITI LASMINA', '0011271904', '2', 'TANAH LAUT', '2000-05-04', '10MIPA1', '2'),
(29, 'SYAHRI RAMADAN', '0015207962', '1', 'TANAH LAUT', '2000-05-05', '10MIPA1', '2'),
(30, 'SYAHRIL ANWAR', '0010299409', '1', 'TANAH LAUT', '2000-05-06', '10MIPA1', '2'),
(31, 'WAHYU DWI ARDIANTO', '0023911871', '1', 'TANAH LAUT', '2000-05-07', '10MIPA1', '2'),
(32, 'YOGA PRASETIYA', '0023911915', '1', 'Tanah Laut', '2000-05-08', '10MIPA1', '2'),
(33, 'AGUS MASKUN BAIHAQI', '0002852184', '1', 'TANAH LAUT', '2000-05-09', '10MIPA3', '2'),
(34, 'ANA MAIRINA', '0023911932', '2', 'TANAH LAUT', '2000-05-10', '10MIPA3', '2'),
(35, 'ARI SANDI', '0002735068', '1', 'TANAH LAUT', '2000-05-11', '10MIPA3', '2'),
(36, 'BOYKE ARIA DANA', '0021896887', '1', 'TANAH LAUT', '2000-05-12', '10MIPA3', '2'),
(37, 'EFFENDY', '0010299449', '1', 'TANAH LAUT', '2000-05-13', '10IPS1', '2'),
(38, 'FEBRIYANTO', '0017512004', '1', 'TANAH LAUT', '2000-05-14', '10IPS1', '2'),
(39, 'FINA FEBRIANTI', '0007387553', '2', 'BLITAR', '2000-05-15', '10IPS1', '2'),
(40, 'FITRIYANI', '0023074804', '2', 'TANAH LAUT', '2000-05-16', '10IPS1', '2'),
(41, 'HAFIT ANSORI', '0002503160', '1', 'TANAH LAUT', '2000-05-17', '10IPS1', '2'),
(42, 'HELDA', '0018293823', '2', 'TANAH LAUT', '2000-05-18', '10IPS1', '2'),
(43, 'HERFANI', '9993851598', '1', 'JORONG', '2000-05-19', '10IPS1', '2'),
(44, 'HERLITA ADAWIAH', '0018293819', '2', 'TANAH LAUT', '2000-05-20', '10IPS1', '2'),
(45, 'HIKMAL RIYANTAMA', '0021896867', '1', 'PANGKALANBUN', '2000-05-21', '10IPS1', '2'),
(46, 'IKSAN', '0023073510', '1', 'JORONG', '2000-05-22', '10IPS1', '2'),
(47, 'JANWAR ADIPITRA', '0004540308', '1', 'MARABAHAN', '2000-05-23', '10MIPA2', '2'),
(48, 'JASMIANTI', '0017283677', '2', 'BONE', '2000-05-24', '10MIPA2', '2'),
(49, 'JUNAIDI', '0008427701', '1', 'WARINGIN', '2000-05-25', '10MIPA2', '2'),
(50, 'MAULIDA AMALIA', '0023073529', '2', 'BANJARMASIN', '2000-05-26', '10MIPA2', '2'),
(51, 'MIFTAHUL JANNAH', '0017512037', '2', 'TANAH LAUT', '2000-05-27', '10MIPA2', '2'),
(52, 'MUHAMMAD IRFAN', '0023200568', '1', 'TANAH LAUT', '2000-05-28', '10MIPA2', '2'),
(53, 'MUHAMMAD MARUWAN', '0014973513', '1', 'TANAH LAUT', '2000-06-01', '10MIPA2', '2'),
(54, 'MUHAMMAD YUSUF MUTTAQIN', '0028817217', '1', 'BANJARMASIN', '2000-06-02', '10MIPA2', '2'),
(55, 'NANA HERLINA', '0025840666', '2', 'TANAH LAUT', '2000-06-03', '10MIPA2', '2'),
(56, 'NIA YUSTIKASARI', '9984153099', '2', 'DAMIT', '2000-06-04', '10MIPA2', '3'),
(57, 'RAHMAT MAULANA', '9995833763', '1', 'TANAH LAUT', '2000-06-05', '10MIPA1', '3'),
(58, 'RIFLI HARIADI', '0023911930', '1', 'JORONG', '2000-06-06', '10MIPA1', '3'),
(59, 'SITI KHOLIFAH', '0027944828', '2', 'TANAH LAUT', '2000-06-07', '10MIPA1', '3'),
(60, 'SUGENG RIADHI', '0023911907', '1', 'TANAH LAUT', '2000-06-08', '10MIPA1', '3'),
(61, 'ULAN DARI', '0028433782', '2', 'PALAM', '2000-06-09', '10MIPA1', '3'),
(62, 'WAHYU HERMAWAN', '0017511997', '1', 'TANAH LAUT', '2000-06-10', '10MIPA1', '3'),
(63, 'YESI SULASTRI', '0017512033', '2', 'TANAH LAUT', '2000-06-11', '10MIPA1', '3'),
(64, 'ADI PRASETYO', '0014949096', '1', 'TANAH LAUT', '2000-06-12', '10MIPA3', '3'),
(65, 'AFRIZAL GHALIH PRAMUDIA', '0010353806', '1', 'TANAH LAUT', '2000-06-13', '10MIPA3', '3'),
(66, 'AGUNG LIDIANTO', '0016188816', '1', 'TANAH LAUT', '2000-06-14', '10MIPA3', '3'),
(67, 'AHMAD DITO JUNAEDI', '0023070921', '1', 'TANAH LAUT', '2000-06-15', '10MIPA3', '3'),
(68, 'AKNES NOVITA', '0010489380', '2', 'BLORA', '2000-06-16', '10MIPA3', '3'),
(69, 'ALFINNUR', '0003094680', '1', 'TANAH LAUT', '2000-06-17', '10MIPA3', '3'),
(70, 'ANISA FINDIA FALAHUDIN', '0021896355', '2', 'BANJARMASIN', '2000-06-18', '10MIPA3', '3'),
(71, 'ANNISA ERLIANY', '9993899594', '2', 'TANAH LAUT', '2000-06-19', '10MIPA3', '3'),
(72, 'ANNISA SILVIA PUTRI', '0023911938', '2', 'TANAH LAUT', '2000-06-20', '10MIPA3', '3'),
(73, 'ARIF PERDANA KUSUMA', '0016642451', '1', 'TANAH LAUT', '2000-06-21', '10MIPA3', '3'),
(74, 'ATIKA SAL SABELA', '0023911935', '2', 'TANAH LAUT', '2000-06-22', '10MIPA3', '3'),
(75, 'AULIA AGUSTINA', '0021896308', '2', 'SUNGAI DANAU', '2000-06-23', '10MIPA3', '3'),
(76, 'DIANITAMI ANANDA PUTRI', '0021896872', '2', 'KARANG REJO', '2000-06-24', '10MIPA3', '3'),
(77, 'DIDIT SUJANA', '0003094090', '1', 'BINUANG', '2000-06-25', '10MIPA3', '3'),
(78, 'FANDI AHMAD', '0002852193', '1', 'TANAH LAUT', '2000-06-26', '10IPS1', '3'),
(79, 'FENDRI AHYAR', '0016732713', '1', 'SUNGAI DANAU', '2000-06-27', '10IPS1', '3'),
(80, 'FERRY AZI FIRDAUZ', '0028817221', '1', 'TAMBAN', '2000-07-01', '10IPS1', '3'),
(81, 'MEGA SELVIA', '0016404070', '2', 'TANAH LAUT', '2000-07-02', '10MIPA2', '3'),
(82, 'MUHAMMAD ARIF SETIAWAN', '0010478458', '1', 'TANAH LAUT', '2000-07-03', '10MIPA2', '3'),
(83, 'MUHAMMAD ARIS PURWANTO', '0017512028', '1', 'TANAH LAUT', '2000-07-04', '10MIPA2', '3'),
(84, 'MUHAMMAD ARIYADI', '0022226076', '1', 'TANAH LAUT', '2000-07-05', '10MIPA2', '3'),
(85, 'MUHAMMAD JAINURI', '9993851639', '1', 'TANAH LAUT', '2000-07-06', '10MIPA2', '3'),
(86, 'RAHMAD DIVA SRI MAHENDRA', '0016732559', '1', 'AMBAWANG', '2000-07-07', '10MIPA2', '3'),
(87, 'RAHMAT BIMANTARA', '0029924469', '1', 'TANAH LAUT', '2000-07-08', '10MIPA2', '3'),
(88, 'RIAN HIDAYAT', '9983790220', '1', 'TANAH LAUT', '2000-07-09', '10MIPA1', '3'),
(89, 'SEFYA ANTIKA', '0023325716', '2', 'TANAH LAUT', '2000-07-10', '10MIPA1', '3'),
(90, 'SETYO WAHYU NINGSIH', '0010478852', '2', 'TANAH LAUT', '2000-07-11', '10MIPA1', '3'),
(91, 'SUSI RANIAWATI', '0021897793', '2', 'TANAH LAUT', '2000-07-12', '10MIPA1', '3'),
(92, 'TOTI SUGIANTO', '0021105601', '1', 'BLITAR', '2000-07-13', '10MIPA1', '3'),
(93, 'WIDYA AULIA PUTRI', '0028817222', '2', 'KOTABARU', '2000-07-14', '10MIPA1', '3'),
(94, 'YUNITA SARI', '0024648766', '2', 'TANAH LAUT', '2000-07-15', '10MIPA1', '3'),
(95, 'YUSTIKANING KINANTI', '0010353824', '2', 'TANAH LAUT', '2000-07-16', '10MIPA1', '3'),
(96, 'ALFIA ANDINI', '0023911839', '2', 'TANAH LAUT', '2000-07-17', '10MIPA3', '3'),
(97, 'CITRA AYUNINGTIAS', '0017157285', '2', 'KEBUMEN', '2000-07-18', '10MIPA3', '3'),
(98, 'EKA YULIARTI', '0025531063', '2', 'WONOSOBO', '2000-07-19', '10IPS1', '3'),
(99, 'FEBBY MEGI SUPIT', '0024289273', '2', 'SINSINGON', '2000-07-20', '10IPS1', '3'),
(100, 'GUSNADI', '0023911939', '1', 'TANAH LAUT', '2000-07-21', '10IPS1', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
