-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 06:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_sell_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(256) NOT NULL,
  `a_lname` varchar(256) NOT NULL,
  `a_address` varchar(256) NOT NULL,
  `city_id` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `admin_id` varchar(256) NOT NULL,
  `apassword` varchar(256) NOT NULL,
  `acon_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_lname`, `a_address`, `city_id`, `gender`, `email`, `phone`, `admin_id`, `apassword`, `acon_password`) VALUES
(104, 'njknk', 'jefnk', 'dnkenk', '201', 'male', 'kefckeml@gmail.com', '5987456325', 'dnvnek', 'dncksmnk', 'nedccnek'),
(105, 'CARDINAL', 'SYS', 'SYSTEM', '202', 'male', 'CARD@GMAIL.COM', '5896541256', 'CARD112', 'CARD@112', 'CARD@112'),
(111, 'adi', 'man', 'bjbkjnkjnhjvghvjghcghvjhghcfgchgghvcgfxhgbvgcghvhbhjgvjhjhjhjhvhvhvhvhvhhvhvvvgvkjhjhk', '201', 'male', 'adiman1@gmail.com', '5635545513', 'adi111', 'adi@111', 'adi@111');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `b_id` int(11) NOT NULL,
  `cusid` int(11) NOT NULL,
  `cusname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phoneno` varchar(256) NOT NULL,
  `carid` int(11) NOT NULL,
  `carname` varchar(256) NOT NULL,
  `carphoto` varchar(256) NOT NULL,
  `sallername` varchar(256) NOT NULL,
  `paymentmeth` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(256) NOT NULL,
  `car_ph` varchar(256) NOT NULL,
  `car_detail` longtext NOT NULL,
  `car_price` varchar(256) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_id`, `car_name`, `car_ph`, `car_detail`, `car_price`, `a_id`) VALUES
(101, 'ASTON MARTIg', 'dycar/p2.jpg', 'dncvkdsnmndknckl\r\nscnjsnlckmslkcmslkcml\r\nsncslkcnskl\r\nscnlskncks', '1.2M', 104),
(102, 'mercedese', 'dycar/p19.jpg', 'nndjhcukmsnhbchndjkcbuyjednhvbjsvjkkmxnjkdcjnx mcnjdncjdnjcnqwnrfjkrnjfvnrjnvjrnvjruinrknfj  ', '950k', 104),
(103, 'dnckdmk', 'dycar/p9.jpg', 'dnckdmcmdmcmnj,smdkcnscmsdn  \r\n  jcnsmdcdnsjcnskdckdcdkcdkmckdsmckl', '7.8M', 104),
(105, 'dknck', 'dycar/p59.jpg', 'kfmvkdmvc,md', '1.2M', 104),
(107, 'mercemez', 'dycar/p6.jpg', 'smsnmcmsm,ncjas,xmjcjxnnxjchdjncjkaduchjnvjd shvudsvndsjhvjdsnvjndjhvjdskjdjvhduhishckj ndvrbwjevjkdbvjbdj', '47M', 104),
(109, 'jfdvjfnvk', 'dycar/p29.jpg', 'kdmckdmkvcndknvdsmvklmdlks', '7.8M', 104);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `email` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`email`, `name`, `msg`) VALUES
('jdnv@gmail.com', 'jdnv', 'ncjknkldsnvkl ndjksnvkdnk ndlsn kldn klmdlfk'),
('mark@gmail.com', 'mark', 'your app need some feature.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(256) NOT NULL,
  `cus_lname` varchar(256) NOT NULL,
  `cus_address` varchar(256) NOT NULL,
  `city_id` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone_no` varchar(256) NOT NULL,
  `user_id` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `con_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_lname`, `cus_address`, `city_id`, `gender`, `email`, `phone_no`, `user_id`, `password`, `con_password`) VALUES
