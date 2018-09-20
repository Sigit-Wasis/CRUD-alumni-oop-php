-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2018 at 10:28 AM
-- Server version: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.9-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_bio` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `github` varchar(20) NOT NULL,
  `linkedin` varchar(20) NOT NULL,
  `facebook` varchar(20) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `testimoni` varchar(100) NOT NULL,
  `foto` varchar(10) NOT NULL,
  `angkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_bio`, `nama`, `asal`, `jurusan`, `pengalaman`, `github`, `linkedin`, `facebook`, `prestasi`, `testimoni`, `foto`, `angkatan`) VALUES
(5, 'apip', 'aksdjfajsn', 'knfasnf', 'skdfa', 'dfkjnasdf', 'aksdfnaksjnf', 'akjdfnaksjdfn', 'akdjfnak', 'aksdjfna', 'aksdnfa', 'asdkfasdfn'),
(6, 'nasrul keren', 'skfn', 'aksnfkan', 'aksndf', 'knafnksf', 'akdfa', 'akjdfn', 'afdnj', 'akjdfn', 'ajdfn', 'askdnf'),
(8, 'farhan ', 'bandung ', 'backend developer', 'josese', 'farhan123', 'masfar', 'farhan12345', 'alhamdulilah', 'mantapp', 'farhan.jpg', 'angkatan ke-2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_bio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_bio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
