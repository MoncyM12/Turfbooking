-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 12:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turf`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(30) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `reply` varchar(10) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `title`, `description`, `type`, `date`, `email`, `reply`, `usertype`) VALUES
(7, 'Connection', 'Poor', 'website', '2023-10-04', 'turf@gmail.com', '0', 2),
(8, 'bad', 'bad', 'website', '2023-10-04', 'moncyfrancis2004@gmail.com', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
(1, 'Kasaragod'),
(2, 'Kannur'),
(3, 'Wayanad'),
(4, 'Kozhikode'),
(5, 'Malappuram'),
(6, 'Palakkad'),
(7, 'Thrissur'),
(8, 'Ernakulam'),
(9, 'Idukki'),
(10, 'Kottayam'),
(11, 'Alappuzha'),
(12, 'Pathanamthitta'),
(13, 'Kollam'),
(14, 'Thiruvananthapuram');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(80) NOT NULL,
  `usertype` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `status`, `usertype`) VALUES
('admin1234@gmail.com', 'admin1234', '1', '0'),
('b@gmail.com', 'cr7', '1', '1'),
('me@gmail.com', 'mk', '1', '1'),
('melcy', 'melcy', '1', '1'),
('mmm', 'kfekjef', '1', '2'),
('moncyfrancis2004@gmail.com', 'moncy', '1', '1'),
('turf2@gmail.com', 'turf2', '1', '2'),
('turf3@gmail.com', 'turf3', '1', '2'),
('turf@gmail.com', 'turf', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `pincode_no` varchar(12) NOT NULL,
  `house_name` varchar(100) DEFAULT NULL,
  `city_name` varchar(100) DEFAULT NULL,
  `district_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `phone_no`, `pincode_no`, `house_name`, `city_name`, `district_name`) VALUES
('basil', 'b@gmail.com', '7', '', NULL, NULL, NULL),
('moncy', 'me@gmail.com', '987654', '', NULL, NULL, NULL),
('melcy', 'melcy', '565656', '000pp', 'nn', 'nn', 'nn'),
('moncy', 'mmm', '0', '', NULL, NULL, NULL),
('Moncy', 'moncyfrancis2004@gmail.com', '9544613841', '686671', '222', 'ppp', 'ernakulam'),
('turf2', 'turf2@gmail.com', '0', '', NULL, NULL, NULL),
('turf3', 'turf3@gmail.com', '9876', '', NULL, NULL, NULL),
('turf', 'turf@gmail.com', '123456789', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `turf`
--

CREATE TABLE `turf` (
  `name` varchar(30) NOT NULL,
  `owner_email` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `id_proof` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turf`
--

INSERT INTO `turf` (`name`, `owner_email`, `email`, `city`, `about`, `image`, `id_proof`, `price`, `active`) VALUES
('Camp Nou', 'turf@gmail.com', 'basil@gmail.com', 'piravom', 'The turf is about 5000 and square feet and the turf is always available', 'img.jpg', 'hell.jpg', '600', 1),
('Old Trafford', 'turf@gmail.com', 'man@gmail.com', 'piravom', 'bbsgd', 'img.jpg', 'hell.jpg', '600', 1),
('Soccer World', 'turf@gmail.com', 'me@gmail.com', 'piravom', 'bbsgd', 'img.jpg', 'hell.jpg', '600', 1),
('90 Minitues', 'turf@gmail.com', 'moncyfrancis2004@gmail.com', 'piravom', 'bbsgd', 'img.jpg', 'hell.jpg', '600', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `turf`
--
ALTER TABLE `turf`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
