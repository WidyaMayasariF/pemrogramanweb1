-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 10:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id_company` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `company_name` varchar(22) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id_company`, `image`, `company_name`, `about`) VALUES
(2, 'pantai.jpg', 'Pantai', 'Sebagai negara kepulauan, Indonesia dianugerahi jutaan lautan dan pantai yang sangat memesona.'),
(3, 'gunung2.jpg', 'Pegunungan', 'Indonesia memiliki banyak gunung-gunung tinggi yang tersebar di seluruh pulau Indonesia.'),
(4, 'candi.jpg', 'Sejarah', 'Peninggalan sejarah memiliki arti penting sebagai bukti peristiwa bersejarah yang terjadi di masa lalu.'),
(6, 'kesenian.jpg', 'Kesenian', 'Keragamannya mulai dari agama, suku, etnis, tarian dan dari wilayah sudah berbeda adat istiadatnya.'),
(7, 'kebudayaan.jpg', 'Budaya', 'Kesenian tradisonal Indonesia sangat beragam dan terkenal bahkan sampai ke Luar Negri.'),
(8, 'kuliner2.jpg', 'Kuliner', 'Cita rasa dari rempah-rempahnya menjadi salah satu kunci kelezatan masakan Nusantara.');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_company` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_company`, `id_detail`, `tittle`, `desc`) VALUES
(2, 8, 'Pantai', 'Pantai Tangsi atau yang lebih dikenal dengan Pantai Pink dari Pulau Lombok terletak di desa Sekaroh, kecamatan Jerowaru, kabupaten Lombok Timur adalah sebuah destinasi wisatawan yang menarik dan patut untuk dikunjungi karena keunikannya'),
(4, 9, 'Sejarah', 'Lokasi Borobudur berada di Magelang, Provinsi Jawa Tengah. Objek wisata ini berada sekitar 100 km dari Semarang, 86 km dari Surakarta, dan 40 km dari DI Yogyakarta. Dan karena lebih dekat dari Yogyakarta dan lebih sering pula dijadikan agenda obyek wisata'),
(3, 10, 'Pegunungan', 'Pegunungan atau disebut juga Barisan dan Banjaran merupakan suatu area geografis berupa rentetan dari beberapa gunung-gunung atau bukit yang terkait secara geologis yang membentuk suatu deret atau bentangan'),
(6, 15, 'Kesenian', 'Indonesia merupakan negara kepulauan yang memiliki adat budaya yang sangat beragam.Salah satu budaya yang terkenal adalah kesenian. Kesenian Indonesia merupakan sarana yang digunakan untuk mengekspresikan rasa keindahan dalam jiwa manusia.'),
(7, 16, 'Budaya', 'Budaya Indonesia adalah seluruh kebudayaan nasional, kebudayaan lokal, maupun kebudayaan asal asing yang telah ada di Indonesia sebelum Indonesia merdeka pada tahun 1945.'),
(8, 17, 'Kuliner', 'Kuliner Indonesia merupakan salah satu masakan terlezat di dunia, karena di setiap masakannya disajikan dengan bumbu rempah-rempah yang khas dan lengkap. Tak heran, makanan khas daerah di Indonesia ini cukup banyak yang terkenal baik lokal maupun hingga m');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(14, 'widya10', 'widya10', 'widyamayasari10@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
