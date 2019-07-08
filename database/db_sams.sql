-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 11:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sl` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `conpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl`, `name`, `email`, `pass`, `conpass`) VALUES
(56, 'MD.Nazmul Hasan Sharif', 'nazmulict94@gmail.com', '12345', '12345'),
(57, 'Rubel mia', 'rubel@gmail.com', '12345', '12345'),
(58, 'payal', 'payalpaul2436@gmail.com', '12345', '12345'),
(59, 'payal', 'payal@gmail.com', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `att_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `roll`, `attend`, `att_time`) VALUES
(96, 120, '', '0000-00-00'),
(177, 1, '', '0000-00-00'),
(178, 2, '', '0000-00-00'),
(179, 3, '', '0000-00-00'),
(180, 1, 'present', '2019-06-28'),
(181, 2, 'present', '2019-06-28'),
(182, 3, 'absent', '2019-06-28'),
(186, 1309006, '', '0000-00-00'),
(187, 1, 'present', '2019-06-29'),
(188, 2, 'present', '2019-06-29'),
(189, 3, 'present', '2019-06-29'),
(190, 1309006, 'absent', '2019-06-29'),
(191, 1209025, '', '0000-00-00'),
(192, 1209025, '', '0000-00-00'),
(193, 1, 'present', '2019-06-30'),
(194, 2, 'present', '2019-06-30'),
(195, 3, 'present', '2019-06-30'),
(196, 1309006, 'absent', '2019-06-30'),
(197, 1209025, 'present', '2019-06-30'),
(198, 1209025, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `roll`) VALUES
(30, 'skwt', 1),
(31, 'sobuj', 2),
(32, 'ajhar', 3),
(33, 'Rubel mia', 1309006),
(34, 'MD.Nazmul Hasan Sharif', 1209025),
(35, 'MD.Nazmul Hasan Sharif', 1209025),
(36, 'payal', 1209025);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
