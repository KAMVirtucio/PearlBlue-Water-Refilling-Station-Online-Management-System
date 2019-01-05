-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 09:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pearlbluewrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminfullname` varchar(1000) NOT NULL,
  `adminusername` varchar(1000) NOT NULL,
  `adminpassword` varchar(1000) NOT NULL,
  `adminprivelage` varchar(250) NOT NULL,
  `adminstatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminfullname`, `adminusername`, `adminpassword`, `adminprivelage`, `adminstatus`) VALUES
(1, 'Darwin Luis M. Sanchez', 'darwinAdmin', 'pearlbluewrs123', 'ADMIN', 'ACTIVE'),
(2, 'Jheyren S. Calanog', 'jheyrenAdmin', 'pearlbluewrs123', 'STAFF', 'ACTIVE'),
(3, 'Kenneth Axl M. Virtucio', 'kennethAdmin', 'pearlbluewrs123', 'CASHIER', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `customerid` int(11) NOT NULL,
  `customerfname` varchar(200) NOT NULL,
  `customerlname` varchar(200) NOT NULL,
  `containertype` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalamount` int(11) NOT NULL,
  `paymentstatus` int(11) NOT NULL,
  `customerchange` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`customerid`, `customerfname`, `customerlname`, `containertype`, `price`, `quantity`, `totalamount`, `paymentstatus`, `customerchange`) VALUES
(1, 'Kenneth', 'Virtucio', 'With Faucet', 50, 3, 150, 200, 50);

-- --------------------------------------------------------

--
-- Table structure for table `containers`
--

