-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 08:22 PM
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
(1, 'admin', 'admin', 'Admin', 'Min Naing Paing Oo', 'mnpo@gmail.com', 9790663667, 'mnpo1.jpg', '2023-07-22 15:51:44'),
(2, 'mapk', 'admin', 'Admin', 'Aung Phyo Kyaw', 'apk@gmail.com', 9123456789, 'apk1.jpg', '2023-07-26 01:38:45'),
(3, 'general', 'general', 'General', 'General', 'general@gmail.com', 9953995489, 'avatar15.jpg', '2023-07-22 15:51:44'),
(7, 'phyo', 'admin', 'Admin', 'Phyo Thuzar', 'ptz@gmail.com', 9789676684, 'ptz1.jpg', '2023-08-08 17:47:58'),
(8, 'pale', 'admin', 'Admin', 'Mi Pale Phyu', 'pale@gmail.com', 9425665768, 'mplp1.jpg', '2023-08-08 17:48:36'),
(9, 'pwwo', 'admin', 'Admin', 'Phyo Wai Wai Oo', 'pwwo@gmail.com', 9957637727, 'pwwo1.jpg', '2023-08-08 17:49:46'),
(10, 'myma', 'admin', 'Admin', 'Yin Moe Aye', 'yma@gmail.com', 9768965658, 'yma1.jpg', '2023-08-09 22:10:05');

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
(11, 'Cocacola Products', 'Cocacola Company Ltd', 'cocacola upd.jpg', 'Cocacola Products'),
(12, 'Alexandre Christie Watch', 'Alexandre Christie Company Ltd', 'ac watch upd.jpg', 'Alexandre Christie Watch'),
(13, 'LV Backbag', 'LV', 'lv backbag upd.jpg', 'LV Backbag'),
(14, 'Oishi Snack', 'Oishi', 'oishi1.jpg', 'Oishi Snack'),
(15, 'Royal-D Energy Drink', 'Royal-D', 'Royal D upd.png', 'Royal-D Energy Drink'),
(16, 'Giordano Umbrella', 'Giordano', 'giordano upd.png', 'Giordano Umbrella'),
(17, 'Adidas Shoe', 'Adidas', 'adidas upd.png', 'Adidas'),
(18, 'Ray Ban Glasses', 'Ray Ban', 'glasses.png', 'Ray Ban Glasses');

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
(41, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 14, 'Bagan_Mount Popa', 100000, 1, 100000, '2023-08-23', '2023-08-25', '2023-08-06 14:15:54', '', 2, 'u', '2023-08-06 14:45:50'),
(43, 'Mg Thet Paing Oo', 'thet@gmail.com', 9797430789, 14, 'Bagan_Mount Popa', 100000, 7, 700000, '2023-09-06', '2023-09-08', '2023-08-06 23:53:20', 'SDSSD', 1, 'a', '2023-08-06 17:34:14'),
(44, 'Naing Paing Oo', 'npo@gmail.com', 9790663667, 17, 'Flower Festival', 100000, 2, 200000, '2023-12-24', '2023-12-26', '2023-08-07 20:47:10', '', 0, NULL, NULL),
(45, 'Mi Pale Phyu', 'pale@gmail.com', 9768086091, 17, 'Flower Festival', 100000, 2, 200000, '2023-12-24', '2023-12-26', '2023-08-07 21:08:38', '', 2, 'u', '2023-08-07 14:43:35'),
(47, 'Mg Thet Paing Oo', 'thet@gmail.com', 9797430789, 14, 'Bagan_Mount Popa', 300000, 5, 1500000, '2023-08-19', '2023-08-22', '2023-08-09 00:37:30', '', 0, NULL, NULL),
(52, 'Mg Thet Paing Oo', 'thet@gmail.com', 9797430789, 14, 'Bagan_Mount Popa', 300000, 5, 2100000, '2023-08-23', '2023-08-26', '2023-08-09 01:11:20', '', 0, NULL, NULL),
(54, 'Yin Moe Aye', 'yy@gmail.com', 9888888888, 15, 'Pagodas in Sagaing', 300000, 1, 1300000, '2023-08-15', '2023-08-18', '2023-08-09 12:26:01', '', 2, 'u', '2023-08-09 05:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `Id` int(11) NOT NULL,
  `PackageId` int(15) NOT NULL,
  `Car1Price` int(11) NOT NULL,
  `Car2Price` int(11) NOT NULL,
  `Car3Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Id`, `PackageId`, `Car1Price`, `Car2Price`, `Car3Price`) VALUES
