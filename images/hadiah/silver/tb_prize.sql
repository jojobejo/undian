-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 09:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiucoid_undian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_prize`
--

CREATE TABLE `tb_prize` (
  `id_prize` int(11) NOT NULL,
  `id_kat_undi` int(11) NOT NULL,
  `nama_prize` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_prize`
--

INSERT INTO `tb_prize` (`id_prize`, `id_kat_undi`, `nama_prize`, `img`) VALUES
(1, 4, 'City Car Off The Road', 'City_Car_Off_The_Road.png'),
(2, 4, 'Sepeda Motor Honda PCX ', 'Sepeda_Motor_Honda_PCX.png'),
(3, 5, 'Motor Vario   ', 'Motor_Vario.png'),
(4, 3, 'Motor Beat Sporty CBS ', 'Motor_Beat_Sporty_CBS.png'),
(5, 3, 'Voucher Belanja   ', 'Voucher_Belanja.png'),
(6, 3, 'Laptop    ', 'Laptop.png'),
(7, 3, 'Sepeda Listrik   ', 'Sepeda_Listrik.png'),
(8, 3, 'Kulkas 2 Pintu  ', 'Kulkas_2_Pintu.png'),
(9, 3, 'TV 32   ', 'TV_32.png'),
(10, 3, 'HP Android   ', 'HP_Android.png'),
(11, 1, 'Voucher Belanja   ', 'Voucher_Belanja.png'),
(12, 1, 'Pompa Apung   ', 'Pompa_Apung.png'),
(13, 1, 'Sprayer Mesin   ', 'Sprayer_Mesin.png'),
(14, 1, 'Sprayer Elektrik 16 Ltr ', 'Sprayer_Elektrik_16_Ltr.png'),
(15, 1, 'Sprayer Elektrik 10 Ltr ', 'Sprayer_Elektrik_10_Ltr.png'),
(16, 1, 'Tangki Kocor Cair  ', 'Tangki_Kocor_Cair.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_prize`
--
ALTER TABLE `tb_prize`
  ADD PRIMARY KEY (`id_prize`),
  ADD KEY `FK1_undian` (`id_kat_undi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
