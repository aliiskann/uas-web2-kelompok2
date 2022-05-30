-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 04:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(0, 'Ardi', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `ID_PENDAFTARAN` char(10) DEFAULT NULL,
  `NM_LENGKAP` varchar(50) DEFAULT NULL,
  `ALMT_RUMAH` varchar(100) DEFAULT NULL,
  `PROVINSI` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `NOTELP` int(13) DEFAULT NULL,
  `KEAHLIAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`ID_PENDAFTARAN`, `NM_LENGKAP`, `ALMT_RUMAH`, `PROVINSI`, `EMAIL`, `NOTELP`, `KEAHLIAN`) VALUES
('P202200001', 'anto', 'anti', 'jakarta', 'antokeren@gmail.com', 123, 'mobil');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `almt_peserta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `jurusan`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `almt_peserta`) VALUES
('P202200001', '2022-05-29', '2022/2023', 'IPS', 'dsds', 'sadas', '2022-05-18', 'Perempuan', 'Kristen', 'asdsa'),
('P202200002', '2022-05-29', '', '', 'asd', 'asdasd', '0000-00-00', 'Laki-laki', 'Kristen', 'adasda'),
('P202200003', '2022-05-29', '', '', 'asd', 'asdasd', '0000-00-00', 'Laki-laki', 'Kristen', 'adasda'),
('P202200004', '2022-05-29', '', '', 'asdasd', '', '0000-00-00', '', 'jawabarat', '213213asd'),
('P202200005', '2022-05-29', '', '', 'asdasd', '', '0000-00-00', '', 'jakarta', 'asdsad'),
('P202200006', '2022-05-29', '', '', 'asd', '', '0000-00-00', '', 'jakarta', '123'),
('P202200007', '2022-05-29', '', '', 'asd', '', '0000-00-00', '', 'jawabarat', 'asdsa'),
('P202200008', '2022-05-29', '', '', 'asdas', '', '0000-00-00', '', '', '123'),
('P202200009', '2022-05-29', '', '', 'alkajdsalskj', '', '0000-00-00', '', '', '123adasd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
