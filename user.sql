-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 09:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databfse`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('3', 'ec02d2d95c27675d87dca5001'),
('alina1@yahoo.com', 'ec02d2d95c27675d87dca5001'),
('busydaniel11@yahoo.com', 'ec02d2d95c27675d87dca5001'),
('busydaniel1@yahoo.com', 'aa47f8215c6f30a0dcdb2a36a'),
('busydaniel22@yahoo.com', 'aa47f8215c6f30a0dcdb2a36a'),
('busydaniel23@yahoo.com', 'e10adc3949ba59abbe56e057f'),
('busydaniel52@yahoo.com', '29d14816b07969debe0e339a5'),
('busydaniel99@yahoo.com', '5335907d061d4534dce3cca93'),
('busydaniel@yahoo.com', '5ca2aa845c8cd5ace6b016841'),
('dodustudent1@yahoo.com', 'ec02d2d95c27675d87dca5001'),
('dodustudent@yahoo.com', 'b2d09b73eb5ad0228f9cb2e51'),
('renatostudent@yahoo.com', 'ec02d2d95c27675d87dca5001'),
('theostudent@yahoo.com', 'e10adc3949ba59abbe56e057f'),
('tomicistudent1@yahoo.com', '4a7d5defd2b2f8176d0adbc1c'),
('tomicistudent@yahoo.com', '4a7d5defd2b2f8176d0adbc1c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
