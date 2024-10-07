-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 07:30 PM
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
(2, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 1, 'Myitkyina_Putao                    ', 100000, 1, 100000, '2023-08-05', '2023-08-08', '2023-07-29 18:06:09', 'ACBADFA', 2, 'a', '2023-07-29 11:38:24'),
(3, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 12, 'Islands in Myeik', 1500000, 2, 3000000, '2023-08-22', '2023-08-27', '2023-07-30 16:13:03', 'ghhjjj', 2, 'u', '2023-07-30 09:43:54'),
(4, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, 12, 'Islands in Myeik', 1500000, 1, 1500000, '2023-08-10', '2023-08-15', '2023-07-30 17:33:31', 'AAAA', 2, 'u', '2023-07-30 11:06:11'),
(5, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, 1, 'Myitkyina_Putao                    ', 100000, 1, 100000, '2023-08-18', '2023-08-20', '2023-07-30 18:11:37', 'kjhhgh', 2, 'a', '2023-07-30 17:15:03'),
(6, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, 12, 'Islands in Myeik', 1500000, 4, 6000000, '2023-08-10', '2023-08-14', '2023-07-30 21:44:53', 'AADFGADA', 1, 'a', '2023-07-30 17:15:20'),
(7, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, 12, 'Islands in Myeik', 1500000, 4, 6000000, '2023-08-10', '2023-08-14', '2023-07-30 21:46:05', 'AADFGADA', 0, NULL, NULL),
(8, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, 12, 'Islands in Myeik', 1500000, 1, 1500000, '2023-08-10', '2023-08-14', '2023-07-30 21:50:41', 'adfadd', 0, NULL, NULL),
(9, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 8, 'Bamaw              ', 2000000, 1, 2000000, '2023-08-05', '2023-08-09', '2023-07-30 21:52:21', 'adgafdga', 2, 'u', '2023-07-30 17:09:20'),
(10, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 8, 'Bamaw              ', 2000000, 1, 2000000, '2023-08-17', '2023-08-21', '2023-07-30 21:53:15', 'jkasdahfa', 2, 'u', '2023-08-01 16:18:27'),
(11, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 8, 'Bamaw              ', 2000000, 5, 10000000, '2023-08-24', '2023-08-28', '2023-07-30 23:23:55', 'hjdkajhad', 0, NULL, NULL),
(12, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 8, 'Bamaw              ', 2000000, 1, 2000000, '2023-08-05', '2023-08-09', '2023-07-30 23:26:00', 'adgads', 0, NULL, NULL),
(13, 'Min Myat Thurein Zan', 'mmtrz@gmail.com', 9790663667, 12, 'Islands in Myeik', 1500000, 1, 1500000, '2023-08-10', '2023-08-14', '2023-07-31 16:42:34', 'Ok, Well.', 0, NULL, NULL),
(14, 'Aung Phyo Kyaw', 'apk@gmail.com', 9445195953, 8, 'Bamaw              ', 2000000, 1, 2000000, '2023-08-04', '2023-08-08', '2023-08-01 20:57:19', 'ADAA', 2, 'u', '2023-08-01 14:31:26'),
(15, 'Aung Phyo Kyaw', 'apk@gmail.com', 9445195953, 12, 'Islands in Myeik', 1500000, 3, 4500000, '2023-08-10', '2023-08-14', '2023-08-01 22:32:48', 'AA', 0, NULL, NULL),
(16, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 12, 'Islands in Myeik', 1500000, 1, 1500000, '2023-08-10', '2023-08-14', '2023-08-01 22:36:11', 'sfshsdas', 0, NULL, NULL),
(17, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 8, 'Bamaw              ', 2000000, 1, 2000000, '2023-08-31', '2023-09-04', '2023-08-01 22:41:09', 'adgads', 0, NULL, NULL),
(18, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 12, 'Islands in Myeik', 1500000, 1, 1500000, '2023-08-22', '2023-08-26', '2023-08-01 22:48:58', 'adgasdfg', 0, NULL, NULL),
(19, 'Aung Phyo Kyaw', 'apk@gmail.com', 9445195953, 1, 'Myitkyina_Putao                    ', 100000, 1, 100000, '2023-08-16', '2023-08-18', '2023-08-01 23:10:31', 'jakdshagkjs', 0, NULL, NULL);

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Message`, `Date`) VALUES
(1, 'Min Naing Paing Oo', 'npo@gmail.com', 'Hello, can I get LinkIn account?', '2023-07-30'),
(2, 'Min Aung Chan Oo', 'maco@gmail.com', 'How can I do for payment?', '2023-07-30');

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
(1, 'Aung Phyo Kyaw', 'apk@gmail.com', 9445195953, 'mamg', '2023-07-13 00:48:35'),
(2, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, '12345678', '2023-07-22 00:00:52'),
(3, 'Min Myat Thurein Zan', 'mmtrz@gmail.com', 9790663667, '12345678', '2023-07-22 00:49:35'),
(4, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, '12345678', '2023-07-13 21:56:29'),
(5, 'Phyo Thuzar', 'phyo@gmail.com', 9780443445, '12345678', '2023-07-18 15:06:59'),
(6, 'Thurein', 'thurein@gmail.com', 9790663667, '12345678', '2023-07-22 00:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_sign`
--

CREATE TABLE `customer_sign` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sign` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_sign`
--

INSERT INTO `customer_sign` (`Id`, `Name`, `Email`, `Sign`) VALUES
(1, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c680e51540a.png'),
(2, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c68d3795981.'),
(3, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c68db4ce0ba.png'),
(4, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c68db8e306b.png'),
(5, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c6958510cdf.png'),
(6, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c695a90e7a0.png'),
(7, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c69624420f1.png'),
(8, 'Aung Phyo Kyaw', 'apk@gmail.com', 'signature/Aung Phyo Kyaw_64c9166142c27.png'),
(9, 'Aung Phyo Kyaw', 'apk@gmail.com', 'signature/Aung Phyo Kyaw_64c92ce5bfab5.png'),
(10, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c92d81a2234.png'),
(11, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c92eac8aba8.png'),
(12, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64c9307b5a128.png'),
(13, 'Aung Phyo Kyaw', 'apk@gmail.com', 'signature/Aung Phyo Kyaw_64c93592bae5f.png');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `Id` int(11) NOT NULL,
  `SubCatId` int(20) NOT NULL,
  `PackageId` int(20) NOT NULL,
  `Date` date NOT NULL,
  `ModifyDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`Id`, `SubCatId`, `PackageId`, `Date`, `ModifyDate`) VALUES
(4, 10, 12, '2023-08-03', '2023-07-30'),
(6, 10, 12, '2023-08-10', '2023-07-30'),
(7, 10, 12, '2023-08-22', '2023-07-30');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer_sign`
--
ALTER TABLE `customer_sign`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `SubCatId` (`SubCatId`,`PackageId`),
  ADD KEY `PackageId` (`PackageId`);

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
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_sign`
--
ALTER TABLE `customer_sign`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Constraints for table `date`
--
ALTER TABLE `date`
  ADD CONSTRAINT `date_ibfk_1` FOREIGN KEY (`SubCatId`) REFERENCES `subcategory` (`SubCatId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `date_ibfk_2` FOREIGN KEY (`PackageId`) REFERENCES `package` (`PackageId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
