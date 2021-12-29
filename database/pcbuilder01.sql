-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 04:32 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

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

CREATE TABLE `brand` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemId` int(11) UNSIGNED NOT NULL,
  `supplierId` int(11) NOT NULL,
  `itemName` varchar(256) NOT NULL,
  `itemBrand` varchar(256) NOT NULL,
  `itemType` varchar(256) NOT NULL,
  `itemDesc` text NOT NULL,
  `price` float NOT NULL,
  `itemImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

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
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierId` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Url` varchar(256) NOT NULL,
  `Phone` varchar(256) NOT NULL,
  `Address` text NOT NULL,
  `Img` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(512) NOT NULL DEFAULT 'n/a',
  `usertype` enum('Buyer','Seller','Buyer/Seller') NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `pwdRepeat` varchar(256) NOT NULL,
  `terms` enum('Agree') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `firstName`, `usersEmail`, `usersUid`, `usersPwd`, `phone`, `address`, `usertype`, `lastName`, `status`, `pwdRepeat`, `terms`) VALUES
(1, 'Jaime Hanz Sibucao', 'jaimehanzs@gmail.com', 'roove', '$2y$10$pNVGINkm7cxd4z6WCEZi5uILfyPLldmsm3ItvyXiuJmRl3YxjrUia', 0, 'n/a', '', '', NULL, '', 'Agree'),
(2, 'hanz sibucao', 'jaimehanz.sibucao@tup.edu.ph', 'test', '$2y$10$sPE0.I85X8DsP.FOx5BHjOjSwPfC..vMTVnT/UnJW2/daithqJEQy', 0, 'n/a', '', '', NULL, '', 'Agree'),
(3, 'signuptest', 'signuptest@gmail.com', '', '202cb962ac59075b964b07152d234b70', 0, 'n/a', '', '', NULL, '', 'Agree'),
(9, 'update', 'update@gmail.com', 'updatetest', '$2y$10$XDRvaaNXqfPI.6W7uPVsKuMwZGbH2lj3//SINhYQZVBoZEPcxLlXa', 0, 'n/a', '', '', NULL, '', 'Agree'),
(10, 'update123', 'update132@gmail.com', '', '202cb962ac59075b964b07152d234b70', 0, 'n/a', '', '', NULL, '', 'Agree'),
(12, 'dbeaver', 'dbeaver@gmail.com', 'dbeavs', '$2y$10$hNolWKBvf7/kZv5vQW6knujRI9f8yyqnXOSzi0yJ3VWd0AEecUJuG', 0, 'n/a', '', '', NULL, '', 'Agree'),
(19, 'firstname', 'email@gmail.com', 'username4', '202cb962ac59075b964b07152d234b70', 123, '123', 'Buyer', 'lastname', 'Active', '', 'Agree'),
(20, 'asd', 'gmail@gmail.com', 'testtt', '202cb962ac59075b964b07152d234b70', 123, 'address', 'Buyer', 'zxc', 'Active', '', 'Agree'),
(21, 'newfirstname1', 'newemail1@gmail.com', 'newsername1', '202cb962ac59075b964b07152d234b70', 12345, 'new address', 'Buyer', 'newlastname1', 'Active', '', 'Agree'),
(22, 'namename', 'mail@gmail.com', 'useruser', '202cb962ac59075b964b07152d234b70', 123, 'addaddress', 'Buyer', 'sursur', 'Inactive', '', 'Agree'),
(23, 'mark cedrick', 'markcedrick@gmail.com', 'markcedqt', '202cb962ac59075b964b07152d234b70', 19239821, 'mark address', 'Buyer', 'doria', 'Inactive', '', 'Agree'),
(24, 'testing1', 'testing@gmail.com', 'testing3', '202cb962ac59075b964b07152d234b70', 12345, 'testingadd', 'Buyer', 'testing2', 'Active', '', 'Agree');

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
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
