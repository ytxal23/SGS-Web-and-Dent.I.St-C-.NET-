-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 03:35 PM
-- Server version: 5.6.34-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdental`
--
CREATE DATABASE IF NOT EXISTS `dbdental` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbdental`;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--
-- Creation: Apr 18, 2017 at 12:15 AM
--

DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `intCategoryCode` int(5) NOT NULL,
  `strCategoryName` varchar(45) NOT NULL,
  `strCategoryDesc` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`intCategoryCode`, `strCategoryName`, `strCategoryDesc`) VALUES
(1, 'General Dentistry', 'General dentist services, tooth maintenances'),
(2, 'Orthodontics', ' Design for gums and teeth'),
(3, 'Cosmetic Dentistry', 'Designing of teeth'),
(4, 'Micro Dentistry', 'Germinological Services'),
(5, 'Aesthetic Orthodontics', 'Something'),
(6, 'Genetical Manufacturing', 'Something nananana'),
(7, 'General Lang', 'aaaa'),
(8, 'jajdakfkadsj', 'kajdskfja'),
(9, 'Pain', '123'),
(10, 'General Kener', 'whasdhkjasd'),
(11, 'Cosmetics', 'hjehjw');

-- --------------------------------------------------------

--
-- Table structure for table `tblconsult`
--
-- Creation: Sep 28, 2017 at 04:53 PM
--

