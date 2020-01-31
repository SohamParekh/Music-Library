-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 08:33 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userName` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userName`, `pwd`) VALUES
('soham', 'soham'),
('nancy', 'nancy');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `message`) VALUES
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('Deno', 'Play and Pause 1 button');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `song` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `srNo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`name`, `image`, `song`, `artist`, `srNo`) VALUES
('Mashallah', 'mashallah.jpg', '01 - Ek Tha Tiger - Mashallah  DM .mp3', 'Wajid & Shreya Ghoshal', 1),
('Tumhi ho Bandhu', 'tumhihobandhu.jpg', '01 - Cocktail - Tumhi Ho Bandhu  DM .mp3', 'Neeraj Shridhar & Kavita Sheth', 2),
('Besabriyaan', 'besabriyaan.jpg', '01 - Besabriyaan - M.S. Dhoni  DJMaza.Cool .mp3', 'Armaan Malik', 3),
('Teri meri Kahaani', 'terimerikahani.jpg', '01 - GIB - Teri Mere Kahaani  DJMaza.Info .mp3', 'Arijit Singh & Palak Muchal', 5),
('Galliyan', 'galliyan.jpg', '01 - Ek Villain - Galliyan  DJMaza.Info .mp3', 'Ankit Tiwari', 6),
('Lo Maan Liya', 'lomaanliya.jpg', '01 - Lo Maan Liya - Raaz Reboot  DJMaza.Cool .mp3', 'Arijit Singh', 7),
('Gerua', 'gerua.jpg', '01 - Dilwale - Gerua  DJMaza.Info .mp3', 'Arijit Singh & Antara Mitra', 8),
('Sanam Re', 'SanamRe.jpg', '01 - Sanam Re - Sanam Re  DJMaza.Info .mp3', 'Mithoon & Arijit Singh', 9),
('Mskuraane', 'galliyan.jpg', '01 - Citylights - Muskurane (Romantic)  DJMaza.Info .mp3', 'Arijit Singh', 10);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`, `email`, `number`) VALUES
('soham', 'soham', 'sp@gmail.com', 0),
('Nancy', 'nancy', 'nancy@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`srNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `srNo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
