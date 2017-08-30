-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 10:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egms_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Name`, `Phone`, `Email`, `Password`) VALUES
(1, 'Eranda', 716852981, 'erandagrero@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Name`, `Address`, `Phone`, `Email`, `Password`) VALUES
(1001, 'Thenuja', '23/4,Perera Lane, Colombo', '0774494667', 'sthenuyah@gmail.com', 'Thenu2016'),
(1002, 'Abishalini', '55/3,Peradeniya Rd,Kandy', '0765674327', 'abishu14@gmail.com', 'abishu'),
(1003, 'Shangavie', 'Negambo east,Negambo', '0777754540', 'sshangavie@gmail.com', 'shangu'),
(1016, 'Mathusini', 'malabe', '0123456789', 'mmathu@gmail.com', 'mmm'),
(1017, 'Vanaja', 'Negambo', '0777771144', 'vanaja@gmail.com', 'vanam'),
(1018, 'Poornima', 'No 100 Colombo', '0714568765', 'poornima@gmaill.com', 'Poornima'),
(1020, 'Jenusha', 'Jaffna', '0765006001', 'jenu@gmail.com', 'Jenu2016'),
(1021, 'Suganya', 'Varani', '0772393645', 'suganya@gmail.com', 'Suganya1996'),
(1022, 'Eranda', 'Mahara,Kadawatha', '0716852981', 'erandagrero@gmail.com', 'admin1'),
(1023, 'Fabian', 'Mahara', '0719876543', 'aa@gmail.com', 'padmasiri'),
(1024, 'Supun', 'Bandarawela', '0714563219', 'sk1@gmail.com', 'rajasinghe'),
(1025, 'Shama', 'Kadawatha', '0713216549', 'marina@gmail.com', 'marinashama');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentmethod` varchar(15) NOT NULL,
  `paymentamount` int(15) NOT NULL,
  `cardtype` varchar(15) NOT NULL,
  `cardnumber` int(15) NOT NULL,
  `Securitycode` int(15) NOT NULL,
  `ExpiaryDate` varchar(15) NOT NULL,
  `CarHoldersName` varchar(15) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `BillingTelNo` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentmethod`, `paymentamount`, `cardtype`, `cardnumber`, `Securitycode`, `ExpiaryDate`, `CarHoldersName`, `Country`, `BillingTelNo`, `Email`) VALUES
