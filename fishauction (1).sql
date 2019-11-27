-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 07:06 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fishauction`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `pname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `bidamount` int(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`pname`, `date`, `bidamount`, `image`) VALUES
('squid', '2019-11-16', 800, 'bondas fish.jpg'),
('squid', '2019-11-15', 700, 'rainbow.jpg'),
('Codfish', '2019-11-02', 650, 'cod.jpg'),
('rainbow', '2019-11-13', 100, 'rainbow.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('chetana', 'chetu123'),
('hamsini', 'ham123');

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `bid` int(50) NOT NULL,
  `auction_status` varchar(11) NOT NULL DEFAULT 'N',
  `notity` varchar(11) NOT NULL DEFAULT 'N',
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `bname`, `pname`, `sname`, `bid`, `auction_status`, `notity`, `message`) VALUES
(1, 'Netra', 'squid', 'ashwini', 650, 'Y', 'N', ''),
(2, 'mithun', 'fish22', 'ashwini', 700, 'N', 'N', '');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `bname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bname`, `password`, `email`, `dob`, `phone`, `address`) VALUES
('Netra', 'netra123', 'ng@gmail.com', '2019-03-27', '7812458369', 'Mangalore');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sname`, `password`, `email`, `dob`, `phone`, `address`) VALUES
('ashwini', 'ashu123', 'ash@gmail.com', '2019-11-08', '8971685757', 'bangalore'),
('grifith', '8888', 'g@gmail.com', '2019-11-09', '68654534', 'Mangalore'),
('ashwini', 'ashu123', 'abc@gmail.com', '2019-11-02', '68654534', 'Mangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