DROP TABLE IF EXISTS `tblconsult`;
CREATE TABLE IF NOT EXISTS `tblconsult` (
  `intConsultation` int(11) NOT NULL,
  `charfkDentist` varchar(10) DEFAULT NULL,
  `charfkPatient` varchar(10) DEFAULT NULL,
  `strRemarks` varchar(45) DEFAULT NULL,
  `strfkTooth` char(20) DEFAULT NULL,
  `dtmConsultationDate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblconsult`
--

INSERT INTO `tblconsult` (`intConsultation`, `charfkDentist`, `charfkPatient`, `strRemarks`, `strfkTooth`, `dtmConsultationDate`) VALUES
(1, 'Emp002', 'Pat0001', 'Needs to be extracted', 'TO00031', '2017-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbldaysched`
--
-- Creation: Sep 16, 2017 at 12:50 PM
--

DROP TABLE IF EXISTS `tbldaysched`;
CREATE TABLE IF NOT EXISTS `tbldaysched` (
  `intDayNo` int(11) NOT NULL,
  `charfkDentistID` char(10) NOT NULL,
  `strDayName` varchar(10) NOT NULL,
  `strDayTimeStart` varchar(10) NOT NULL,
  `strDayTimeEnd` varchar(10) NOT NULL,
  `strDayStatus` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbldaysched`
--

INSERT INTO `tbldaysched` (`intDayNo`, `charfkDentistID`, `strDayName`, `strDayTimeStart`, `strDayTimeEnd`, `strDayStatus`) VALUES
(1, 'Emp002', 'Monday', '07:00 AM', '01:00 PM', 'Available'),
(2, 'Emp002', 'Tuesday', '09:00 AM', '03:00 PM', 'Available'),
(3, 'Emp002', 'Wednesday', '07:00 AM', '01:00 PM', 'Available'),
(4, 'Emp002', 'Thursday', '09:00 AM', '03:00 PM', 'Available'),
(5, 'Emp002', 'Friday', '07:00 AM', '01:00 PM', 'Available'),
(6, 'Emp002', 'Saturday', '09:00 AM', '03:00 PM', 'UnAvailable'),
(7, 'Emp002', 'Sunday', '07:00 AM', '01:00 PM', 'Available'),
(8, 'Emp004', 'Monday', '09:00 AM', '03:00 PM', 'Available'),
(9, 'Emp004', 'Tuesday', '09:00 AM', '03:00 PM', 'Available'),
(10, 'Emp004', 'Wednesday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(11, 'Emp004', 'Thursday', '09:00 AM', '03:00 PM', 'Available'),
(12, 'Emp004', 'Friday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(13, 'Emp004', 'Saturday', '07:00 AM', '03:00 PM', 'Available'),
(14, 'Emp004', 'Sunday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(15, 'Emp005', 'Monday', '07:00 AM', '03:00 PM', 'UnAvailable'),
(16, 'Emp005', 'Tuesday', '09:00 AM', '03:00 PM', 'Available'),
(17, 'Emp005', 'Wednesday', '07:00 AM', '03:00 PM', 'Available'),
(18, 'Emp005', 'Thursday', '09:00 AM', '03:00 PM', 'Available'),
(19, 'Emp005', 'Friday', '07:00 AM', '01:00 PM', 'Available'),
(20, 'Emp005', 'Saturday', '07:00 AM', '03:00 PM', 'Available'),
(21, 'Emp005', 'Sunday', '07:00 AM', '01:00 PM', 'Available'),
(22, 'Emp003', 'Monday', '07:00 AM', '01:00 PM', 'Available'),
(23, 'Emp003', 'Tuesday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(24, 'Emp003', 'Wednesday', '07:00 AM', '03:00 PM', 'Available'),
(25, 'Emp003', 'Thursday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(26, 'Emp003', 'Friday', '07:00 AM', '01:00 PM', 'Available'),
(27, 'Emp003', 'Saturday', '07:00 AM', '03:00 PM', 'UnAvailable'),
(28, 'Emp003', 'Sunday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(29, 'Emp008', 'Monday', '07:00 AM', '01:00 PM', 'Available'),
(30, 'Emp008', 'Tuesday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(31, 'Emp008', 'Wednesday', '07:00 AM', '03:00 PM', 'Available'),
(32, 'Emp008', 'Thursday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(33, 'Emp008', 'Friday', '07:00 AM', '01:00 PM', 'Available'),
(34, 'Emp008', 'Saturday', '07:00 AM', '03:00 PM', 'Available'),
(35, 'Emp008', 'Sunday', '07:00 AM', '01:00 PM', 'UnAvailable'),
(36, 'Emp010', 'Monday', '09:00 AM', '03:00 PM', 'Available'),
(37, 'Emp010', 'Tuesday', '09:00 AM', '03:00 PM', 'Available'),
(38, 'Emp010', 'Wednesday', '07:00 AM', '01:00 PM', 'Available'),
(39, 'Emp010', 'Thursday', '09:00 AM', '03:00 PM', 'Available'),
(40, 'Emp010', 'Friday', '07:00 AM', '01:00 PM', 'Available'),
(41, 'Emp010', 'Saturday', '07:00 AM', '03:00 PM', 'Available'),
(42, 'Emp010', 'Sunday', '07:00 AM', '01:00 PM', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tbldentalservice`
--
-- Creation: Sep 11, 2017 at 11:51 AM
--

DROP TABLE IF EXISTS `tbldentalservice`;
CREATE TABLE IF NOT EXISTS `tbldentalservice` (
  `intServicesCode` int(11) NOT NULL,
  `strServicesName` varchar(45) NOT NULL,
  `intfkCategoryCode` int(5) NOT NULL,
  `dblServicesPrice` decimal(8,2) NOT NULL,
  `strUnit` varchar(35) NOT NULL,
  `colorcode` varchar(40) NOT NULL,
  `dtmCreatedDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbldentalservice`
--

INSERT INTO `tbldentalservice` (`intServicesCode`, `strServicesName`, `intfkCategoryCode`, `dblServicesPrice`, `strUnit`, `colorcode`, `dtmCreatedDate`) VALUES
(1, 'Tooth Extraction', 1, '600.23', 'Per Tooth', 'Red', '2017-10-14'),
(2, 'Oral Prophylaxis', 1, '77777.89', 'Per Session', 'Navy', '2018-01-21'),
(3, 'Braces', 1, '19828.98', 'Per Appliance(upper or lower)', 'Gray', '2017-10-18'),
(4, 'Tooth Filling', 1, '500.00', 'Per Tooth', 'Maroon', '2017-10-14'),
(5, 'Jacket', 2, '10000.00', 'Per Tooth', 'Purple', '2017-10-04'),
(6, 'Extraction', 1, '100.00', 'Per Tooth', 'ff400000', '2017-10-05'),
(7, 'kajdfkajsdklf', 1, '123.23', 'Per Tooth', 'Fuchsia', '2017-10-06'),
(8, 'Jacketp', 1, '1238.00', 'Per Tooth', 'ff00ff80', '2017-10-14'),
(9, 'Jackete', 1, '290.05', 'Per Tooth', 'Blue', '2017-10-14'),
(10, 'Jackets', 1, '9022.00', 'Per Tooth', 'ffff80ff', '2017-12-04'),
(11, 'Jacketr ', 1, '9898.99', 'Per Tooth', 'ff804000', '2017-10-15'),
(12, 'Golden Coating', 3, '909.00', 'Per Procedure', 'ff408080', '2017-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbldiscount`
--
-- Creation: Aug 02, 2017 at 03:51 AM
--

DROP TABLE IF EXISTS `tbldiscount`;
CREATE TABLE IF NOT EXISTS `tbldiscount` (
  `intDiscount` int(11) NOT NULL,
  `strDiscountName` varchar(45) NOT NULL,
  `dblDiscountPercentage` double DEFAULT NULL,
  `strDiscountDesc` text,
  `strStatus` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbldiscount`
--

INSERT INTO `tbldiscount` (`intDiscount`, `strDiscountName`, `dblDiscountPercentage`, `strDiscountDesc`, `strStatus`) VALUES
(0, 'No Discount', 0, 'Two year consistent regular patients', 'Active'),
(1, 'Senior Discount', 34, 'Senior citizens', 'Active'),
(2, 'Student Discount', 20, 'Others and others', 'Active'),
(3, 'Family Discount', 50, 'Relatives ko', 'Active'),
(4, 'Special Ako', 20, 'Wala lang', 'Active'),
(5, 'PWD Discount', 50, 'People with Disability and etc', 'Active'),
(6, 'Admin Discount', 12, 'trip ko eh', 'Active'),
(7, 'Discount daw', 2, 'kjakldsjfasl', 'Active'),
(8, 'Loyalty', 12, '123', 'Active'),
(9, 'Suki Discount', 12, 'Regular patients', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--
-- Creation: Sep 10, 2017 at 02:29 PM
--

DROP TABLE IF EXISTS `tblemployee`;
CREATE TABLE IF NOT EXISTS `tblemployee` (
  `charEmpID` varchar(10) NOT NULL,
  `strEmpFirst` varchar(45) NOT NULL,
  `strEmpMid` varchar(45) NOT NULL,
  `strEmpLast` varchar(45) NOT NULL,
  `strImage` varchar(200) NOT NULL,
  `dtmEmpBirthdate` date NOT NULL,
  `charContact` char(12) NOT NULL,
  `strEmpAddress` varchar(80) NOT NULL,
  `strEmpGender` varchar(20) NOT NULL,
  `intEmpRoleID` int(11) NOT NULL,
  `strLicense` varchar(50) NOT NULL,
  `strUsername` varchar(45) NOT NULL,
  `strPassword` varchar(45) NOT NULL,
  `strEmpStatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`charEmpID`, `strEmpFirst`, `strEmpMid`, `strEmpLast`, `strImage`, `dtmEmpBirthdate`, `charContact`, `strEmpAddress`, `strEmpGender`, `intEmpRoleID`, `strLicense`, `strUsername`, `strPassword`, `strEmpStatus`) VALUES
('Emp001', 'Les', 'Lest', 'Lestrange', 'C://Users//Laxteroid//Pictures//Saved Pictures//Anime Manga//Absolute BF//Volume 01 - Zettai Kareshi 1.1 Lover Shop//001.jpg', '1999-12-04', '09123781273', 'Quezon', 'Female', 3, '', 'admin', '123', 'Active'),
('Emp002', 'Leurant', 'Lopez', 'Lebront', 'C://Users//Laxteroid//Pictures//Saved Pictures//Anime Manga//Absolute BF//Volume 01 - Zettai Kareshi 1.1 Lover Shop//002.jpg', '1990-07-13', '09181238718', 'Pasig', 'Male', 1, '', 'dent1', '123', 'Active'),
('Emp003', 'Kate Amanda', 'Torres', 'Arevalo', 'C://Users//Laxteroid//Pictures//Saved Pictures//Anime Manga//Absolute BF//Volume 01 - Zettai Kareshi 1.1 Lover Shop//003.jpg', '1999-10-18', '09123748173', 'Quezon City', 'Female', 2, '', 'sect1', '123', 'Active'),
('Emp004', 'Leslie', 'Ostia', 'Escaro', 'C://Users//Laxteroid//Pictures//Saved Pictures//Anime Manga//Absolute BF//Volume 01 - Zettai Kareshi 1.1 Lover Shop//004.jpg', '1999-12-04', '09876543456', 'Batangas City', 'Female', 1, '', 'les02', '123', 'Inactive'),
('Emp005', 'kevin', 'c', 'salud', 'C://Users//Laxteroid//Pictures//TaeTae1.jpg', '1999-09-16', '80918381023', 'dsakdjalkdkl', 'Female', 1, '', 'kcs', 'kcs', 'Active'),
('Emp006', 'Chris Joy', 'Torres', 'Arevalo', 'C://Users//Laxteroid//Pictures//Camera Roll//WIN_20170718_191613.JPG', '1984-06-12', '08976564567', 'quezon city', 'Female', 1, '', 'cjare', '3244185981728979115075721453575112', 'Active'),
('Emp007', 'Henry', 'Hapit', 'Hernandez', 'C://Users//Laxteroid//Pictures//TaeTae1.jpg', '1993-05-10', '09173287817', 'Pasig', 'Male', 3, '', 'adm1', '123', 'Active'),
('Emp008', 'Fe', 'Dacanay', 'Ibasan', 'C://Users//Laxteroid//Pictures//Camera Roll//WIN_20170718_191613.JPG', '1957-10-28', '09062711700', 'Antipolo CIty', 'Female', 1, '', 'fedcny', '123123', 'Active'),
('Emp009', 'nanana', 'kakaka', 'KAte', 'C://Users//Laxteroid//Pictures//Camera Roll//WIN_20170718_191613.JPG', '1984-06-12', '09876767676', 'kadhajdhjafd', 'Male', 1, '17161616166161', 'kakaka', '123', 'Active'),
('Emp010', 'Alex', '', 'Uy', 'C://Users//Laxteroid//Pictures//Camera Roll//WIN_20170718_191613.JPG', '1999-09-29', '09787878782', 'Manila', 'Male', 1, '', 'dent2', '123', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblmodule`
--
-- Creation: Mar 28, 2017 at 01:47 PM
--

DROP TABLE IF EXISTS `tblmodule`;
CREATE TABLE IF NOT EXISTS `tblmodule` (
  `intModuleID` int(11) NOT NULL,
  `strModuleName` varchar(45) NOT NULL,
  `strModuleDesc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmodule`
--

INSERT INTO `tblmodule` (`intModuleID`, `strModuleName`, `strModuleDesc`) VALUES
(1, 'Employee Module', 'Accessed by'),
(2, 'Set Schedule Module', 'Accessed by'),
(3, 'Treatment Module', 'Accessed by'),
(4, 'Category Module', 'Accessed by'),
(5, 'Specialization Module', 'Accessed by'),
(6, 'Patient Detail Module', 'Accessed by'),
(7, 'Request Appointment Module', 'Accessed by'),
(8, 'Approve Appointment Module', 'Accessed by'),
(9, 'Dental Treatment Module', 'Accessed by'),
(10, 'Billing Module', 'Accessed by'),
(11, 'Reports Module', 'Accessed by'),
(12, 'Queries Module', 'Accessed by'),
(13, 'Module Permission', 'Accessed by'),
(14, 'Set Role Module', 'Accessed by'),
(15, 'Tax and Fee Module', 'Accessed by'),
(16, 'Discount Module', 'Accessed by');

-- --------------------------------------------------------

--
-- Table structure for table `tblmodulepermission`
--
-- Creation: Sep 17, 2017 at 05:32 PM
--

DROP TABLE IF EXISTS `tblmodulepermission`;
CREATE TABLE IF NOT EXISTS `tblmodulepermission` (
  `intPermissionID` int(11) NOT NULL,
  `intPermissionRole` int(11) NOT NULL,
  `intPermissionModule` int(11) NOT NULL,
  `strPermissionStat` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmodulepermission`
--

INSERT INTO `tblmodulepermission` (`intPermissionID`, `intPermissionRole`, `intPermissionModule`, `strPermissionStat`) VALUES
(1, 1, 1, 'Applicable'),
(2, 1, 2, 'Applicable'),
(3, 1, 3, 'Applicable'),
(4, 1, 4, 'Applicable'),
(5, 1, 5, 'Applicable'),
(6, 1, 6, 'Applicable'),
(7, 1, 7, 'Applicable'),
(8, 1, 8, 'Applicable'),
(9, 1, 9, 'Applicable'),
(10, 1, 10, 'Applicable'),
(11, 1, 11, 'Applicable'),
(12, 1, 12, 'Not Applicable'),
(13, 1, 13, 'Not Applicable'),
(14, 1, 14, 'Not Applicable'),
(15, 1, 15, 'Not Applicable'),
(16, 1, 16, 'Applicable'),
(17, 2, 1, 'Applicable'),
(18, 2, 2, 'Applicable'),
(19, 2, 3, 'Applicable'),
(20, 2, 4, 'Applicable'),
(21, 2, 5, 'Not Applicable'),
(22, 2, 6, 'Applicable'),
(23, 2, 7, 'Applicable'),
(24, 2, 8, 'Not Applicable'),
(25, 2, 9, 'Applicable'),
(26, 2, 10, 'Not Applicable'),
(27, 2, 11, 'Applicable'),
(28, 2, 12, 'Not Applicable'),
(29, 2, 13, 'Not Applicable'),
(30, 2, 14, 'Not Applicable'),
(31, 2, 15, 'Not Applicable'),
(32, 2, 16, 'Not Applicable'),
(33, 3, 1, 'Applicable'),
(34, 3, 2, 'Applicable'),
(35, 3, 3, 'Applicable'),
(36, 3, 4, 'Applicable'),
(37, 3, 5, 'Applicable'),
(38, 3, 6, 'Applicable'),
(39, 3, 7, 'Applicable'),
(40, 3, 8, 'Applicable'),
(41, 3, 9, 'Applicable'),
(42, 3, 10, 'Applicable'),
(43, 3, 11, 'Applicable'),
(44, 3, 12, 'Applicable'),
(45, 3, 13, 'Applicable'),
(46, 3, 14, 'Applicable'),
(47, 3, 15, 'Applicable'),
(48, 3, 16, 'Applicable'),
(49, 4, 1, 'Applicable'),
(50, 4, 2, 'Not Applicable'),
(51, 4, 3, 'Not Applicable'),
(52, 4, 4, 'Not Applicable'),
(53, 4, 5, 'Applicable'),
(54, 4, 6, 'Not Applicable'),
(55, 4, 7, 'Not Applicable'),
(56, 4, 8, 'Not Applicable'),
(57, 4, 9, 'Not Applicable'),
(58, 4, 10, 'Applicable'),
(59, 4, 11, 'Applicable'),
(60, 4, 12, 'Not Applicable'),
(61, 4, 13, 'Not Applicable'),
(62, 4, 14, 'Not Applicable'),
(63, 4, 15, 'Not Applicable'),
(64, 4, 1, 'Applicable'),
(65, 4, 2, 'Not Applicable'),
(66, 4, 3, 'Not Applicable'),
(67, 4, 4, 'Not Applicable'),
(68, 4, 5, 'Applicable'),
(69, 4, 6, 'Not Applicable'),
(70, 4, 7, 'Not Applicable'),
(71, 4, 8, 'Not Applicable'),
(72, 4, 9, 'Not Applicable'),
(73, 4, 10, 'Applicable'),
(74, 4, 11, 'Applicable'),
(75, 4, 12, 'Not Applicable'),
(76, 4, 13, 'Not Applicable'),
(77, 4, 14, 'Not Applicable'),
(78, 4, 15, 'Not Applicable');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--
-- Creation: Sep 22, 2017 at 03:06 AM
--

DROP TABLE IF EXISTS `tblpatient`;
CREATE TABLE IF NOT EXISTS `tblpatient` (
  `charPatientID` varchar(10) NOT NULL,
  `strPatientFirst` varchar(45) NOT NULL,
  `strPatientMid` varchar(45) NOT NULL,
  `strPatientLast` varchar(45) NOT NULL,
  `strPatientAddress` varchar(80) NOT NULL,
  `dtmpatientBirthdate` date NOT NULL,
  `strPatientGender` varchar(6) NOT NULL,
  `strPatientContact` varchar(20) NOT NULL,
  `strPatientEmail` varchar(45) NOT NULL,
  `strHistory` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`charPatientID`, `strPatientFirst`, `strPatientMid`, `strPatientLast`, `strPatientAddress`, `dtmpatientBirthdate`, `strPatientGender`, `strPatientContact`, `strPatientEmail`, `strHistory`) VALUES
('Pat0001', 'Ellen', 'T', 'Minn', 'Daegu', '1997-06-23', 'Female', '09123456789', 'tarrigae@yahoo.com', NULL),
('Pat0002', 'kevin', 'c', 'salud', 'asd', '1999-09-16', 'Female', '09187889987', 'kcs@yahoo.com', NULL),
('Pat0003', 'Wale', 'Dee', 'Salud', 'zxZX', '1997-09-17', 'Female', '09127878789', 'zz@yahoo.com', NULL),
('Pat0004', 'Kris', 'Torres', 'Arevalo', 'jandasfasd', '2010-02-02', 'Male', '09876456789', 'kajadajdkfs@gmail.com', NULL),
('Pat0005', 'Jae', 'T', 'Minn', 'Pasig', '1995-03-09', 'Male', '09123787878', 'jaetminn@gmail.com', NULL),
('Pat0006', 'James', 'T', 'Minn', 'Daegu', '1994-06-14', 'Male', '09819283912', 'jtminn@mail.com', NULL),
('Pat0007', 'Xander', 'Pang-it', 'Ford', 'Manila', '1996-04-04', 'Male', '09912312312', 'xanderfors@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpatientappointment`
--
-- Creation: Dec 05, 2017 at 06:55 AM
--

DROP TABLE IF EXISTS `tblpatientappointment`;
CREATE TABLE IF NOT EXISTS `tblpatientappointment` (
  `intAppointmentNo` int(11) NOT NULL,
  `strClientFirst` varchar(50) NOT NULL,
  `strClientMid` varchar(50) NOT NULL,
  `strClientLast` varchar(50) NOT NULL,
  `strClientContact` varchar(11) DEFAULT NULL,
  `dtmDentistAvailableDate` date NOT NULL,
  `strReqTimeStart` varchar(10) DEFAULT NULL,
  `intfkDayNo` int(11) NOT NULL,
  `intfkAppointServicesCode` int(11) NOT NULL,
  `strAppointmentType` varchar(13) NOT NULL,
  `strAppointmentStatus` varchar(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpatientappointment`
--

INSERT INTO `tblpatientappointment` (`intAppointmentNo`, `strClientFirst`, `strClientMid`, `strClientLast`, `strClientContact`, `dtmDentistAvailableDate`, `strReqTimeStart`, `intfkDayNo`, `intfkAppointServicesCode`, `strAppointmentType`, `strAppointmentStatus`) VALUES
(1, 'Ellen', 'T', 'Minn', '09123456789', '2017-09-19', '09:00 AM', 2, 1, 'Booked', 'Attended'),
(2, 'kevin', 'c', 'salud', '77987889987', '2017-09-19', '09:00 AM', 2, 1, 'Booked', 'Attended'),
(3, 'ww', 'rr', 'salud', '89989929922', '2017-09-17', '9:41 AM', 7, 1, 'Walk In', 'Attended'),
(4, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-09-17', '2:42 PM', 7, 1, 'Walk In', 'Attended'),
(5, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-09-20', '09:00 AM', 3, 1, 'Booked', 'Attended'),
(6, 'kevin', 'c', 'salud', '09187889987', '2017-09-19', '10:49 PM', 2, 1, 'Walk In', 'Attended'),
(7, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-09-20', '3:42 PM', 3, 1, 'Walk In', 'Attended'),
(8, 'Ellen', 'T', 'Minn', '09123456789', '2017-09-20', '3:47 PM', 3, 1, 'Walk In', 'Attended'),
(9, 'kevin', 'c', 'salud', '09187889987', '2017-09-20', '4:06 PM', 17, 1, 'Walk In', 'Attended'),
(10, 'kevin', 'c', 'salud', '09187889987', '2017-09-20', '4:09 PM', 17, 1, 'Walk In', 'Attended'),
(11, 'Ellen', 'T', 'Minn', '09123456789', '2017-09-21', '4:54 PM', 4, 1, 'Walk In', 'Attended'),
(12, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-09-21', '5:13 PM', 4, 1, 'Walk In', 'Attended'),
(13, 'kevin', 'c', 'salud', '09187889987', '2017-09-21', '5:16 PM', 4, 1, 'Walk In', 'Attended'),
(14, 'Jae', 'T', 'Minn', '09123787878', '2017-09-21', '5:24 PM', 4, 1, 'Walk In', 'Attended'),
(15, 'James', 'T', 'Minn', '09819283912', '2017-09-21', '5:31 PM', 4, 1, 'Walk In', 'Attended'),
(16, 'ww', 'rr', 'salud', '09127878789', '2017-09-21', '7:37 PM', 4, 1, 'Walk In', 'Attended'),
(17, 'Ellen', 'T', 'Minn', '09123456789', '2017-09-23', '11:00 AM', 6, 1, 'Booked', 'Attended'),
(18, 'Ellen', 'T', 'Minn', '09123456789', '2017-09-28', '09:00 AM', 11, 1, 'Booked', 'Attended'),
(19, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-09-24', '10:51 AM', 7, 1, 'Walk In', 'Attended'),
(20, 'James', 'T', 'Minn', '09819283912', '2017-09-30', '09:00 AM', 6, 4, 'Booked', 'Attended'),
(21, 'Jae', 'T', 'Minn', '09123787878', '2017-10-01', '09:00 AM', 7, 1, 'Booked', 'Attended'),
(22, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-02', '07:00 AM', 1, 1, 'Booked', 'Attended'),
(23, 'Jae', 'T', 'Minn', '09123787878', '2017-10-02', '09:00 AM', 8, 4, 'Booked', 'Attended'),
(24, 'James', 'T', 'Minn', '09819283912', '2017-10-03', '12:47 PM', 9, 1, 'Walk In', 'Attended'),
(25, 'Leslie', 'Ostia', 'Escaro', '09162979479', '2017-10-06', '09:00 AM', 5, 4, 'Booked', 'Reserved'),
(26, 'Leslie', 'Ostia', 'Escaro', '09162979479', '2017-10-06', '09:00 AM', 5, 4, 'Booked', 'Reserved'),
(27, 'Jae', 'T', 'Minn', '09123787878', '2017-10-04', '07:00 AM', 17, 1, 'Booked', 'Attended'),
(28, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-05', '09:00 AM', 4, 1, 'Booked', 'Attended'),
(29, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-05', '09:00 AM', 11, 1, 'Booked', 'Attended'),
(30, 'Jae', 'T', 'Minn', '09123787878', '2017-10-05', '09:00 AM', 11, 1, 'Booked', 'Attended'),
(31, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-05', '09:00 AM', 4, 1, 'Booked', 'Attended'),
(32, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-05', '09:00 AM', 4, 1, 'Booked', 'Attended'),
(33, 'Xander', 'Pang-it', 'Ford', '09912312312', '2017-10-05', '1:37 AM', 18, 1, 'Walk In', 'Attended'),
(34, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-10-05', '1:44 AM', 18, 1, 'Walk In', 'Attended'),
(35, 'Jae', 'T', 'Minn', '09123787878', '2017-10-07', '12:00 AM', 6, 1, 'Booked', 'Attended'),
(36, 'Jae', 'T', 'Minn', '09123787878', '2017-10-08', '12:00 AM', 7, 1, 'Booked', 'Attended'),
(37, 'James', 'T', 'Minn', '09819283912', '2017-10-05', '6:17 PM', 18, 1, 'Walk In', 'Attended'),
(38, 'kevin', 'c', 'salud', '09187889987', '2017-10-05', '8:13 PM', 18, 1, 'Walk In', 'Attended'),
(39, 'Xander', 'Pang-it', 'Ford', '09912312312', '2017-10-06', '1:46 AM', 5, 1, 'Walk In', 'Attended'),
(40, 'Jae', 'T', 'Minn', '09123787878', '2017-10-12', '12:00 AM', 4, 1, 'Booked', 'Attended'),
(41, 'kevin', 'c', 'salud', 'asd', '2017-10-06', '12:39 PM', 5, 1, 'Walk In', 'Attended'),
(42, 'Kris', 'Torres', 'Arevalo', 'jandasfasd', '2017-10-06', '12:46 PM', 5, 1, 'Walk In', 'Attended'),
(43, 'Jae', 'T', 'Minn', 'Pasig', '2017-10-06', '12:59 PM', 5, 4, 'Walk In', 'Attended'),
(44, 'James', 'T', 'Minn', 'Daegu', '2017-10-06', '1:05 PM', 5, 1, 'Walk In', 'Attended'),
(45, 'Ellen', 'T', 'Minn', 'Daegu', '2017-10-09', '5:32 PM', 29, 1, 'Walk In', 'Attended'),
(46, 'Kris', 'Torres', 'Arevalo', 'jandasfasd', '2017-10-09', '5:41 PM', 29, 1, 'Walk In', 'Attended'),
(47, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-10', '3:51 PM', 16, 1, 'Walk In', 'Attended'),
(48, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-11', '07:00 AM', 3, 1, 'Booked', 'Attended'),
(49, 'Jae', 'T', 'Minn', '09123787878', '2017-10-18', '12:00 AM', 3, 1, 'Booked', 'Attended'),
(50, 'kevin', 'c', 'salud', '09187889987', '2017-10-13', '11:43 AM', 33, 1, 'Walk In', 'Attended'),
(51, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-10-13', '11:58 AM', 33, 1, 'Walk In', 'Attended'),
(52, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-13', '12:03 PM', 33, 1, 'Walk In', 'Attended'),
(53, 'James', 'T', 'Minn', '09819283912', '2017-10-13', '12:07 PM', 33, 1, 'Walk In', 'Attended'),
(54, 'Xander', 'Pang-it', 'Ford', '09912312312', '2017-10-13', '12:10 PM', 33, 1, 'Walk In', 'Attended'),
(55, 'Jae', 'T', 'Minn', '09123787878', '2017-10-13', '12:13 PM', 33, 1, 'Walk In', 'Attended'),
(56, 'ww', 'rr', 'salud', '09127878789', '2017-10-13', '12:29 PM', 33, 1, 'Walk In', 'Attended'),
(57, 'Xander', 'Pang-it', 'Ford', '09912312312', '2017-10-14', '12:39 PM', 20, 1, 'Walk In', 'Attended'),
(58, 'kevin', 'c', 'salud', '09187889987', '2017-10-14', '12:48 PM', 20, 1, 'Walk In', 'Attended'),
(59, 'ww', 'rr', 'salud', '09127878789', '2017-10-14', '12:54 PM', 20, 1, 'Walk In', 'Attended'),
(60, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-10-14', '12:58 PM', 20, 1, 'Walk In', 'Attended'),
(61, 'Jae', 'T', 'Minn', '09123787878', '2017-10-16', '07:00 AM', 22, 1, 'Booked', 'Attended'),
(62, 'ww', 'rr', 'salud', '09127878789', '2017-10-18', '1:17 PM', 17, 1, 'Walk In', 'Attended'),
(63, 'Jae', 'T', 'Minn', '09123787878', '2017-10-20', '12:00 AM', 5, 1, 'Booked', 'Attended'),
(64, 'kevin', 'c', 'salud', '09187889987', '2017-10-18', '2:22 PM', 17, 1, 'Walk In', 'Attended'),
(65, 'Jae', 'T', 'Minn', '09123787878', '2017-10-25', '12:00 AM', 3, 1, 'Booked', 'Attended'),
(66, 'Jae', 'T', 'Minn', '09123787878', '2017-10-14', '9:11 AM', 20, 1, 'Walk In', 'Attended'),
(67, 'Jae', 'T', 'Minn', '09123787878', '2017-10-19', '12:00 AM', 4, 1, 'Booked', 'Attended'),
(68, 'James', 'T', 'Minn', '09819283912', '2017-10-14', '9:25 AM', 20, 1, 'Walk In', 'Attended'),
(69, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-14', '9:26 AM', 20, 1, 'Walk In', 'Attended'),
(70, 'Jae', 'T', 'Minn', '09123787878', '2017-10-23', '07:00 AM', 2, 1, 'Booked', 'Attended'),
(71, 'Ellen', 'T', 'Minn', '09123456789', '2017-10-15', '11:05 AM', 42, 1, 'Walk In', 'Attended'),
(72, 'Kris', 'Torres', 'Arevalo', '09876456789', '2017-10-15', '11:15 AM', 42, 1, 'Walk In', 'Attended'),
(73, 'Donn', '', 'Salvador', '09876543234', '2017-10-28', '12:00 AM', 41, 1, 'Booked', 'Reserved'),
(74, 'Ellen', 'T', 'Minn', '09123456789', '2017-12-05', '07:00 AM', 2, 1, 'Booked', 'Reserved'),
(75, 'Jae', 'T', 'Minn', '09123787878', '2017-12-05', '09:00 AM', 37, 1, 'Booked', 'Attended'),
(76, 'Jae', 'T', 'Minn', '09123787878', '2018-01-25', '09:00 AM', 4, 1, 'Booked', 'Reserved'),
(77, 'kevin', 'c', 'salud', '09187889987', '2018-01-14', '10:29 AM', 42, 1, 'Walk In', 'Attended'),
(78, 'Jae', 'T', 'Minn', '09123787878', '2018-02-01', '12:00 AM', 4, 1, 'Booked', 'Reserved'),
(79, 'Wale', 'Dee', 'Salud', '09127878789', '2018-01-21', '10:36 AM', 42, 1, 'Walk In', 'Waiting'),
(80, 'kevin', 'c', 'salud', '09187889987', '2018-01-21', '10:42 AM', 42, 1, 'Walk In', 'Attended');

-- --------------------------------------------------------

--
-- Table structure for table `tblpaymentdetail`
--
-- Creation: Sep 11, 2017 at 11:47 AM
--

DROP TABLE IF EXISTS `tblpaymentdetail`;
CREATE TABLE IF NOT EXISTS `tblpaymentdetail` (
  `intPayment` int(11) NOT NULL,
  `strfkReceiptNo` char(6) NOT NULL,
  `strPaymentType` varchar(15) NOT NULL,
  `datPaymentDate` datetime NOT NULL,
  `dblPaymentAmount` decimal(10,2) NOT NULL,
  `dblBalance` decimal(10,2) NOT NULL,
  `decChange` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpaymentdetail`
--

INSERT INTO `tblpaymentdetail` (`intPayment`, `strfkReceiptNo`, `strPaymentType`, `datPaymentDate`, `dblPaymentAmount`, `dblBalance`, `decChange`) VALUES
(1, 'BIL002', 'Partial', '2017-09-17 00:00:00', '50545.00', '0.00', '0.00'),
(2, 'BIL003', 'Full', '2017-09-19 00:00:00', '40336.80', '0.00', '0.00'),
(3, 'BIL004', 'Partial', '2017-09-21 00:00:00', '22028.40', '0.00', '0.00'),
(4, 'BIL005', 'Partial', '2017-09-21 00:00:00', '20168.40', '0.00', '0.00'),
(5, 'BIL006', 'Partial', '2017-09-21 00:00:00', '20168.40', '20168.40', '0.00'),
(6, 'BIL007', 'Partial', '2017-09-21 00:00:00', '20292.40', '0.00', '0.00'),
(7, 'BIL008', 'Full', '2017-09-21 00:00:00', '40336.80', '0.00', '0.00'),
(8, 'BIL009', 'Full', '2017-09-24 00:00:00', '809.60', '0.00', '0.00'),
(9, 'BIL002', 'Full', '2017-10-04 00:00:00', '50545.00', '0.00', '0.00'),
(10, 'BIL002', 'Full', '2017-10-04 00:00:00', '50545.00', '0.00', '0.00'),
(11, 'BIL010', 'Full', '2017-10-04 00:00:00', '1321.60', '0.00', '0.00'),
(12, 'BIL010', 'Full', '2017-10-04 00:00:00', '1678.88', '0.00', '0.00'),
(13, 'BIL010', 'Full', '2017-10-04 00:00:00', '1678.88', '0.00', '0.00'),
(14, 'BIL010', 'Full', '2017-10-04 00:00:00', '1678.88', '0.00', '0.00'),
(15, 'BIL010', 'Full', '2017-10-04 00:00:00', '50.00', '610.80', '0.00'),
(16, 'BIL006', 'Full', '2017-10-04 00:00:00', '20000.00', '168.40', '0.00'),
(17, 'BIL006', 'Full', '2017-10-04 00:00:00', '20000.00', '168.40', '0.00'),
(18, 'BIL010', 'Full', '2017-10-04 00:00:00', '1000.00', '0.00', '339.20'),
(19, 'BIL010', 'Full', '2017-10-04 00:00:00', '1000.00', '0.00', '339.20'),
(20, 'BIL010', 'Partial', '2017-10-04 00:00:00', '800.00', '0.00', '139.20'),
(21, 'BIL006', 'Full', '2017-10-05 00:00:00', '30000.00', '0.00', '9831.60'),
(22, 'BIL004', 'Full', '2017-10-05 00:00:00', '22028.40', '0.00', '0.00'),
(23, 'BIL004', 'Full', '2017-10-05 00:00:00', '22028.40', '0.00', '0.00'),
(24, 'BIL005', 'Full', '2017-10-05 00:00:00', '20168.40', '0.00', '0.00'),
(25, 'BIL011', 'Full', '2017-10-05 00:00:00', '2000.00', '0.00', '504.80'),
(26, 'BIL012', 'Full', '2017-10-05 00:00:00', '12000.00', '0.00', '676.00'),
(28, 'BIL013', 'Full', '2017-10-06 00:00:00', '12000.00', '0.00', '552.00'),
(29, 'BIL014', 'Full', '2017-10-06 00:00:00', '2000.00', '0.00', '317.40'),
(30, 'BIL015', 'Full', '2017-10-06 00:00:00', '2000.00', '0.00', '575.26'),
(31, 'BIL016', 'Full', '2017-10-06 00:00:00', '2900.00', '0.00', '457.18'),
(32, 'BIL017', 'Full', '2017-10-09 00:00:00', '22500.00', '0.00', '100.00'),
(33, 'BIL018', 'Full', '2017-10-13 00:00:00', '800.00', '0.00', '135.48'),
(34, 'BIL019', 'Full', '2017-10-14 00:00:00', '6000.00', '0.00', '196.67'),
(35, 'BIL020', 'Full', '2017-10-18 00:00:00', '1000.00', '0.00', '117.48'),
(36, 'BIL021', 'Full', '2017-10-18 00:00:00', '12000.00', '0.00', '109.80'),
(37, 'BIL022', 'Full', '2017-10-18 00:00:00', '13000.00', '0.00', '968.47'),
(38, 'BIL023', 'Full', '2017-10-14 00:00:00', '6000.00', '0.00', '213.60'),
(39, 'BIL024', 'Full', '2017-10-14 00:00:00', '1300.00', '0.00', '65.67'),
(40, 'BIL025', 'Full', '2017-10-15 00:00:00', '1000.00', '0.00', '166.54'),
(41, 'BIL007', 'Full', '2017-10-15 00:00:00', '21000.00', '0.00', '707.60'),
(42, 'BIL026', 'Full', '2017-10-15 00:00:00', '900.00', '0.00', '66.54'),
(43, 'BIL027', 'Full', '2017-12-05 00:00:00', '6000.00', '0.00', '313.20'),
(44, 'BIL028', 'Full', '2018-01-14 00:00:00', '600.00', '0.00', '74.47'),
(45, 'BIL028', 'Full', '2018-01-14 00:00:00', '600.00', '0.00', '74.47'),
(46, 'BIL029', 'Full', '2018-01-21 00:00:00', '1000.00', '0.00', '474.47');

-- --------------------------------------------------------

--
-- Table structure for table `tblreceiptheader`
--
-- Creation: Sep 27, 2017 at 04:35 AM
--

DROP TABLE IF EXISTS `tblreceiptheader`;
CREATE TABLE IF NOT EXISTS `tblreceiptheader` (
  `strReceiptNo` char(6) NOT NULL,
  `strfkTransactionID` char(6) NOT NULL,
  `datDate` datetime NOT NULL,
  `datDueDate` datetime NOT NULL,
  `decAmountToPay` decimal(10,2) NOT NULL,
  `intfkDiscount` int(11) DEFAULT NULL,
  `strBillStat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblreceiptheader`
--

INSERT INTO `tblreceiptheader` (`strReceiptNo`, `strfkTransactionID`, `datDate`, `datDueDate`, `decAmountToPay`, `intfkDiscount`, `strBillStat`) VALUES
('BIL001', 'TRN001', '2017-09-17 00:00:00', '2017-10-17 00:00:00', '89251.96', 0, 'Fully Paid'),
('BIL002', 'TRN002', '2017-09-17 00:00:00', '2017-10-17 00:00:00', '101090.00', 0, 'Fully Paid'),
('BIL003', 'TRN003', '2017-09-19 00:00:00', '2017-10-19 00:00:00', '40336.80', 0, 'Fully Paid'),
('BIL004', 'TRN005', '2017-09-21 00:00:00', '2017-10-21 00:00:00', '44056.80', 0, 'Fully Paid'),
('BIL005', 'TRN007', '2017-09-21 00:00:00', '2017-10-21 00:00:00', '40336.80', 0, 'Fully Paid'),
('BIL006', 'TRN008', '2017-09-21 00:00:00', '2017-10-21 00:00:00', '40336.80', 0, 'Fully Paid'),
('BIL007', 'TRN009', '2017-09-21 00:00:00', '2017-10-21 00:00:00', '40584.80', 0, 'Fully Paid'),
('BIL008', 'TRN010', '2017-09-21 00:00:00', '2017-10-21 00:00:00', '40336.80', 0, 'Fully Paid'),
('BIL009', 'TRN011', '2017-09-24 00:00:00', '2017-10-24 00:00:00', '809.60', 4, 'Fully Paid'),
('BIL010', 'TRN012', '2017-10-04 00:00:00', '2017-11-03 00:00:00', '1321.60', 0, 'Fully Paid'),
('BIL011', 'TRN028', '2017-10-05 00:00:00', '2017-11-04 00:00:00', '1495.20', 0, 'Fully Paid'),
('BIL012', 'TRN030', '2017-10-05 00:00:00', '2017-11-04 00:00:00', '11324.00', 0, 'Fully Paid'),
('BIL013', 'TRN033', '2017-10-06 00:00:00', '2017-11-05 00:00:00', '11448.00', 0, 'Fully Paid'),
('BIL014', 'TRN034', '2017-10-06 00:00:00', '2017-11-05 00:00:00', '1682.60', 0, 'Fully Paid'),
('BIL015', 'TRN039', '2017-10-06 00:00:00', '2017-11-05 00:00:00', '1424.74', 0, 'Fully Paid'),
('BIL016', 'TRN042', '2017-10-06 00:00:00', '2017-11-05 00:00:00', '2442.82', 5, 'Fully Paid'),
('BIL017', 'TRN044', '2017-10-09 00:00:00', '2017-11-08 00:00:00', '22400.00', 0, 'Fully Paid'),
('BIL018', 'TRN048', '2017-10-13 00:00:00', '2017-11-12 00:00:00', '664.52', 0, 'Fully Paid'),
('BIL019', 'TRN058', '2017-10-14 00:00:00', '2017-11-13 00:00:00', '5803.33', 3, 'Fully Paid'),
('BIL020', 'TRN059', '2017-10-18 00:00:00', '2017-11-17 00:00:00', '882.52', 3, 'Fully Paid'),
('BIL021', 'TRN060', '2017-10-18 00:00:00', '2017-11-17 00:00:00', '11890.20', 3, 'Fully Paid'),
('BIL022', 'TRN061', '2017-10-18 00:00:00', '2017-11-17 00:00:00', '12031.53', 3, 'Fully Paid'),
('BIL023', 'TRN062', '2017-10-14 00:00:00', '2017-11-13 00:00:00', '5786.40', 3, 'Fully Paid'),
('BIL024', 'TRN064', '2017-10-14 00:00:00', '2017-11-13 00:00:00', '1234.33', 2, 'Fully Paid'),
('BIL025', 'TRN065', '2017-10-15 00:00:00', '2017-11-14 00:00:00', '833.46', 0, 'Fully Paid'),
('BIL026', 'TRN066', '2017-10-15 00:00:00', '2017-11-14 00:00:00', '833.46', 0, 'Fully Paid'),
('BIL027', 'TRN067', '2017-12-05 00:00:00', '2018-01-04 00:00:00', '5686.80', 3, 'Fully Paid'),
('BIL028', 'TRN068', '2018-01-14 00:00:00', '2018-02-13 00:00:00', '525.53', 1, 'Fully Paid'),
('BIL029', 'TRN069', '2018-01-21 00:00:00', '2018-02-20 00:00:00', '525.53', 1, 'Fully Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tblreferral`
--
-- Creation: Sep 30, 2017 at 03:17 AM
--

DROP TABLE IF EXISTS `tblreferral`;
CREATE TABLE IF NOT EXISTS `tblreferral` (
  `intRefer` int(11) NOT NULL,
  `intAppointRefer` int(11) DEFAULT NULL,
  `charReferBy` varchar(10) DEFAULT NULL,
  `strReferStat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblreferral`
--

INSERT INTO `tblreferral` (`intRefer`, `intAppointRefer`, `charReferBy`, `strReferStat`) VALUES
(1, 21, 'Emp002', 'Requested'),
(2, 23, 'Emp004', 'Requested'),
(3, 27, 'Emp005', 'Requested'),
(4, 28, 'Emp002', 'Requested');

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--
-- Creation: Sep 15, 2017 at 12:49 PM
--

DROP TABLE IF EXISTS `tblregistration`;
CREATE TABLE IF NOT EXISTS `tblregistration` (
  `intRegID` int(11) NOT NULL,
  `charfkRegEmp` char(10) NOT NULL,
  `charfkRegPat` char(10) NOT NULL,
  `dtmRegDate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`intRegID`, `charfkRegEmp`, `charfkRegPat`, `dtmRegDate`) VALUES
(1, 'Emp002', 'Pat0001', '2017-09-16'),
(2, 'Emp002', 'Pat0002', '2017-09-16'),
(3, 'Emp002', 'Pat0002', '2017-09-16'),
(4, 'Emp002', 'Pat0002', '2017-09-16'),
(5, 'Emp002', 'Pat0003', '2017-09-17'),
(6, 'Emp002', 'Pat0004', '2017-09-17'),
(7, 'Emp002', 'Pat0005', '2017-09-21'),
(8, 'Emp002', 'Pat0006', '2017-09-21'),
(9, 'Emp002', 'Pat0007', '2017-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `tblrole`
--
-- Creation: Mar 28, 2017 at 01:47 PM
--

DROP TABLE IF EXISTS `tblrole`;
CREATE TABLE IF NOT EXISTS `tblrole` (
  `intRoleID` int(11) NOT NULL,
  `strRoleName` varchar(45) NOT NULL,
  `strRoleDesc` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblrole`
--

INSERT INTO `tblrole` (`intRoleID`, `strRoleName`, `strRoleDesc`) VALUES
(1, 'Dentist', 'trans'),
(2, 'Secretary', 'sched'),
(3, 'Administrator', 'full'),
(4, 'Intern', 'for OJT');

-- --------------------------------------------------------

--
-- Table structure for table `tblspecialization`
--
-- Creation: May 20, 2017 at 03:08 AM
--

DROP TABLE IF EXISTS `tblspecialization`;
CREATE TABLE IF NOT EXISTS `tblspecialization` (
  `intSpecID` int(11) NOT NULL,
  `strSpecName` varchar(50) NOT NULL,
  `strSpecDesc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblspecialization`
--

INSERT INTO `tblspecialization` (`intSpecID`, `strSpecName`, `strSpecDesc`) VALUES
(1, 'General Dentist', 'Regular check-ups and operations'),
(2, 'Orthodontist', 'Rearrangement of teeth');

-- --------------------------------------------------------

--
-- Table structure for table `tblteeth`
--
-- Creation: Sep 27, 2017 at 07:12 AM
--

DROP TABLE IF EXISTS `tblteeth`;
CREATE TABLE IF NOT EXISTS `tblteeth` (
  `strToothCode` char(20) NOT NULL,
  `strToothNumber` char(11) NOT NULL,
  `strSurface1` varchar(45) NOT NULL,
  `strSurface2` varchar(45) NOT NULL,
  `strSurface3` varchar(45) NOT NULL,
  `strSurface4` varchar(45) NOT NULL,
  `strSurface5` varchar(45) NOT NULL,
  `charPatientID` varchar(10) NOT NULL,
  `strToothType` varchar(20) NOT NULL,
  `strStatus` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblteeth`
--

INSERT INTO `tblteeth` (`strToothCode`, `strToothNumber`, `strSurface1`, `strSurface2`, `strSurface3`, `strSurface4`, `strSurface5`, `charPatientID`, `strToothType`, `strStatus`) VALUES
('TO00001', '3', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00002', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00003', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00004', '30', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00005', '24', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00006', '25', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00007', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00008', '26', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00009', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00010', '7', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00011', '23', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00012', '10', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00013', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00014', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00015', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00016', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00017', '27', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00018', '5', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00019', '4', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00020', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00021', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00022', '31', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00023', '11', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00024', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00025', '18', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00026', '29', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00027', '2', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00028', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00029', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00030', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00031', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00032', '32', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0001', 'Adult', 'Active'),
('TO00033', '3', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00034', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00035', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00036', '30', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00037', '24', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00038', '25', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00039', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00040', '26', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00041', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00042', '7', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00043', '23', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00044', '10', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00045', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00046', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00047', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00048', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00049', '27', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00050', '5', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00051', '4', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00052', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00053', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00054', '31', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00055', '11', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00056', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00057', '18', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00058', '29', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00059', '2', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00060', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00061', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00062', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00063', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00064', '32', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00065', '3', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00066', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00067', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00068', '30', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00069', '24', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00070', '25', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00071', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00072', '26', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00073', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00074', '7', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00075', '23', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00076', '10', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00077', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00078', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00079', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00080', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00081', '27', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00082', '5', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00083', '4', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00084', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00085', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00086', '31', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00087', '11', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00088', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00089', '18', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00090', '29', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00091', '2', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00092', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00093', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00094', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00095', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00096', '32', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00097', '3', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00098', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00099', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO001', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00100', '30', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00101', '24', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00102', '25', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00103', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00104', '26', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00105', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00106', '7', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00107', '23', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00108', '10', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00109', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00110', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00111', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00112', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00113', '27', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00114', '5', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00115', '4', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00116', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00117', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00118', '31', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00119', '11', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00120', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00121', '18', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00122', '29', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00123', '2', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00124', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00125', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00126', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00127', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00128', '32', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0002', 'Adult', 'Active'),
('TO00129', '3', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00130', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00131', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00132', '30', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00133', '24', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00134', '25', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00135', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00136', '26', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00137', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00138', '7', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00139', '23', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00140', '10', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00141', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00142', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00143', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00144', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00145', '27', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00146', '5', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00147', '4', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00148', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00149', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Adult', 'InActive'),
('TO00150', '31', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00151', '11', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00152', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00153', '18', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00154', '29', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00155', '2', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00156', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00157', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'InActive'),
('TO00158', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00159', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00160', '32', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Adult', 'Active'),
('TO00162', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00163', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00167', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00168', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00171', '3', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00172', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00173', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00174', '30', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00175', '24', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00176', '25', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00177', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00178', '26', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00179', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00180', '7', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00181', '23', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00182', '10', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00183', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00184', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00185', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00186', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00187', '27', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00188', '5', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00189', '4', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00190', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00191', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00192', '31', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00193', '11', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00194', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00195', '18', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00196', '29', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00197', '2', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00198', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00199', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00200', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00201', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00202', '32', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0005', 'Adult', 'Active'),
('TO00203', '3', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00204', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00205', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00206', '30', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00207', '24', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00208', '25', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00209', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00210', '26', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00211', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00212', '7', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00213', '23', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00214', '10', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00215', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00216', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00217', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00218', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00219', '27', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00220', '5', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00221', '4', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00222', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00223', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00224', '31', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00225', '11', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00226', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00227', '18', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00228', '29', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00229', '2', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00230', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00231', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00232', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00233', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00234', '32', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0006', 'Adult', 'Active'),
('TO00235', '3', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00236', '14', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00237', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00238', '30', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00239', '24', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00240', '25', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00241', '8', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00242', '26', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00243', '9', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00244', '7', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00245', '23', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00246', '10', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00247', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00248', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00249', '22', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00250', '13', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00251', '27', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00252', '5', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00253', '4', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00254', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00255', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00256', '31', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00257', '11', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00258', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00259', '18', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00260', '29', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00261', '2', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00262', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00263', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00264', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00265', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00266', '32', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0007', 'Adult', 'Active'),
('TO00267', '1', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Baby', 'Active'),
('TO00288', '5', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00289', '6', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00290', '10', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00291', '11', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00292', '12', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00293', '15', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00294', '16', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00295', '17', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00296', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00299', '28', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Adult', 'Active'),
('TO00302', '51', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0004', 'Supernumerary', 'Active'),
('TO00334', '1', 'exist', 'exist', 'exist', '', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00335', '2', 'exist', 'exist', 'exist', '', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00336', '3', 'exist', 'exist', 'exist', '', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00337', '4', 'exist', 'not exist', 'exist', '', 'not exist', 'Pat0003', 'Baby', 'Active'),
('TO00338', '5', 'exist', 'not exist', 'exist', '', 'not exist', 'Pat0003', 'Baby', 'Active'),
('TO00339', '6', 'exist', 'not exist', 'exist', '', 'not exist', 'Pat0003', 'Baby', 'Active'),
('TO00340', '7', 'exist', 'not exist', 'exist', '', 'not exist', 'Pat0003', 'Baby', 'Active'),
('TO00341', '8', 'exist', 'not exist', 'exist', '', 'not exist', 'Pat0003', 'Baby', 'Active'),
('TO00342', '9', 'exist', 'exist', 'exist', '', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00343', '10', 'exist', 'exist', 'exist', '', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00344', '11', 'exist', 'exist', 'exist', '', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00345', '12', 'exist', 'exist', 'exist', '', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00346', '13', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00347', '14', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00348', '15', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00349', '16', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00350', '17', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00351', '18', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00352', '19', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00353', '20', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Baby', 'Active'),
('TO00354', '52', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00355', '53', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00356', '54', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00357', '55', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00358', '56', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00359', '57', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00360', '58', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00361', '59', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00362', '60', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00363', '61', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00364', '62', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00365', '63', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00366', '64', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00367', '65', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00368', '66', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00369', '67', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00370', '68', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00371', '69', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00372', '70', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00373', '71', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00374', '72', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00375', '73', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00376', '74', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00377', '75', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00378', '76', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00379', '77', 'exist', 'not exist', 'exist', 'not exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00380', '78', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00381', '79', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00382', '81', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active'),
('TO00383', '82', 'exist', 'exist', 'exist', 'exist', 'exist', 'Pat0003', 'Supernumerary', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransactiondetail`
--
-- Creation: Sep 11, 2017 at 11:50 AM
--

DROP TABLE IF EXISTS `tbltransactiondetail`;
CREATE TABLE IF NOT EXISTS `tbltransactiondetail` (
  `strTransactionID` char(6) NOT NULL,
  `intUnique` int(11) NOT NULL,
  `datLastdentalVisit` varchar(45) DEFAULT NULL,
  `intfkServiceCode` int(11) DEFAULT NULL,
  `strfkToothCode` char(20) DEFAULT NULL,
  `strSurface` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltransactiondetail`
--

INSERT INTO `tbltransactiondetail` (`strTransactionID`, `intUnique`, `datLastdentalVisit`, `intfkServiceCode`, `strfkToothCode`, `strSurface`) VALUES
('TRN002', 7, '2017-09-17', 1, 'TO00163', 'ALL'),
('TRN003', 8, '2017-09-19', 1, 'TO00127', 'ALL'),
('TRN003', 9, '2017-09-19', 1, 'TO00100', 'ALL'),
('TRN005', 10, '2017-09-21', 1, 'TO00031', 'ALL'),
('TRN005', 11, '2017-09-21', 1, 'TO00027', 'ALL'),
('TRN007', 14, '2017-09-21', 1, 'TO00127', 'ALL'),
('TRN007', 15, '2017-09-21', 1, 'TO00128', 'ALL'),
('TRN008', 16, '2017-09-21', 1, 'TO00201', 'ALL'),
('TRN008', 17, '2017-09-21', 1, 'TO00197', 'ALL'),
('TRN009', 18, '2017-09-21', 1, 'TO00233', 'ALL'),
('TRN009', 19, '2017-09-21', 1, 'TO00220', 'ALL'),
('TRN010', 20, '2017-09-21', 1, 'TO00159', 'ALL'),
('TRN010', 21, '2017-09-21', 1, 'TO00155', 'ALL'),
('TRN012', 22, '2017-10-04', 1, 'TO00031', 'ALL'),
('TRN012', 23, '2017-10-04', 1, 'TO00032', 'ALL'),
('TRN013', 24, '2017-10-04', 1, 'TO00201', 'ALL'),
('TRN013', 25, '2017-10-04', 4, 'TO00197', 'C'),
('TRN014', 26, '2017-10-04', 1, 'TO00021', 'ALL'),
('TRN015', 27, '2017-10-04', 1, 'TO00010', 'ALL'),
('TRN016', 28, '2017-10-04', 1, 'TO00225', 'ALL'),
('TRN017', 29, '2017-10-04', 4, 'TO00244', 'ALL'),
('TRN019', 34, '2017-10-05', 4, 'TO00229', 'C'),
('TRN019', 35, '2017-10-05', 1, 'TO00234', 'ALL'),
('TRN019', 36, '2017-10-05', 5, 'TO00224', 'ALL'),
('TRN020', 37, '2017-10-05', 1, 'TO00097', 'ALL'),
('TRN020', 38, '2017-10-05', 1, 'TO00119', 'ALL'),
('TRN020', 39, '2017-10-05', 1, 'TO00111', 'ALL'),
('TRN021', 40, '2017-10-05', 4, 'TO00201', 'C'),
('TRN021', 41, '2017-10-05', 1, 'TO00197', 'ALL'),
('TRN021', 42, '2017-10-05', 5, 'TO00202', 'ALL'),
('TRN022', 43, '2017-10-05', 1, 'TO00031', 'ALL'),
('TRN022', 44, '2017-10-05', 1, 'TO00027', 'ALL'),
('TRN023', 45, '2017-10-05', 4, 'TO00233', 'D'),
('TRN023', 46, '2017-10-05', 1, 'TO00234', 'ALL'),
('TRN024', 47, '2017-10-05', 1, 'TO00233', 'ALL'),
('TRN024', 48, '2017-10-05', 1, 'TO00234', 'ALL'),
('TRN024', 49, '2017-10-05', 5, 'TO00230', 'ALL'),
('TRN024', 50, '2017-10-05', 5, 'TO00232', 'ALL'),
('TRN025', 51, '2017-10-05', 1, 'TO00127', 'ALL'),
('TRN025', 52, '2017-10-05', 1, 'TO00123', 'ALL'),
('TRN025', 53, '2017-10-05', 5, 'TO00128', 'ALL'),
('TRN025', 54, '2017-10-05', 5, 'TO00118', 'ALL'),
('TRN026', 55, '2017-10-05', 1, 'TO00265', 'ALL'),
('TRN026', 56, '2017-10-05', 1, 'TO00266', 'ALL'),
('TRN026', 57, '2017-10-05', 5, 'TO00256', 'ALL'),
('TRN027', 58, '2017-10-05', 1, 'TO00031', 'ALL'),
('TRN027', 59, '2017-10-05', 1, 'TO00027', 'ALL'),
('TRN027', 60, '2017-10-05', 5, 'TO00032', 'ALL'),
('TRN027', 61, '2017-10-05', 5, 'TO00030', 'ALL'),
('TRN028', 62, '2017-10-05', 1, 'TO00031', 'ALL'),
('TRN028', 63, '2017-10-05', 1, 'TO00032', 'ALL'),
('TRN030', 64, '2017-10-05', 5, 'TO00137', 'ALL'),
('TRN031', 65, '2017-10-05', 1, 'TO00220', 'ALL'),
('TRN031', 66, '2017-10-05', 4, 'TO00209', 'B'),
('TRN031', 67, '2017-10-05', 4, 'TO00209', 'B'),
('TRN032', 68, '2017-10-06', 5, 'TO00262', 'ALL'),
('TRN033', 69, '2017-10-06', 5, 'TO00262', 'ALL'),
('TRN034', 70, '2017-10-06', 1, 'TO00103', 'ALL'),
('TRN034', 71, '2017-10-06', 1, 'TO00104', 'ALL'),
('TRN034', 72, '2017-10-06', 4, 'TO00101', 'B'),
('TRN035', 73, '2017-10-06', 1, 'TO00168', 'ALL'),
('TRN036', 74, '2017-10-06', 1, 'TO00168', 'ALL'),
('TRN037', 76, '2017-10-06', 1, 'TO00168', 'ALL'),
('TRN038', 78, '2017-10-06', 4, 'TO00182', 'B'),
('TRN039', 79, '2017-10-06', 4, 'TO00182', 'B'),
('TRN039', 80, '2017-10-06', 1, 'TO00174', 'ALL'),
('TRN040', 81, '2017-10-06', 4, 'TO00208', 'B'),
('TRN041', 82, '2017-10-06', 4, 'TO00208', 'B'),
('TRN041', 83, '2017-10-06', 4, 'TO00204', 'A'),
('TRN042', 84, '2017-10-06', 4, 'TO00208', 'B'),
('TRN042', 85, '2017-10-06', 4, 'TO00204', 'A'),
('TRN042', 86, '2017-10-06', 1, 'TO00212', 'ALL'),
('TRN043', 88, '2017-10-09', 5, 'TO00294', 'ALL'),
('TRN044', 89, '2017-10-09', 5, 'TO00294', 'ALL'),
('TRN044', 90, '2017-10-09', 5, 'TO00295', 'ALL'),
('TRN045', 91, '2017-10-13', 1, 'TO00101', 'ALL'),
('TRN045', 92, '2017-10-13', 1, 'TO00098', 'ALL'),
('TRN046', 94, '2017-10-13', 1, 'TO00101', 'ALL'),
('TRN046', 95, '2017-10-13', 1, 'TO00098', 'ALL'),
('TRN047', 96, '2017-10-13', 1, 'TO00101', 'ALL'),
('TRN047', 97, '2017-10-13', 1, 'TO00098', 'ALL'),
('TRN048', 98, '2017-10-13', 1, 'TO00101', 'ALL'),
('TRN048', 99, '2017-10-13', 1, 'TO00098', 'ALL'),
('TRN049', 100, '2017-10-13', 4, 'TO00289', 'A'),
('TRN049', 101, '2017-10-13', 4, 'TO00167', 'B'),
('TRN050', 102, '2017-10-13', 5, 'TO00001', 'ALL'),
('TRN050', 103, '2017-10-13', 1, 'TO00028', 'ALL'),
('TRN051', 104, '2017-10-13', 5, 'TO00227', 'ALL'),
('TRN051', 105, '2017-10-13', 1, 'TO00230', 'ALL'),
('TRN052', 106, '2017-10-13', 1, 'TO00264', 'ALL'),
('TRN052', 107, '2017-10-13', 5, 'TO00258', 'ALL'),
('TRN053', 108, '2017-10-13', 5, 'TO00200', 'ALL'),
('TRN053', 109, '2017-10-13', 1, 'TO00199', 'ALL'),
('TRN054', 110, '2017-10-13', 5, 'TO00350', 'ALL'),
('TRN054', 111, '2017-10-13', 1, 'TO00160', 'ALL'),
('TRN055', 112, '2017-10-14', 5, 'TO00259', 'ALL'),
('TRN055', 113, '2017-10-14', 5, 'TO00236', 'ALL'),
('TRN056', 114, '2017-10-14', 5, 'TO00126', 'ALL'),
('TRN056', 115, '2017-10-14', 5, 'TO00121', 'ALL'),
('TRN056', 116, '2017-10-14', 1, 'TO00099', 'ALL'),
('TRN057', 117, '2017-10-14', 5, 'TO00349', 'ALL'),
('TRN057', 118, '2017-10-14', 5, 'TO00350', 'ALL'),
('TRN058', 119, '2017-10-14', 5, 'TO00296', 'ALL'),
('TRN058', 120, '2017-10-14', 1, 'TO00299', 'ALL'),
('TRN059', 121, '2017-10-18', 1, 'TO00360', 'ALL'),
('TRN059', 122, '2017-10-18', 1, 'TO00380', 'ALL'),
('TRN059', 123, '2017-10-18', 1, 'TO00377', 'ALL'),
('TRN059', 124, '2017-10-18', 1, 'TO00341', 'ALL'),
('TRN059', 125, '2017-10-18', 4, 'TO00136', 'B'),
('TRN060', 126, '2017-10-18', 5, 'TO00117', 'ALL'),
('TRN060', 127, '2017-10-18', 5, 'TO00112', 'ALL'),
('TRN060', 128, '2017-10-18', 4, 'TO00102', 'ALL'),
('TRN060', 129, '2017-10-18', 4, 'TO00108', 'B'),
('TRN061', 130, '2017-10-18', 5, 'TO00117', 'ALL'),
('TRN061', 131, '2017-10-18', 5, 'TO00112', 'ALL'),
('TRN061', 132, '2017-10-18', 4, 'TO00102', 'ALL'),
('TRN061', 133, '2017-10-18', 4, 'TO00108', 'B'),
('TRN061', 134, '2017-10-18', 1, 'TO00115', 'ALL'),
('TRN062', 135, '2017-10-14', 5, 'TO00191', 'ALL'),
('TRN062', 136, '2017-10-14', 6, 'TO00171', 'ALL'),
('TRN062', 137, '2017-10-14', 5, 'TO00191', 'ALL'),
('TRN062', 138, '2017-10-14', 6, 'TO00171', 'ALL'),
('TRN062', 139, '2017-10-14', 6, 'TO00176', 'B'),
('TRN063', 140, '2017-10-14', 1, 'TO00205', 'ALL'),
('TRN063', 141, '2017-10-14', 1, 'TO00226', 'ALL'),
('TRN064', 142, '2017-10-14', 1, 'TO00011', 'ALL'),
('TRN064', 143, '2017-10-14', 1, 'TO00015', 'ALL'),
('TRN065', 144, '2017-10-15', 1, 'TO00003', 'ALL'),
('TRN066', 145, '2017-10-15', 1, 'TO00290', 'ALL'),
('TRN067', 146, '2017-12-05', 5, 'TO00198', 'ALL'),
('TRN068', 147, '2018-01-14', 1, 'TO00114', 'ALL'),
('TRN069', 148, '2018-01-21', 1, 'TO00105', 'ALL');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransactionheader`
--
-- Creation: Apr 18, 2017 at 12:15 AM
--

DROP TABLE IF EXISTS `tbltransactionheader`;
CREATE TABLE IF NOT EXISTS `tbltransactionheader` (
  `strTransactionID` char(6) NOT NULL,
  `charfkPatientID` char(10) NOT NULL,
  `charfkEmpID` char(10) NOT NULL,
  `datDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltransactionheader`
--

INSERT INTO `tbltransactionheader` (`strTransactionID`, `charfkPatientID`, `charfkEmpID`, `datDate`) VALUES
('TRN001', 'Pat0003', 'Emp002', '2017-09-17 00:00:00'),
('TRN002', 'Pat0004', 'Emp002', '2017-09-17 00:00:00'),
('TRN003', 'Pat0002', 'Emp002', '2017-09-19 00:00:00'),
('TRN004', 'Pat0001', 'Emp002', '2017-09-20 00:00:00'),
('TRN005', 'Pat0001', 'Emp002', '2017-09-21 00:00:00'),
('TRN006', 'Pat0004', 'Emp002', '2017-09-21 00:00:00'),
('TRN007', 'Pat0002', 'Emp002', '2017-09-21 00:00:00'),
('TRN008', 'Pat0005', 'Emp002', '2017-09-21 00:00:00'),
('TRN009', 'Pat0006', 'Emp002', '2017-09-21 00:00:00'),
('TRN010', 'Pat0003', 'Emp002', '2017-09-21 00:00:00'),
('TRN011', 'Pat0004', 'Emp002', '2017-09-24 00:00:00'),
('TRN012', 'Pat0001', 'Emp002', '2017-10-04 00:00:00'),
('TRN013', 'Pat0005', 'Emp002', '2017-10-04 00:00:00'),
('TRN014', 'Pat0001', 'Emp002', '2017-10-04 00:00:00'),
('TRN015', 'Pat0001', 'Emp002', '2017-10-04 00:00:00'),
('TRN016', 'Pat0006', 'Emp001', '2017-10-04 00:00:00'),
('TRN017', 'Pat0007', 'Emp003', '2017-10-04 00:00:00'),
('TRN018', 'Pat0004', 'Emp002', '2017-10-05 00:00:00'),
('TRN019', 'Pat0006', 'Emp002', '2017-10-05 00:00:00'),
('TRN020', 'Pat0002', 'Emp002', '2017-10-05 00:00:00'),
('TRN021', 'Pat0005', 'Emp002', '2017-10-05 00:00:00'),
('TRN022', 'Pat0001', 'Emp002', '2017-10-05 00:00:00'),
('TRN023', 'Pat0006', 'Emp002', '2017-10-05 00:00:00'),
('TRN024', 'Pat0006', 'Emp002', '2017-10-05 00:00:00'),
('TRN025', 'Pat0002', 'Emp002', '2017-10-05 00:00:00'),
('TRN026', 'Pat0007', 'Emp002', '2017-10-05 00:00:00'),
('TRN027', 'Pat0001', 'Emp002', '2017-10-05 00:00:00'),
('TRN028', 'Pat0001', 'Emp002', '2017-10-05 00:00:00'),
('TRN029', 'Pat0004', 'Emp002', '2017-10-05 00:00:00'),
('TRN030', 'Pat0003', 'Emp002', '2017-10-05 00:00:00'),
('TRN031', 'Pat0006', 'Emp002', '2017-10-05 00:00:00'),
('TRN032', 'Pat0007', 'Emp002', '2017-10-06 00:00:00'),
('TRN033', 'Pat0007', 'Emp002', '2017-10-06 00:00:00'),
('TRN034', 'Pat0002', 'Emp002', '2017-10-06 00:00:00'),
('TRN035', 'Pat0004', 'Emp002', '2017-10-06 00:00:00'),
('TRN036', 'Pat0004', 'Emp002', '2017-10-06 00:00:00'),
('TRN037', 'Pat0004', 'Emp002', '2017-10-06 00:00:00'),
('TRN038', 'Pat0005', 'Emp002', '2017-10-06 00:00:00'),
('TRN039', 'Pat0005', 'Emp002', '2017-10-06 00:00:00'),
('TRN040', 'Pat0006', 'Emp002', '2017-10-06 00:00:00'),
('TRN041', 'Pat0006', 'Emp002', '2017-10-06 00:00:00'),
('TRN042', 'Pat0006', 'Emp002', '2017-10-06 00:00:00'),
('TRN043', 'Pat0004', 'Emp002', '2017-10-09 00:00:00'),
('TRN044', 'Pat0004', 'Emp002', '2017-10-09 00:00:00'),
('TRN045', 'Pat0002', 'Emp002', '2017-10-13 00:00:00'),
('TRN046', 'Pat0002', 'Emp002', '2017-10-13 00:00:00'),
('TRN047', 'Pat0002', 'Emp002', '2017-10-13 00:00:00'),
('TRN048', 'Pat0002', 'Emp002', '2017-10-13 00:00:00'),
('TRN049', 'Pat0004', 'Emp002', '2017-10-13 00:00:00'),
('TRN050', 'Pat0001', 'Emp002', '2017-10-13 00:00:00'),
('TRN051', 'Pat0006', 'Emp002', '2017-10-13 00:00:00'),
('TRN052', 'Pat0007', 'Emp002', '2017-10-13 00:00:00'),
('TRN053', 'Pat0005', 'Emp002', '2017-10-13 00:00:00'),
('TRN054', 'Pat0003', 'Emp002', '2017-10-13 00:00:00'),
('TRN055', 'Pat0007', 'Emp002', '2017-10-14 00:00:00'),
('TRN056', 'Pat0002', 'Emp002', '2017-10-14 00:00:00'),
('TRN057', 'Pat0003', 'Emp002', '2017-10-14 00:00:00'),
('TRN058', 'Pat0004', 'Emp002', '2017-10-14 00:00:00'),
('TRN059', 'Pat0003', 'Emp002', '2017-10-18 00:00:00'),
('TRN060', 'Pat0002', 'Emp002', '2017-10-18 00:00:00'),
('TRN061', 'Pat0002', 'Emp002', '2017-10-18 00:00:00'),
('TRN062', 'Pat0005', 'Emp002', '2017-10-14 00:00:00'),
('TRN063', 'Pat0006', 'Emp002', '2017-10-14 00:00:00'),
('TRN064', 'Pat0001', 'Emp002', '2017-10-14 00:00:00'),
('TRN065', 'Pat0001', 'Emp002', '2017-10-15 00:00:00'),
('TRN066', 'Pat0004', 'Emp010', '2017-10-15 00:00:00'),
('TRN067', 'Pat0005', 'Emp010', '2017-12-05 00:00:00'),
('TRN068', 'Pat0002', 'Emp002', '2018-01-14 00:00:00'),
('TRN069', 'Pat0002', 'Emp002', '2018-01-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserlogs`
--
-- Creation: Oct 09, 2017 at 02:16 AM
--

DROP TABLE IF EXISTS `tbluserlogs`;
CREATE TABLE IF NOT EXISTS `tbluserlogs` (
  `intLogID` int(11) NOT NULL,
  `charfkEmpID` varchar(45) NOT NULL,
  `dtmDateLogIn` date NOT NULL,
  `dtmTimeIn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dtmTimeOut` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluserlogs`
--

INSERT INTO `tbluserlogs` (`intLogID`, `charfkEmpID`, `dtmDateLogIn`, `dtmTimeIn`, `dtmTimeOut`) VALUES
(1, 'Emp001', '2017-10-09', '2017-10-09 02:18:23', '2017-10-09 02:18:23'),
(2, 'Emp002', '2017-10-09', '2017-10-09 02:23:23', '2017-10-09 02:23:23'),
(3, 'Emp001', '2017-10-09', '2017-10-09 02:25:50', '2017-10-09 02:25:50'),
(4, 'Emp001', '2017-10-09', '2017-10-09 02:29:08', '2017-10-09 02:29:08'),
(5, 'Emp001', '2017-10-09', '2017-10-09 02:31:49', '2017-10-09 02:31:49'),
(6, 'Emp001', '2017-10-09', '2017-10-09 02:34:14', '2017-10-09 02:34:14'),
(7, 'Emp001', '2017-10-09', '2017-10-09 02:38:20', '2017-10-09 02:38:20'),
(8, 'Emp001', '2017-10-09', '2017-10-09 02:39:55', '2017-10-09 02:39:55'),
(9, 'Emp002', '2017-10-09', '2017-10-09 03:08:40', '2017-10-09 03:08:40'),
(10, 'Emp002', '2017-10-09', '2017-10-08 21:31:57', NULL),
(11, 'Emp002', '2017-10-09', '2017-10-09 09:35:49', '2017-10-08 21:35:49'),
(12, 'Emp002', '2017-10-09', '2017-10-09 09:42:24', '2017-10-08 21:42:23'),
(13, 'Emp002', '2017-10-09', '2017-10-09 09:50:09', '2017-10-08 21:50:09'),
(14, 'Emp001', '2017-10-09', '2017-10-09 09:56:10', '2017-10-08 21:56:10'),
(15, 'Emp003', '2017-10-09', '2017-10-09 09:56:23', '2017-10-08 21:56:23'),
(16, 'Emp002', '2017-10-09', '2017-10-09 09:56:56', '2017-10-08 21:56:56'),
(17, 'Emp002', '2017-10-10', '2017-10-10 05:50:36', '2017-10-09 17:50:35'),
(18, 'Emp002', '2017-10-10', '2017-10-10 05:57:48', '2017-10-09 17:57:48'),
(19, 'Emp002', '2017-10-10', '2017-10-09 18:21:01', NULL),
(20, 'Emp002', '2017-10-10', '2017-10-10 06:46:13', '2017-10-09 18:46:13'),
(21, 'Emp002', '2017-10-10', '2017-10-10 06:47:44', '2017-10-09 18:47:44'),
(22, 'Emp002', '2017-10-10', '2017-10-10 06:59:46', '2017-10-09 18:59:46'),
(23, 'Emp002', '2017-10-10', '2017-10-10 07:53:16', '2017-10-09 19:53:16'),
(24, 'Emp002', '2017-10-10', '2017-10-10 08:06:03', '2017-10-09 20:06:03'),
(25, 'Emp002', '2017-10-10', '2017-10-10 08:08:39', '2017-10-09 20:08:39'),
(26, 'Emp002', '2017-10-10', '2017-10-10 09:35:23', '2017-10-09 21:35:23'),
(27, 'Emp004', '2017-10-10', '2017-10-09 21:37:41', NULL),
(28, 'Emp003', '2017-10-10', '2017-10-10 09:40:31', '2017-10-09 21:40:31'),
(29, 'Emp002', '2017-10-11', '2017-10-11 09:42:15', '2017-10-10 21:42:15'),
(30, 'Emp002', '2017-10-13', '2017-10-13 03:37:09', NULL),
(31, 'Emp002', '2017-10-13', '2017-10-13 03:53:06', '2017-10-13 03:53:06'),
(32, 'Emp002', '2017-10-13', '2017-10-13 04:00:33', '2017-10-13 04:00:33'),
(33, 'Emp002', '2017-10-13', '2017-10-13 04:06:08', '2017-10-13 04:06:08'),
(34, 'Emp002', '2017-10-13', '2017-10-13 04:09:20', '2017-10-13 04:09:20'),
(35, 'Emp002', '2017-10-13', '2017-10-13 04:11:33', '2017-10-13 04:11:33'),
(36, 'Emp002', '2017-10-13', '2017-10-13 04:15:26', '2017-10-13 04:15:26'),
(37, 'Emp002', '2017-10-13', '2017-10-13 04:30:44', '2017-10-13 04:30:44'),
(38, 'Emp002', '2017-10-13', '2017-10-13 04:38:41', NULL),
(39, 'Emp002', '2017-10-14', '2017-10-14 04:42:01', '2017-10-14 04:42:01'),
(40, 'Emp002', '2017-10-14', '2017-10-14 04:51:28', '2017-10-14 04:51:28'),
(41, 'Emp002', '2017-10-14', '2017-10-14 04:55:44', '2017-10-14 04:55:44'),
(42, 'Emp001', '2017-10-14', '2017-10-14 04:58:13', '2017-10-14 04:58:13'),
(43, 'Emp002', '2017-10-14', '2017-10-14 05:02:00', '2017-10-13 17:02:00'),
(44, 'Emp001', '2017-10-14', '2017-10-13 17:02:12', NULL),
(45, 'Emp001', '2017-10-14', '2017-10-13 17:10:24', NULL),
(46, 'Emp001', '2017-10-18', '2017-10-18 05:14:24', '2017-10-17 17:14:24'),
(47, 'Emp001', '2017-10-18', '2017-10-17 17:14:33', NULL),
(48, 'Emp001', '2017-10-18', '2017-10-17 17:14:39', NULL),
(49, 'Emp001', '2017-10-18', '2017-10-17 17:14:46', NULL),
(50, 'Emp003', '2017-10-18', '2017-10-18 05:15:43', '2017-10-17 17:15:43'),
(51, 'Emp001', '2017-10-18', '2017-10-18 05:16:19', '2017-10-17 17:16:19'),
(52, 'Emp003', '2017-10-18', '2017-10-18 05:17:23', '2017-10-17 17:17:23'),
(53, 'Emp002', '2017-10-18', '2017-10-18 05:20:53', '2017-10-17 17:20:53'),
(54, 'Emp001', '2017-10-18', '2017-10-17 17:21:02', NULL),
(55, 'Emp001', '2017-10-18', '2017-10-17 17:27:11', NULL),
(56, 'Emp001', '2017-10-18', '2017-10-17 17:32:27', NULL),
(57, 'Emp001', '2017-10-18', '2017-10-17 17:33:37', NULL),
(58, 'Emp001', '2017-10-18', '2017-10-17 17:35:46', NULL),
(59, 'Emp001', '2017-10-18', '2017-10-17 17:37:37', NULL),
(60, 'Emp001', '2017-10-18', '2017-10-18 05:41:20', '2017-10-17 17:41:20'),
(61, 'Emp001', '2017-10-18', '2017-10-18 05:44:34', '2017-10-17 17:44:34'),
(62, 'Emp001', '2017-10-18', '2017-10-18 05:46:25', '2017-10-17 17:46:25'),
(63, 'Emp001', '2017-10-18', '2017-10-18 05:51:06', '2017-10-17 17:51:06'),
(64, 'Emp001', '2017-10-18', '2017-10-18 05:53:51', '2017-10-17 17:53:51'),
(65, 'Emp001', '2017-10-18', '2017-10-18 05:57:02', '2017-10-17 17:57:02'),
(66, 'Emp001', '2017-10-18', '2017-10-18 05:58:10', '2017-10-17 17:58:10'),
(67, 'Emp001', '2017-10-18', '2017-10-18 05:58:57', '2017-10-17 17:58:57'),
(68, 'Emp001', '2017-10-18', '2017-10-18 06:01:33', '2017-10-17 18:01:33'),
(69, 'Emp001', '2017-10-18', '2017-10-17 18:04:36', NULL),
(70, 'Emp002', '2017-10-18', '2017-10-18 06:30:18', '2017-10-17 18:30:18'),
(71, 'Emp001', '2017-10-18', '2017-10-18 06:31:37', '2017-10-17 18:31:37'),
(72, 'Emp002', '2017-10-14', '2017-10-14 01:18:01', '2017-10-14 01:18:01'),
(73, 'Emp001', '2017-10-14', '2017-10-14 01:19:34', '2017-10-14 01:19:34'),
(74, 'Emp002', '2017-10-14', '2017-10-14 01:19:41', NULL),
(75, 'Emp001', '2017-10-14', '2017-10-14 01:21:12', '2017-10-14 01:21:12'),
(76, 'Emp002', '2017-10-14', '2017-10-14 01:21:26', '2017-10-14 01:21:26'),
(77, 'Emp002', '2017-10-14', '2017-10-14 01:22:51', '2017-10-14 01:22:51'),
(78, 'Emp002', '2017-10-14', '2017-10-14 01:23:25', '2017-10-14 01:23:25'),
(79, 'Emp002', '2017-10-14', '2017-10-14 01:23:46', '2017-10-14 01:23:46'),
(80, 'Emp002', '2017-10-14', '2017-10-14 01:28:10', '2017-10-14 01:28:10'),
(81, 'Emp002', '2017-10-14', '2017-10-14 02:51:26', NULL),
(82, 'Emp001', '2017-10-15', '2017-10-15 02:59:35', '2017-10-15 02:59:35'),
(83, 'Emp002', '2017-10-15', '2017-10-15 02:59:55', NULL),
(84, 'Emp002', '2017-10-15', '2017-10-15 03:14:41', '2017-10-15 03:14:41'),
(85, 'Emp010', '2017-10-15', '2017-10-15 03:14:49', NULL),
(86, 'Emp010', '2017-10-28', '2017-10-28 02:25:21', NULL),
(87, 'Emp001', '2017-12-04', '2017-12-04 03:20:59', NULL),
(88, 'Emp001', '2017-12-04', '2017-12-04 03:23:16', NULL),
(89, 'Emp001', '2017-12-04', '2017-12-04 03:30:35', '2017-12-04 03:30:35'),
(90, 'Emp002', '2017-12-04', '2017-12-04 03:30:42', NULL),
(91, 'Emp002', '2017-12-05', '2017-12-05 03:33:35', NULL),
(92, 'Emp002', '2017-12-05', '2017-12-05 03:37:08', NULL),
(93, 'Emp001', '2017-12-04', '2017-12-04 06:40:43', '2017-12-03 18:40:43'),
(94, 'Emp001', '2017-12-04', '2017-12-04 06:41:35', '2017-12-03 18:41:35'),
(95, 'Emp001', '2017-12-04', '2017-12-04 06:42:27', '2017-12-03 18:42:27'),
(96, 'Emp002', '2017-12-04', '2017-12-03 18:45:44', NULL),
(97, 'Emp001', '2017-12-05', '2017-12-05 06:52:33', '2017-12-04 18:52:33'),
(98, 'Emp002', '2017-12-05', '2017-12-05 06:53:39', '2017-12-04 18:53:39'),
(99, 'Emp003', '2017-12-04', '2017-12-04 06:57:30', '2017-12-03 18:57:30'),
(100, 'Emp010', '2017-12-05', '2017-12-05 06:59:11', '2017-12-04 18:59:11'),
(101, 'Emp010', '2017-12-05', '2017-12-05 07:00:15', '2017-12-04 19:00:15'),
(102, 'Emp010', '2017-12-05', '2017-12-05 07:11:41', '2017-12-04 19:11:41'),
(103, 'Emp002', '2017-12-05', '2017-12-05 09:17:47', '2017-12-04 21:17:47'),
(105, 'Emp001', '2018-01-09', '2018-01-09 02:47:58', NULL),
(107, 'Emp001', '2018-01-14', '2018-01-14 01:44:36', '2018-01-14 01:44:36'),
(108, 'Emp001', '2018-01-14', '2018-01-14 01:46:46', NULL),
(109, 'Emp001', '2018-01-14', '2018-01-14 01:48:53', NULL),
(110, 'Emp001', '2018-01-14', '2018-01-14 02:17:09', NULL),
(111, 'Emp002', '2018-01-14', '2018-01-14 02:28:53', NULL),
(112, 'Emp002', '2018-01-14', '2018-01-14 02:35:54', NULL),
(113, 'Emp002', '2018-01-14', '2018-01-14 02:37:53', '2018-01-14 02:37:53'),
(114, 'Emp001', '2018-01-14', '2018-01-14 02:41:32', '2018-01-14 02:41:32'),
(115, 'Emp002', '2018-01-21', '2018-01-21 02:25:40', NULL),
(116, 'Emp002', '2018-01-21', '2018-01-21 02:28:24', NULL),
(117, 'Emp002', '2018-01-21', '2018-01-21 02:41:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`intCategoryCode`);

--
-- Indexes for table `tblconsult`
--
ALTER TABLE `tblconsult`
  ADD PRIMARY KEY (`intConsultation`), ADD KEY `tblConsult_ibfk_1_idx1` (`strfkTooth`), ADD KEY `tblConsult_ibfk_3_idx` (`charfkPatient`);

--
-- Indexes for table `tbldaysched`
--
ALTER TABLE `tbldaysched`
  ADD PRIMARY KEY (`intDayNo`), ADD KEY `charfkDentistID` (`charfkDentistID`);

--
-- Indexes for table `tbldentalservice`
--
ALTER TABLE `tbldentalservice`
  ADD PRIMARY KEY (`intServicesCode`), ADD KEY `tblCategory_ibfk_1_idx` (`intfkCategoryCode`);

--
-- Indexes for table `tbldiscount`
--
ALTER TABLE `tbldiscount`
  ADD PRIMARY KEY (`intDiscount`), ADD UNIQUE KEY `strDiscountName` (`strDiscountName`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`charEmpID`), ADD KEY `intEmpRoleID` (`intEmpRoleID`);

--
-- Indexes for table `tblmodule`
--
ALTER TABLE `tblmodule`
  ADD PRIMARY KEY (`intModuleID`);

--
-- Indexes for table `tblmodulepermission`
--
ALTER TABLE `tblmodulepermission`
  ADD PRIMARY KEY (`intPermissionID`), ADD KEY `intPermissionRole` (`intPermissionRole`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`charPatientID`);

--
-- Indexes for table `tblpatientappointment`
--
ALTER TABLE `tblpatientappointment`
  ADD PRIMARY KEY (`intAppointmentNo`), ADD KEY `intfkDayNo` (`intfkDayNo`), ADD KEY `intfkAppointServicesCode` (`intfkAppointServicesCode`);

--
-- Indexes for table `tblpaymentdetail`
--
ALTER TABLE `tblpaymentdetail`
  ADD PRIMARY KEY (`intPayment`), ADD KEY `tblpaymentdetail_ibfk_1` (`strfkReceiptNo`);

--
-- Indexes for table `tblreceiptheader`
--
ALTER TABLE `tblreceiptheader`
  ADD PRIMARY KEY (`strReceiptNo`), ADD KEY `tblreceiptheader_ibfk_2` (`intfkDiscount`), ADD KEY `tblreceiptheader_ibfk_1` (`strfkTransactionID`);

--
-- Indexes for table `tblreferral`
--
ALTER TABLE `tblreferral`
  ADD PRIMARY KEY (`intRefer`), ADD KEY `tblReferral_ibfk_1_idx` (`intAppointRefer`), ADD KEY `tblReferral_ibfk_2_idx` (`charReferBy`);

--
-- Indexes for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD PRIMARY KEY (`intRegID`), ADD KEY `tblRegistration_ibfk_1` (`charfkRegEmp`), ADD KEY `tblRegistration_ibfk_2` (`charfkRegPat`);

--
-- Indexes for table `tblrole`
--
ALTER TABLE `tblrole`
  ADD PRIMARY KEY (`intRoleID`);

--
-- Indexes for table `tblspecialization`
--
ALTER TABLE `tblspecialization`
  ADD PRIMARY KEY (`intSpecID`);

--
-- Indexes for table `tblteeth`
--
ALTER TABLE `tblteeth`
  ADD PRIMARY KEY (`strToothCode`), ADD KEY `fk_tblTeeth_tblpatient1_idx` (`charPatientID`);

--
-- Indexes for table `tbltransactiondetail`
--
ALTER TABLE `tbltransactiondetail`
  ADD PRIMARY KEY (`intUnique`), ADD KEY `tbltransactiondetail_ibfk_2` (`intfkServiceCode`), ADD KEY `tbltransactiondetail_ibfk_3` (`strfkToothCode`), ADD KEY `tbltransactiondetail_ibfk_1` (`strTransactionID`);

--
-- Indexes for table `tbltransactionheader`
--
ALTER TABLE `tbltransactionheader`
  ADD PRIMARY KEY (`strTransactionID`), ADD KEY `charfkEmpID` (`charfkEmpID`), ADD KEY `tbltransactionheader_ibfk_1` (`charfkPatientID`);

--
-- Indexes for table `tbluserlogs`
--
ALTER TABLE `tbluserlogs`
  ADD PRIMARY KEY (`intLogID`), ADD KEY `tblUserLogs_ibfk_1_idx` (`charfkEmpID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `intCategoryCode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblconsult`
--
ALTER TABLE `tblconsult`
  MODIFY `intConsultation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbldaysched`
--
ALTER TABLE `tbldaysched`
  MODIFY `intDayNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbldentalservice`
--
ALTER TABLE `tbldentalservice`
  MODIFY `intServicesCode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tblmodulepermission`
--
ALTER TABLE `tblmodulepermission`
  MODIFY `intPermissionID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tblpatientappointment`
--
ALTER TABLE `tblpatientappointment`
  MODIFY `intAppointmentNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `tblpaymentdetail`
--
ALTER TABLE `tblpaymentdetail`
  MODIFY `intPayment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tblreferral`
--
ALTER TABLE `tblreferral`
  MODIFY `intRefer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblregistration`
--
ALTER TABLE `tblregistration`
  MODIFY `intRegID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblrole`
--
ALTER TABLE `tblrole`
  MODIFY `intRoleID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbltransactiondetail`
--
ALTER TABLE `tbltransactiondetail`
  MODIFY `intUnique` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `tbluserlogs`
--
ALTER TABLE `tbluserlogs`
  MODIFY `intLogID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblconsult`
--
ALTER TABLE `tblconsult`
ADD CONSTRAINT `tblConsult_ibfk_1` FOREIGN KEY (`strfkTooth`) REFERENCES `tblteeth` (`strToothCode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `tblConsult_ibfk_2` FOREIGN KEY (`charfkPatient`) REFERENCES `tblpatient` (`charPatientID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbldaysched`
--
ALTER TABLE `tbldaysched`
ADD CONSTRAINT `tblDaySched_ibfk_1` FOREIGN KEY (`charfkDentistID`) REFERENCES `tblemployee` (`charEmpID`);

--
-- Constraints for table `tbldentalservice`
--
ALTER TABLE `tbldentalservice`
ADD CONSTRAINT `tblCategory_ibfk_1` FOREIGN KEY (`intfkCategoryCode`) REFERENCES `tblcategory` (`intCategoryCode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblemployee`
--
ALTER TABLE `tblemployee`
ADD CONSTRAINT `tblEmployee_ibfk_1` FOREIGN KEY (`intEmpRoleID`) REFERENCES `tblrole` (`intRoleID`);

--
-- Constraints for table `tblmodulepermission`
--
ALTER TABLE `tblmodulepermission`
ADD CONSTRAINT `tblModulePermission_ibfk_1` FOREIGN KEY (`intPermissionRole`) REFERENCES `tblrole` (`intRoleID`);

--
-- Constraints for table `tblpatientappointment`
--
ALTER TABLE `tblpatientappointment`
ADD CONSTRAINT `tblPatientAppointment_ibfk_1` FOREIGN KEY (`intfkDayNo`) REFERENCES `tbldaysched` (`intDayNo`),
ADD CONSTRAINT `tblPatientAppointment_ibfk_2` FOREIGN KEY (`intfkAppointServicesCode`) REFERENCES `tbldentalservice` (`intServicesCode`);

--
-- Constraints for table `tblpaymentdetail`
--
ALTER TABLE `tblpaymentdetail`
ADD CONSTRAINT `tblpaymentdetail_ibfk_1` FOREIGN KEY (`strfkReceiptNo`) REFERENCES `tblreceiptheader` (`strReceiptNo`);

--
-- Constraints for table `tblreceiptheader`
--
ALTER TABLE `tblreceiptheader`
ADD CONSTRAINT `tblreceiptheader_ibfk_1` FOREIGN KEY (`strfkTransactionID`) REFERENCES `tbltransactionheader` (`strTransactionID`),
ADD CONSTRAINT `tblreceiptheader_ibfk_2` FOREIGN KEY (`intfkDiscount`) REFERENCES `tbldiscount` (`intDiscount`);

--
-- Constraints for table `tblreferral`
--
ALTER TABLE `tblreferral`
ADD CONSTRAINT `tblReferral_ibfk_1` FOREIGN KEY (`intAppointRefer`) REFERENCES `tblpatientappointment` (`intAppointmentNo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `tblReferral_ibfk_2` FOREIGN KEY (`charReferBy`) REFERENCES `tblemployee` (`charEmpID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblregistration`
--
ALTER TABLE `tblregistration`
ADD CONSTRAINT `tblRegistration_ibfk_1` FOREIGN KEY (`charfkRegEmp`) REFERENCES `tblemployee` (`charEmpID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `tblRegistration_ibfk_2` FOREIGN KEY (`charfkRegPat`) REFERENCES `tblpatient` (`charPatientID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblteeth`
--
ALTER TABLE `tblteeth`
ADD CONSTRAINT `tblTeeth_ibfk_1` FOREIGN KEY (`charPatientID`) REFERENCES `tblpatient` (`charPatientID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbltransactiondetail`
--
ALTER TABLE `tbltransactiondetail`
ADD CONSTRAINT `tbltransactiondetail_ibfk_1` FOREIGN KEY (`strTransactionID`) REFERENCES `tbltransactionheader` (`strTransactionID`),
ADD CONSTRAINT `tbltransactiondetail_ibfk_2` FOREIGN KEY (`intfkServiceCode`) REFERENCES `tbldentalservice` (`intServicesCode`),
ADD CONSTRAINT `tbltransactiondetail_ibfk_3` FOREIGN KEY (`strfkToothCode`) REFERENCES `tblteeth` (`strToothCode`);

--
-- Constraints for table `tbltransactionheader`
--
ALTER TABLE `tbltransactionheader`
ADD CONSTRAINT `tbltransactionheader_ibfk_1` FOREIGN KEY (`charfkPatientID`) REFERENCES `tblpatient` (`charPatientID`),
ADD CONSTRAINT `tbltransactionheader_ibfk_2` FOREIGN KEY (`charfkEmpID`) REFERENCES `tblemployee` (`charEmpID`);

--
-- Constraints for table `tbluserlogs`
--
ALTER TABLE `tbluserlogs`
ADD CONSTRAINT `tblUserLogs_ibfk_1` FOREIGN KEY (`charfkEmpID`) REFERENCES `tblemployee` (`charEmpID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
