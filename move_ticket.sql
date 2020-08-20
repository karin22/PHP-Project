-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 03:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `move_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `chair`
--

CREATE TABLE `chair` (
  `id_char` int(11) NOT NULL,
  `name_char` varchar(10) NOT NULL,
  `status1` tinyint(4) NOT NULL,
  `status2` tinyint(4) NOT NULL,
  `status3` tinyint(4) NOT NULL,
  `status4` tinyint(4) NOT NULL,
  `status5` tinyint(4) NOT NULL,
  `status6` tinyint(4) NOT NULL,
  `status7` tinyint(4) NOT NULL,
  `status8` tinyint(4) NOT NULL,
  `status9` tinyint(4) NOT NULL,
  `status10` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chair`
--

INSERT INTO `chair` (`id_char`, `name_char`, `status1`, `status2`, `status3`, `status4`, `status5`, `status6`, `status7`, `status8`, `status9`, `status10`) VALUES
(1, 'A01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'A02', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'A03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'A04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'A05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'A06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'A07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'A08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'A09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'A10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'B01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'B02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'B03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'B04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'B05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'B06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'B07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'B08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'B09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'B10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'C01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'C02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'C03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'C04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'C05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'C06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'C07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'C08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'C09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'C10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 'D01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 'D02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 'D03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 'D04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 'D05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 'D06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 'D07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 'D08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 'D09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 'D10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 'E01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 'E02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 'E03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 'E04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 'E05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 'E06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 'E07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 'E08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 'E09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 'E10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `id_date` int(150) NOT NULL,
  `time` varchar(150) NOT NULL,
  `date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`id_date`, `time`, `date`) VALUES
(101, '10.00', 'Monday'),
(102, '13.00', 'Monday'),
(103, '10.00', 'Tuesday'),
(104, '13.00', 'Tuesday'),
(105, '10.00', 'Wednesday'),
(106, '13.00', 'Wednesday'),
(107, '10.00', 'Thursday'),
(108, '13.00', 'Thursday'),
(109, '10.00', 'Friday'),
(110, '13.00', 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(11) NOT NULL,
  `name_movie` varchar(150) NOT NULL,
  `name_thai` varchar(100) CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  `long_time` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Start_screening` date NOT NULL,
  `time_movie` varchar(15) CHARACTER SET utf8 NOT NULL,
  `cinema` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id_movie`, `name_movie`, `name_thai`, `picture`, `long_time`, `Start_screening`, `time_movie`, `cinema`) VALUES
(1, 'Avengers Endgame', 'อเวนเจอร์ส เผด็จศึก\r\n', 'avengers.jpg', '182 minute', '2019-04-24', '13.00 น.', 1),
(2, 'Hellboy', 'เฮลล์บอย\r\n', 'hellboy.jpg', '120 minute', '2019-04-11', '10.00 น.', 2),
(3, 'Songkran-Saep-Sataan-Logun', 'สงกรานต์ แสบสะท้านโลกันต์\r\n', 'songkran.jpg', '110 minute', '2019-04-11', '14.30 น.', 3),
(4, 'Fighting with My Family', 'สู้ท้าฝันเพื่อครอบครัว\r\n', 'fightingfamily.jpg', '109 minute', '2019-04-14', '09.00 น.', 4),
(5, 'More than Blue', 'ถึงวันนั้นฉันจะบอกรักเธอ', '20190505195711717.png', '105 minute', '2019-04-18', '13.20 น.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `movie` varchar(40) CHARACTER SET utf8 NOT NULL,
  `name_chair` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_user`, `movie`, `name_chair`) VALUES
(1, 'karin', 'Avengers Endgame', 'A01'),
(2, 'karin', 'Fighting with My Family', 'A01'),
(3, 'karin', 'Avengers Endgame', 'A02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `name`, `email`, `telephone`) VALUES
('admin', '1234', 'admin', 'admin@hotmail.com', 123456789),
('not', '242', 'karin', 'not@gmail.com', 908693439);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chair`
--
ALTER TABLE `chair`
  ADD PRIMARY KEY (`id_char`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id_date`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
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
-- AUTO_INCREMENT for table `chair`
--
ALTER TABLE `chair`
  MODIFY `id_char` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
