-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 05:09 PM
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
(1, 'admin', 'admin', 'Admin', 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 'mnpo1.jpg', '2023-07-22 15:51:44'),
(2, 'APK', '12345', 'Admin', 'Aung Phyo Kyaw', 'apk@gmail.com', 9123456789, 'avatar15.jpg', '2023-07-26 01:38:45'),
(3, 'general', 'general', 'General', 'General', 'general@gmail.com', 9953995489, 'avatar15.jpg', '2023-07-22 15:51:44');

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
(8, 'Gioranzo Short Skirt', 'Gioranzo', 'f22.jpeg', 'Gioranzo'),
(9, 'FIT ME Foundation', 'FIT ME', 'b1.jpeg', 'Fit Me Foundation');

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
  `Message` varchar(1000) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `CancelBy` varchar(100) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingId`, `Name`, `Email`, `PhoneNo`, `PackageId`, `PackageName`, `Price`, `Quantity`, `TotalPrice`, `DepartureDate`, `ArrivalDate`, `BookingDate`, `Message`, `Status`, `CancelBy`, `UpdationDate`) VALUES
(1, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 12, 'Islands in Myeik', 1500000, 2, 3000000, '2023-08-22', '2023-08-27', '2023-07-30 16:13:03', '', 2, 'u', '2023-08-05 18:26:23'),
(2, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, 1, 'Myitkyina_Putao                    ', 100000, 1, 100000, '2023-08-18', '2023-08-20', '2023-07-30 18:11:37', '', 2, 'a', '2023-08-05 18:26:37'),
(3, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 8, 'Bamaw              ', 2000000, 1, 2000000, '2023-08-05', '2023-08-09', '2023-07-30 23:26:00', 'adgads', 2, 'u', '2023-08-06 07:38:50'),
(4, 'Min Myat Thurein Zan', 'mmtrz@gmail.com', 9790663667, 12, 'Islands in Myeik', 1500000, 1, 1500000, '2023-08-10', '2023-08-14', '2023-07-31 16:42:34', 'Ok, Well.', 1, 'a', '2023-08-05 18:26:58'),
(6, 'Aung Phyo Kyaw', 'apk@gmail.com', 9445195953, 12, 'Islands in Myeik', 1500000, 1, 1500000, '2023-08-10', '2023-08-14', '2023-08-02 23:38:23', '', 0, NULL, NULL),
(7, 'Aung Phyo Kyaw', 'apk@gmail.com', 9445195953, 12, 'Islands in Myeik', 1500000, 2, 3000000, '2023-08-03', '2023-08-07', '2023-08-05 12:59:15', '', 0, NULL, NULL),
(41, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 14, 'Bagan_Mount Popa', 100000, 1, 100000, '2023-08-23', '2023-08-25', '2023-08-06 14:15:54', '', 2, 'u', '2023-08-06 14:45:50'),
(42, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 18, 'Visiting in Mandalay', 100000, 1, 100000, '2023-08-11', '2023-08-13', '2023-08-06 21:16:52', '', 0, NULL, NULL);

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
(2, 'Hiking'),
(3, 'Beach Relax Tours'),
(4, 'Special Event Tours'),
(5, 'Island Tours');

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
(1, 'Min Naing Paing Oo', 'npo@gmail.com', 'Hello, can I get LinkIn account?', '2023-07-30');

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
(1, 'Aung Phyo Kyaw', 'apk@gmail.com', 9445195953, '11223344', '2023-07-13 00:48:35'),
(2, 'Min Aung Chan Oo', 'maco@gmail.com', 9953995489, '12345678', '2023-07-22 00:00:52'),
(4, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, '12345678', '2023-07-13 21:56:29'),
(5, 'Phyo Thuzar', 'phyo@gmail.com', 9780443445, '12345678', '2023-07-18 15:06:59'),
(6, 'Thurein', 'thurein@gmail.com', 9790663667, '12345678', '2023-07-22 00:53:17'),
(7, 'Mi Pale Phyu', 'pale@gmail.com', 9768086091, '12345678', '2023-08-06 12:54:29'),
(8, 'Ko Nyein Maung', 'nyein@gmail.com', 9425284567, '12345678', '2023-08-06 21:06:16');

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
(2, 'Aung Phyo Kyaw', 'apk@gmail.com', 'signature/Aung Phyo Kyaw_64c93592bae5f.png'),
(22, 'Phyo Thuzar', 'phyo@gmail.com', 'signature/Phyo Thuzar_64cf37d4f401a.png'),
(23, 'Phyo Thuzar', 'phyo@gmail.com', 'signature/Phyo Thuzar_64cf3b7288100.png'),
(24, 'Mi Pale Phyu', 'pale@gmail.com', 'signature/Mi Pale Phyu_64cf3d4b2baf5.png'),
(25, 'Mi Pale Phyu', 'pale@gmail.com', 'signature/Mi Pale Phyu_64cf3f732a3fe.png'),
(26, 'Phyo Thuzar', 'phyo@gmail.com', 'signature/Phyo Thuzar_64cf41547a3b9.png'),
(27, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64cf42c36416b.png'),
(28, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64cf4d2411d7e.png'),
(29, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64cf4de0b15a6.png'),
(30, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64cf4e24f3c49.png'),
(31, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64cf4f2f116c0.png'),
(32, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64cf4fb6deca4.png'),
(33, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64cfb26697a3f.png');

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
(8, 18, 16, '2023-12-15', '2023-08-06'),
(9, 19, 17, '2023-12-24', '2023-08-06');

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
(13, 'Rolling in Hpa_an', 1, 13, 100000, 'AMAZING-CAVE-600-x-400.jpg', 'hpa-an-myanmar.jpg', 'bayin_nyi_cave.jpg', 'AAABBB', 2),
(14, 'Bagan_Mount Popa', 1, 14, 100000, 'ပုပ္ပါး2.jpg', 'pxfuel (5).jpg', 'pxfuel (3).jpg', 'ADAA', 3),
(15, 'Pagodas in Sagaing', 1, 15, 100000, 'မိုးညှင်းသမ္ဗုဒ္ဂေ.jpg', '5d197f37569bb.png', 'pxfuel (2).jpg', 'AAA', 5),
(16, 'Balloon Festival', 4, 18, 100000, 'BLOG-HERO-Taungy.jpg', 'banner-6365217a20593434bd5e7477-x800.jpg', 'Dv4Z16VWoAAnVZy.jpg', 'AABBB', 5),
(17, 'Flower Festival', 4, 19, 100000, 'py.jpg', 'Pyin.jpg', 'Pyin Oo Lwin flower festival.jpg', 'AA', 3),
(18, 'Visiting in Mandalay', 1, 14, 100000, 'blogspot 1.jpg', 'depositphotos_83242080-stock-photo-mandalay-palace-at-mandalay-city.jpg', 'silhouette-people-walking-during-sunset-u-bein-bridge-mandalay-myanmar.jpg', 'AABBB', 3),
(19, 'Myintkyina_PutaO', 1, 11, 100000, 'putao.jpg', 'indawgyi-lake.jpg', 'myitkyina.jpg', 'ADSAFA', 5),
(20, 'Pagodas in Mon State', 1, 12, 100000, 'viber_image_2023-08-06_13-08-53-009.jpg', 'viber_image_2023-08-06_13-08-53-765.jpg', 'viber_image_2023-08-06_13-08-53-057.jpg', 'ASDFd', 4),
(21, 'Mount Kyaikhtiyoe', 2, 17, 100000, 'viber_image_2023-08-06_13-08-54-090.jpg', 'viber_image_2023-08-06_13-08-53-995.jpg', 'viber_image_2023-08-06_13-08-54-174.jpg', 'ADF', 3),
(22, 'Mount Zinkyaik', 2, 17, 100000, 'viber_image_2023-08-06_13-08-53-818.jpg', 'viber_image_2023-08-06_13-08-53-057.jpg', 'viber_image_2023-08-06_13-08-53-100.jpg', 'AADFF', 3),
(23, 'Mount Khakabo Razi', 2, 20, 100000, 'khakaborazi_park.png', 'viber_image_2023-08-06_12-19-38-834.jpg', 'viber_image_2023-08-06_12-19-38-554.jpg', 'ADGSA', 3),
(24, 'Mount Phon Kan Razi', 2, 20, 100000, 'viber_image_2023-08-06_12-19-38-307.jpg', 'viber_image_2023-08-06_12-19-39-442.jpg', 'viber_image_2023-08-06_12-19-38-834.jpg', 'aadfs', 3),
(25, 'Ngwe Saung Beach', 3, 21, 100000, 'ngwe saung2.jpg', 'ngwe-saung-beach.jpg', 'ngwe saung1.jpg', 'ADFs', 3),
(26, 'Chaung Thar Beach', 3, 21, 100000, 'chaung thar6.jpg', 'chaung thar2.jpg', 'chaung-thar-beach.jpg', 'asdfasdg', 2),
(27, 'Ngapali Beach', 3, 22, 100000, 'ngapli-banner-size.jpg', 'ngapli be.jpg', 'Ngapali.jpg', 'jskald', 3),
(28, 'Kyaikhtiyoe Pagoda Festival', 4, 24, 100000, 'viber_image_2023-08-06_13-08-54-090.jpg', 'Kyaikhtiyoe.jpg', 'ကျိုက်ထီးရိုး.jpg', 'kjlads', 2),
(29, 'Islands in Myeik', 5, 25, 100000, 'Island.jpg', 'myeik-islands.jpg', '115-island-1-1-1.jpg', 'ADSJfks', 3),
(30, 'Islands in Kawthaung', 5, 25, 100000, 'nyaungoophee.jpg', 'ကော့သောင်း.jpg', 'Smart-Island-800x422.jpg', 'jkads', 4);

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
(11, 'Family Tours in Kachin State', 1, 'Kachin.jpg', 'Kachin State'),
(12, 'Family Tours in Mon State', 1, 'ကျိုက်ထီးရိုး.jpg', 'Mon State'),
(13, 'Family Tours in Kayin State', 1, 'AMAZING-CAVE-600-x-400.jpg', 'Kayin State'),
(14, 'Family Tours in Mandalay Region', 1, '5cf4979832089.png', 'Mandalay Region'),
(15, 'Family Tours in Sagaing Region', 1, 'kaung-hmu-daw-1600x1199.jpg', 'Sagaing Region'),
(16, 'Hiking in Kayin State', 2, 'Hpa-An-Myanmar-Burma_002.jpg', 'Kayin State'),
(17, 'Hiking in Mon State', 2, 'ကျိုက်ထီးရိုး.jpg', 'Mon State'),
(18, 'Special Event Tours in Shan State', 4, 'myanmar-treasure-resorts.jpg', 'Shan State'),
(19, 'Special Event Tours in Mandalay Region', 4, 'Pyioolwin.jpg', 'Mandalay Region'),
(20, 'Hiking in Kachin State', 2, 'viber_image_2023-08-06_12-19-38-156.jpg', 'Kachin State'),
(21, 'Beach Relax Tours in Ayeyarwady Region', 3, 'ngwe saung1.jpg', 'Ayeyarwady Region'),
(22, 'Beach Relax Tours in Rakhine State', 3, 'Ngapali.jpg', 'Rakhine State'),
(23, 'Beach Relax Tours in Mon State', 3, 'viber_image_2023-08-06_13-08-54-919.jpg', 'Mon State'),
(24, 'Special Event Tours in Mon State', 4, 'Kyaikhtiyoe.jpg', 'Mon State'),
(25, 'Island Tours in Tanintharyi Region', 5, 'ကော့သောင်း.jpg', 'Tanintharyi Region');

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
  MODIFY `AdvId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_sign`
--
ALTER TABLE `customer_sign`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `PackageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `SubCatId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
