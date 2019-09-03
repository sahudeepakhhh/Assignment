-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 09:56 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `num` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`num`, `name`, `id`) VALUES
(1, 'Beru Whitesun lars', 7),
(2, 'R4-P17', 75),
(3, 'Padmé Amidala', 35),
(4, 'Yoda', 20),
(5, 'Rugor Nass', 38),
(6, 'Shmi Skywalker', 43),
(7, 'Gasgano', 49),
(8, 'Han Solo', 14),
(9, 'Ki-Adi-Mundi', 52),
(10, 'Quarsh Panaka', 42),
(11, 'Plo Koon', 58),
(12, 'Luminara Unduli', 64),
(13, 'Barriss Offee', 65),
(14, 'R2-D2', 3),
(15, 'Arvel Crynyd', 29),
(16, 'Biggs Darklighter', 9),
(17, 'C-3PO', 2);

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `sr` int(10) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `fid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`sr`, `movie`, `fid`) VALUES
(1, 'Attack of the Clones', 7),
(2, 'Revenge of the Sith', 7),
(3, 'A New Hope', 7),
(4, 'Attack of the Clones', 75),
(5, 'Revenge of the Sith', 75),
(6, 'Attack of the Clones', 35),
(7, 'The Phantom Menace', 35),
(8, 'Revenge of the Sith', 35),
(9, 'The Empire Strikes Back', 20),
(10, 'Attack of the Clones', 20),
(11, 'The Phantom Menace', 20),
(12, 'Revenge of the Sith', 20),
(13, 'Return of the Jedi', 20),
(14, 'The Phantom Menace', 38),
(15, 'Attack of the Clones', 43),
(16, 'The Phantom Menace', 43),
(17, 'The Phantom Menace', 49),
(18, 'The Empire Strikes Back', 14),
(19, 'Return of the Jedi', 14),
(20, 'A New Hope', 14),
(21, 'The Force Awakens', 14),
(22, 'Attack of the Clones', 52),
(23, 'The Phantom Menace', 52),
(24, 'Revenge of the Sith', 52),
(25, 'The Phantom Menace', 42),
(26, 'Attack of the Clones', 58),
(27, 'The Phantom Menace', 58),
(28, 'Revenge of the Sith', 58),
(29, 'Attack of the Clones', 64),
(30, 'Revenge of the Sith', 64),
(31, 'Attack of the Clones', 65),
(32, 'The Empire Strikes Back', 3),
(33, 'Attack of the Clones', 3),
(34, 'The Phantom Menace', 3),
(35, 'Revenge of the Sith', 3),
(36, 'Return of the Jedi', 3),
(37, 'A New Hope', 3),
(38, 'The Force Awakens', 3),
(39, 'Return of the Jedi', 29),
(40, 'A New Hope', 9),
(41, 'The Empire Strikes Back', 2),
(42, 'Attack of the Clones', 2),
(43, 'The Phantom Menace', 2),
(44, 'Revenge of the Sith', 2),
(45, 'Return of the Jedi', 2),
(46, 'A New Hope', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `sr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
