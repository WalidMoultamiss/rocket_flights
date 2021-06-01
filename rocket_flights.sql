-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 01:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rocket_flights`
--

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `full_name`) VALUES
(1, 'LAX: Los Angeles Intl - Los Angeles - United States'),
(2, 'FRA: Frankfurt Main - Frankfurt - Germany'),
(3, 'LHR: Heathrow - London - United Kingdom'),
(4, 'ATL: Hartsfield Jackson Atlanta Intl - Atlanta - United States'),
(5, 'CDG: Charles De Gaulle - Paris - France'),
(6, 'FRA: Frankfurt Main - Frankfurt - Germany'),
(7, 'LHR: Heathrow - London - United Kingdom'),
(8, 'ATL: Hartsfield Jackson Atlanta Intl - Atlanta - United States'),
(9, 'CDG: Charles De Gaulle - Paris - France');

-- --------------------------------------------------------

--
-- Table structure for table `dollarsmoney`
--

CREATE TABLE `dollarsmoney` (
  `id` int(11) NOT NULL,
  `dollarsMoney` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dollarsmoney`
--

INSERT INTO `dollarsmoney` (`id`, `dollarsMoney`) VALUES
(9, 20000),
(10, 2000),
(11, 1000),
(12, 2400),
(13, 5000),
(14, 5000),
(15, 5000),
(16, 5000),
(17, 5000),
(18, 1000),
(19, 1000),
(20, 1000),
(21, 1000),
(22, 5000),
(23, 200),
(24, 2400),
(25, 200),
(26, 1000),
(27, 1000),
(28, 1000),
(29, 1000),
(30, 1000),
(31, 1000),
(32, 1000),
(33, 2400),
(34, 1499),
(35, 200),
(36, 200),
(37, 1000),
(38, 2400),
(39, 2400),
(40, 1000),
(41, 5000),
(42, 1000),
(43, 2400),
(44, 4000),
(45, 4000),
(46, 5000),
(47, 25000),
(48, 2400),
(49, 20000),
(50, 9600),
(51, 1000),
(52, 1000),
(53, 1000),
(54, 1000),
(55, 9600),
(56, 2998),
(57, 1499),
(58, 2000),
(59, 2400),
(60, 7200),
(61, 1000),
(62, 1000),
(63, 1000),
(64, 1000),
(65, 200),
(66, 2400),
(67, 9600),
(68, 800),
(69, 3000),
(70, 1000),
(71, 1000),
(72, 120),
(73, 120),
(74, 120),
(75, 1000),
(76, 1000),
(77, 1000),
(78, 1000),
(79, 1000),
(80, 2400),
(81, 2400),
(82, 2400),
(83, 1000),
(84, 2400),
(85, 2400),
(86, 1000),
(87, 1000),
(88, 1000),
(89, 2400),
(90, 1000),
(91, 2391),
(92, 2391),
(93, 1000),
(94, 2391),
(95, 1499),
(96, 200),
(97, 2391),
(98, 1000),
(99, 1000),
(100, 9564),
(101, 2391),
(102, 600),
(103, 2391),
(104, 2391),
(105, 1499),
(106, 1000),
(107, 1499),
(108, 2391),
(109, 2391),
(110, 1499),
(111, 1000),
(112, 4000),
(113, 300),
(114, 360),
(115, 200),
(116, 1440);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `fromf` text NOT NULL,
  `tof` text NOT NULL,
  `company` text NOT NULL,
  `depart` datetime NOT NULL,
  `retu` datetime NOT NULL,
  `timing` text NOT NULL,
  `price` text NOT NULL,
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `fromf`, `tof`, `company`, `depart`, `retu`, `timing`, `price`, `place`) VALUES
(20, 'ATL: Hartsfield Jackson Atlanta Intl - Atlanta - United States', 'FRA: Frankfurt Main - Frankfurt - Germany', 'SpaceX', '2021-05-28 09:28:00', '2021-05-28 09:29:00', '25 min', '1499', '82'),
(21, 'LHR: Heathrow - London - United Kingdom', 'FRA: Frankfurt Main - Frankfurt - Germany', 'Boeing', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '43 min', '2391', '140'),
(23, 'ATL: Hartsfield Jackson Atlanta Intl - Atlanta - United States', 'LAX: Los Angeles Intl - Los Angeles - United States', 'SpaceX', '2021-05-23 03:30:00', '2021-05-23 03:59:00', '29 min', '1000', '723'),
(24, 'CDG: Charles De Gaulle - Paris - France', 'ORD: Chicago Ohare Intl - Chicago - United States', 'Blue Origin', '2021-05-23 03:21:00', '2021-05-23 03:56:00', '35 min', '5000', '369'),
(25, 'PEK: Capital Intl - Beijing - China', 'LAX: Los Angeles Intl - Los Angeles - United States', 'Virgin galactic', '2021-05-23 06:18:00', '2021-05-23 06:59:00', '41 min', '200', '135'),
(26, 'FRA: Frankfurt Main - Frankfurt - Germany', 'ATL: Hartsfield Jackson Atlanta Intl - Atlanta - United States', 'Virgin galactic', '2021-05-24 16:01:00', '2021-05-24 16:34:00', '33 min', '1000', '298'),
(27, 'LAX: Los Angeles Intl - Los Angeles - United States', 'LHR: Heathrow - London - United Kingdom', 'Virgin galactic', '2021-05-25 18:03:00', '2021-05-25 18:38:00', '35 min', '120.00', '16'),
(28, 'LAX: Los Angeles Intl - Los Angeles - United States', 'PEK: Capital Intl - Beijing - China', 'SpaceX', '2021-05-26 01:31:00', '2021-05-26 01:58:00', '27 min', '1499', '99'),
(29, 'LAX: Los Angeles Intl - Los Angeles - United States', 'ORD: Chicago Ohare Intl - Chicago - United States', 'SpaceX', '2021-05-26 09:48:00', '2021-05-26 09:59:00', '11 min', '300', '1899'),
(30, 'CDG: Charles De Gaulle - Paris - France', 'YSN: yassine - Dallas-Fort Worth - United States', 'SpaceX', '2021-05-26 10:15:00', '2021-05-26 10:46:00', '31 min', '360', '695'),
(31, 'ATL: Hartsfield Jackson Atlanta Intl - Atlanta - United States', 'CDG: Charles De Gaulle - Paris - France', 'SpaceX', '2021-05-28 09:23:00', '2021-05-28 09:49:00', '26 min', '121', '100'),
(32, 'PEK: Capital Intl - Beijing - China', 'PEK: Capital Intl - Beijing - China', 'SpaceX', '2021-05-28 09:26:00', '2021-05-28 09:35:00', '9 min', '110', '100'),
(33, 'ATL: Hartsfield Jackson Atlanta Intl - Atlanta - United States', 'LHR: Heathrow - London - United Kingdom', 'SpaceX', '2021-05-28 13:47:00', '2021-05-28 13:57:00', '10 min', '100', '1000'),
(34, 'LHR: Heathrow - London - United Kingdom', 'FRA: Frankfurt Main - Frankfurt - Germany', 'SpaceX', '2021-05-31 16:18:00', '2021-05-31 16:44:00', '26 min', '100', '100'),
(35, 'PEK: Capital Intl - Beijing - China', 'FRA: Frankfurt Main - Frankfurt - Germany', 'SpaceX', '2021-06-01 09:44:00', '2021-06-01 09:59:00', '15 min', '1000', '100');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id_notification` int(11) NOT NULL,
  `notif_message` text NOT NULL,
  `fromMSG` int(11) NOT NULL,
  `toMSG` int(11) NOT NULL,
  `seen_by` int(11) NOT NULL,
  `cleared` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id_notification`, `notif_message`, `fromMSG`, `toMSG`, `seen_by`, `cleared`) VALUES
