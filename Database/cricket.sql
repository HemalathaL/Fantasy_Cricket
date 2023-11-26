-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 07:18 PM
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
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `Username` varchar(55) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobileNumber` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `RefId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`Username`, `Email`, `MobileNumber`, `Password`, `RefId`) VALUES
('Hemalatha', 'hema123@gmail.com', '1234567890', 'hema123', 101);

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `id` int(11) NOT NULL,
  `league_name` varchar(100) NOT NULL,
  `matchtype` varchar(55) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `capacity` varchar(55) NOT NULL,
  `joining_fees` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`id`, `league_name`, `matchtype`, `time`, `date`, `capacity`, `joining_fees`) VALUES
(1, 'Ind vs Pak', 'T20', '16:00:00', '2023-08-26', '20', '100'),
(2, 'Ind vs Nz', 'T20', '19:00:00', '2023-08-27', '10', '150');

-- --------------------------------------------------------

--
-- Table structure for table `master match stme`
--

CREATE TABLE `master match stme` (
  `id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `statement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master match stme`
--

INSERT INTO `master match stme` (`id`, `league_id`, `category`, `statement`) VALUES
(1, 1, 'AR', 'Hardik Pandya makes a 1 catch and 25+ runs.'),
(2, 1, 'AR', 'Hardik Pandya makes a 2 catches and 35+ runs.\r\n'),
(3, 1, 'BT', 'Rohit Sharma make a  25 runs.\r\n'),
(4, 1, 'BT', 'Rohit Sharma make a 15+run\r\n'),
(5, 1, 'BW', 'Shreyas Iyer  takes 2 wickets and takes 2 catches\r\n'),
(6, 1, 'BW', 'Shreyas Iyer take a 1wicket\r\n'),
(7, 1, 'WT', 'Rishabh pant  takes 2 catches\r\n'),
(8, 1, 'WT', 'Rishabh pant  make 30 runs\r\n'),
(9, 1, 'BW', 'Shreyas Iyer makes a 1wicket\r\n'),
(10, 1, 'BW', 'Shreyas Iyer make a 25+runs');

-- --------------------------------------------------------

--
-- Table structure for table `master_match_stme`
--

CREATE TABLE `master_match_stme` (
  `id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `statement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_match_stme`
--

INSERT INTO `master_match_stme` (`id`, `league_id`, `category`, `statement`) VALUES
(1, 1, 'AR', 'Hardik Pandya makes a 1 catch and 25+ runs'),
(2, 1, 'AR', 'Hardik Pandya makes a 2 catches and 35+ runs'),
(3, 1, 'BT', 'Rohit Sharma make a  25 runs.\r\n'),
(4, 1, 'BW', 'Shreyas Iyer  takes 2 wickets and takes 2 catches'),
(5, 1, 'WT', 'Dhoni takes 2 catches'),
(6, 1, 'WT', 'Wicketkeeper make 30 runs');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `Username` varchar(55) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobileNumber` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `RefId` int(11) NOT NULL,
  `wallet_balance` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `coins` int(11) NOT NULL,
  `image` varchar(55) NOT NULL,
  `confirm_pass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`Username`, `Email`, `MobileNumber`, `Password`, `RefId`, `wallet_balance`, `points`, `coins`, `image`, `confirm_pass`) VALUES
('Willams', 'willams@gmail.com', '1234567890', 'willams123', 101, 400, 5, 0, 'login.jfif', 'willams123');

-- --------------------------------------------------------

--
-- Table structure for table `userselection`
--

CREATE TABLE `userselection` (
  `id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `league_name` varchar(55) NOT NULL,
  `user_selected_option` text NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userselection`
--

INSERT INTO `userselection` (`id`, `league_id`, `league_name`, `user_selected_option`, `User_id`) VALUES
(1, 1, 'Ind vs Pak', 'Hardik Pandya makes a 1 catch and 25  runs', 101),
(2, 1, 'Ind vs Pak', 'Rohit Sharma make a', 101),
(3, 1, 'Ind vs Pak', 'Hardik Pandya makes a 1 catch and 25  runs', 101),
(4, 1, 'Ind vs Pak', 'Wicketkeeper make 30 runs', 101),
(5, 1, 'Ind vs Pak', 'Dhoni takes 2 catches', 101);

-- --------------------------------------------------------

--
-- Table structure for table `user_join`
--

CREATE TABLE `user_join` (
  `RefId` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `league_id` int(11) NOT NULL,
  `league_name` varchar(50) NOT NULL,
  `matchtype` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `joining_fees` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_join`
--

INSERT INTO `user_join` (`RefId`, `Username`, `league_id`, `league_name`, `matchtype`, `time`, `date`, `joining_fees`) VALUES
(101, 'Willams', 1, 'Ind vs Pak', ' T20', '16:00:00', '0000-00-00', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master match stme`
--
ALTER TABLE `master match stme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_match_stme`
--
ALTER TABLE `master_match_stme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userselection`
--
ALTER TABLE `userselection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master match stme`
--
ALTER TABLE `master match stme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_match_stme`
--
ALTER TABLE `master_match_stme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userselection`
--
ALTER TABLE `userselection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
