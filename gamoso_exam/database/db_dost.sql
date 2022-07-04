-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 07:19 PM
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
-- Database: `db_dost`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_account`
--

CREATE TABLE `table_account` (
  `account_number` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `department` varchar(100) NOT NULL,
  `sss_number` varchar(50) NOT NULL,
  `tin_number` varchar(50) NOT NULL,
  `ph_number` varchar(50) NOT NULL,
  `user_level` varchar(50) NOT NULL,
  `account_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_account`
--

INSERT INTO `table_account` (`account_number`, `username`, `password`, `lastname`, `firstname`, `middlename`, `birthday`, `gender`, `address`, `contact_number`, `email`, `department`, `sss_number`, `tin_number`, `ph_number`, `user_level`, `account_status`) VALUES
(1, 'dpg', 'ddpp', 'gamoso', 'Dranreb', 'Pascua', '03/12/1999', 'Male', 'Bagar, Candon City, Ilocos Sur', '09272415333', 'Dpogege@gmail.com', 'RSTL', '123123123', '123123123', '123123', 'admin', 'activated'),
(23, 'admin', 'admin', 'Gamoso', 'Dranreb', 'Pascua', '1999-03-12', 'Male', 'Bagar, Candon City, Ilocos Sur', '09272415333', 'dpgoege@gmail.com', 'RSTL', '1111111111', '222222222222', '33333333', 'admin', 'activated'),
(24, 'username', 'password', 'Gamoso', 'Dran Leynard', 'Pascua', '23-03-1999', 'Male', 'Bagar, Candon City', '09231231', 'ddlll@gmail.com', 'ITSM', '9999', '8888', '7777', 'user', 'activated'),
(26, 'user', 'user', 'Name', 'User', 'Middle', '213123123', 'Male', 'Bagar, Candon City', '3333', 'sf@gmail.com', 'ITSM', '12312', '0000', '123123', 'user', 'activated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_account`
--
ALTER TABLE `table_account`
  ADD UNIQUE KEY `account_number` (`account_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_account`
--
ALTER TABLE `table_account`
  MODIFY `account_number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