(1, 'parth dabheliya', 'cnk', 'surat', '201', 'male', 'dabhelia1@gmail.com', '2147483647', 'dcnkn', 'dcndkm', 'dmcndn'),
(8, 'hi', 'hello', 'sncjnk', '202', 'male', 'nkdnk@gmail.com', '2147483647', 'usr112', 'ncksnk', 'ncksnk'),
(9, 'L', 'scnk', 'sncknk', '201', 'female', 'l@hotmail.com', '1236547895', 'usr113', 'snxsn', 'snxsn'),
(10, 'lk', 'dnk', 'dcnnk', '202', 'male', 'ncknk@gmail.com', '2147483647', 'snck', 'scks', 'scks'),
(11, 'pp', 'dkc', 'sncksn', '201', 'female', 'cnknk@gmail.com', '2147483647', 'jdbcjdn', 'jdncnk', 'jdncnk'),
(16, 'nsb', 'cbk', 'scknk', '201', 'female', 'gha@gmail.com', '2147483647', 'snck', 'jsbdj', 'jsbdj'),
(19, 'fml', 'kdmcl', 'cdml', '201', 'male', 'cnk@gmail.com', '2147483647', 'snxk', 'kdk', 'kdk'),
(20, 'efnk', 'kfemnk', 'kfnkl', '201', 'female', 'jknkn@gmail.com', '2147483647', 'sjsnk', 'xsmnk', 'xsmnk'),
(21, 'cndn', 'kdsml', 'kdc', '201', 'male', 'cnk@gmail.com', '4578895612', 'ncn', 'lkmc', 'lkmc\r\n'),
(22, 'jdkml', 'ksmcl', 'mcl', '203', 'male', 'sckmn@gmail.com', '8562365874', 'sckm', 'nscmn', 'nscmn'),
(23, 'ad', 'min', 'adajan', '201', 'male', 'ad@gmail.com', '4589658745', 'ad112', 'as@112', 'ad@112'),
(27, 'noman', 'hi', 'sjbck', '202', 'female', 'fd@gmail.com', '7854125478', 'gt123', 'gt@123', 'gt@123');

-- --------------------------------------------------------

--
-- Table structure for table `cus_city`
--

CREATE TABLE `cus_city` (
  `city_id` varchar(256) NOT NULL,
  `city_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cus_city`
--

INSERT INTO `cus_city` (`city_id`, `city_name`) VALUES
('201', 'surat'),
('202', 'ahmedbad'),
('203', 'baroda');

-- --------------------------------------------------------

--
-- Table structure for table `main_bill`
--

CREATE TABLE `main_bill` (
  `bb_id` int(11) NOT NULL,
  `ccusid` int(11) NOT NULL,
  `ccusname` varchar(256) NOT NULL,
  `eemail` varchar(256) NOT NULL,
  `pphoneno` varchar(256) NOT NULL,
  `ccarid` int(11) NOT NULL,
  `ccarname` varchar(256) NOT NULL,
  `ccarprice` varchar(256) NOT NULL,
  `ssellername` varchar(256) NOT NULL,
  `ppaymentmeth` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_bill`
--

INSERT INTO `main_bill` (`bb_id`, `ccusid`, `ccusname`, `eemail`, `pphoneno`, `ccarid`, `ccarname`, `ccarprice`, `ssellername`, `ppaymentmeth`) VALUES
(22, 8, 'hi', 'nkdnk@gmail.com', '2147483647', 101, 'ASTON MARTIg', '1.2M', 'njknk', 'credit'),
(25, 23, 'ad', 'ad@gmail.com', '4589658745', 101, 'ASTON MARTIg', '1.2M', 'njknk', 'credit'),
(27, 23, 'ad', 'ad@gmail.com', '4589658745', 105, 'dknck', '1.2M', 'njknk', 'credit'),
(79, 8, 'hi', 'nkdnk@gmail.com', '2147483647', 109, 'jfdvjfnvk', '7.8M', 'njknk', 'debit'),
(139, 8, 'hi', 'nkdnk@gmail.com', '2147483647', 101, 'ASTON MARTIg', '1.2M', 'njknk', 'debit'),
(141, 8, 'hi', 'nkdnk@gmail.com', '2147483647', 109, 'jfdvjfnvk', '7.8M', 'njknk', 'debit'),
(142, 8, 'hi', 'nkdnk@gmail.com', '2147483647', 101, 'ASTON MARTIg', '1.2M', 'njknk', 'debit'),
(143, 8, 'hi', 'nkdnk@gmail.com', '2147483647', 101, 'ASTON MARTIg', '1.2M', 'njknk', 'credit'),
(144, 8, 'hi', 'nkdnk@gmail.com', '2147483647', 101, 'ASTON MARTIg', '1.2M', 'njknk', 'debit'),
(145, 8, 'hi', 'nkdnk@gmail.com', '2147483647', 101, 'ASTON MARTIg', '1.2M', 'njknk', 'credit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `a_id` (`a_id`) USING BTREE,
  ADD KEY `a_id_2` (`a_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `cus_city`
--
ALTER TABLE `cus_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `main_bill`
--
ALTER TABLE `main_bill`
  ADD PRIMARY KEY (`bb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `a_city` FOREIGN KEY (`city_id`) REFERENCES `cus_city` (`city_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `ciry_cont` FOREIGN KEY (`city_id`) REFERENCES `cus_city` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
