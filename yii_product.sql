-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 03:56 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 's-Ford'),
(2, 'suprimo'),
(3, 'Toyota KIKAI'),
(4, 'Toyota S-FR'),
(5, 'Toyota FCV Plus'),
(6, 'TOYOTA C-HR'),
(7, 'Toyota FT-1'),
(8, 'Toyota FV2'),
(9, 'Toyota FCV'),
(10, 'JPN Taxi ');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerNumber` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `salesRepEmployeeNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerNumber`, `customerName`, `phone`, `address`, `city`, `country`, `salesRepEmployeeNumber`) VALUES
(1, 'Ananta jalil', '01278934654', 'Grands road,house#2,gulshan', 'Dhaka', 'Bangladesh', 9),
(2, 'Moli Kumar', '36589680957', 'House#09,Road#5,Banani.', 'Dhaka', 'Bangladesh', 7),
(3, 'MS Dhoni', '568980456456', '12 old street', 'Panjab', 'India', 16),
(4, 'Parinita', '09569565489', '09 Endira Avenue', 'London', 'UK', 17),
(5, 'Mustafiz', '01745465765', 'Kalirtara', 'Shatkhira', 'Bangladesh', 13),
(6, 'Nikola Kidman', '8798687867', 'Hunny view,12street road,', 'Hinston', 'Canada', 18),
(7, 'Priya Jinta', '4566766', '12 new street', 'Kolkata', 'India', 20);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeNumber` int(11) NOT NULL,
  `employeeName` varchar(50) NOT NULL,
  `extension` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `officeCode` int(11) NOT NULL,
  `jobtitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeNumber`, `employeeName`, `extension`, `email`, `officeCode`, `jobtitle`) VALUES
(6, 'M.Kabir', 'x5800', 'kabir12@gmail.com', 1, 'President'),
(7, 'Shana Kabondo', 'x5900', 'kabondo67@gmail.com', 1, 'Customer Relationship Officer'),
(9, 'Shan Tahin', 'x2000', 'shan@gmail.com', 2, 'VP Sales'),
(12, 'Murphy', 'x5858', 'm@gmail.comurphyurfhy', 8, 'Sale Manager(EMEA)'),
(13, 'Bred Preet', 'x4611', 'bred21@gmail.com ', 7, 'VP Marketing'),
(14, 'Danitel', 'x9273', 'dani@gmail.com', 6, 'Sales Manager'),
(15, 'Robert', 'x3291', 'rober87@gmail.com', 5, 'sales Rep'),
(16, 'Hansika', 'x1200', 'hansika@gmailcom', 3, 'sales Rep'),
(17, 'Rubi Kabirey', 'x7909', 'kabiri@gmail.com', 1, 'Sales Manager(APAC)'),
(18, 'William Hanson', 'x4334', 'hanson@gmail.com', 7, 'Sales Manager (NA)'),
(20, 'John Abraham', 'xs9909', 'john23@gmail.com', 9, 'sales Rep');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `productcode` int(11) DEFAULT NULL,
  `filename` varchar(500) DEFAULT NULL,
  `caption` text,
  `alt_text` text,
  `tags` varchar(256) DEFAULT NULL,
  `sort_order` smallint(6) DEFAULT NULL,
  `created_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `lastupdate_dt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `productcode`, `filename`, `caption`, `alt_text`, `tags`, `sort_order`, `created_dt`, `lastupdate_dt`) VALUES
(1, 1, 'car1.jpg', 'Pebbles through clear water', '', NULL, 1, '2013-02-05 06:27:53', '2013-02-05 06:27:53'),
(2, 1, 'car2.jpg', 'Going with the flow', '', NULL, 2, '2013-02-05 06:25:27', '2013-02-05 06:27:53'),
(3, 1, 'car3.jpg', 'Calm after the storm', NULL, NULL, 3, '2013-02-04 08:26:35', '2013-02-05 06:27:53'),
(4, 1, 'car4.jpg', 'Peaceful evening on the beach', NULL, NULL, 4, '2013-02-05 05:28:47', '2013-02-05 06:27:53'),
(5, 1, 'car5.jpg', 'Sand Waves', '', '', 5, '2013-02-05 04:15:55', '2013-02-05 06:27:53'),
(6, 1, 'car6.png', 'Rippled sand', '', '', 6, '2013-01-29 19:29:05', '2013-02-05 06:27:53'),
(10, 1, 'car8.jpg', 'car', '', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 3, 'car9.jpg', '', '', '', NULL, '2016-06-02 18:00:00', '2016-06-29 18:00:00'),
(12, 1, 'car7.jpg', '', '', '', NULL, '2016-06-01 18:00:00', '2016-06-21 18:00:00'),
(20, 7, '2937-brand3.png', 'gtrgf', 'gfbgf', 'tht', 5, '2016-06-20 18:00:00', '2016-06-22 18:00:00'),
(23, 6, '6995-bbrand4.jpg', 'dfgtrhrt', 'gfgf', 'bxfgn', 8, '2016-06-21 18:00:00', '2016-06-23 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_text` varchar(100) NOT NULL,
  `news_link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_date`, `notice_text`, `news_link`) VALUES
