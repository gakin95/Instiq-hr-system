-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 04:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-10-30 11:42:58'),
(2, 'gbenga', 'googleman', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `DepartmentShortName` varchar(100) NOT NULL,
  `DepartmentCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `DepartmentShortName`, `DepartmentCode`, `CreationDate`) VALUES
(1, 'Business Development', 'BD', 'B001', '2017-11-01 07:16:25'),
(2, 'Application Development', 'App dev', 'A001', '2017-11-01 07:19:37'),
(3, 'Banking Solution', 'BS', 'BS1', '2017-12-02 21:28:56'),
(5, 'Technical Support', 'TS', 'TYS004', '2019-08-29 00:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(100) DEFAULT NULL,
  `FirstName` varchar(150) DEFAULT NULL,
  `LastName` varchar(150) DEFAULT NULL,
  `EmailId` varchar(200) DEFAULT NULL,
  `Password` varchar(180) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Dob` varchar(100) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(200) DEFAULT NULL,
  `Country` varchar(150) DEFAULT NULL,
  `Phonenumber` char(15) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `AccountName` varchar(255) NOT NULL,
  `AccountNo` int(10) NOT NULL,
  `NextOfKin` varchar(255) NOT NULL,
  `MaritalStatus` varchar(255) NOT NULL,
  `NextOfKinAddr` varchar(255) NOT NULL,
  `NextOfKinPhoneNum` varchar(255) NOT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `Department`, `Address`, `City`, `Country`, `Phonenumber`, `bank`, `AccountName`, `AccountNo`, `NextOfKin`, `MaritalStatus`, `NextOfKinAddr`, `NextOfKinPhoneNum`, `Status`, `RegDate`) VALUES
