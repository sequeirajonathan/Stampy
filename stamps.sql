-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 03:49 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stampy`
--

-- --------------------------------------------------------

--
-- Table structure for table `stamps`
--

CREATE TABLE `stamps` (
  `id` int(11) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `collection` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `year` varchar(256) DEFAULT NULL,
  `description` text,
  `posted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stamps`
--

INSERT INTO `stamps` (`id`, `image`, `quantity`, `collection`, `name`, `year`, `description`, `posted`) VALUES
(4, 'e299a460f02f1b16fc48c2b4a9f2e22b.jpg', 1, 'Superheros', 'Spiderman', '1999', 'Spiderman Climbing a wall.', 1),
(5, 'a91dfc0b03e0ca61af07219560abf7a0.jpg', 2, 'Superheros', 'Batman', '2001', 'Batman Pose.', 1),
(6, 'f9439cfc35445d051647d689aee0fdb9.jpg', 6, 'Superheros', 'Wolverine', '2007', 'Wolverine Running', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stamps`
--
ALTER TABLE `stamps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stamps`
--
ALTER TABLE `stamps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
