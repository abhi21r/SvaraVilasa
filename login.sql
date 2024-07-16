-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 09:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `SL_No` int(4) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ConfirmPassword` varchar(10) NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`SL_No`, `Name`, `Email`, `Password`, `ConfirmPassword`, `Time`) VALUES
(1, 'anjali', 'anjali123@gmail.com', '1bbd886460827015e5d605ed44252251', '1bbd886460', '2023-04-05 20:42:06'),
(2, 'arnab dutta', 'arnab@gmail.com', 'bae5e3208a3c700e3db642b6631e95b9', 'bae5e3208a', '2023-04-05 21:07:58'),
(3, 'ab', 'kajal@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e79432', '2023-06-30 02:40:27'),
(4, 'brajesh', 'brajesh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949', '2023-07-09 21:21:55'),
(5, 'Abhishek pandey', 'ap@gmail.com', '1a5bfcd0f0f6630e7d0a6aa7be32b854', '1a5bfcd0f0', '2023-10-07 15:08:40'),
(6, 'Deirdre Smith', 'duwopohe@mailinator.', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea', '2023-10-07 15:09:26'),
(7, 'manish', 'manish@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac', '2023-10-07 15:11:02'),
(8, 'Abhishek pandey', 'aa@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac', '2023-10-09 12:49:12'),
(9, 'vishal', 'vishal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52', '2023-10-14 00:40:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`SL_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `SL_No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
