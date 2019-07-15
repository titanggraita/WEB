-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 08:10 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faq_batan`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `ID_faq` int(50) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL,
  `jawaban` varchar(1000) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateupdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`ID_faq`, `pertanyaan`, `jawaban`, `kategori`, `keyword`, `author`, `email`, `datecreated`, `dateupdated`, `status`) VALUES
(1, 'Apasih BATAN itu?', 'BATAN adalah lembaga pemerintah non departemen yang melakukan penilitian dan pengembangan. BATAN berada di bawah Kementrian Negara Riset dan Teknologi, seperti juga BPPT, LIPI, BAPETEN, BSN, BAKOSURTANAL, LAPAN.', '', 'batan', 'Admin', '', '2019-07-02 06:38:13', '2019-07-02 06:38:13', 'active'),
(2, 'Apa yang sudah dikembangkan oleh BATAN?', 'BATAN mengembangkan teknik nuklir untuk bidang pangan, energi, kesehatan & obat, diseminasi & teknologi informasi bidang nuklir.', '', 'batan', 'Admin', '', '2019-07-02 06:39:05', '2019-07-02 06:39:05', 'active'),
(3, 'Apakah BATAN punya cabang di daerah?', 'BATAN tidak memiliki kantor cabang, namun BATAN memiliki fasilitas penelitian di berbagai kota. BATAN memiliki fasilitas di Pasar Jum\'at, Jakarta Selatan, di Pupiptek Serpong Tangerang, di Bandung (dekat ITB), di Jl. Babarsari, Sleman, Yogyakarta, dan di Ujungwatu, Jepara.', '', 'batan', 'Admin', '', '2019-07-02 06:43:03', '2019-07-02 06:43:03', 'active'),
(4, 'Apakah BATAN sama dengan BAPETEN?', 'Berdasarkan UU No.10 Tahun 1997 tentang Ketenaganukliran, BATAN memiliki tugas penelitian dan pengembangan, penyelidikan umum, eksplorasi dan eksploitasi bahan galian nuklir, produksi bahan baku untuk pembuatan dan produksi bahan bakar nuklir, produksi radioisotop untuk keperluan penelitian dan pengembangan, dan pengelolaan limbah radioaktif. Sementara BAPETEN memiliki tugas pengaturan, perizinan, dan inspeksi. Dengan kata lain, BATAN yang melakukan litbang, BAPETEN yang melakukan pengawasan. Reaktor Nuklir BATAN selalu diinspeksi oleh BAPETEN.', '', 'batan, bapeten', 'Admin', '', '2019-07-02 06:47:33', '2019-07-02 06:47:33', 'active'),
(5, 'Apakah hubungan antara BATAN dan PLTN?', 'BATAN, bersama-sama dengan BPPT, Dept. ESDM, PLN dan instansi terkait lainnya serta dengan bantuan IAEA pada tahun 2001-2002, melakukan kajian dan perhitungan tentang layak-tidaknya PLTN dibangun dan dioperasikan di Indonesia pada sekitar tahun 2017.', '', 'batan, pltn, PLTN', 'Admin', '', '2019-07-02 06:57:44', '2019-07-02 06:57:44', 'active'),
(6, 'Apakah BATAN mengembangkan senjata nuklir?', 'BATAN hanya mengembangkan dan meneliti nuklir untuk maksud-maksud damai, tidak untuk keperluan merusak, persenjataan ataupun kepentingan militer lainnya. BATAN menjadi salah satu penandatangan traktat NPT (Nuclear Non Proliferation Treaty) atau pakta untuk tidak menyebarluaskan senjata nuklir. Traktat itu sendiri mulai dirintis sejak 1 Juli 1968. Dari 180 lebih anggota Badan tenaga Nuklir Internasional (IAEA), hanya 4 negara yang tidak berpartisipasi dalam traktat ini. Negara tersebut adalah India, Israel, Korea Utara dan Pakiskan. BATAN juga tidak melakukan upaya pengkayaan uranium.', '', 'batan, nuklir', 'Admin', '', '2019-07-02 06:57:44', '2019-07-02 06:57:44', 'active'),
(7, 'Kenapa kita butuh PLTN?', 'Sesuai Peraturan Presiden RI No. 5 Tahun 2006 tentang Kebijaksanaan Energi Nasional telah menetapkan sasaran terwujudnya bauran energi (energy mix) yang optimal pada tahun 2O25, yaitu peranan masing-masing jenis energi terhadap konsumsi energi nasional. Sasaran yang ditargetkan khususnya untuk biomassa, nuklir, tenaga air, tenaga surya dan tenaga angin menjadi lebih dari 5%. Sesuai dengan Undang-undang No. 17 tahun 2007 tentang RPJPN, pada RPJM ke-3 (2015-2019) mulai dimanfaatkannya tenaga nuklir untuk pembangkitan listrik dengan mempertimbangkan faktor keselamatan yang ketat dan sesuai dengan Undang-undang No. 30 tahun 2007 tentang Energi, bahwa sumber daya energi fosil, panas bumi, hidro skala besar dan sumber energi nuklir dikuasai oleh negara dan dimanfaatkan untuk sebesar-besarnya untuk kemakmuran rakyat.', '', 'pltn, PLTN', 'Admin', '', '2019-07-02 07:04:43', '2019-07-02 07:04:43', 'active'),
(8, 'Berapa korban kecelakaan nuklir selama ini?', 'Selama 64 tahun terakhir terjadi 31 kecelakaan yang merenggut korban 539 orang, 186 diantaranya meninggal. Dalam 18 tahun terakhir ada 14 kecelakaan di Industri Kimia yang merenggut korban 64.652 orang, 4.287 diantaranya meninggal. Khusus di Indonesia dalam 5 tahun terakhir ada 76.866 orang korban kecelakaan lalu lintas, 54.733 diantaranya meninggal (30 orang/hari).', '', 'nuklir', 'Admin', '', '2019-07-02 08:49:01', '2019-07-02 08:49:01', 'active'),
(9, 'Apa peranan BATAN dalam pembuatan PLTN?', 'Bisa sebagai pemasok tenaga profesional bidang nuklir. (Catatan : Semua SDM yang terkait dengan pengelolaan zat radioaktif wajib mengantongi sertifikasi kompetensi dan diawasi oleh BAPETEN, termasuk untuk NDT dan PLTN.)', '', 'batan, pltn, PLTN', 'Admin', '', '2019-07-02 08:49:45', '2019-07-02 08:49:45', 'active'),
(10, 'Bagaimana nuklir dapat menghasilkan listrik?', 'Nuklir diproses menghasilkan panas yang akan dipakai menggerakkan turbin pembangkit listrik', '', 'nuklir, listrik', 'Admin', '', '2019-07-02 08:51:32', '2019-07-02 08:51:32', 'active'),
(11, 'Apakah peranan Energi Nuklir dalam pembangkitan Listrik?', 'Diversifikasi:pasokan energi dalam bentuk listrik Konservasi:penghematan penggunaan sumber daya energi nasional Pelestarian Lingkungan : Mengurangi emisi gas rumah kaca (GHC) secara signifikan', '', 'nuklir, listrik', 'Admin', '', '2019-07-02 08:51:32', '2019-07-02 08:51:32', 'active'),
(14, 'apa kepanjangan dari BATAN?', 'badan tenaga nuklir nasional', '', 'batan', 'kontributor 1', '', '2019-07-15 02:06:09', '2019-07-15 02:06:09', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `faq_assigned`
--

CREATE TABLE `faq_assigned` (
  `ID_faqassigned` int(50) NOT NULL,
  `ID_assigned` int(50) NOT NULL,
  `File_attachment_assigned` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq_attachment`
