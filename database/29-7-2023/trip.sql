-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 08:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `AdminName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Picture` varchar(1000) NOT NULL,
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `UserName`, `Password`, `Type`, `AdminName`, `Email`, `Phone`, `Picture`, `RegDate`) VALUES
(1, 'admin', 'admin', 'Admin', 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 'face19.jpg', '2023-07-22 15:51:44'),
(2, 'APK', '12345', 'Admin', 'Aung Phyo Kyaw', 'apk@gmail.com', 9123456789, 'avatar15.jpg', '2023-07-26 01:38:45'),
(3, 'general', 'general', 'General', 'General', 'general@gmail.com', 9953995489, 'avatar15.jpg', '2023-07-22 15:51:44'),
(4, 'mnpo', 'mnpo', 'Admin', 'Min Naing Paing Oo', 'mnpo@gmail.com', 9953995489, 'avatar15.jpg', '2023-07-22 15:51:44'),
(5, 'maco', '12345', 'General', 'Min Aung Chan Oo', 'maco@gmail.com', 9790663667, 'avatar15.jpg', '2023-07-27 21:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `AdvId` int(15) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `Picture` varchar(1000) NOT NULL,
  `Details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`AdvId`, `Title`, `CompanyName`, `Picture`, `Details`) VALUES
(1, 'Giordano Bag', 'Giordano', 'bag.jpg', 'Brought to you with giordano best bag.');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNo` bigint(20) NOT NULL,
  `PackageId` int(15) NOT NULL,
  `PackageName` varchar(1000) NOT NULL,
  `Price` int(15) NOT NULL,
  `Quantity` int(15) NOT NULL,
  `TotalPrice` int(15) NOT NULL,
  `DepartureDate` date NOT NULL,
  `ArrivalDate` date NOT NULL,
  `BookingDate` datetime NOT NULL DEFAULT current_timestamp(),
  `Message` varchar(1000) NOT NULL,
  `Status` int(11) DEFAULT NULL,
  `CancelBy` varchar(100) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingId`, `Name`, `Email`, `PhoneNo`, `PackageId`, `PackageName`, `Price`, `Quantity`, `TotalPrice`, `DepartureDate`, `ArrivalDate`, `BookingDate`, `Message`, `Status`, `CancelBy`, `UpdationDate`) VALUES
(1, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 1, 'Myitkyina_Putao                    ', 100000, 2, 200000, '2023-07-31', '2023-08-03', '2023-07-29 17:05:42', 'ABCB', 1, 'a', '2023-07-29 11:35:04'),
(2, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 1, 'Myitkyina_Putao                    ', 100000, 1, 100000, '2023-08-05', '2023-08-08', '2023-07-29 18:06:09', 'ACBADFA', 2, 'a', '2023-07-29 11:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(10) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`) VALUES
(1, 'Family Tours'),
(3, 'Hiking'),
(4, 'Beach Relax Tours'),
(5, 'Special Event Tours'),
(6, 'Island Tours');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Create_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Email`, `Phone`, `Password`, `Create_Date`) VALUES
(1, 'APK', 'apk@gmail.com', 9445195953, '11223344', '2023-07-13 00:48:35'),
(2, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, '12345678', '2023-07-22 00:00:52'),
(3, 'Min Myat Thurein Zan', 'mmtrz@gmail.com', 9790663667, '12345678', '2023-07-22 00:49:35'),
(4, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, '12345678', '2023-07-13 21:56:29'),
(5, 'Phyo Thuzar', 'phyo@gmail.com', 9780443445, '12345678', '2023-07-18 15:06:59'),
(6, 'Thurein', 'thurein@gmail.com', 9790663667, '12345678', '2023-07-22 00:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `PackageId` int(10) NOT NULL,
  `PackageName` varchar(150) NOT NULL,
  `CategoryId` int(15) NOT NULL,
  `SubCatId` int(15) NOT NULL,
  `PackagePrice` bigint(200) NOT NULL,
  `Picture1` varchar(1000) NOT NULL,
  `Picture2` varchar(1000) NOT NULL,
  `Picture3` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `NoOfDay` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PackageId`, `PackageName`, `CategoryId`, `SubCatId`, `PackagePrice`, `Picture1`, `Picture2`, `Picture3`, `Detail`, `NoOfDay`) VALUES
(1, 'Myitkyina_Putao                    ', 1, 1, 100000, 'Kyaikhtiyoe.jpg', 'myeik.jpg', 'Mdy1.jpg', '3 Days & 2 Nights\r\n3 Persons', 3),
(8, 'Bamaw              ', 1, 1, 2000000, 'myeik.jpg', 'Kyaikhtiyoe.jpg', 'Island.jpg', '4 Nights 5 Days', 5),
(12, 'Islands in Myeik', 6, 10, 1500000, 'Island.jpg', 'myeik.jpg', 'Mingun.jpg', '4 Nights & 5 Days 5 Person', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `SubCatId` int(10) NOT NULL,
  `SubCatName` varchar(50) NOT NULL,
  `CategoryId` int(10) NOT NULL,
  `Picture` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`SubCatId`, `SubCatName`, `CategoryId`, `Picture`, `Detail`) VALUES
(1, ' Family Tours in Kachin State       ', 1, 'Kachin.jpg', 'Kachin State'),
(9, 'AAAABB', 1, 'Bagan3.jpg', 'AAAA'),
(10, 'Island Tours in Tanintharyi Region', 6, 'Island.jpg', 'Tanintharyi Region');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`AdvId`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`PackageId`),
  ADD KEY `SubCatId` (`SubCatId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`SubCatId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `AdvId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `PackageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `SubCatId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`SubCatId`) REFERENCES `subcategory` (`SubCatId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_ibfk_2` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
