-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 05:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `singkatan` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id`, `nama`, `singkatan`, `website`, `latitude`, `longitude`) VALUES
(1, 'Politeknik Pos Indonesia', 'poltekpos', 'http://poltekpos.ac.id/', '-6.873227', '107.575955'),
(2, 'Politeknik Negeri Bandung', 'polban', 'http://polban.ac.id/', '-6.871162', '107.573588'),
(3, 'Politeknik Manufaktur Negeri Bandung', 'polman', 'http://polman-bandung.ac.id', '-6.877473', '107.620498'),
(4, 'Poltekkes Kemenkes Bandung', 'poltekkes', 'http://poltekkesbandung.ac.id', '-6.894391', '107.598879'),
(5, 'Politeknik Pajajaran Insan Cinta Bangsa Bandung', 'poljan', 'http://politeknikpajajaran.ac.id', '-6.915614', '107.647023'),
(6, 'Politeknik Komputer Niaga LPKIA', 'lpkia', 'http://lpkia.ac.id', '-6.949925', '107.624664'),
(7, 'Politeknik Piksi Ganesha ', 'piksiganesha', 'http://piksi-ganesha-online.ac.id', '-6.928321', '107.637759'),
(8, 'Politeknik Geologi dan Pertambangan &quot;AGP&quot', 'poltekgeotambangagp', 'https://poltek-geotambang-agp.ac.id', '-6.906394', '107.650105'),
(9, 'Politeknik LP3I Bandung', 'lp3i', 'https://plb.ac.id/', '-6.896875', '107.634176'),
(10, 'Politeknik Praktisi Bandung', 'praktisi', 'http://www.praktisi.ac.id/', '-6.910189', '107.610836'),
(11, 'Politeknik TEDC Bandung', 'poltektedc', 'http://www.poltektedc.ac.id', '-6.873602', '107.561802'),
(12, 'Politeknik Al-Islam Bandung', 'politeknikalislam', 'http://politeknikalislam.com/', '-6.929327', '107.680096'),
(13, 'Poltekes TNI AU Ciumbuleuit Bandung', 'poltekestniau', 'http://poltekestniau.ac.id/', '-6.865267', '107.605415'),
(14, 'Institut Teknologi Bandung', 'itb', 'https://www.itb.ac.id', '-6.891528', '107.610643'),
(15, 'Institut Teknologi Harapan Bangsa', 'ithb', 'http://ithb.ac.id', '-6.888744', '107.615946'),
(16, 'Institut Teknologi Nasional', 'itenas', 'http://www.itenas.ac.id/', '-6.897714', '107.635732'),
(17, 'Universitas Pendidikan Indonesia', 'upi', 'http://www.upi.edu', '-6.861074', '107.594323'),
(18, 'Universitas Islam Negeri Sunan Gunung Djati', 'uinsgd', 'http://www.uinsgd.ac.id', '-6.931656', '107.717041'),
(19, 'Universitas Islam Bandung', 'unisba', 'https://www.unisba.ac.id', '-6.901511', '107.609717'),
(20, 'Universitas Islam Nusantara', 'uninus', 'http://uninus.ac.id/', '-6.945367', '107.644673'),
(21, 'Universitas Katolik Parahyangan', 'unpar', 'http://unpar.ac.id/', '-6.874736', '107.604906'),
(22, 'Universitas Kristen Maranatha', 'maranatha', 'https://www.maranatha.edu', '-6.886319', '107.580368'),
(23, 'Universitas Bandung Raya', 'unbar', 'http://www.unbar.ac.id', '-6.916501', '107.640766'),
(24, 'Universitas Widyatama', 'utama', 'http://www.widyatama.ac.id', '-6.898237', '107.645261'),
(25, 'Universitas Nasional Pasim', 'pasim', 'http://www.pasim.ac.id', '-6.894715', '107.571312'),
(26, 'Universitas Sangga Buana YPKP', 'usb', 'http://usbypkp.ac.id', '-6.899520', '107.640275'),
(27, 'Universitas Komputer Indonesia', 'unikom', 'http://www.unikom.ac.id', '-6.886825', '107.615295'),
(28, 'Universitas Jenderal Achmad Yani', 'unjani', 'http://www.unjani.ac.id', '-6.886938', '107.527296'),
(29, 'Universitas Kebangsaan', 'unke', 'http://universitaskebangsaan.ac.id', '-6.926877', '107.626352'),
(30, 'Universitas Langlangbuana', 'unla', 'http://www.unla.ac.id', '-6.931365', '107.615507'),
(31, 'Universitas Nurtanio Bandung', 'unnur', 'http://unnur.ac.id', '-6.906364', '107.581803'),
(32, 'Universitas Al-Ghifari', 'unfari', 'http://www.unfari.ac.id', '-6.933430', '107.679367'),
(33, 'Universitas Pasundan', 'unpas', 'http://www.unpas.ac.id', '-6.928957', '107.612816'),
(34, 'Universitas Muhammadiyah Bandung', 'umb', 'http://umbandung.ac.id', '-6.928406', '107.623218'),
(35, 'Universitas Bina Sarana Informatika', 'unibsi', 'http://universitas.bsi.ac.id', '-6.909857', '107.649970'),
(36, 'Universitas Informatika dan Bisnis Indonesia', 'unibi', 'http://unibi.ac.id', '-6.942225', '107.650771'),
(37, 'Sekolah Tinggi Pariwisata Bandung', 'stpb', 'http://stp-bandung.ac.id', '-6.868779', '107.594631'),
(38, 'Sekolah Tinggi Manajemen Logistik', 'stimlog', 'http://www.stimlog.ac.id/', '-6.873453', '107.576114');

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE `server` (
  `id` int(11) NOT NULL,
  `site` varchar(50) NOT NULL,
  `port` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`id`, `site`, `port`) VALUES
(1, '192.168.100.21', 8080);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `server`
--
ALTER TABLE `server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