--

CREATE TABLE `faq_attachment` (
  `ID_faqattachment` int(50) NOT NULL,
  `ID_faq` int(50) NOT NULL,
  `File_attachment` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_faq`
--

CREATE TABLE `kategori_faq` (
  `ID_kategori` int(200) NOT NULL,
  `Nama_kategori` varchar(100) NOT NULL,
  `ID_parent` enum('0','1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_faq`
--

INSERT INTO `kategori_faq` (`ID_kategori`, `Nama_kategori`, `ID_parent`) VALUES
(1, 'Daur Bahan Bakar Nuklir dan Bahan Maju', '0'),
(2, 'Isotop dan Radiasi', '1'),
(3, 'Keselamatan dan Keamanan Nuklir', '2'),
(4, 'Reaktor Nuklir', '3'),
(5, 'Rekayasa Perangkat dan Fasilitas Nuklir', '4'),
(6, 'Bahan Bakar Nuklir', '0'),
(7, 'Bahan Galian Nuklir', '0'),
(8, 'Bahan Struktur dan Bahan Maju', '0'),
(9, 'Limbah Radioaktif', '0'),
(10, 'Operasi dan Pemeliharaan Instalasi Bahan Bakar Nuklir', '0'),
(11, 'Teknik Fabrikasi Bahan Bakar Nuklir ', '0'),
(12, 'Teknik Karakterisasi Bahan Bakar Nuklir', '0'),
(13, 'Teknik Pemurnian dan Konversi Bahan Bakar Nuklir', '0'),
(14, 'Teknik Sintesis Bahan Bakar Nuklir', '0'),
(15, 'Teknik Eksplorasi Bahan Galian Nuklir', '0'),
(16, 'Teknik Penambangan Bahan Galian Nuklir ', '0'),
(17, 'Teknik Pengolahan Bahan Galian Nuklir', '0'),
(18, 'Teknik Sintesis Bahan Maju', '0'),
(19, 'Teknik Sintesis Bahan Struktur', '0'),
(20, 'Operasi dan Pemeliharaan Instalasi Limbah Radioaktif', '0'),
(21, 'Teknik Dekomisioning', '0'),
(22, 'Teknik Dekontaminasi', '0'),
(23, 'Teknik Pengolahan Limbah Radioaktif ', '0'),
(24, 'Teknik Penyimpanan Limbah Radioaktif', '0'),
(25, 'Pemanfaatan Isotop dan Radiasi', '1'),
(26, 'Produksi Isotop dan Sumber Radiasi', '1'),
(27, 'Bidang Industri', '1'),
(28, 'Bidang Kesehatan', '1'),
(29, 'Bidang Pertanian', '1'),
(30, 'Bidang Peternakan', '1'),
(31, 'Bidang SDA/Lingkungan', '1'),
(32, 'Akselerator ', '1'),
(33, 'Iradiator', '1'),
(34, 'Operasi Fasilitas Produksi Isotop dan Radiofarmaka', '1'),
(35, 'Pemeliharaan Fasilitas Produksi Isotop dan Radiofarmaka', '1'),
(36, 'Teknik Produksi Radiofarmaka', '1'),
(37, 'Teknik Produksi Radioisotop', '1'),
(38, 'Keamanan Nuklir dan Seifgard', '2'),
(39, 'Keselamatan Lingkungan', '2'),
(40, 'Keselamatan Pengangkutan Zat Radioaktif dan Bahan Nuklir', '2'),
(41, 'Keselamatan Radiasi dan Kesehatan Kerja', '2'),
(42, 'Keselamatan Reaktor dan Instalasi Nuklir Non-Reaktor', '2'),
(43, 'Keamanan Nuklir', '2'),
(44, 'Seifgard', '2'),
(45, 'Analisis Mengenai Dampak Lingkungan', '2'),
(46, 'Keselamatan Radiasi Lingkungan', '2'),
(47, 'Remediasi Lingkungan', '2'),
(48, 'Keselamatan dan Keamanan Pengangkutan', '2'),
(49, 'Teknik Bungkusan', '2'),
(50, 'Dosimetri Radiasi', '2'),
(51, 'Kedaruratan Radiasi', '2'),
(52, 'Keselamatan dan Kesehatan Kerja', '2'),
(53, 'Metrologi Radiasi', '2'),
(54, 'Proteksi Radiasi', '2'),
(55, 'Keselamatan Operasi Reaktor dan Instalasi Nuklir Non-Reaktor', '2'),
(56, 'Manajemen Kecelakaan dan Kedaruratan Fasilitas Nuklir ', '2'),
(57, 'Manajemen Penuaan Fasilitas Nuklir', '2'),
(58, 'Teknologi Keselamatan dan Keandalan Deterministik/Probabilistik', '2'),
(59, 'Operasi dan Pemeliharaan Reaktor', '3'),
(60, 'Pemanfaatan Reaktor', '3'),
(61, 'Perencanaan Sistem Energi Nuklir', '3'),
(62, 'Teknologi Reaktor', '3'),
(63, 'Operasi', '3'),
(64, 'Pemeliharaan ', '3'),
(65, 'Eksperimen Reaktor', '3'),
(66, 'Iradiasi Target', '3'),
(67, 'Kogenerasi Reaktor Daya', '3'),
(68, 'Pembangkitan Listrik Reaktor Daya', '3'),
(69, 'Teknologi Berkas Neutron', '3'),
(70, 'Kajian Infrastruktur Sistem Energi Nuklir', '3'),
(71, 'Kajian Tapak Reaktor Nuklir', '3'),
(72, 'Kajian Tekno Ekonomi Reaktor Nuklir', '3'),
(73, 'Fisika Reaktor', '3'),
(74, 'Instrumentasi dan Kendali Reaktor', '3'),
(75, 'Kimia Reaktor', '3'),
(76, 'Sistem Reaktor', '3'),
(77, 'Elektromekanik dan Kendali', '4'),
(78, 'Instrumentasi Nuklir', '4'),
(79, 'Mekanik dan Struktur', '4'),
(80, 'Teknologi Proses Fasilitas Nuklir', '4'),
(81, 'Elektrikal', '4'),
(82, 'Elektromekanik', '4'),
(83, 'Sistem Kendali', '4'),
(84, 'Deteksi Radiasi', '4'),
(85, 'Elektronika Nuklir', '4'),
(86, 'Teknik Akuisisi Data dan Pengolahan Sinyal', '4'),
(87, 'Teknik Pengolahan Citra', '4'),
(88, 'Mekanik', '4'),
(89, 'Sipil dan Arsitektur', '4'),
(90, 'Proses Non Nuklir', '4'),
(91, 'Proses Nuklir', '4');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_kontributor`
--

CREATE TABLE `kompetensi_kontributor` (
  `ID_kompetensi` int(50) NOT NULL,
  `Nama_kompetensi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi_kontributor`
--

INSERT INTO `kompetensi_kontributor` (`ID_kompetensi`, `Nama_kompetensi`) VALUES
(17258, 'Pusat Aplikasi Isotop dan Radiasi'),
(17262, 'Pusat Teknologi Bahan Galian Nuklir'),
(17279, 'Kantor Pusat Badan Tenaga Nuklir Nasional'),
(17283, 'Pusat Teknologi Nuklir Bahan Radiometri'),
(17290, 'Pusat Teknologi Akselerator dan Proses Bahan'),
(450216, 'Pusat Teknologi Keselamatan dan Metrologi Radiasi'),
(450222, 'Pusat Kemitraan Teknologi Nuklir'),
(450231, 'Pusat Pendidikan dan Pelatihan'),
(450247, 'Pusat Reaktor Serba Guna'),
(450253, 'Pusat Teknologi Bahan Bakar Nuklir'),
(450262, 'Pusat Teknologi Bahan Industri Nuklir'),
(450278, 'Pusat Rekayasa Perangkat Nuklir'),
(450284, 'Pusat Radioisotop dan Radiofarmaka'),
(450290, 'Pusat Teknologi Limbah Radioaktif'),
(450310, 'Pusat Teknologi Reaktor dan Keselamatan Nuklir'),
(524334, 'Sekolah Tinggi Teknologi Nuklir'),
(535368, 'Pusat Pengembangan Energi Nuklir'),
(614837, 'Inspektorat'),
(614858, 'Pusat Diseminasi Iptek Nuklir'),
(614879, 'Pusat Standardisasi dan Jaminan Mutu Nuklir');

-- --------------------------------------------------------

--
-- Table structure for table `open_question`
--

CREATE TABLE `open_question` (
  `ID_question` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(500) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('open','assigned','answered','publish') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_question`
--

INSERT INTO `open_question` (`ID_question`, `username`, `pertanyaan`, `jawaban`, `date_created`, `status`) VALUES
(3, 'tita', 'apa kepanjangan dari BATAN?', 'badan tenaga nuklir nasional', '2019-07-12 02:46:32', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `question assigned to contributor`
--

CREATE TABLE `question assigned to contributor` (
  `ID_assigned` int(50) NOT NULL,
  `ID_question` int(50) NOT NULL,
  `ID_user` int(50) NOT NULL,
  `ID_kompetensi` int(100) NOT NULL,
  `timestamp_assigned` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `date_answered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `kode_transaksi` varchar(50) NOT NULL,
  `timestamp_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` int(50) NOT NULL,
  `ID_faq` int(50) NOT NULL,
  `No_IP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stopword`
--

CREATE TABLE `stopword` (
  `ID_stopword` int(50) NOT NULL,
  `daftar_kata` varchar(50) NOT NULL,
  `kode_bahasa` set('en','id') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stopword`
--

INSERT INTO `stopword` (`ID_stopword`, `daftar_kata`, `kode_bahasa`) VALUES
(1, 'bego', 'id'),
(2, 'goblok', 'id'),
(3, 'tolol', 'id'),
(4, 'dungu', 'id'),
(5, 'bajingan', 'id'),
(6, 'brengsek', 'id'),
(7, 'jancuk', 'id'),
(8, 'asu', 'id'),
(9, 'geblek', 'id'),
(10, 'gblk', 'id'),
(11, 'anjg', 'id'),
(12, 'bngst', 'id'),
(13, 'sinting', 'id'),
(14, 'bejat', 'id'),
(15, 'bedebah', 'id'),
(16, 'belegug', 'id'),
(17, 'kontol', 'id'),
(18, 'memek', 'id'),
(19, 'ngentot', 'id'),
(20, 'sundala', 'id'),
(21, 'jembut', 'id'),
(22, 'titit', 'id'),
(23, 'fuck', 'en'),
(24, 'shit', 'en'),
(25, 'asshole', 'en'),
(26, 'bitch', 'en'),
(27, 'jerk', 'en'),
(28, 'motherfucker', 'en'),
(29, 'dumbass', 'en'),
(30, 'keparat', 'id');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_user` int(50) NOT NULL,
  `ID_level` enum('1','2','3') NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Institution` varchar(50) NOT NULL,
  `Job` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmodified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedby` varchar(50) NOT NULL,
  `Aktivasi` enum('Y','T') NOT NULL,
  `Kode_aktivasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `ID_level`, `Username`, `Password`, `Email`, `Nama`, `Institution`, `Job`, `Province`, `State`, `Register`, `lastvisit`, `lastmodified`, `modifiedby`, `Aktivasi`, `Kode_aktivasi`) VALUES
(1, '1', 'Admin', 'Admin', 'Admin@gmail.com', 'Admin', 'BATAN', 'BATAN', 'INDONESIA', 'INDONESIA', '2019-07-12 03:23:50', '2019-07-12 03:23:50', '2019-07-12 03:23:50', '', 'Y', ''),
(15, '2', 'titanggraita', 'tita', 'titanggraita@gmail.com', 'titanggraita', 'BATAN', 'BATAN', 'INDONESIA', 'INDONESIA', '2019-07-12 03:28:05', '2019-07-12 03:28:05', '2019-07-12 03:28:05', '', 'Y', ''),
(17, '3', 'p', 'p', 'p@gmail.com', 'p', 'p', 'p', 'p', 'p', '2019-07-12 08:03:45', '2019-07-12 08:03:45', '2019-07-12 08:03:45', '', 'T', '');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `ID_visit` int(50) NOT NULL,
  `ID_faq` int(50) NOT NULL,
  `jumlah_kunjungan` int(50) NOT NULL,
  `lastvisit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xlevel`
--

CREATE TABLE `xlevel` (
  `ID_level` enum('1','2','3') NOT NULL,
  `Name_level` varchar(50) NOT NULL,
  `dateinserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xlevel`
--

INSERT INTO `xlevel` (`ID_level`, `Name_level`, `dateinserted`, `lastmodified`, `modifiedby`) VALUES
('1', 'Admin', '2019-06-17 02:33:11', '2019-06-17 02:34:05', ''),
('2', 'Kontributor', '2019-06-17 02:35:05', '2019-06-17 02:35:10', ''),
('3', 'Public', '2019-06-17 02:36:07', '2019-06-17 02:36:15', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID_faq`);

--
-- Indexes for table `faq_assigned`
--
ALTER TABLE `faq_assigned`
  ADD PRIMARY KEY (`ID_faqassigned`);

--
-- Indexes for table `faq_attachment`
--
ALTER TABLE `faq_attachment`
  ADD PRIMARY KEY (`ID_faqattachment`);

--
-- Indexes for table `kategori_faq`
--
ALTER TABLE `kategori_faq`
  ADD PRIMARY KEY (`ID_kategori`);

--
-- Indexes for table `kompetensi_kontributor`
--
ALTER TABLE `kompetensi_kontributor`
  ADD PRIMARY KEY (`ID_kompetensi`);

--
-- Indexes for table `open_question`
--
ALTER TABLE `open_question`
  ADD PRIMARY KEY (`ID_question`);

--
-- Indexes for table `question assigned to contributor`
--
ALTER TABLE `question assigned to contributor`
  ADD PRIMARY KEY (`ID_assigned`),
  ADD KEY `ID_question` (`ID_question`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `ID_kompetensi` (`ID_kompetensi`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `stopword`
--
ALTER TABLE `stopword`
  ADD PRIMARY KEY (`ID_stopword`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`ID_visit`);

--
-- Indexes for table `xlevel`
--
ALTER TABLE `xlevel`
  ADD PRIMARY KEY (`ID_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID_faq` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faq_assigned`
--
ALTER TABLE `faq_assigned`
  MODIFY `ID_faqassigned` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_attachment`
--
ALTER TABLE `faq_attachment`
  MODIFY `ID_faqattachment` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_faq`
--
ALTER TABLE `kategori_faq`
  MODIFY `ID_kategori` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `open_question`
--
ALTER TABLE `open_question`
  MODIFY `ID_question` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question assigned to contributor`
--
ALTER TABLE `question assigned to contributor`
  MODIFY `ID_assigned` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stopword`
--
ALTER TABLE `stopword`
  MODIFY `ID_stopword` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question assigned to contributor`
--
ALTER TABLE `question assigned to contributor`
  ADD CONSTRAINT `question assigned to contributor_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question assigned to contributor_ibfk_2` FOREIGN KEY (`ID_kompetensi`) REFERENCES `kompetensi_kontributor` (`ID_kompetensi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