(3, 'EMP2000', 'Gbenga', 'Akingbulere', 'g.akingbulere@instiq.com', 'be1f67255779967757c2f62e9c0ce20f', 'Male', '25 July, 2019', '', '7 toluwani street , isheri Oshun', 'abuja', 'Nigeria', '08168187018', 'acess', 'lekan emmanuel', 306380039, 'tita', 'single', 'victoria island', '09078654344', 1, '2019-07-25 16:38:11'),
(7, 'INS017', 'Oshianor', 'Abundance', 'a.shianor@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '', '', '', '', '', '', '', '', 0, '', '', '', '', 1, '2019-08-22 21:23:17'),
(8, 'EMPR12345', 'Samuel', 'Tochi Offiah', 's.offiah@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', 0, '', '', '', '', 1, '2019-08-23 02:44:14'),
(10, 'WER1234', 'Ojedeji', 'Oluwatobi Samuel', 't.ojedeji@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 'Business Developer ', NULL, NULL, NULL, NULL, '', '', 0, '', '', '', '', 1, '2019-08-28 04:32:34'),
(12, 'INS001', 'Ubaka', 'Ugonna', 'u.ubaka@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '18 September, 2003', 'Application Development', 'ikorodu', 'lagos', 'Nigeria', '09087675643', 'uba', 'ubaka ugonna', 1234567, 'sam', 'single', 'ogba', '08033250250', 1, '2019-09-05 23:11:44'),
(13, 'INS002', 'Abiodun', 'Adetayo', 'a.adetayo@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '14 May, 2000', 'Application Development', 'magodo', 'lagos', 'Nigeria', '07083420729', 'GTB', 'Adetayo Abiodun', 125965564, 'ADETAYO OLUWASEGUN', 'Married', 'Magodo,Lagos', '08165968336', 1, '2019-09-05 23:14:37'),
(14, 'INS003', 'Abeeb', 'Adetokun', 'a.adetokun@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, '', '', '', '', 1, '2019-09-05 23:16:56'),
(15, 'INS004', 'Ayotunde', 'Oseleye', 'a.oseleye@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, '', '', '', '', 1, '2019-09-05 23:19:30'),
(16, 'INS005', 'Sonde', 'Folakemi', 'f.sonde@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, '', '', '', '', 1, '2019-09-05 23:21:37'),
(17, 'INS006', 'Akinrinde', 'Christiana', 'c.akinrinde@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', '11 September, 2003', 'Business Development', 'ikotun', 'lagos', 'Nigeria', '08083345928', 'union', 'Akinrinde Christiana', 44473850, 'Temiloluwa Akinrinde', 'married', 'ikotun', '0908765451', 1, '2019-09-05 23:23:45'),
(18, 'INS007', 'Olanipekun', 'Yetunde', 'y.olanipekun@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', '24 April, 2019', 'Business Development', '6,Onajimi street off Pedro road,Bariga', 'Lagos', 'Nigeria', '09072584892', 'First bank', 'Yetunde Olanipekun', 2147483647, 'Bukunola Olanipekun', 'Single', '6,Onajimi street off Pedro road,Bariga', '08068976746', 1, '2019-09-05 23:26:45'),
(19, 'INS008', 'Olasile', 'Adegbite', 'a.olasile@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, '', '', '', '', 1, '2019-09-05 23:29:50'),
(20, 'INS009', 'Israel ', 'Osinowo', 'i.osinowo@gmail.com', '5dac73aa49b9ccaca4b9b0d0ef615d10', 'Male', '', 'Banking Solution', 'Ketu, Lagos', 'Ketu', 'Nigeria', '08133857615', 'Ecobank', 'Osinowo Israel', 2147483647, 'Osinowo', 'single', 'ketu, Lagos ', '08123456789', 1, '2019-09-05 23:53:34'),
(21, 'INS1234', 'Bukola', 'Olayinka', 'b.olayinka@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', '22 September, 2000', 'Application Development', 'plot 59 akin ogunmade davies close', 'lagos', 'Nigeria', '07067639018', 'gtb', 'Olayinka Mansurat Bukola', 159552484, 'Babatunde Olayinka', 'single', 'plot 59 akin ogunmade davies close', '07034180060', 1, '2019-09-23 23:18:04'),
(22, 'INS010', 'Ochoche', 'Moses Ocho', 'm.ocho@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '', '', '', '', 1, '2019-11-04 19:06:05'),
(23, 'INS025', 'Iduma', 'Chika Abraham', 'c.iduma@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '', '', '', '', 1, '2019-11-04 19:07:26'),
(24, 'INS022', 'Opara', 'Emmanuel', 'e.opara@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '', '', '', '', 1, '2019-11-04 19:08:26'),
(25, 'INS033', 'Olukayode', 'Taiwo Gbenga', 't.olukayode@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '', '', '', '', 1, '2019-11-04 19:09:37'),
(26, 'INS015', 'Ibrahim', 'Olayokun', 'i.olayokun@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '', '', '', '', 1, '2019-11-04 19:10:58'),
(27, 'INS011', 'Ojeniyi', 'Adeola Calvin', 'a.ojeniyi@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '', '', '', '', 1, '2019-11-04 19:19:00'),
(28, 'INS019', 'Ogweda', 'Haruna', 'h.ogweda@instiq.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '', '', '', '', 1, '2019-11-04 21:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblleaves`
--

CREATE TABLE `tblleaves` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleaves`
--

INSERT INTO `tblleaves` (`id`, `LeaveType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `empid`) VALUES
(16, 'Medical Leave test', '12/01/2019', '12/10/2018', 'i need a rest', '2019-08-09 18:59:37', NULL, NULL, 0, 0, 3),
(17, 'Medical Leave test', '23/05/2019', '30/05/2019', 'djhmjhhm,kjmgf', '2019-08-10 00:20:26', 'congrats', '2019-08-23 8:11:28 ', 1, 1, 3),
(18, ' Holiday', '12/05/2019', '12/04/2019', 'CCCCC', '2019-09-02 18:43:29', 'YOU CANT BE ALLOWED TO GO FOR MORE THAN 5DAYS', '2019-09-03 0:16:10 ', 2, 1, 3),
(19, 'Medical Leave ', '10/10/2019', '13/10/2019', ' I am requesting for a 3 days leave i order to treat myself as i have been feeling weak for the past few days and it has limited my level of productivity. I\'ll appreciate if i am granted the request. Thanks in advance', '2019-09-06 16:44:19', NULL, NULL, 0, 0, 4),
(20, 'Travel Leave', '15/10/2019', '19/10/2019', 'i want to attend a 3 days seminar that will improve my coding skills', '2019-09-06 16:53:34', 'congrats', '2019-10-22 5:59:16 ', 1, 1, 13),
(21, 'Travel Leave', '10/10/2019', '14/10/2019', 'i want to travel to south africa to intervene  in the xenophobic act', '2019-09-06 17:05:52', 'yttuitt0', '2019-09-22 7:12:56 ', 1, 1, 17),
(22, 'Medical Leave ', '12/12/2019', '13/12/2019', 'dfgh', '2019-09-09 22:10:01', 'sjhdjhdjh', '2019-09-19 22:45:33 ', 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleavetype`
--

INSERT INTO `tblleavetype` (`id`, `LeaveType`, `Description`, `CreationDate`) VALUES
(1, 'Casual Leave', 'Casual Leave ', '2017-11-01 12:07:56'),
(2, 'Medical Leave ', 'Medical Leave ', '2017-11-06 13:16:09'),
(3, ' Holiday', 'Holiday/Vacation', '2017-11-06 13:16:38'),
(4, 'Travel Leave', 'You will be allowed to travel out for two months', '2019-07-26 17:31:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblleaves`
--
ALTER TABLE `tblleaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`empid`);

--
-- Indexes for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
