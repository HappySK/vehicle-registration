-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2020 at 10:23 AM
-- Server version: 10.3.24-MariaDB-log-cll-lve
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sowlyehg_vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_registration`
--

CREATE TABLE `vehicle_registration` (
  `id` int(10) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `vehicleType` varchar(255) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `color` varchar(20) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `fuelType` varchar(255) NOT NULL,
  `engineCapacity` varchar(50) NOT NULL,
  `metallicPaint` varchar(255) NOT NULL,
  `selectVehicle` varchar(255) NOT NULL,
  `firstRegistered` varchar(50) NOT NULL,
  `mileage` varchar(100) DEFAULT '',
  `axleConfiguration` varchar(100) DEFAULT '',
  `previousOwners` varchar(100) DEFAULT '',
  `serviceHistory` varchar(100) DEFAULT '',
  `conditionalLevel` varchar(100) DEFAULT '',
  `imageUpload` varchar(100) DEFAULT '',
  `createdDate` varchar(50) NOT NULL,
  `updatedDate` varchar(50) NOT NULL,
  `fetchMode` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_registration`
--

INSERT INTO `vehicle_registration` (`id`, `regNo`, `vehicleType`, `manufacturer`, `model`, `year`, `color`, `transmission`, `fuelType`, `engineCapacity`, `metallicPaint`, `selectVehicle`, `firstRegistered`, `mileage`, `axleConfiguration`, `previousOwners`, `serviceHistory`, `conditionalLevel`, `imageUpload`, `createdDate`, `updatedDate`, `fetchMode`) VALUES
(31, 'LL14KAO', '', 'FORD', 'FORD KUGA TITANIUM 4X2 TDCI', '2014', 'BLUE', 'MANUAL', 'DIESEL', '1997', '', '', '20-05-2014', '', '', '', '', '', '', '2020/10/12 09:36:07am', '2020/10/12 09:36:07am', 'API'),
(16, 'TN69', 'Van', 'Force', 'Traveller', '2011', 'White', 'Automatic', 'Petrol', '1250', 'Yes', 'PQRS', '2019', '2000001 - 3000000', '6 x 4', '2', 'Yes', '3', '', '2020/09/25 05:17:10am', '2020/10/12 09:19:16am', 'Manual'),
(30, 'GK64AUF', '', 'IVECO', 'IVECO EUROCARGO 75E16S S-A', '2014', 'WHITE', 'SEMI AUTO', 'DIESEL', '4485', '', '', '28-10-2014', '', '', '', '', '', '', '2020/10/12 09:35:58am', '2020/10/12 09:35:58am', 'API'),
(14, 'TN999', 'Car', 'Force', 'Cruiser', '2015', 'Yellow', 'Automatic', 'Petrol', '1800', 'Yes', 'YYYYY', '2018', '2000001 - 3000000', '6 x 4', '2', 'Yes', '3', 'AudiA4.jpg', '2020/09/24 01:01:20pm', '2020/09/28 04:07:41am', 'Manual'),
(13, 'TN67', 'Car', 'Audi', 'A4', '2017', 'White', 'Automatic', 'Diesel', '1500', 'Yes', 'YYYY', '2015', ' ', ' ', '', NULL, '3', '', '2020/09/24 09:03:45am', '2020/09/24 09:03:45am', 'Manual'),
(12, 'GK64AUF', 'null', 'IVECO', 'IVECO EUROCARGO 75E16S S-A', '2014', 'WHITE', 'SEMI AUTO', 'DIESEL', '4485', 'null', 'null', '2014-10-28T00:00:00', '3000001 - 4000000', '6 x 2', '2', 'Yes', '6', '', '2020/09/24 09:03:27am', '2020/09/28 04:36:04am', 'API'),
(17, 'LL16XAG', '', 'FORD', 'FORD FIESTA ZETEC', '2016', 'RED', 'MANUAL', 'PETROL', '1242', '', '', '2016-05-12T00:00:00', '2000001 - 3000000', '6 x 4', '2', 'Yes', '4', 'AudiA4.jpg', '2020/09/25 05:21:29am', '2020/09/25 05:21:29am', 'API'),
(29, 'KM14AKK', '', 'BMW', 'BMW 320D M SPORT GT AUTO', '2014', 'RED', 'AUTOMATIC', 'DIESEL', '1995', '', '', '29-05-2014', '', '', '', '', '', '', '2020/10/12 09:33:05am', '2020/10/12 09:33:05am', 'API'),
(22, 'TN696', 'Van', 'Force', 'Traveller', '2015', 'White', 'semi-automatic', 'Petrol', '1800', '', '', '02-09-2020', '3000001 - 4000000', '8 x 4', '2', 'Yes', '6', 'AudiA4.jpg', '2020/09/29 02:41:14am', '2020/09/29 02:41:29am', 'Manual'),
(19, 'LL15AEN', '', 'VAUXHALL', 'VAUXHALL ASTRA TECH LINE CDTI EFLEX S', '2015', 'WHITE', 'MANUAL', 'DIESEL', '1598', '', '', '05-05-2015', '2000001 - 3000000', '6 x 4', '1', 'Yes', '5', '', '2020/09/27 06:38:38am', '2020/09/28 04:25:18am', 'API'),
(20, '3279oilkjl', 'Car', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'Yes', '232eee', '31-01-2020', '1-1000000', '4 x 2', '323h', NULL, '1', 'Garagetime.png', '2020/09/27 09:41:16am', '2020/09/27 09:41:16am', 'Manual'),
(21, 'TN777', 'Car', 'Ford', 'Fiesta', '2015', 'White', 'Automatic', 'Petrol', '1500', 'Yes', 'KKKK', '24-09-2020', '2000001 - 3000000', '8 x 2', '1', 'Yes', '4', 'BMW.jpeg', '2020/09/28 01:48:12am', '2020/09/29 03:13:40am', 'Manual'),
(23, 'TN7777', 'Van', 'Ford', 'Fiesta', '2020', 'White', 'automatic', 'LPG', '1800', '', '', '08-09-2020', '2000001 - 3000000', '8 x 4', '2', 'Yes', '3', 'AudiA4.jpg', '2020/09/29 02:46:08am', '2020/09/29 02:46:21am', 'Manual'),
(24, 'TN7', 'Van', 'BMW', 'X6', '2018', 'Blue', 'automatic', 'Petrol', '1500', '', '', '01-09-2020', '', '', '', '', '', 'BMW.jpeg', '2020/09/29 03:30:19am', '2020/09/29 03:30:19am', 'Manual'),
(26, 'TS69', 'Van', 'Ashok Leyland', 'Cruiser', '2015', 'Red', 'manual', 'Petrol', '1500', '', '', '', '2000001 - 3000000', '6 x 4', '2', 'Yes', '5', '', '2020/09/29 04:26:01am', '2020/09/29 04:30:38am', 'Manual'),
(27, 'TS96', 'Van', 'TATA', 'Safari', '2015', 'White', 'semi-automatic', 'Petrol', '1588', '', '', '', '1-1000000', '6 x 2', '2', 'Yes', '3', 'AudiA4.jpg', '2020/09/29 04:32:36am', '2020/09/29 04:33:04am', 'Manual'),
(28, 'AP969', 'Farm', 'Ford', 'Endeavor', '2015', 'Red', 'Automatic', 'Petrol', '1500', '', '', '', '2000001 - 3000000', '6 x 4', '2', 'Yes', '1', 'AudiA4.jpg', '2020/09/29 04:44:21am', '2020/09/29 04:44:48am', 'Manual'),
(32, 'LL15AEN', '', 'VAUXHALL', 'VAUXHALL ASTRA TECH LINE CDTI EFLEX S/S', '2015', 'WHITE', 'MANUAL', 'DIESEL', '1598', '', '', '05-05-2015', '', '', '', '', '', '', '2020/10/12 09:45:12am', '2020/10/12 09:45:12am', 'API'),
(38, 'LL16NNA', '', 'FORD', 'FORD FIESTA TITANIUM X', '2016', 'GREY', 'MANUAL', 'PETROL', '998', '', '', '30-06-2016', '', '', '', '', '', '', '2020/10/12 10:21:16am', '2020/10/12 10:21:16am', 'API');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicle_registration`
--
ALTER TABLE `vehicle_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicle_registration`
--
ALTER TABLE `vehicle_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