(1, 13, 430000, 500000, 1000000),
(3, 14, 550000, 600000, 1200000),
(4, 15, 500000, 600000, 1000000),
(5, 18, 500000, 600000, 1000000),
(6, 20, 350000, 500000, 1000000),
(7, 19, 1000000, 1500000, 2500000);

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
(2, 'Hiking Tours'),
(3, 'Beach Relax Tours'),
(4, 'Special Event Tours'),
(5, 'Island Tours'),
(10, '');

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
(8, 'Ko Nyein Maung', 'nyein@gmail.com', 9425284567, '12345678', '2023-08-06 21:06:16'),
(9, 'Mg Thet Paing Oo', 'thet@gmail.com', 9797430789, '169140203', '2023-08-06 23:50:49'),
(10, 'Yin Moe Aye', 'yy@gmail.com', 9888888888, '88888888', '2023-08-09 12:22:13'),
(11, 'Phyo Wai Wai Oo', 'pwwo@gmail.com', 9875555565, '12345678', '2023-08-09 22:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer_sign`
--

CREATE TABLE `customer_sign` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sign` varchar(1000) NOT NULL,
  `BookingId` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_sign`
--

INSERT INTO `customer_sign` (`Id`, `Name`, `Email`, `Sign`, `BookingId`) VALUES
(34, 'Mg Thet Paing Oo', 'thet@gmail.com', 'signature/Mg Thet Paing Oo_64cfd73942f3a.png', 43),
(35, 'Naing Paing Oo', 'npo@gmail.com', 'signature/Naing Paing Oo_64d0fd0d6a271.png', 44),
(36, 'Mi Pale Phyu', 'pale@gmail.com', 'signature/Mi Pale Phyu_2023-08-07_64d102a9aaada.png', 45),
(38, 'Mg Thet Paing Oo', 'thet@gmail.com', 'signature/Mg Thet Paing Oo_2023-08-08_64d284684a8af.png', 47),
(43, 'Mg Thet Paing Oo', 'thet@gmail.com', 'signature/Mg Thet Paing Oo_2023-08-08_64d28c551a73c.png', 52),
(45, 'Yin Moe Aye', 'yy@gmail.com', 'signature/Yin Moe Aye_2023-08-09_64d32a8b37363.png', 54);

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
(9, 19, 17, '2023-12-15', '2023-08-06'),
(10, 16, 31, '2023-08-23', '2023-08-08'),
(11, 16, 31, '2023-08-31', '2023-08-08'),
(12, 17, 21, '2023-08-19', '2023-08-08'),
(13, 17, 21, '2023-08-30', '2023-08-08'),
(14, 17, 22, '2023-08-14', '2023-08-08'),
(15, 17, 22, '2023-08-26', '2023-08-08'),
(21, 21, 25, '2023-08-18', '2023-08-08'),
(22, 21, 25, '2023-08-25', '2023-08-08'),
(24, 21, 26, '2023-08-18', '2023-08-08'),
(25, 21, 26, '2023-08-25', '2023-08-08'),
(27, 22, 27, '2023-08-19', '2023-08-08'),
(28, 22, 27, '2023-08-26', '2023-08-08'),
(29, 26, 32, '2023-08-26', '2023-08-08'),
(30, 18, 16, '2023-11-25', '2023-08-08'),
(32, 24, 28, '2023-10-28', '2023-08-08'),
(33, 25, 29, '2023-08-25', '2023-08-08'),
(34, 25, 30, '2023-08-29', '2023-08-08');

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
  `Detail` varchar(4000) NOT NULL,
  `NoOfDay` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PackageId`, `PackageName`, `CategoryId`, `SubCatId`, `PackagePrice`, `Picture1`, `Picture2`, `Picture3`, `Detail`, `NoOfDay`) VALUES
(13, 'Rolling in Hpa_an', 1, 13, 250000, 'AMAZING-CAVE-600-x-400.jpg', 'hpa-an-myanmar.jpg', 'bayin_nyi_cave.jpg', '2 Nights & 3 Days Trip. \r\nServices include: Tour guide, Breakfast & Lunch Set, Can select car as you like, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink. \r\nVisiting Places: Bayin Nyi Cave, Yathae Pyan Cave, Kaw Gon Cave, Kyauk Kalap, Shwe Yin Myaw, Kyawkataung Cave, Sadan Cave.', 3),
(14, 'Bagan_Mount Popa', 1, 14, 300000, 'popa.jpg', 'pxfuel (5).jpg', 'Bagan2.jpg', '3 Nights & 4 Days Trip.\r\nServices includes: Tour guide, Breakfast & Lunch Set, Can select car as you like, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink. \r\nVisiting Places: Dhammangayi Temple, Shwezigon Pagoda, Ananda Temple, Sulamani Temple, Thatbyinnyi Temple, Htilominlo Temple, Lawkananda Temple, Manuha Temple, Mount Popa.\r\n', 4),
(15, 'Pagodas in Sagaing', 1, 15, 300000, 'mohnyin.jpg', 'Sagaing-Region_1.jpg', 'pxfuel (2).jpg', '3 Nights & 4 Days Trip.\r\nServices includes: Tour guide, Breakfast & Lunch Set, Can select car as you like, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink. \r\nVisiting Places: Mohnyin ThanBoddhay Pagoda, Maha Bodhi Ta Htaung Standing Buddha, Mingun Pahtodawgyi, Mingun Bell, Kaunghmudaw Pagoda, Mya Thein Tan Pagoda, Along Taw Kassapa.', 4),
(16, 'Taunggyi Tazaungdaing Hot-air Balloons Festival', 4, 18, 250000, 'BLOG-HERO-Taungy.jpg', 'banner-6365217a20593434bd5e7477-x800.jpg', 'viber_image_2023-08-07_14-59-35-235.jpg', '2 Nights & 3 Days Trip During Next November, 2023.\r\nServices includes : Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.', 3),
(17, 'National Kandawgyi Gardens Flower Festival', 4, 19, 200000, 'viber_image_2023-08-07_15-08-50-839.jpg', 'viber_image_2023-08-07_15-08-55-968.jpg', 'Pyin Oo Lwin flower festival.jpg', '2 Nights & 3 Days Trip During Next December, 2023.\r\nServices include : Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.', 3),
(18, 'Visiting in Mandalay', 1, 14, 300000, 'blogspot 1.jpg', 'depositphotos_83242080-stock-photo-mandalay-palace-at-mandalay-city.jpg', 'silhouette-people-walking-during-sunset-u-bein-bridge-mandalay-myanmar.jpg', '3 Nights & 4 Days Trip.\r\nServices includes: Tour guide, Breakfast & Lunch Set, Can select car as you like, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink. \r\nVisiting Places: Chinese Temple, Mahar Annt Htoo Kan Thar Pagoda, Kan Daw Gyi Botanical Garden, Pwal Kaut Waterfall, Pate Chin Myaung Caved, Mahar Myat Muni Pagoda, Atumashi monastery, Mandalay Hill, U Bein Bridge, Mae Nu’s Monastery.', 4),
(19, 'Myintkyina_PutaO', 1, 11, 200000, 'putao.jpg', 'Indawgyi Lake.jpg', 'm130213004.jpg', '5 Nights & 6 Days Trip.\r\nServices includes: Tour guide, Breakfast & Lunch Set, Can select car as you like, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.\r\nVisiting Places: Myit Sone, Inn Daw Gyi Lake, Putao, NatKyun, She Myintsu Pagoda, Kaungmulon Pagoda, Kachin Manau, Malikha Suspension Bridge.', 6),
(20, 'Pagodas in Mon State', 1, 12, 250000, 'viber_image_2023-08-06_13-08-53-009.jpg', 'viber_image_2023-08-06_13-08-53-765.jpg', 'viber_image_2023-08-08_19-52-17-789.jpg', '3 Nights & 4 Days Trip.\r\nServices includes: Tour guide, Breakfast & Lunch Set, Can select car as you like, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink. \r\nVisiting Places: Kyaik- hti- yoe Pagoda, Kyaik Paw Law, Shwe Sar Yan Pagoda, Kyaik Thanlan Pagoda, Win Sein Taw Ya, Kyaik Khami Yae Le Pagoda, Kan Gyi Pagoda, Ko Yin Lay Pagoda, Setse Beach, Mawlamyine – Stand road & other pagoda.', 4),
(21, 'Mount Kyaikhtiyoe', 2, 17, 75000, 'viber_image_2023-08-06_13-08-54-090.jpg', 'viber_image_2023-08-07_15-24-56-462.jpg', 'viber_image_2023-08-07_15-25-20-724.jpg', '1Nights & 2 Days Trip.\r\nServices include: Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.\r\nVisiting Places: Kyaikhtiyoe Pagoda, Hme Shin Taw Buddha Image, Tantharaye Mahar Bodi Sadi and Godama Buddha Pagoda.', 2),
(22, 'Mount Zinkyaik', 2, 17, 80000, 'viber_image_2023-08-06_13-08-53-818.jpg', 'viber_image_2023-08-07_15-28-08-588.jpg', 'viber_image_2023-08-07_15-28-08-626.jpg', '1 Nights & 2 Days Trip.\r\nServices includes : Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.\r\nVisiting Places : Mount ZinKyaik, Mawlamyine – Stand road & other pagoda. ', 2),
(25, 'Ngwe Saung Beach', 3, 21, 60000, 'ngwe saung2.jpg', 'ngwe-saung-beach.jpg', 'ngwe saung1.jpg', '1 Nights & 2 Days Trip.\r\nServices include: Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.', 2),
(26, 'Chaung Thar Beach', 3, 21, 60000, 'chaung thar6.jpg', 'chaung thar2.jpg', 'chaung-thar-beach.jpg', '1 Nights & 2 Days Trip.\r\nServices include: Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.', 2),
(27, 'Ngapali Beach', 3, 22, 130000, 'ngapli-banner-size.jpg', 'ngapli be.jpg', 'Ngapali.jpg', '2 Nights & 3 Days Trip.\r\nServices include: Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.', 3),
(28, 'Kyaikhtiyoe Pagoda Festival', 4, 24, 150000, 'viber_image_2023-08-06_13-08-54-090.jpg', 'Kyaikhtiyoe.jpg', 'viber_image_2023-08-07_15-24-56-462.jpg', '1 Nights & 2 Days Trip During Next October, 2023.\r\nServices include: Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.\r\nVisiting Places: Kyaikhtiyoe Pagoda, Hme Shin Taw Buddha Image, Tantharaye Mahar Bodi Sadi and Godama Buddha Pagoda.', 2),
(29, 'Islands in Myeik', 5, 25, 1200000, 'Island.jpg', 'myeik-islands.jpg', '115-island-1-1-1.jpg', '3 Nights & 4 Days Trip.\r\nServices includes : Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink and speed boat fee.\r\nVisiting Places: Lampi Island, Macleaod Island, Cock’s Comb Island, Bo Cho Island, Kyu phi lar, Island 115.', 4),
(30, 'Islands in Kawthaung', 5, 25, 1500000, 'nyaungoophee.jpg', 'viber_image_2023-08-07_15-53-29-908.jpg', 'Smart-Island-800x422.jpg', '3 Nights & 4 Days Trip.\r\nServices includes : Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink and Speed Boat fee.\r\nVisiting Places: Naung Oo Phee Island, Boss Island, Island Safari - Archipelago, Saturn Island, Khayinkhwa Island.', 4),
(31, 'Mount Zwegabin', 2, 16, 100000, 'viber_image_2023-08-07_14-36-10-194.jpg', 'zwegabin-mountain-8.jpg', 'viber_image_2023-08-07_14-36-11-902.jpg', '2 Nights & 3 Days Trip.\r\nServices includes : Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.', 3),
(32, 'Maungmagan and Phoe Phoe Kyaut Beach', 3, 26, 100000, 'viber_image_2023-08-07_16-08-12-487.jpg', 'viber_image_2023-08-07_16-07-12-186.jpg', 'phophokyaut.jpg', '5 Nights & 6 Days Trip.\r\nServices include : Tour guide, Breakfast & Lunch Set, VIP Air-conditioned Express, Hotel pick up and drop off, Toothpaste, Toothbrush, food & drink.\r\nVisiting Places : Maungmagan Beach, Nabule Beach, Teyzit Beach, Po Po Kyauk (Grandfather Beach), Macleod Island Beach, San Hlan Beach, Pa Nyit Beach.', 6);

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
(12, 'Family Tours in Mon State', 1, 'viber_image_2023-08-06_13-08-55-304.jpg', 'Mon State'),
(13, 'Family Tours in Kayin State', 1, 'AMAZING-CAVE-600-x-400.jpg', 'Kayin State'),
(14, 'Family Tours in Mandalay Region', 1, '5cf4979832089.png', 'Mandalay Region'),
(15, 'Family Tours in Sagaing Region Myanmar', 1, 'kaung-hmu-daw-1600x1199.jpg', 'Sagaing Region'),
(16, 'Hiking Tours in Kayin State', 2, 'Hpa-An-Myanmar-Burma_002.jpg', 'Kayin State'),
(17, 'Hiking Tours in Mon State', 2, 'kyaikhtiyoe (2).jpg', 'Mon State'),
(18, 'Special Event Tours in Shan State', 4, 'myanmar-treasure-resorts.jpg', 'Shan State'),
(19, 'Special Event Tours in Mandalay Region', 4, 'Pyioolwin.jpg', 'Mandalay Region'),
(21, 'Beach Relax Tours in Ayeyarwady Region', 3, 'ngwe saung1.jpg', 'Ayeyarwady Region'),
(22, 'Beach Relax Tours in Rakhine State', 3, 'Ngapali.jpg', 'Rakhine State'),
(24, 'Special Event Tours in Mon State Myanmar', 4, 'Kyaikhtiyoe.jpg', 'Mon State'),
(25, 'Island Tours in Tanintharyi Region', 5, 'Kawthaung.jpg', 'Tanintharyi Region'),
(26, 'Beach Relax Tours in Tanintharyi Region', 3, 'viber_image_2023-08-07_16-07-12-399.jpg', 'Tanintharyi');

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
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PackageId` (`PackageId`);

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
  ADD PRIMARY KEY (`Id`),
  ADD KEY `BookingId` (`BookingId`);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `AdvId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_sign`
--
ALTER TABLE `customer_sign`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `PackageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `SubCatId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`PackageId`) REFERENCES `package` (`PackageId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_sign`
--
ALTER TABLE `customer_sign`
  ADD CONSTRAINT `customer_sign_ibfk_1` FOREIGN KEY (`BookingId`) REFERENCES `booking` (`BookingId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
