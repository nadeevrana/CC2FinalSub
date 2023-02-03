-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 05:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussion2`
--

CREATE TABLE `discussion2` (
  `id2` int(11) NOT NULL,
  `parent_comment2` varchar(500) NOT NULL,
  `student2` varchar(1000) NOT NULL,
  `post2` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion2`
--

INSERT INTO `discussion2` (`id2`, `parent_comment2`, `student2`, `post2`, `date`) VALUES
(4, '130', 'Eng. Vince', 'So, kindly, hurry and sign up', '2021-08-05 10:27:43'),
(3, '107', 'John', 'For which computer', '2021-07-21 21:11:25'),
(2, '93', 'Mr Kyalo', 'It looks more attractive', '2021-07-05 19:43:18'),
(1, '0', 'Mr Kyalo', 'What are some of the improved features of windows 11?', '2021-07-05 19:42:52'),
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discussion2`
--
ALTER TABLE `discussion2`
  ADD PRIMARY KEY (`id2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussion2`
--
ALTER TABLE `discussion2`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
