-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 01:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `openingDate` date DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `openingDate`, `city`) VALUES
(1, 'city star', '2021-10-17', 'tehran'),
(2, 'shiraz star', '2020-05-27', 'shiraz'),
(3, 'gorgan star', '2019-06-28', 'gorgan'),
(4, 'ahvaz star', '2018-08-26', 'ahvaz'),
(5, 'esfahan star', '2016-09-05', 'esfahan'),
(6, 'mmd', NULL, 'tehran');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `offices_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `age`, `salary`, `offices_id`) VALUES
(1, 'younes mokhtari', 24, 1200, 1),
(2, 'yavar farhaangi', 27, 1000, 1),
(3, 'ehsan hossaini', 35, 9000, 1),
(4, 'saeed bakhshandeh', 35, 1300, 1),
(5, 'mokhtar hasani', 24, 1500, 1),
(6, 'younes younesi', 22, 900, 1),
(7, 'reza kiani', 44, 1100, 1),
(8, 'yashar nostafavio', 29, 700, 1),
(9, 'kevan khezri', 33, 800, 1),
(10, 'ahmad mohmoudi', 25, 900, 1),
(11, 'reza karimi', 28, 1000, 1),
(12, 'reza mohamadi', 21, 900, 2),
(13, 'sadegh karimi', 27, 1000, 2),
(14, 'karim sadeghi', 22, 1300, 2),
(15, 'majid younesi', 35, 1400, 2),
(16, 'shahin salavti', 33, 1100, 2),
(17, 'hamed darabi', 39, 1200, 3),
(18, 'kiam nasri', 23, 1100, 3),
(19, 'abbas nosrati', 43, 1300, 3),
(20, 'shahin samarghndi', 38, 700, 3),
(21, 'shahin samarghndi', 30, 1200, 4),
(22, 'shahin samarghndi', 33, 1200, 4),
(23, 'shahin samarghndi', 31, 1100, 4),
(24, 'shahin samarghndi', 28, 1700, 4),
(25, 'shahin samari', 37, 700, 4),
(26, 'shahin samarghandi', 37, 700, 4),
(27, 'samad khzaie', 38, 1500, 5),
(28, 'ehsan karimi', 27, 1200, 5),
(29, 'arvin parsaie', 31, 1100, 5),
(30, 'gholam pishdad', 25, 900, 6),
(31, 'ahmad lotfi', 31, 1100, 6),
(32, 'shahin samarghandi', 40, 1300, 6),
(33, 'darush fakhim', 44, 1400, 7),
(34, 'milad zandi', 24, 800, 7),
(35, 'mehdi ahmadi', 27, 1100, 7),
(36, 'yaser nemati', 29, 850, 7),
(37, 'shahin salem', 25, 700, 7),
(38, 'omid khayat', 44, 1300, 8),
(39, 'davood bahrami', 27, 1400, 8),
(40, 'kazem kimiaie', 34, 950, 9),
(41, 'ehsan dolati', 41, 1100, 9),
(42, 'sirvan zaniari', 42, 1200, 9),
(43, 'ahmad ahmadi', 23, 1000, 10),
(44, 'mahmoud mahmoudi', 22, 1000, 10),
(45, 'amir ghasemi', 29, 1200, 11),
(46, 'erfan momeni', 29, 1200, 11),
(47, 'hamed darabi', 39, 1300, 11),
(48, 'esmail zandi', 22, 1000, 11),
(49, 'hamed molavi', 35, 800, 11),
(50, 'sina khezri', 33, 900, 11),
(51, 'shirzad shahrooz', 32, 1700, 11),
(52, 'esmail tami', 27, 1200, 12),
(53, 'sina milad', 29, 1000, 12),
(54, 'morad moradi', 22, 800, 12),
(55, 'reza roozbeh', 37, 1200, 13),
(56, 'ribaz salami', 28, 1200, 13),
(57, 'hesam ataie', 27, 1500, 14),
(58, 'mahmood samadi', 30, 1700, 14),
(59, 'sina karimi', 26, 900, 14),
(60, 'yashar karimi', 23, 1000, 14),
(61, 'taha rahmani', 27, 1200, 15),
(62, 'yaser farhadi', 35, 800, 15),
(63, 'krim ghasemi', 47, 1200, 15),
(64, 'faraz solook', 37, 1300, 17),
(65, 'ghasem faraji', 27, 1000, 17),
(66, 'zanyar vahedi', 27, 900, 17),
(67, 'kazem vahdati', 31, 900, 17),
(68, 'farid hejrat', 39, 1200, 17),
(69, 'pooyan sarvari', 36, 1100, 17),
(70, 'shabab kamangar', 27, 800, 17),
(71, 'hymen golpira', 37, 1600, 17),
(72, 'sirvan veysipoor', 34, 1200, 17),
(73, 'reza samadi', 21, 900, 17),
(74, 'farshid amini', 29, 1000, 17),
(75, 'prooia behzadoorp', 30, 1200, 17),
(76, 'jamil ostadi', 39, 1300, 18),
(77, 'omid davari', 41, 1200, 18),
(78, 'darush valipoor', 23, 700, 18);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `barnches_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `description`, `barnches_id`) VALUES
(1, 'financial', 'this office take cares of finanticial issuses of business', 1),
(2, 'human resource', 'this office dealing with emploies matters ', 1),
(3, 'marketing', 'this office dealing sales strategies ', 1),
(4, 'costumer service', 'this office dealing after sales strategies ', 1),
(5, 'financial', 'this office take cares of finanticial issuses of business', 2),
(6, 'human resource', 'this office dealing with emploies matters ', 2),
(7, 'marketing', 'this office dealing sales strategies ', 2),
(8, 'costumer service', 'this office dealing after sales strategies ', 2),
(9, 'financial', 'this office take cares of finanticial issuses of business', 3),
(10, 'human resource', 'this office dealing with emploies matters ', 3),
(11, 'marketing', 'this office dealing sales strategies ', 3),
(12, 'financial', 'this office take cares of finanticial issuses of business', 4),
(13, 'human resource', 'this office dealing with emploies matters ', 4),
(14, 'marketing', 'this office dealing sales strategies ', 4),
(15, 'financial', 'this office take cares of finanticial issuses of business', 5),
(16, 'human resource', 'this office dealing with emploies matters ', 5),
(17, 'marketing', 'this office dealing sales strategies ', 5),
(18, 'costumer service', 'this office dealing after sales strategies ', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offices_id` (`offices_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barnches_id` (`barnches_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`offices_id`) REFERENCES `offices` (`id`);

--
-- Constraints for table `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `offices_ibfk_1` FOREIGN KEY (`barnches_id`) REFERENCES `branches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
