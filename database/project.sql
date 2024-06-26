-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 03:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_phno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_name`, `admin_password`, `admin_email`, `admin_phno`) VALUES
(2401, 'admin', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_details`
--

CREATE TABLE `attendance_details` (
  `attendance_id` int(11) NOT NULL,
  `stud_id` int(11) DEFAULT NULL,
  `atten_date` date DEFAULT NULL,
  `atten_status` enum('1','0') NOT NULL,
  `atten_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `sno` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice_details`
--

CREATE TABLE `notice_details` (
  `notice_id` int(11) NOT NULL,
  `notice_date` datetime NOT NULL DEFAULT current_timestamp(),
  `notice_title` varchar(255) NOT NULL,
  `notice_descripttion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_details`
--

CREATE TABLE `result_details` (
  `result_id` int(11) NOT NULL,
  `stud_id` int(11) DEFAULT NULL,
  `result_sem` varchar(50) NOT NULL,
  `result_int1` int(10) NOT NULL,
  `result_int2` int(11) NOT NULL,
  `result_ext` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `stud_dob` date DEFAULT NULL,
  `stud_phno` varchar(15) DEFAULT NULL,
  `stud_email` varchar(100) DEFAULT NULL,
  `stud_street` varchar(100) DEFAULT NULL,
  `stud_city` varchar(50) DEFAULT NULL,
  `stud_district` varchar(50) DEFAULT NULL,
  `stud_pincode` varchar(10) DEFAULT NULL,
  `stud_fathername` varchar(50) DEFAULT NULL,
  `stud_fatherno` varchar(15) DEFAULT NULL,
  `stud_mothername` varchar(50) DEFAULT NULL,
  `stud_motherno` varchar(15) DEFAULT NULL,
  `stud_year` varchar(5) DEFAULT NULL,
  `stud_dept` varchar(50) DEFAULT NULL,
  `stud_gender` enum('male','female') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject_details`
--

CREATE TABLE `subject_details` (
  `subjectid` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_sem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_details`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `course_id` (`course_id`);

--
-- Indexes for table `notice_details`
--
ALTER TABLE `notice_details`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `result_details`
--
ALTER TABLE `result_details`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject_details`
--
ALTER TABLE `subject_details`
  ADD PRIMARY KEY (`subjectid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_details`
--
ALTER TABLE `attendance_details`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `notice_details`
--
ALTER TABLE `notice_details`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `result_details`
--
ALTER TABLE `result_details`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212703129;

--
-- AUTO_INCREMENT for table `subject_details`
--
ALTER TABLE `subject_details`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD CONSTRAINT `attendance_details_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student_details` (`stud_id`);

--
-- Constraints for table `result_details`
--
ALTER TABLE `result_details`
  ADD CONSTRAINT `result_details_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student_details` (`stud_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
