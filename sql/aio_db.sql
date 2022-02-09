-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 09:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_pass`) VALUES
(1, 'nizarul', 'nizarul123'),
(2, 'haziq', 'haziq123'),
(3, 'syafiq', 'syafiq123');

-- --------------------------------------------------------

--
-- Table structure for table `badminton`
--

CREATE TABLE `badminton` (
  `court_id` varchar(10) NOT NULL,
  `b_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badminton`
--

INSERT INTO `badminton` (`court_id`, `b_price`) VALUES
('1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `book_time` varchar(10) NOT NULL,
  `duration` float NOT NULL,
  `category` varchar(20) NOT NULL,
  `total_amount` float NOT NULL,
  `book_status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `court_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `book_date`, `book_time`, `duration`, `category`, `total_amount`, `book_status`, `user_id`, `court_id`) VALUES
(27, '2022-02-17', '1 p.m.', 2.5, '1', 25, 3, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `court_id` varchar(10) NOT NULL,
  `court_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`court_id`, `court_type`) VALUES
('1', 'Badminton'),
('2', 'Futsal'),
('3', 'Tennis');

-- --------------------------------------------------------

--
-- Table structure for table `futsal`
--

CREATE TABLE `futsal` (
  `court_id` varchar(10) NOT NULL,
  `f_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `futsal`
--

INSERT INTO `futsal` (`court_id`, `f_price`) VALUES
('2', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tennis`
--

CREATE TABLE `tennis` (
  `court_id` varchar(10) NOT NULL,
  `t_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tennis`
--

INSERT INTO `tennis` (`court_id`, `t_price`) VALUES
('3', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telnum` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `telnum`, `password`) VALUES
(1, 'amin', 'nizarulamin@yahoo.co', '0123456789', 'amin'),
(2, 'mad', 'nyzlfc@gmail.com', '0123456789', 'mad'),
(3, 'fauzan', 'streamone1406@gmail.', '0123456789', 'fauzan'),
(4, 'carrot', 'carrot@gmail.com', '222', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `badminton`
--
ALTER TABLE `badminton`
  ADD PRIMARY KEY (`court_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `court_id` (`court_id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`court_id`);

--
-- Indexes for table `futsal`
--
ALTER TABLE `futsal`
  ADD PRIMARY KEY (`court_id`);

--
-- Indexes for table `tennis`
--
ALTER TABLE `tennis`
  ADD PRIMARY KEY (`court_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `badminton`
--
ALTER TABLE `badminton`
  ADD CONSTRAINT `badminton_ibfk_1` FOREIGN KEY (`court_id`) REFERENCES `court` (`court_id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`court_id`) REFERENCES `court` (`court_id`);

--
-- Constraints for table `futsal`
--
ALTER TABLE `futsal`
  ADD CONSTRAINT `futsal_ibfk_1` FOREIGN KEY (`court_id`) REFERENCES `court` (`court_id`);

--
-- Constraints for table `tennis`
--
ALTER TABLE `tennis`
  ADD CONSTRAINT `tennis_ibfk_1` FOREIGN KEY (`court_id`) REFERENCES `court` (`court_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