CREATE TABLE `containers` (
  `type` varchar(250) NOT NULL,
  `numberavailable` int(255) NOT NULL,
  `asofdate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `containers`
--

INSERT INTO `containers` (`type`, `numberavailable`, `asofdate`) VALUES
('BOTTLES', 5000, 'May 6, 2018'),
('WITH FAUCET', 1000, 'May 6, 2018'),
('WITHOUT FAUCET', 6000, 'May 6, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `customerorders`
--

CREATE TABLE `customerorders` (
  `ordercustomerid` int(11) NOT NULL,
  `ordercustomername` varchar(1000) NOT NULL,
  `orderaddress` varchar(1000) NOT NULL,
  `ordercontactdetails` varchar(500) NOT NULL,
  `orderdateordered` varchar(500) NOT NULL,
  `orderdateneeded` varchar(500) NOT NULL,
  `ordernumber` varchar(250) NOT NULL,
  `ordertype` varchar(250) NOT NULL,
  `ordertotal` varchar(1000) NOT NULL,
  `orderstatus` varchar(500) NOT NULL,
  `orderdatedelivered` varchar(500) NOT NULL,
  `orderpaymentscheme` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerorders`
--

INSERT INTO `customerorders` (`ordercustomerid`, `ordercustomername`, `orderaddress`, `ordercontactdetails`, `orderdateordered`, `orderdateneeded`, `ordernumber`, `ordertype`, `ordertotal`, `orderstatus`, `orderdatedelivered`, `orderpaymentscheme`) VALUES
(1, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'May 01, 2018', '5', 'with Faucet', '250', 'DELIVERED', 'May 21, 2018', ''),
(2, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'May 23, 2018', '10', 'without Faucet', '600', 'DELIVERED', 'May 21, 2018', ''),
(3, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'April 30, 2018', '5', 'without Faucet', '300', 'DELIVERED', 'May 21, 2018', ''),
(4, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'May 24, 2018', '5', 'with Faucet', '250', 'DELIVERED', 'May 21, 2018', ''),
(5, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'May 03, 2018', '20', 'without Faucet', '1200', 'DELIVERED', 'May 21, 2018', ''),
(6, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'April 06, 2018', '5', 'with Faucet', '250', 'DELIVERED', 'May 21, 2018', ''),
(7, 'Darwin Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'April 30, 2018', '5', 'with Faucet', '250', 'DELIVERED', 'May 21, 2018', ''),
(8, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'April 30, 2018', '5', 'without Faucet', '300', 'DELIVERED', 'May 21, 2018', ''),
(9, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'April 30, 2018', '5', 'without Faucet', '300', 'DELIVERED', 'May 21, 2018', ''),
(10, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'April 30, 2018', 'July 20, 2018', '22', 'with Faucet', '1100', 'DELIVERED', 'May 21, 2018', ''),
(11, 'lhady zhuwhaiL ', 'mars', '09080880806', 'April 30, 2018', 'March 26, 2020', '1000', 'with Faucet', '50000', 'DELIVERED', 'May 21, 2018', ''),
(12, 'grizzwin', 'pluto', '09876543212', 'April 30, 2018', 'December 25, 2019', '69', 'without Faucet', '4140', 'DELIVERED', 'May 21, 2018', ''),
(13, 'fff', 'sd', 'sdsd', 'May 01, 2018', 'April 29, 2018', '12', 'with Faucet', '600', 'DELIVERED', 'May 15, 2018', ''),
(14, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 01, 2018', 'April 29, 2018', '4', 'with Faucet', '200', 'DELIVERED', 'May 21, 2018', ''),
(15, '', '', '', 'May 05, 2018', 'January 01, 1970', '', '', '', 'DELIVERED', 'May 21, 2018', ''),
(16, '', '', '', 'May 05, 2018', 'January 01, 1970', '', 'without Faucet', '0', 'DELIVERED', 'May 21, 2018', ''),
(17, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 05, 2018', 'May 05, 2018', '10', 'Bottled Water', '150', 'DELIVERED', 'May 21, 2018', ''),
(18, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 05, 2018', 'May 05, 2018', '100', 'without Faucet', '6000', 'DELIVERED', 'May 21, 2018', 'ONLINE PAYMENT'),
(19, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 05, 2018', 'May 05, 2018', '5', 'with Faucet', '250', 'DELIVERED', 'May 21, 2018', 'CASH-ON-HAND'),
(20, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 05, 2018', 'May 05, 2018', '5', 'with Faucet', '250', 'DELIVERED', 'May 14, 2018', 'ONLINE PAYMENT'),
(21, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 06, 2018', 'May 06, 2018', '5', 'with Faucet', '250', 'DELIVERED', 'May 14, 2018', 'ONLINE PAYMENT'),
(22, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 06, 2018', 'May 06, 2018', '1000', 'Bottled Water', '15000', 'DELIVERED', '', 'ONLINE PAYMENT'),
(23, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 06, 2018', 'May 06, 2018', '500', 'without Faucet', '30000', 'DELIVERED', '', 'ONLINE PAYMENT'),
(24, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 06, 2018', 'May 06, 2018', '15', 'with Faucet', '750', 'DELIVERED', '', 'ONLINE PAYMENT'),
(25, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 06, 2018', 'May 06, 2018', '25', 'without Faucet', '1500', 'DELIVERED', '', 'CASH-ON-HAND'),
(26, 'Monique Pitel', 'Brgy C. Rosario, Batangas', '123456', 'May 07, 2018', 'May 07, 2018', '3', 'Bottled Water', '45', 'DELIVERED', '', 'CASH-ON-HAND'),
(27, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 14, 2018', 'May 14, 2018', '10', 'without Faucet', '600', 'DELIVERED', 'May 15, 2018', 'CASH-ON-HAND'),
(28, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 14, 2018', 'May 14, 2018', '15', 'with Faucet', '750', 'DELIVERED', 'May 15, 2018', 'ONLINE PAYMENT'),
(29, 'ss', 'ss', 'ss', 'May 15, 2018', 'May 15, 2018', '1', 'with Faucet', '50', 'DELIVERED', 'May 15, 2018', 'WALK-IN PAYMENT'),
(30, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 15, 2018', 'May 17, 2018', '6', 'without Faucet', '360', 'DELIVERED', 'May 21, 2018', 'ONLINE PAYMENT'),
(31, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 15, 2018', 'May 18, 2018', '10', 'without Faucet', '600', 'DELIVERED', 'May 15, 2018', 'ONLINE PAYMENT'),
(32, 'Ken Virtucio', 'Lipa City, Batangas', '09123456789', 'May 15, 2018', 'May 15, 2018', '10', 'with Faucet', '500', 'DELIVERED', 'May 15, 2018', 'WALK-IN PAYMENT'),
(33, 'Ken Virtucio', 'Lipa City, Batangas', '09123456789', 'May 15, 2018', 'May 15, 2018', '10', 'without Faucet', '600', 'DELIVERED', 'May 15, 2018', 'WALK-IN PAYMENT'),
(34, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 20, 2018', 'May 20, 2018', '10', 'with Faucet', '500', 'DELIVERED', 'May 21, 2018', 'CASH-ON-HAND'),
(35, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 21, 2018', 'May 21, 2018', '10', 'with Faucet', '500', 'DELIVERED', 'May 21, 2018', 'CASH-ON-HAND'),
(36, '123', '123', '123', 'May 21, 2018', 'May 31, 2018', '0', '', '332', 'DELIVERED', 'May 21, 2018', ''),
(37, 'dfFS', 'r', 'd', 'May 21, 2018', 'April 04, 1998', '10', 'with Faucet', '500', '', '', ''),
(38, 'hgjg20/.', 'aad', 'jk', 'May 21, 2018', 'January 01, 1970', '1231', 'with Faucet', '6.156556565656156e+27', '', '', ''),
(39, 'asd', 'asd', 'asd', 'May 21, 2018', 'January 01, 1970', '4999', 'with Faucet', '249950', 'DELIVERED', 'May 21, 2018', ''),
(40, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09485505145', 'May 21, 2018', 'May 25, 2018', '10', 'without Faucet', '600', '', '', 'ONLINE PAYMENT'),
(41, 'Darwin Luis M. Sanchez', 'Calamias, Lipa City, Batangas', '09123456789', 'May 21, 2018', 'May 25, 2018', '15', 'without Faucet', '900', '', '', 'ONLINE PAYMENT'),
(42, 'Kenneth', 'Lipa City, Batangas', '09123456789', 'May 21, 2018', 'May 21, 2018', '12', 'with Faucet', '600', 'DELIVERED', 'May 21, 2018', 'WALK-IN PAYMENT'),
(43, 'Kenneth Virtucio', 'Lipa City, Batanags', '09123456789', 'May 21, 2018', 'May 21, 2018', '12', 'with Faucet', '600', 'DELIVERED', 'May 21, 2018', 'WALK-IN PAYMENT'),
(44, 'Kenneth Virtucio', 'Lipa City, Batanags', '09123456789', 'May 21, 2018', 'May 21, 2018', '12', 'with Faucet', '600', 'DELIVERED', 'May 21, 2018', 'WALK-IN PAYMENT'),
(45, 'Kenneth Virtucio', 'Lipa City, Batanags', '09123456789', 'May 21, 2018', 'May 21, 2018', '12', 'with Faucet', '600', 'DELIVERED', 'May 21, 2018', 'WALK-IN PAYMENT');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(11) NOT NULL,
  `employeename` varchar(1000) NOT NULL,
  `employeeposition` varchar(500) NOT NULL,
  `employeeaddress` varchar(1000) NOT NULL,
  `employeecontactdetails` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `employeename`, `employeeposition`, `employeeaddress`, `employeecontactdetails`) VALUES
(1, 'Jheyren S. Calanog', 'Refilling Staff', 'Lemery, Batangas', '09123456789'),
(2, 'Michael Joshua G. Orellana', 'Delivery Staff', 'Cuenca, Batangas', '09123456789'),
(3, 'Darwin Luis M. Sanchez', 'Manager', 'Lipa City, Batangas', '09485505145'),
(4, 'Kenneth Axl M. Virtucio', 'Cashier', 'Lipa City, Batangas', '09123456789'),
(5, 'Jheyren S. Calanog', 'REFILLING STAFF', 'Lemery, Batangas', '09213456789'),
(6, 'Jheyren S. Calanog', 'Refilling Staff', 'Lemery, Batangas', '09213456782'),
(7, 'Monique Pitel', 'Cashier', 'Rosario Batangas', '09123456789');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payerid` int(11) NOT NULL,
  `payerfirstname` varchar(1000) NOT NULL,
  `payerlastname` varchar(1000) NOT NULL,
  `payerprovider` varchar(500) NOT NULL,
  `payercardnumber` varchar(1000) NOT NULL,
  `payerdateoftransaction` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payerid`, `payerfirstname`, `payerlastname`, `payerprovider`, `payercardnumber`, `payerdateoftransaction`) VALUES
(1, 'Darwin Luis', 'Sanchez', 'VISA', '2234-5678-8900', 'May 05, 2018'),
(2, 'Darwin Luis', 'Sanchez', 'VISA', '2344-2229-6912', 'May 05, 2018'),
(3, '', '', '', '', 'May 05, 2018'),
(4, 'Darwin Luis', 'Sanchez', 'VISA', '2344-6789-6969', 'May 05, 2018'),
(5, 'Darwin Luis', 'Sanchez', 'VISA', '4567-2249-6969', 'May 06, 2018'),
(6, 'Darwin Luis', 'Sanchez', 'VISA', '3456-8900-6969', 'May 06, 2018'),
(7, 'Darwin Luis', 'Sanchez', 'VISA', '9088-4567-3490', 'May 06, 2018'),
(8, 'Darwin Luis', 'Sanchez', 'MASTER CARD', '4567-8999-6969', 'May 06, 2018'),
(9, '', '', '', '', 'May 06, 2018'),
(10, '', '', '', '', 'May 07, 2018'),
(11, '', '', '', '', 'May 14, 2018'),
(12, 'Darwin Luis', 'Sanchez', 'MASTER CARD', '8956-0988-0123', 'May 14, 2018'),
(13, 'Darwin Luis', 'Sanchez', 'VISA', '4567-8999-2222', 'May 15, 2018'),
(14, 'Darwin Luis', 'Sanchez', 'VISA', '2345-1234-8900', 'May 15, 2018'),
(15, '', '', '', '', 'May 20, 2018'),
(16, '', '', '', '', 'May 21, 2018'),
(17, '', '', '', '', 'May 21, 2018'),
(18, '', '', '', '', 'May 21, 2018'),
(19, '', '', '', '', 'May 21, 2018'),
(20, '', '', '', '', 'May 21, 2018'),
(21, 'Darwin Luis', 'Sanchez', 'VISA', '5678-1234-2468', 'May 21, 2018'),
(22, 'Darwin Luis', 'Sanchez', 'MASTER CARD', '2345-4896-4777', 'May 21, 2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `customerorders`
--
ALTER TABLE `customerorders`
  ADD PRIMARY KEY (`ordercustomerid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customerorders`
--
ALTER TABLE `customerorders`
  MODIFY `ordercustomerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
