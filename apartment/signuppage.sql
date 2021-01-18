-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 05:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signuppage`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin`, `pass`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `registerpage`
--

CREATE TABLE `registerpage` (
  `name` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `proof` varchar(50) NOT NULL,
  `roomno` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `nofppl` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerpage`
--

INSERT INTO `registerpage` (`name`, `emailid`, `phoneno`, `address`, `proof`, `roomno`, `floor`, `nofppl`, `checkin`, `checkout`) VALUES
('pavan', 'pavan@gmail', 1234, 'chaithanay house', 'adhar', 302, 3, 5, '2020-12-26', '2020-12-28'),
('ram', 'ram@gmail.com', 12345, 'chaithanay house', 'adhar', 212, 2, 4, '2020-12-26', '2020-12-27'),
('rama', 'vineethprabhu559@gmail.com', 12345678, 'mg road ram nagar 3rd cross', 'adhar', 102, 1, 4, '2020-12-26', '2020-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `roomno` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `breakfast` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`roomno`, `rent`, `breakfast`, `bed`, `extra`) VALUES
(102, 4000, 240, 500, 100),
(212, 2000, 240, 500, 150),
(302, 4000, 480, 1000, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin`);

--
-- Indexes for table `registerpage`
--
ALTER TABLE `registerpage`
  ADD PRIMARY KEY (`phoneno`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`roomno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
