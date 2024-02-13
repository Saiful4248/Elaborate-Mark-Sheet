-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 08:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marksheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `Id` varchar(50) NOT NULL,
  `a1` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `Question1` int(50) NOT NULL,
  `a2` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `Question2` int(50) NOT NULL,
  `a3` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `d3` int(11) NOT NULL,
  `Question3` int(50) NOT NULL,
  `a4` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `d4` int(11) NOT NULL,
  `Question4` int(50) NOT NULL,
  `a5` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `d5` int(11) NOT NULL,
  `Question5` int(50) NOT NULL,
  `a6` int(11) NOT NULL,
  `b6` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `d6` int(11) NOT NULL,
  `Question6` int(50) NOT NULL,
  `a7` int(11) NOT NULL,
  `b7` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `d7` int(11) NOT NULL,
  `Question7` int(50) NOT NULL,
  `a8` int(11) NOT NULL,
  `b8` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `d8` int(11) NOT NULL,
  `Question8` int(50) NOT NULL,
  `a9` int(11) NOT NULL,
  `b9` int(11) NOT NULL,
  `c9` int(11) NOT NULL,
  `d9` int(11) NOT NULL,
  `Question9` int(50) NOT NULL,
  `Total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`Id`, `a1`, `b1`, `c1`, `d1`, `Question1`, `a2`, `b2`, `c2`, `d2`, `Question2`, `a3`, `b3`, `c3`, `d3`, `Question3`, `a4`, `b4`, `c4`, `d4`, `Question4`, `a5`, `b5`, `c5`, `d5`, `Question5`, `a6`, `b6`, `c6`, `d6`, `Question6`, `a7`, `b7`, `c7`, `d7`, `Question7`, `a8`, `b8`, `c8`, `d8`, `Question8`, `a9`, `b9`, `c9`, `d9`, `Question9`, `Total`) VALUES
('MUH2025009F', 9, 4, 4, 5, 22, 5, 6, 7, 8, 26, 9, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 57),
('MUH2025016M', 10, 9, 10, 9, 38, 0, 0, 0, 0, 0, 10, 9, 10, 9, 38, 10, 9, 10, 9, 38, 10, 9, 10, 9, 38, 10, 9, 10, 9, 38, 10, 9, 10, 9, 38, 10, 9, 10, 9, 38, 0, 0, 0, 0, 9, 266),
('MUH2025018M', 0, 1, 2, 3, 6, 4, 5, 6, 7, 22, 8, 9, 10, 11, 38, 12, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
