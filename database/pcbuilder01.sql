-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 12:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcbuilder01`
--
CREATE DATABASE IF NOT EXISTS `pcbuilder01` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pcbuilder01`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `password`, `email`, `date`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '2021-12-12 13:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Nvidia'),
(2, 'TESTING'),
(3, 'GIGABYTE'),
(4, 'COCACOLA'),
(5, 'BRUH');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `itemId` int(11) UNSIGNED NOT NULL,
  `supplierId` int(11) NOT NULL,
  `itemName` varchar(256) NOT NULL,
  `itemBrand` varchar(256) NOT NULL,
  `itemType` varchar(256) NOT NULL,
  `itemDesc` text NOT NULL,
  `price` float NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `supplierId`, `itemName`, `itemBrand`, `itemType`, `itemDesc`, `price`, `file_name`) VALUES
(6, 5, 'Radeon RX 6600 XT', 'AMD', 'GPU', 'The AMD Radeon RX 6600 XT is a mid-range desktop graphics card that is based on the RDNA 2 architecture and uses the Navi 23 chip. It offers 2,048 shaders and 8 GB GDDR6 VRAM with a 128 bit memory interface (16 Gbps, 256 GB/s max).', 32000, 'pcAlley1.jpg'),
(8, 5, 'RTX 3060 Ti OC Edition', 'Red Dragon', 'GPU', 'The GeForce RTX™ 3060 Ti and RTX 3060 lets you take on the latest games using the power of Ampere—NVIDIA’s 2nd generation RTX architecture. Get incredible performance with enhanced Ray Tracing Cores and Tensor Cores, new streaming multiprocessors, and high-speed G6 memory.  SEE ALL BUYING OPTIONS', 22000, 'pcAlley3.jpg'),
(9, 5, '24\" 75hz frameless Monitor', 'Acer ', 'Monitor', 'Model : IP24V1  Screen size: 23.8\" Panel type: IPS Refresh rate: 75hz Response rate: 5ms Resolotion: 1920x1080 FHD Brigthness : 300cd/m2 Contrast ratio: 3000:1 Viewing angle: 178(H)x178(V) Connection port: 1HDMI, 1VGA Power input: DC12V,3A  ', 7900, 'pcAlley4.jpg'),
(10, 6, 'Ryzen 5 5600G Build', 'Brand', 'Computer Set', 'Motherboard: B450 Mortarmax RAM: 8GB SSD: 120GB HDD: 500GB AX8ygt Tempered Case Led Fans: 8x PSU: 550w 80+ Bronze', 35600, 'RJF1.jpg'),
(11, 6, 'Ryzen 3 2100GE Build', 'Brand', 'Computer Set', 'Motherboard: A320 RAM: 8GB SSD: 120GB Case: Inplay wind01 PSU: YGT Top One 750w', 16550, 'RJF2.jpg'),
(12, 6, 'Athlon 3000g Build', 'Brand', 'Computer Set', 'Motherboard: A320M RAM: 8GB SSD: 120GB Case: Ordinary Case PSU: TruRated', 15500, 'RJF3.jpg'),
(13, 7, 'Probook 4340\'s i5 3rd Gen Laptop', 'HP', 'Laptop', 'Quick Specs: Processor: Intel Core I5-3320M (2.60Ghz) Memory: 4GB DDR4 Storage: 256GB SSD Size: 13.3-inch diagonal LED-backlit High Definition (HD) anti-glare (1366 x 768) Inclusions : Laptop Bag / Unit and Charger', 10290, 'pcZone1.jpg'),
(14, 7, 'LATITUDE 3500 I5 8th Gen Business Laptop', 'DELL ', 'Laptop', 'Good for Online Class | Online Based | Work from Home Quick Specs: Processor: CORE I5 - 8265U 1.60GHZ Memory', 27600, 'pcZone2.png'),
(15, 7, 'Latitude E5270 i5 6th GEN Laptop', 'DELL ', 'Laptop', 'Procie : Intel Core i5 6th Gen 620 RAM : 8GB DDR4 Storage : 256GB SSD Sata Display : Intel HD Graphics 12.5\"Wide  Camera Ready Wifi Ready Inclusions : Laptop Bag . Unit and charger', 13000, 'pcZone3.png'),
(16, 7, 'X415MA-BV365W Laptop', 'Asus ', 'Laptop', 'Processor : Intel Celeron N4020 Graphics :  Intel UHD Graphics Ram : 4GB DDR4 Storage : 128GB SSD / 1TB HDD Display', 21500, 'pcZone4.png'),
(17, 8, 'H510i Matte White RGB Mid Tower Casing (CA-H510i-W1)', 'NZXT', 'Computer Case', 'Taking it a step up from the H510, the H510i brings even more features to the H Series.  Pre-installed RGB LED Strip Built-in mounting bracket for installing your GPU vertically Lighting and fan control supported by CAM Smart Device V2 Cable routing kit with pre-installed channels and straps', 6475, 'Cheapid1.png'),
(18, 8, 'HG13 Chief Black RGB Gaming Headset', 'Fantech', 'Headset', 'Gaming headphones for a computer or laptop should have good technical characteristics, modern design, should be comfortable, because many players spend hours in the game space. This is especially true of cyber professional athletes or online gaming enthusiasts. The keen gamer is ready to go on everything, for the sake of the hobby.', 722, 'Cheapid2.png'),
(19, 8, 'NQ100 240GB Sata III Solid State Drive (LNQ100X240G-RNNNG)', 'Lexar ', 'SSD', 'Improve your system’s performance with the Lexar® NQ100 2.5” SATA III (6Gb/s) SSD. This easy upgrade gives you faster boot-ups, application load times, and data transfers, with read speeds of up to 550MB/s1. It is also cooler, quieter, and more energy efficient than a traditional hard disk drive.', 1411, 'Cheapid3.png'),
(20, 8, 'P550B 550W 80 Plus Bronze Power Supply (GP-P550B)', 'Gigabyte ', 'PSU', '80 PLUS Bronze certified 120mm Silent Hydraulic Bearing (HYB) Fan Reliable flat cable Single +12V rail OVP/OPP/SCP/UVP/OCP/OTP protection', 2657, 'Cheapid4.png'),
(21, 8, 'GeForce GTX 1660 Super (1-Click OC) 6GB GDDR6 192bit Video Card (60SRL7DSY91S)', 'GALAX', 'GPU', 'With dual 90 mm fans and fans stop to assure the temperature is maintained at a reasonable level. To prevent the stress on PCB, the 1660 Super series is furnished with back plates that befit for both colors.', 24355, 'Cheapid5.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `OrderId` int(11) NOT NULL,
  `usersId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `itemName` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(256) DEFAULT NULL,
  `orderDate` datetime NOT NULL,
  `successDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `supplierId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pin`
--

DROP TABLE IF EXISTS `pin`;
CREATE TABLE `pin` (
  `pinId` int(11) NOT NULL,
  `pin` varchar(256) NOT NULL,
  `usersId` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `statusId` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusId`, `status`) VALUES
(1, 'In Process'),
(2, 'Closed/Delivered'),
(3, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `supplierId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Url` varchar(256) NOT NULL,
  `Phone` varchar(256) NOT NULL,
  `Address` text NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierId`, `categoryId`, `Name`, `Email`, `Url`, `Phone`, `Address`, `file_name`) VALUES
(5, 0, 'PC Alley Sales & Marketing', 'pcalley@gmail.com', 'https://www.facebook.com/PCAlleySalesandMarketing/', '0905 534 9705', '1035 Rizal Blvd. Brgy. Tagapo 4026 Santa Rosa, Philippines', 'pcAlley.jpg'),
(6, 0, 'RJF Computer Parts & Accessories', 'rjf@gmail.com', 'https://www.facebook.com/rjfcomputertrading/', '0915 563 5004', '6 Gen. Luna St 1470 Malabon, Philippines', 'RJF.jpg'),
(7, 0, 'PC Zone Computer Gaming Supplier', 'pczonesolution@gmail.com', 'https://pczone.com.ph/', '0956 654 8808', 'PC Zone Casimiro Avenue 1742 Las Piñas, Philippines', 'pcZone.png'),
(8, 0, 'Cheapid Computer', 'info@cheapidcomputer.com', 'https://cheapid-computer.com/', '289620480', '#64A Guadalupe Street Morning Breeze 1400 Caloocan, Philippines', 'Cheapid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `phone` int(64) NOT NULL,
  `address` varchar(512) NOT NULL DEFAULT 'n/a',
  `usertype` enum('Buyer','Seller','Buyer/Seller') NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `stat` enum('Active','Inactive') DEFAULT NULL,
  `pwdRepeat` varchar(256) NOT NULL,
  `terms` enum('Agree') NOT NULL,
  `file_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`pinId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusId`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
  MODIFY `pinId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