('Credit Card', 5000, 'Master Card', 4546, 5464, '2017-05', 'eqweq', 'eqeq', '2528150639', 'qwerty@gmail.com'),
('Credit Card', 100000, 'Int Card', 5252, 5353, '2017-05', 'qwertyu', 'qwertyu', '1234567890', 'asdf@gmail.com'),
('Credit Card', 100000, 'Int Card', 5253, 5353, '2017-05', 'qwertyu', 'qwertyu', '1234567890', 'asdf@gmail.com'),
('Credit Card', 5000, 'Master Card', 7878, 7878, '2017-05', 'nila', 'SriLanka', '2528150639', 'sthenuyah@gmail.com'),
('Credit Card', 100000, 'Master Card', 6598, 6457, '2017-05', 'Mathusini', 'SriLanka', '0772254909', 'sshanthacumaran@gmail.com'),
('Credit Card', 5000, 'Visa Card', 8989, 9898, '2017-05', 'adada', 'aDdD', '1245639870', 'kuchchi@gmail.com'),
('Credit Card', 60000000, 'Master Card', 4561, 0, '00/00/0000', 'gastkjSF', 'DWQDWAD', '0000000000', 'sass@jkj.lk'),
('Credit Card', 100000000, 'Master Card', 1456, 1234, '00/00/0000', 'Jenusha', 'hfhjfkh', '9874561230', 'dgh@gjg.lk'),
('Paypal', 200000, 'Master Card', 6785, 5643, '2017-10-10', 'thilini', 'Srilanka', '9874561230', 'thili@gmail.com'),
('Credit Card', 50, 'Visa Card', 1234, 9847, '', 'Baka', 'Mongolia', '0771236547', 'bk@gmail.com'),
('Credit Card', 655000, 'Master Card', 9856, 9674, '2017-11', 'kp', 'ikn', '0117896541', 'sk@gmail.com'),
('Credit Card', 655000, 'Master Card', 9865, 9674, '2017-11', 'kp', 'ikn', '0117896541', 'sk@gmail.com'),
('Paypal', 263000, 'Visa Card', 2368, 9823, '2017-12', 'Madu', 'India', '1234569875', 'madu@gmail.com'),
('Credit Card', 554000, 'Visa Card', 4567, 1234, '2017-10', 'Harshana', 'Pakistan', '0117896534', 'ser@gmail.com'),
('Credit Card', 780236, 'Int Card', 7896, 1234, '2017-10', 'Padme', 'Pakistan', '0112546813', 'padme@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Vehicle_No` varchar(50) NOT NULL,
  `VehicleName` varchar(50) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `CardType` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Vehicle_No`, `VehicleName`, `CustomerName`, `CardType`, `Price`, `Email`, `Date`) VALUES
('LP700-4', 'Lamb-BL-KNIGHT', 'Thenuja', 'Credit Card', 100000, 'thenuja@gmail.com', '5 may'),
('KL-470', 'NISSAN-ROUGE', 'Vanaja', 'Paypal', 500000, 'vanajaaa3@yahoo.com', '6 may'),
('BM14-TT', 'BMW-SMART-07', 'Abishalini', 'Master card', 400000, 'Abi@gmail.com', '7 may'),
('SU-00', 'SUZUKI-SWIFT', 'Sangavie', 'Visa Card', 600000, 'sangavie@yahoo.com', '8 may'),
('PR-11-TE', 'BMW-WHITE-HOURSE', 'Mathushini', 'Paypal', 800000, 'Mathu@gmail.com', '9 may'),
('TY-184', 'TOYOTA-RED-FALME', 'Nuwan', 'Paypal', 1000000, 'nuwan@gmail.com', '10 may'),
('AU0-08', 'TOYOTA-AVETADAR', 'Meena', 'Paypal', 2000000, 'Meena@gmail.com', '11 may'),
('SU-XL7', 'SUZUKI-TRANSFORMER', 'Kasun', 'Paypal', 2500000, 'kasun@gmail.com', '12 may'),
('LB2017', 'LAMBORGINI-HURACEN', 'Vinay', 'Paypal', 3500000, 'vijay@gmail.com', '13 may'),
('A8-016', 'AUDI-SNOW-MIRAGE', 'Kumar', 'Paypal', 4500000, 'kumar@gmail.com', '14 may');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `ID` int(11) NOT NULL,
  `Vehicle_No` varchar(10) NOT NULL,
  `V_Name` varchar(30) NOT NULL,
  `Manufacturer` varchar(30) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Milage` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`ID`, `Vehicle_No`, `V_Name`, `Manufacturer`, `Model`, `Color`, `Milage`, `Price`, `Image`) VALUES
(101, '', 'LAMB-BL-KNIGHT', 'Lamboghini', 'XX-14-V2', 'Gray', '10.3km', 11400000, 'index/White.jpg'),
(102, 'KL-470', 'NISSAN ROUGE', 'Nissan', 'CLOUD-N7', 'Blue', '30km', 2375000, 'index/Blue1.jpg'),
(103, 'BM14-TT', 'BMW-SMART-07', 'BMW', 'PURPLE-99', 'Purple', '22.9km', 12400000, 'index/bmwcopy.jpg'),
(104, 'SU-00', 'SUZUKI SWIFT', 'SUZUKI', 'ALTO-800', 'Black', '26.1km', 390000, 'index/suzuki.jpg'),
(105, 'PR-11-TE', 'BMW-WHITE-HOURSE', 'BMW', 'BMW7-series', 'White', '27.6km', 18200000, 'index/bmwwhite.jpg'),
(106, 'TY-184', 'TOYATA-RED FALME', 'TOYATA', 'Prius-16V2', 'RED', '20.8km', 4200000, 'index/Red.jpg'),
(107, 'TOY-16', 'TOYATA-COROLLA', 'TOYATA', 'CORELLA-MILLON', 'Gray', '18.5km', 3800000, 'index/White_side view.jpg'),
(108, 'AU0-08', 'AUDI-AVENTADOR', 'AUDI', 'LP700-4', 'Black', '23.3km', 3000999, 'index/audiblack.jpg'),
(109, 'SU-XL7', 'SUZUKI-TRANSFORMER', 'SUZUKI', 'TR-V14-ACTIVE', 'White', '34.5km', 1880000, 'index/suzuki_pur'),
(110, 'LB2017', 'LAMBORGINI HURACEN', 'Lamboghini', 'S2000', 'Black', '30.3km', 2899990, 'index/black.jpg'),
(111, 'A8-016', 'AUDI-SNOW-MIRRAGE', 'AUDI', 'A8-MIRR', 'AQUA', '25km', 73000000, 'index/audi.jpg'),
(112, '', '2015 NISSAN ROGUE', 'Nissan', 'NISSAN-SUV', 'GREY', '28km', 3000000, 'index/Blue.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`cardnumber`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`Vehicle_No`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1026;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
