-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 01:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foretrust_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `GuardianName` varchar(100) NOT NULL,
  `GuardianNumber` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `EducationalQualifications` varchar(100) NOT NULL,
  `OtherQualifications` varchar(100) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `CourseApplied` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `DateofAdmission` date NOT NULL,
  `CourseFee` int(10) NOT NULL,
  `ModeofPayment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `GuardianName`, `GuardianNumber`, `DOB`, `Gender`, `Address`, `EducationalQualifications`, `OtherQualifications`, `Occupation`, `City`, `CourseApplied`, `Duration`, `DateofAdmission`, `CourseFee`, `ModeofPayment`) VALUES
(1, 'Godswill', 'king', 'chibuokejosephvictor@gmail.com', '', '', '', '0000-00-00', 'male', '', 'Bsc Accounting', '', '', '', 'Basic_Computer_Training ', '', '0000-00-00', 0, 'advance'),
(2, 'dbkhiumljknbxtrhh', 'Chukwuma', 'chibuokejosephvictor@gmail.com', '4', 'Amara Chibuoke', '4', '2023-08-23', 'male', '6 Ekwulobia Street', '4', '4', '4', '', 'Basic_Computer_Training ', '4h', '2023-08-23', 10000, 'advance'),
(3, 'Joy', 'Doe', 'amakachibuoke@gmail.com', '4', 'g', '4', '2023-08-23', 'male', '6 Ekwulobia Street', '4', '4', '4', '', 'Basic_Computer_Training ', '4h', '2023-08-23', 10000, 'advance'),
(4, 's', 's', 'amakachibuoke@gmail.com', '4', 'g', '4', '2023-08-23', 'female', '6 Ekwulobia Street', '4', '4', '4', '', 'c++', '4h', '2023-08-23', 10000, 'part_payment'),
(5, 'Joseph-Victor', 's', 'amakachibuoke@gmail.com', '5', 'Amaka Chibuoke', '5', '2023-08-23', 'male', '555', 'Waec', 'Neco', 'f', 'fff', 'Basic_Computer_Training ', '56564', '2023-08-23', 58195, 'advance'),
(6, 'Emeka ', 'Esther', 'emy@gmail.com', '08023514578', 'Okafor George', '09052369874', '2005-07-22', 'male', '102 Agbani Road', 'Waec', 'Neco', 'Student', 'Abia', 'JavaScript', '1 month', '2023-08-25', 120000, 'part_payment'),
(7, 'Esther', 'Chiamaka', 'chiamaka@gmail.com', '08052114563', 'Ebere Joy', '08035996214', '2023-08-25', 'female', '47 Ekwulobia Street', 'Bsc Accounting', 'Phd Mathematics', 'Lecturer', 'Enugu', 'Basic_Computer_Training ', '6 weeks', '2022-11-25', 10000, 'advance'),
(8, 'Jennifer', 'Edith', 'Jen@gmail.com', '08024536985', 'Amara Edeh', '08021045698', '2023-08-24', 'female', '27 Obioma Street', 'Waec', 'Neco', 'Student', 'Imo', 'Database Design Management', '2 Months', '2023-08-25', 70000, 'advance'),
(9, 'Diana', 'Edith', 'Jen@gmail.com', '08024536985', 'Amara Edeh', '08021045698', '2023-08-24', 'female', '27 Obioma Street', 'Waec', 'Neco', 'Student', 'Imo', 'Database Design Management', '2 Months', '2023-08-25', 70000, 'advance'),
(10, 'gjkjhlnh;yu', 'jhguioybuiukk', '', '', 'bfjhhlkkn', '6515426', '2023-08-25', 'male', '6 Ekwulobia Street', 'mhvduykuib', '', 'vdtjykul;imo,mn f', 'huh;lkjmko', 'Basic Computer Training ', '10 years', '2023-08-25', 50000, 'advance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
