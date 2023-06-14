-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2023 at 05:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `name_tag`
--

CREATE TABLE `name_tag` (
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `name_tag`
--

INSERT INTO `name_tag` (`tag`, `name`) VALUES
('000000000000000000000005', 'Table#2'),
('000000000000000000000006', 'Table#3'),
('000000000000000000000007', 'Table#4'),
('000000000000000000000008', 'Table#5'),
('000000000000000000000009', 'Table#6'),
('000000000000000000000010', 'Table#7'),
('000000000000000000000011', 'Table#8'),
('000000000000000000000012', 'Table#9'),
('000000000000000000000013', 'Table#10'),
('000000000000000000000014', 'Chair#1'),
('000000000000000000000015', 'Chair#2'),
('000000000000000000000016', 'Chair#3'),
('000000000000000000000017', 'Chair#4'),
('000000000000000000000018', 'Chair#5'),
('000000000000000000000019', 'Chair#6'),
('000000000000000000000020', 'Chair#7'),
('000000000000000000000021', 'Chair#8'),
('000000000000000000000022', 'Chair#9'),
('000000000000000000000023', 'Chair#10'),
('000000000000000000000024', 'Chair#11'),
('000000000000000000000028', 'Chair#12'),
('000000000000000000000029', 'Chair#13'),
('000000000000000000000030', 'Computer#1'),
('000000000000000000000031', 'Computer#2'),
('000000000000000000000032', 'Computer#3'),
('000000000000000000000033', 'Computer#4'),
('000000000000000000000034', 'Computer#5'),
('000000000000000000000035', 'Computer#6'),
('000000000000000000000036', 'Computer#7'),
('000000000000000000000037', 'Computer#8'),
('000000000000000000000038', 'Computer#9'),
('000000000000000000000039', 'Computer#10'),
('000000000000000000000042', 'Chair#14'),
('000000000000000000000045', 'Chair#15');

-- --------------------------------------------------------

--
-- Table structure for table `read_tag`
--

CREATE TABLE `read_tag` (
  `tag` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `read_tag`
--

INSERT INTO `read_tag` (`tag`, `date`) VALUES
('000000000000000000000005', '2566-06-04 22:29:00'),
('000000000000000000000006', '2566-06-04 22:29:00'),
('000000000000000000000007', '2566-06-04 22:29:00'),
('000000000000000000000008', '2566-06-04 22:29:00'),
('000000000000000000000009', '2566-06-04 22:29:00'),
('000000000000000000000010', '2566-06-04 22:29:00'),
('000000000000000000000011', '2566-06-04 22:29:00'),
('000000000000000000000012', '2566-06-04 22:29:00'),
('000000000000000000000013', '2566-06-04 22:29:00'),
('000000000000000000000015', '2566-06-04 22:29:00'),
('000000000000000000000016', '2566-06-04 22:29:00'),
('000000000000000000000017', '2566-06-04 22:29:00'),
('000000000000000000000018', '2566-06-04 22:29:00'),
('000000000000000000000019', '2566-06-04 22:29:00'),
('000000000000000000000020', '2566-06-04 22:29:00'),
('000000000000000000000021', '2566-06-04 22:29:00'),
('000000000000000000000022', '2566-06-04 22:29:00'),
('000000000000000000000023', '2566-06-04 22:29:00'),
('000000000000000000000028', '2566-06-04 22:29:00'),
('000000000000000000000029', '2566-06-04 22:29:00'),
('000000000000000000000030', '2566-06-04 22:29:00'),
('000000000000000000000031', '2566-06-04 22:29:00'),
('000000000000000000000032', '2566-06-04 22:29:00'),
('000000000000000000000033', '2566-06-04 22:29:00'),
('000000000000000000000035', '2566-06-04 22:29:00'),
('000000000000000000000036', '2566-06-04 22:29:00'),
('000000000000000000000037', '2566-06-04 22:29:00'),
('000000000000000000000038', '2566-06-04 22:29:00'),
('000000000000000000000039', '2566-06-04 22:29:00'),
('000000000000000000000045', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `room_tag`
--

CREATE TABLE `room_tag` (
  `tag` varchar(255) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_tag`
--

INSERT INTO `room_tag` (`tag`, `room`) VALUES
('000000000000000000000005', 1),
('000000000000000000000006', 1),
('000000000000000000000007', 1),
('000000000000000000000008', 1),
('000000000000000000000009', 1),
('000000000000000000000010', 1),
('000000000000000000000011', 1),
('000000000000000000000012', 1),
('000000000000000000000013', 1),
('000000000000000000000014', 1),
('000000000000000000000015', 1),
('000000000000000000000016', 1),
('000000000000000000000017', 2),
('000000000000000000000018', 2),
('000000000000000000000019', 2),
('000000000000000000000020', 2),
('000000000000000000000021', 2),
('000000000000000000000022', 2),
('000000000000000000000023', 2),
('000000000000000000000024', 2),
('000000000000000000000028', 2),
('000000000000000000000029', 2),
('000000000000000000000030', 2),
('000000000000000000000031', 2),
('000000000000000000000032', 3),
('000000000000000000000033', 3),
('000000000000000000000034', 3),
('000000000000000000000035', 3),
('000000000000000000000036', 3),
('000000000000000000000037', 3),
('000000000000000000000038', 3),
('000000000000000000000039', 3),
('000000000000000000000042', 3),
('000000000000000000000045', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `name_tag`
--
ALTER TABLE `name_tag`
  ADD PRIMARY KEY (`tag`);

--
-- Indexes for table `read_tag`
--
ALTER TABLE `read_tag`
  ADD PRIMARY KEY (`tag`);

--
-- Indexes for table `room_tag`
--
ALTER TABLE `room_tag`
  ADD PRIMARY KEY (`tag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