(45, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(46, '1 places has been reserved', 0, 0, 0, 1),
(47, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(48, '1 places has been reserved', 0, 0, 0, 1),
(49, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(50, '1 places has been reserved', 0, 0, 0, 1),
(51, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(52, '1 places has been reserved', 0, 0, 0, 1),
(53, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(54, '1 places has been reserved', 0, 0, 0, 1),
(55, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(56, '1 places has been reserved', 0, 0, 0, 1),
(57, 'the flight with id:21has been updated', 0, 0, 0, 1),
(58, 'the flight with id:20has been updated', 0, 0, 0, 1),
(59, 'the flight with id:20has been updated', 0, 0, 0, 1),
(60, 'the flight with id:20has been updated', 0, 0, 0, 1),
(61, 'the flight with id:21has been updated', 0, 0, 0, 1),
(62, 'the flight with id:20has been updated', 0, 0, 0, 1),
(63, 'the flight with id:20has been updated', 0, 0, 0, 1),
(64, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(65, '1 places has been reserved', 0, 0, 0, 1),
(66, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(67, '1 places has been reserved', 0, 0, 0, 1),
(68, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(69, '1 places has been reserved', 0, 0, 0, 1),
(70, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(71, '1 places has been reserved', 0, 0, 0, 1),
(72, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(73, '1 places has been reserved', 0, 0, 0, 1),
(74, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(75, '1 places has been reserved', 0, 0, 0, 1),
(76, 'a flight has been added with a price of 1499', 0, 0, 0, 1),
(77, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(78, '1 places has been reserved', 0, 0, 0, 1),
(79, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(80, '1 places has been reserved', 0, 0, 0, 1),
(81, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(82, '1 places has been reserved', 0, 0, 0, 1),
(83, 'a flight has been added with a price of 300', 0, 0, 0, 1),
(84, 'a flight has been reserved from the user who has the id:19', 19, 0, 0, 1),
(85, '4 places has been reserved', 0, 0, 0, 1),
(86, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(87, '1 places has been reserved', 0, 0, 0, 1),
(88, 'a flight has been added with a price of 360', 0, 0, 0, 1),
(89, 'the flight with id:20has been updated', 0, 0, 0, 1),
(90, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(91, '3 places has been reserved', 0, 0, 0, 1),
(92, 'a flight has been reserved from the user who has the id:<br /><b>Warning</b>:  Undefined array key ', 0, 0, 0, 1),
(93, '1 places has been reserved', 0, 0, 0, 1),
(94, 'a flight has been reserved from the user who has the id:<br /><b>Warning</b>:  Undefined array key ', 0, 0, 0, 1),
(95, '1 places has been reserved', 0, 0, 0, 1),
(97, '1 places has been reserved', 0, 0, 0, 1),
(98, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(99, '1 places has been reserved', 0, 0, 0, 1),
(100, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(101, '1 places has been reserved', 0, 0, 0, 1),
(102, 'a user has been added full name:walid', 0, 0, 0, 1),
(103, 'a flight has been reserved from the user who has the id:47', 47, 0, 0, 1),
(104, '1 places has been reserved', 0, 0, 0, 1),
(105, 'a flight has been added with a price of 121', 0, 0, 0, 1),
(106, 'the flight with id:20has been updated', 0, 0, 0, 1),
(107, 'a flight has been added with a price of 110', 0, 0, 0, 1),
(108, 'a flight has been added with a price of 100', 0, 0, 0, 1),
(109, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(110, '1 places has been reserved', 0, 0, 0, 1),
(111, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(112, '1 places has been reserved', 0, 0, 0, 1),
(113, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(114, '1 places has been reserved', 0, 0, 0, 1),
(115, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(116, '4 places has been reserved', 0, 0, 0, 1),
(117, 'a flight has been reserved from the user who has the id:1', 1, 0, 0, 1),
(118, '1 places has been reserved', 0, 0, 0, 1),
(119, 'a flight has been added with a price of 100', 0, 0, 0, 1),
(120, 'a flight has been reserved from the user who has the id:19', 19, 0, 0, 1),
(121, '1 places has been reserved', 0, 0, 0, 1),
(122, 'a user has been added full name:walid mouddltamiss', 0, 0, 0, 1),
(123, 'a flight has been reserved from the user who has the id:48', 48, 0, 0, 1),
(124, '1 places has been reserved', 0, 0, 0, 1),
(125, 'a flight has been reserved from the user who has the id:48', 48, 0, 0, 1),
(126, '4 places has been reserved', 0, 0, 0, 1),
(127, 'a flight has been added with a price of 1000', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `passport` text NOT NULL,
  `reservation_foreignkey` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `dateofbirth` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `firstname`, `passport`, `reservation_foreignkey`, `lastname`, `dateofbirth`) VALUES
(7, 'walid', 'AAAAAAA', 0, 'moultamiss', '2021-05-30'),
(8, 'HAMM', 'ZEEEEEEEVVVV', 0, 'ZAAA', '2021-05-29'),
(9, 'atlas', 'atlastrippassport', 0, 'trip', '2021-05-29'),
(10, 'Pass', 'Passport', 0, 'meout', '2021-05-29'),
(11, 'walid', 'AAAAAAA', 0, 'moultamiss', '2021-05-06'),
(12, 'walidsaassa', 'atlastrippassport', 0, 'moultamisssasas', '2021-05-30'),
(20, 'hiuh', 'ih', 0, 'iuh', ''),
(21, 'ouoiuoiuoiu', 'u', 0, 'oiuouoiut', ''),
(22, 'uytirudyrd', 'uf', 0, 'erdd', ''),
(23, 'dqsdqsdq', 'kjlkj', 0, 'lkjl', ''),
(24, 'lkjljmj', 'oiu', 0, 'pj', ''),
(25, 'uytuyti', 'uytiuy', 0, 'uytiuyt', ''),
(26, 'lqksjdlqs', 'lkjlkjlkjljl', 0, 'lklkjlkj', '2021-05-04'),
(27, 'kjlkjlkjlkj', 'lkjlkjlkjlkjlkjl', 0, 'lkjlkjlkjlkj', '2021-05-23'),
(28, '', '', 0, '', ''),
(29, '', '', 0, '', ''),
(30, '', '', 0, '', ''),
(31, '', '', 0, '', ''),
(32, '', '', 0, '', ''),
(33, '', '', 0, '', ''),
(34, 'new ', 'TERYUIOP56789', 0, 'passenger', '2021-04-29'),
(35, '', '', 0, '', ''),
(36, '', '', 0, '', ''),
(37, '', '', 0, '', ''),
(38, '', '', 0, '', ''),
(39, '', '', 0, '', ''),
(40, '', '', 0, '', ''),
(41, '', '', 0, '', ''),
(42, '', '', 0, '', ''),
(43, '', '', 0, '', ''),
(44, '', '', 0, '', ''),
(45, '', '', 0, '', ''),
(46, '', '', 0, '', ''),
(47, '', '', 0, '', ''),
(48, '', '', 0, '', ''),
(49, '', '', 0, '', ''),
(50, '', '', 0, '', ''),
(51, '', '', 0, '', ''),
(52, '', '', 0, '', ''),
(53, '', '', 0, '', ''),
(54, '', '', 0, '', ''),
(55, '', '', 0, '', ''),
(56, '', '', 0, '', ''),
(57, '', '', 0, '', ''),
(58, '', '', 0, '', ''),
(59, '', '', 0, '', ''),
(60, '', '', 0, '', ''),
(61, '', '', 0, '', ''),
(62, '', '', 0, '', ''),
(63, '', '', 0, '', ''),
(64, '', '', 0, '', ''),
(65, '', '', 0, '', ''),
(66, '', '', 0, '', ''),
(67, '', '', 0, '', ''),
(68, '', '', 0, '', ''),
(69, '', '', 0, '', ''),
(70, '', '', 0, '', ''),
(71, '', '', 0, '', ''),
(72, '', '', 0, '', ''),
(73, '', '', 0, '', ''),
(74, '', '', 0, '', ''),
(75, '', '', 0, '', ''),
(76, '', '', 0, '', ''),
(77, '', '', 0, '', ''),
(78, '', '', 0, '', ''),
(79, '', '', 0, '', ''),
(80, '', '', 0, '', ''),
(81, '', '', 0, '', ''),
(82, '', '', 0, '', ''),
(83, 'aa', 'j', 0, 'jk', ''),
(84, 'lkjkjk', 'kj', 0, 'kjjkj', ''),
(85, 'jhhj', 'kjkjkj', 0, 'jhjhj', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `user_foreignkey` int(11) NOT NULL,
  `flight_foreignkey` int(11) NOT NULL,
  `return_flight_foreignkey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_foreignkey`, `flight_foreignkey`, `return_flight_foreignkey`) VALUES
(41, 19, 21, 0),
(42, 19, 21, 0),
(43, 19, 22, 0),
(44, 19, 22, 0),
(45, 19, 21, 0),
(46, 19, 20, 0),
(47, 19, 20, 0),
(48, 19, 20, 0),
(49, 19, 20, 0),
(50, 19, 20, 0),
(51, 19, 20, 0),
(52, 19, 20, 0),
(53, 19, 18, 0),
(54, 19, 20, 0),
(55, 19, 18, 0),
(56, 19, 22, 0),
(57, 19, 20, 0),
(58, 19, 20, 0),
(59, 1, 23, 0),
(60, 1, 24, 0),
(61, 1, 21, 0),
(62, 1, 21, 0),
(63, 1, 21, 0),
(64, 1, 21, 0),
(65, 1, 21, 0),
(67, 1, 21, 0),
(68, 1, 21, 0),
(69, 1, 21, 0),
(70, 1, 21, 0),
(71, 1, 21, 0),
(72, 1, 21, 0),
(73, 1, 21, 0),
(74, 1, 21, 0),
(75, 1, 23, 0),
(76, 1, 23, 0),
(78, 1, 21, 0),
(79, 1, 23, 0),
(80, 1, 23, 0),
(81, 1, 23, 0),
(82, 1, 25, 0),
(83, 1, 25, 0),
(84, 1, 24, 0),
(85, 1, 23, 0),
(86, 1, 20, 0),
(87, 1, 20, 0),
(88, 1, 24, 0),
(89, 1, 20, 0),
(90, 1, 21, 0),
(91, 1, 23, 0),
(92, 1, 20, 0),
(93, 1, 23, 0),
(94, 1, 21, 0),
(95, 1, 23, 0),
(96, 1, 23, 0),
(97, 1, 23, 0),
(98, 1, 23, 0),
(99, 1, 21, 0),
(100, 1, 21, 0),
(101, 1, 23, 0),
(102, 1, 21, 0),
(103, 1, 23, 0),
(104, 1, 21, 0),
(105, 1, 23, 0),
(106, 1, 23, 0),
(107, 1, 23, 0),
(108, 1, 24, 0),
(109, 1, 24, 0),
(110, 1, 23, 0),
(111, 1, 23, 0),
(112, 1, 21, 0),
(113, 1, 24, 0),
(114, 1, 24, 0),
(115, 1, 24, 0),
(116, 1, 24, 0),
(117, 1, 24, 0),
(118, 1, 23, 0),
(119, 1, 23, 0),
(120, 1, 23, 0),
(121, 1, 23, 0),
(122, 1, 24, 0),
(123, 1, 25, 0),
(124, 1, 21, 0),
(125, 1, 25, 0),
(126, 1, 23, 0),
(127, 1, 23, 0),
(128, 1, 23, 0),
(129, 1, 23, 0),
(130, 1, 23, 0),
(131, 1, 23, 0),
(132, 1, 23, 0),
(133, 1, 21, 0),
(134, 1, 20, 0),
(135, 1, 25, 0),
(136, 1, 25, 0),
(137, 1, 23, 0),
(138, 1, 21, 0),
(139, 1, 21, 0),
(140, 1, 23, 0),
(141, 1, 24, 0),
(142, 1, 23, 0),
(143, 1, 21, 0),
(144, 1, 23, 0),
(145, 1, 23, 0),
(146, 19, 23, 0),
(147, 1, 24, 0),
(148, 20, 21, 0),
(149, 20, 24, 0),
(150, 20, 21, 0),
(151, 20, 23, 0),
(152, 20, 23, 0),
(153, 20, 23, 0),
(154, 20, 23, 0),
(155, 20, 21, 0),
(156, 20, 20, 0),
(157, 22, 20, 0),
(159, 22, 21, 0),
(160, 22, 21, 0),
(161, 20, 23, 0),
(162, 20, 23, 0),
(163, 20, 23, 0),
(164, 20, 23, 0),
(165, 22, 25, 0),
(166, 22, 21, 0),
(167, 22, 21, 0),
(168, 22, 25, 0),
(169, 22, 23, 0),
(170, 1, 25, 0),
(171, 19, 25, 0),
(172, 1, 27, 0),
(173, 1, 27, 0),
(174, 1, 27, 0),
(175, 1, 23, 0),
(176, 1, 23, 0),
(177, 1, 23, 0),
(178, 1, 26, 0),
(179, 1, 23, 0),
(180, 1, 21, 0),
(181, 1, 21, 0),
(182, 1, 21, 0),
(183, 1, 26, 0),
(184, 1, 21, 0),
(185, 1, 21, 0),
(186, 1, 23, 0),
(187, 1, 23, 0),
(188, 1, 23, 0),
(189, 1, 21, 0),
(190, 1, 23, 0),
(191, 1, 21, 0),
(192, 1, 21, 0),
(193, 1, 23, 0),
(194, 1, 21, 0),
(195, 1, 20, 0),
(196, 1, 25, 0),
(197, 1, 21, 0),
(198, 1, 23, 0),
(199, 1, 23, 0),
(200, 19, 21, 0),
(201, 1, 21, 0),
(202, 1, 25, 0),
(203, 0, 21, 0),
(204, 0, 21, 0),
(205, 0, 20, 0),
(206, 1, 23, 0),
(207, 1, 28, 0),
(208, 47, 21, 0),
(209, 1, 21, 0),
(210, 1, 20, 0),
(211, 1, 23, 0),
(212, 1, 23, 0),
(213, 1, 29, 0),
(214, 19, 30, 0),
(215, 48, 25, 0),
(216, 48, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `userpassword` text NOT NULL,
  `passport` text NOT NULL,
  `dateofbirth` text NOT NULL,
  `role` text NOT NULL DEFAULT '0',
  `archived` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `userpassword`, `passport`, `dateofbirth`, `role`, `archived`) VALUES
(1, 'walid moultamiss', 'walidmoultamis@gmail.com', '1', '12wxc441wx3cwc1', '1996-06-14', '1', 0),
(2, 'walid', 'walidmSSSSoultamis@gmail.com', '11111QQQQ', 'QQQQQ', '1234-11-11', '0', 0),
(13, 'hamza azouzi', 'user@email.com', 'user', '1111', '1111-11-11', '0', 0),
(19, 'karim baggari', 'karimbaggari@gmail.com', 'karim', 'karim989898karim', '1982-06-22', '0', 0),
(20, 'Ahmed sabika', 'ahmedsabika@gmail.com', '1', '6ZA7A6ZE76', '1997-06-24', '0', 0),
(25, 'HELLO', 'hello from the other side', '1', '', '', '0', 1),
(46, 'kjqsd', 'sqdqsdqsd', 'qsdqsddqsdqs', '', '', '0', 1),
(47, 'walid', 'walidwalidmoultamis@gmail.com', '1', '12123EEER4', '1995-06-07', '0', 1),
(48, 'walid mouddltamiss', 'karimbaggaridd@gmail.com', '1', '1212123131', '1995-06-07', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dollarsmoney`
--
ALTER TABLE `dollarsmoney`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id_notification`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dollarsmoney`
--
ALTER TABLE `dollarsmoney`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