(1, '2016-05-03', 'Ramadan offer 20% less all cars', 'http://www.sghsbd.com/index.php'),
(2, '2016-05-20', 'Car Fair on 31 June2016', 'http://www.sghsbd.com/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `officeCode` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `territory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`officeCode`, `city`, `phone`, `address`, `country`, `territory`) VALUES
(1, 'Sydney', '686789806', '12street road,wenworth Avenue.', 'Australia', 'APAC'),
(2, 'NYC', '56576798', '532 East 53rd Street', 'USA', 'NA'),
(3, 'san Francisco', '0454565605', '100 Market Street', 'USA', 'NA'),
(4, 'Rome', '3243454657', '1550 Court Palace', 'Italy', 'NA'),
(5, 'Tokyo', '1334556566', '4-1 kioicho', 'Japan', 'EMEA'),
(6, 'Beijing', '134567780', '09-aw hanjung', 'China', 'NA'),
(7, 'Mosco', '78980909', '43 Rue Jouffroy D''abbans', 'Russia', 'EMEA'),
(8, 'Kopenhegue', '098867876', '25 Old Broad Street', 'Denmark', 'NA'),
(9, 'Mumbai', '465768777', 'wqrd,24street road', 'Inia', 'EMCO');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderNumber` int(11) NOT NULL,
  `productcode` int(11) NOT NULL,
  `quantityOrdered` int(11) NOT NULL,
  `priceEach` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderNumber`, `productcode`, `quantityOrdered`, `priceEach`) VALUES
(1, 5, 12, 2099000),
(2, 1, 50, 3000000),
(3, 5, 27, 2900000),
(4, 6, 25, 3000000),
(5, 7, 15, 3000000),
(6, 6, 19, 3300000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNumber` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `requiredDate` date NOT NULL,
  `shippedDate` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `customerNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNumber`, `orderDate`, `requiredDate`, `shippedDate`, `status`, `comment`, `customerNumber`) VALUES
(1, '2016-06-04', '2016-06-07', '0000-00-00', '1', 'Check on availability.', 5),
(2, '2016-06-02', '2016-06-08', '2016-06-06', 'shipped', 'Difficult to negotiate with customer. We need more marketing materials', 4),
(3, '2016-06-30', '2016-07-15', '2016-06-15', '3', 'product shipped', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `customerNumber` int(11) NOT NULL,
  `cheekNumber` varchar(50) NOT NULL,
  `paymentDate` date NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`customerNumber`, `cheekNumber`, `paymentDate`, `amount`) VALUES
(1, 'HQ32334', '2016-06-07', 10000000),
(2, 'WE776756', '2016-06-01', 7000000),
(3, 'ch765490', '2016-06-18', 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productcode` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productDescription` varchar(500) NOT NULL,
  `productVendor` varchar(50) NOT NULL,
  `quantityInStock` smallint(6) NOT NULL,
  `costPrice` decimal(10,2) NOT NULL,
  `sellingPrice` decimal(10,2) NOT NULL,
  `brands_brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productcode`, `productName`, `productDescription`, `productVendor`, `quantityInStock`, `costPrice`, `sellingPrice`, `brands_brand_id`) VALUES
(1, 'Xs-ford', 'fdg', 'virat', 123, '0.00', '0.00', 2),
(2, 'Toyota KIKAI', 'As the products of human creativity, dedication, a', 'william', 100, '0.00', '0.00', 2),
(3, 'Toyota KIKAI', 'As the products of human creativity, dedication', 'william', 100, '1000000.00', '1400000.00', 1),
(4, 'Toyota KIKAI	', 'Toyota KIKAI	', 'MS Dhoni', 190, '1500000.00', '1800000.00', 3),
(5, 'xt-0909', ' Toyota S-FR	', 'Shen Smith', 90, '2000000.00', '2500000.00', 4),
(6, 'xt-5609', 'Toyota FCV Plus	', 'Mushfiqur Rahim', 100, '3000000.00', '3450000.00', 5),
(7, 'Toyota Ranner', 'All wood with canvas sails. Many extras including ', 'Shen William', 55, '2500000.00', '2900000.00', 6),
(8, 'TOYOTA C-HR369', 'The TOYOTA C-HR Concept introduces an expressive ', 'Stifen Smith', 28, '4500000.00', '4900000.00', 6),
(9, 'TOYOTA Fcv-402', 'Compressed hydrogen has a higher  energy ', 'Kevin Kelvin', 36, '4400000.00', '4800000.00', 5),
(10, 'TOYOTA FT-101', 'The Toyota FT-1 aims to show what can be achieved ', 'Mohan Singh', 45, '5000000.00', '5500000.00', 7),
(11, 'TOYOTA V-WW490', 'As the products of human creativity, dedication', 'John Abraham', 33, '3700000.00', '4000000.00', 9),
(12, 'sd-232', 'As the products of human creativity, dedication', 'w.Anondo', 45, '10000000.00', '10200000.00', 10),
(13, 'xltoyota-3098', 'As the products of human creativity, dedication', 'Jonthon Katherine', 26, '5500000.00', '6000000.00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'umaiya', '99cb42dd8117c898fa33e737901cdd40'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerNumber`),
  ADD KEY `salesRepEmployeeNumber` (`salesRepEmployeeNumber`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeNumber`),
  ADD KEY `officeCode` (`officeCode`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`productcode`),
  ADD KEY `productcode` (`productcode`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`officeCode`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderNumber`),
  ADD KEY `ordercode` (`productcode`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNumber`),
  ADD KEY `customerNumber` (`customerNumber`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`customerNumber`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productcode`),
  ADD KEY `brands_brand_id` (`brands_brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employeeNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `officeCode` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `customerNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`salesRepEmployeeNumber`) REFERENCES `employees` (`employeeNumber`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`officeCode`) REFERENCES `offices` (`officeCode`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk-image-product_id-product_id` FOREIGN KEY (`productcode`) REFERENCES `products` (`productcode`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`productcode`) REFERENCES `products` (`productcode`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerNumber`) REFERENCES `customers` (`customerNumber`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`customerNumber`) REFERENCES `customers` (`customerNumber`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `brands_brand_id` FOREIGN KEY (`brands_brand_id`) REFERENCES `brands` (`brand_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
