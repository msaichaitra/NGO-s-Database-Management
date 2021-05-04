-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 08:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(255) NOT NULL,
  `activity_id` varchar(500) NOT NULL,
  `program_name` varchar(500) NOT NULL,
  `vol_head_name` varchar(500) NOT NULL,
  `budget` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity_id`, `program_name`, `vol_head_name`, `budget`) VALUES
(1, 'A1', 'Interactive wall painting', 'VENKATESH RAO', '1,60,000'),
(2, 'A2', 'Human rights awareness', 'HARSHAD MEHTA', '2,00,000'),
(3, 'A3', 'Child friendly education content', 'BHUVAN RAJ', '1,60,000'),
(4, 'A4', 'CLOTH DONATION', 'RIYA YADAV', '1,00,000'),
(5, 'A5', 'YOGA', 'SHARAD BILARI', '1,00,000'),
(6, 'A6', 'DRAWING COMPETITION', 'HARSHAD MEHTA', '50,000'),
(7, 'A7', 'HOME INDUSTRY', 'ALLU ARJUN', '2,00,000'),
(8, 'A8', 'PLANT TREES', 'SARTHAK SINGH', '70,000'),
(9, 'A9', 'TOBACCO AWARENESS', 'RAJAT TYAGI', '55,000'),
(10, 'A10', 'PSYCOLOGICAL SUPPORT', 'RIYA YADAV', '50,000'),
(11, 'A11', 'HELPING STREET VENDORS', 'DRUV SAXENA', '1,00,000'),
(12, 'A12', 'FINANCIAL INCLUSION IN CYCLE AND CART PULLERS', 'RAMAN PATEL', '1,50,000');

-- --------------------------------------------------------

--
-- Table structure for table `forminfo`
--

CREATE TABLE `forminfo` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `pincode` varchar(500) NOT NULL,
  `bloodgroup` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forminfo`
--

INSERT INTO `forminfo` (`id`, `name`, `email`, `address`, `city`, `pincode`, `bloodgroup`) VALUES
(1, 'Bellamkonda Ieeshasree', 'ieeshasree24@gmail.com', 'Flat no. 208,pavani vasudevam app, 3rd floor', 'Nellore', '524003', 'A+'),
(2, 'Bellamkonda Ieeshasree', 'rajilalith1974@gmail.com', 'Flat no. 208,pavani vasudevam app, 3rd floor', 'Nellore', '524003', 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(255) NOT NULL,
  `manager_id` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `mail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `manager_id`, `name`, `contact`, `mail`) VALUES
(1, 'M1', 'V.K. GOKAK', '9736254854', 'gokak@gmail.com'),
(2, 'M2', 'ANIKA YADAV', '9583113425', 'ani123@gmail.com'),
(3, 'M3', 'ASIMA CHATTERJEE', '91684138355', 'asima@gmail.com'),
(4, 'M4', 'ALOK KUMAR', '9876545774', 'alok@gmail.com'),
(5, 'M5', 'ABHIJEET RAJPUT', '9655523142', 'rajput@gmail.com'),
(6, 'M6', 'VIVIAN DSENA', '9776534216', 'vivian@gmail.com'),
(7, 'M7', 'ALOK KUMAR', '9765554320', 'alo321@gmail.com'),
(8, 'M8', 'KARTHIKEYAN', '9005432188', 'karthik@gmail.com'),
(9, 'M9', 'ANIKA RAJ', '97765788021', 'anu@gmail.com'),
(10, 'M10', 'VARNIKA SINGH', '8769875788', 'varu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ngoinfo`
--

CREATE TABLE `ngoinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `foundation` varchar(500) NOT NULL,
  `cause` varchar(500) NOT NULL,
  `headquarter` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngoinfo`
--

INSERT INTO `ngoinfo` (`id`, `name`, `foundation`, `cause`, `headquarter`) VALUES
(1, 'AKSHAY PATRA FOUNDATION', '1992', 'CHILDREN EDUCATION', 'BANGLORE'),
(2, 'BUTTERFLIES', '2002', 'HUMAN RIGHTS', 'NEW DELHI'),
(3, 'CHILD IN NEED', '1998', 'CHILDREN EDUCATION', 'KOLKATA'),
(4, 'HELP AGE INDIA', '2002', 'OLD AGE', 'ASSAM'),
(5, 'WINGS FOUNDATION', '2007', 'ORPHANAGE', 'UP'),
(6, 'GOONJ', '1995', 'WOMEN EMPOWERMENT', 'MUMBAI'),
(7, 'BHUMI', '1989', 'ENVIRONMENT AND ANIMAL', 'CHENNAI'),
(8, 'CUDDLES', '1997', 'CANCER', 'MUMBAI'),
(9, 'NOT SCARS', '2000', 'REHABILITATING ACID ATTACK', 'NEW DELHI'),
(10, 'SAMMAAN FOUNDATION', '2001', 'EMOWERING VULNERABLE COMMUNITIES', 'VARANASI');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(255) NOT NULL,
  `user` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `user`, `email`, `comments`) VALUES
(1, 'hi', 'plz', 'done'),
(2, '', '', ''),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `volunteerhead`
--

CREATE TABLE `volunteerhead` (
  `id` int(255) NOT NULL,
  `vol_id` varchar(500) NOT NULL,
  `vol_head_name` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteerhead`
--

INSERT INTO `volunteerhead` (`id`, `vol_id`, `vol_head_name`, `contact`) VALUES
(1, 'V1', 'VENKATESH RAO', '9867452387'),
(2, 'V2', 'HARSHAD MEHTA', '966754354'),
(3, 'V3', 'BHUVAN RAJ', '985472136'),
(4, 'V4', 'RIYA YADAV', '8574121236'),
(5, 'V5', 'SHARAD BILARI', '874512369'),
(6, 'V6', 'ALLU ARJUN', '7542368959'),
(7, 'V7', 'SARTHAK SINGH', '9874561278'),
(8, 'V8', 'RAJAT TYAGI', '9854786699'),
(9, 'V9', 'DRUV SAXENA', '9654125473'),
(10, 'V10', 'RAMAN PATEL', '95476123541');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forminfo`
--
ALTER TABLE `forminfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngoinfo`
--
ALTER TABLE `ngoinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteerhead`
--
ALTER TABLE `volunteerhead`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `forminfo`
--
ALTER TABLE `forminfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ngoinfo`
--
ALTER TABLE `ngoinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `volunteerhead`
--
ALTER TABLE `volunteerhead`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
