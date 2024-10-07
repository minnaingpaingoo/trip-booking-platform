-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 09:11 PM
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
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `TypeOfUser` varchar(20) NOT NULL,
  `AdminName` varchar(100) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Picture` varchar(1000) NOT NULL,
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserName`, `Password`, `TypeOfUser`, `AdminName`, `Phone`, `Picture`, `RegDate`) VALUES
('admin', 'admin', 'Admin', 'Min Naing Paing Oo', 9790663667, 'avatar15.jpg', '2023-07-22 15:51:44'),
('APK', '12345678', 'Admin', '', 0, '', '2023-07-26 01:38:45'),
('general', 'general', 'General', '', 0, '', '2023-07-22 15:51:44'),
('mnpo', 'mnpo', 'Admin', '', 0, '', '2023-07-22 15:51:44');

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
  `Price` int(15) NOT NULL,
  `Quantity` int(15) NOT NULL,
  `TotalPrice` int(15) NOT NULL,
  `DepartureDate` date NOT NULL,
  `ArrivalDate` date NOT NULL,
  `BookingDate` datetime NOT NULL DEFAULT current_timestamp(),
  `Message` varchar(1000) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(6, 'Island Tours'),
(9, 'Multi Tours');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Create_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Email`, `Phone`, `Password`, `Create_Date`) VALUES
('APK', 'apk@gmail.com', 9445195953, '11223344', '2023-07-13 00:48:35'),
('Min Aung Chan Oo', 'maco@gmail.com', 9790663667, '12345678', '2023-07-22 00:00:52'),
('Min Myat Thurein Zan', 'mmtrz@gmail.com', 9790663667, '12345678', '2023-07-22 00:49:35'),
('Naing Paing Oo', 'npo@gmail.com', 9790663667, '12345678', '2023-07-13 21:56:29'),
('Phyo Thuzar', 'phyo@gmail.com', 9780443445, '12345678', '2023-07-18 15:06:59'),
('Thurein', 'thurein@gmail.com', 9790663667, '12345678', '2023-07-22 00:53:17');

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
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PackageId`, `PackageName`, `CategoryId`, `SubCatId`, `PackagePrice`, `Picture1`, `Picture2`, `Picture3`, `Detail`) VALUES
(1, 'Myitkyina_Putao                    ', 1, 1, 100000, 'Kyaikhtiyoe.jpg', 'myeik.jpg', 'Mdy1.jpg', '3 Days & 2 Nights\r\n3 Persons'),
(8, 'Bamaw              ', 1, 1, 3990098, 'Inle.jpg', 'U Bein.jpg', 'Mdy1.jpg', 'trhwfgdffg');

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
(7, 'AA', 6, 'Island.jpg', 'AA'),
(8, 'BB', 6, 'Island.jpg', 'BB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserName`);

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
  ADD PRIMARY KEY (`Email`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `PackageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `SubCatId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
