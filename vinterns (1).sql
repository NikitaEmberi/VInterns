-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 01:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinterns`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses_taken`
--

CREATE TABLE `courses_taken` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_taken`
--

INSERT INTO `courses_taken` (`id`, `course_name`, `organization`, `certificate`, `student_id`) VALUES
(17, 'Interactivity with JavaScript', 'Michigan University', '30-10-20-1604087605.png', '19101A0090'),
(18, 'Advanced', 'University of Michigan', '31-10-20-1604121427.png', '19101A0090'),
(19, 'Python', 'Google', '30-10-20-1604087605.png', '19102A0003'),
(20, 'Web design basics', 'Michigan University', '30-10-20-1604087605.png', '19102A0003'),
(22, 'Java', 'Google', '30-10-20-1604087605.png', '20102A0005'),
(23, 'React Js Basics', 'Hong Kong University', '30-10-20-1604087605.png', '19101A0090'),
(24, 'app development', 'Hong Kong University', '30-10-20-1604087605.png', '19101A0090'),
(25, 'data science and algorithms', 'Google', '30-10-20-1604087605.png', '19101A0090');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(11) NOT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `year` enum('FE','SE','TE') DEFAULT NULL,
  `letter` varchar(255) DEFAULT NULL,
  `skills_learnt` enum('PYTHON developer','java developer','graphic designer','full-stack developer','app development','data science and algorithms','scilab and mathematics','front end web developer','back end developer') DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `organization`, `description`, `start`, `end`, `year`, `letter`, `skills_learnt`, `student_id`) VALUES
(19, 'Backend Development ', 'Coding the back-end skeleton of the platform, creating and integrating APIs', '2020-08-01', '2020-10-01', 'FE', '30-10-20-1604087034.png', 'back end developer', '19101A0090'),
(20, 'Front End Development Internship', 'Design, code, and modify applications, from layout to function, and according to specifications', '2020-09-11', '2020-10-15', 'FE', '30-10-20-1604087035.jpeg', 'front end web developer', '19101A0090'),
(21, 'Matlab Student Ambassador', 'hosting a minimum of two or three events on campus each semester ', '2020-09-02', '2020-09-30', 'FE', '30-10-20-1604087034.png', 'scilab and mathematics', '19102A0003'),
(22, 'Full stack developer', 'developing servers and databases for website functionality', '2020-09-02', '2020-10-22', 'FE', '30-10-20-1604087034.png', 'full-stack developer', '20102A0005'),
(23, 'Logo making', 'creating the branding used to symbolize a particular brand or product', '2020-09-16', '2020-10-23', 'FE', '30-10-20-1604087034.png', 'graphic designer', '19101A0090');

-- --------------------------------------------------------

--
-- Table structure for table `project_links`
--

CREATE TABLE `project_links` (
  `id` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_links`
--

INSERT INTO `project_links` (`id`, `link`, `student_id`) VALUES
(11, 'https://nikitaemberi.github.io/', '19101A0090'),
(12, 'https://akshaya-244.github.io/Pig-game/', '20102A0005'),
(13, 'https://akshaya-244.github.io/Budget-app/', '19101A0090');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `Achievement_01` varchar(255) NOT NULL,
  `Achievement_02` varchar(255) NOT NULL,
  `Achievement_03` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `Achievement_01`, `Achievement_02`, `Achievement_03`, `student_id`) VALUES
(21, 'Won First Prize in National level Chess Competitiom', 'N/A', 'N/A', '19101A0090'),
(22, 'Won Bronze medal in National Level chess competition', 'Won Gold Medal in state level competition', 'N/A', '19102A0003'),
(23, 'Stood First in XII', 'N/A', 'N/A', '19101A0093'),
(24, 'Stood first in national level hackathon', 'Stood second in national level chess competition', 'N/A', '19101A0093');

-- --------------------------------------------------------

--
-- Table structure for table `skills_learnt`
--

CREATE TABLE `skills_learnt` (
  `id` int(11) NOT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills_learnt`
--

INSERT INTO `skills_learnt` (`id`, `skills`, `student_id`) VALUES
(12, 'graphic designer', '19101A0090'),
(13, 'full-stack developer', '19101A0090'),
(14, 'app development', '19101A0090'),
(15, 'app development', '19102A0003'),
(16, 'data science and algorithms', '20102A0005'),
(17, 'java developer', '19101A0090'),
(18, 'PYTHON developer', '19101A0090'),
(19, 'PYTHON developer', '19101A0093'),
(20, 'graphic designer', '19101A0093');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `rollNo` varchar(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `branch` enum('CMPN','INFT','EXTC','ETRX','BIOMED') DEFAULT NULL,
  `division` varchar(50) DEFAULT NULL,
  `year` enum('FE','TE','SE') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `x_percent` float DEFAULT NULL,
  `xii_percent` float DEFAULT NULL,
  `cgpa` varchar(50) NOT NULL,
  `num_of_internships` int(11) NOT NULL,
  `num_of_courses` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rollNo`, `fname`, `mname`, `lname`, `branch`, `division`, `year`, `email`, `gender`, `contact`, `username`, `password`, `x_percent`, `xii_percent`, `cgpa`, `num_of_internships`, `num_of_courses`, `updated_at`) VALUES
('17101B0008', 'Vinita', 'Suresh', 'Suryavanshi', 'INFT', 'B', '', 'vinitasuryavanshi755@gmail.com', 'Female', '9826555022', 'vinitasuryavanshi@vit.edu.in', 'VSBE2218', 99.3, 99.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17101B0009', 'Namita', 'Suresh', 'Suryavanshi', 'INFT', 'B', '', 'namitasuryavanshi855@gmail.com', 'Female', '9826055022', 'namitasuryavanshi@vit.edu.in', 'NSBE2218', 99.3, 99.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17101B0010', 'Namrata', 'Ramesh', 'Kumar', 'INFT', 'B', '', 'namratakumar55@gmail.com', 'Female', '9826075022', 'namratakumar@vit.edu.in', 'NKBE2018', 97.7, 97.8, '0', 0, 0, '0000-00-00 00:00:00'),
('17101B0968', 'Ankita', 'Suresh', 'Suryavanshi', '', 'B', '', 'ankitasuryavanshi755@gmail.com', 'Female', '9826515032', 'ankita.suryavanshi@vit.edu.in', 'ASBE2918', 99.1, 99.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17101B0990', 'Namrata', 'Ramesh', 'Kumar', 'INFT', 'B', 'TE', 'namratakumar55@gmail.com', 'Female', '9826075022', 'namratakumar@vit.edu.in', 'NKBE2018', 97.7, 97.8, '0', 0, 0, '0000-00-00 00:00:00'),
('17101B0998', 'Vinita', 'Suresh', 'Suryavanshi', 'INFT', 'B', 'TE', 'vinitasuryavanshi755@gmail.com', 'Female', '9826555022', 'vinitasuryavanshi@vit.edu.in', 'VSBE2218', 99.3, 99.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17101B0999', 'Namita', 'Suresh', 'Suryavanshi', 'INFT', 'B', 'TE', 'namitasuryavanshi855@gmail.com', 'Female', '9826055022', 'namitasuryavanshi@vit.edu.in', 'NSBE2218', 99.3, 99.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17102A0008', 'Akshay', 'Rahul', 'Tiwari', 'CMPN', 'A', 'TE', 'akshay.tiwari@gmail.com', 'Male', 'akshay.tiwari@vit.edu.in', '9830665022', 'ATTE0118', 88.6, 88.7, '9.55', 1, 1, '2020-10-29 04:17:29'),
('17102A0009', 'Vishal', 'Rahul', 'Chavan', 'CMPN', 'A', 'TE', 'vishalchavan075@gmail.com', 'Male', '9826765022', 'vishal.chavan@vit.edu.in', 'VCTE0218', 86.6, 89.7, '8.23', 0, 0, '2020-10-27 06:15:17'),
('17102B0010', 'Vinita', 'Ram', 'Suryavanshi', 'CMPN', 'B', 'TE', 'vinitasuryavanshi755@gmail.com', 'Female', '9826055022', 'vinita.suryavanshi@vit.edu.in', 'VSTE2218', 99.6, 99.8, '9.88', 2, 1, '2020-10-30 16:39:29'),
('17103A0010', 'Sita', 'Ramesh', 'Kumar', 'ETRX', 'B', '', 'sitakumar05@gmail.com', 'Female', '9826775022', 'sita.kumar@vit.edu.in', 'SKBE2318', 99.5, 99.8, '0', 0, 0, '0000-00-00 00:00:00'),
('17103A0980', 'Sita', 'Ramesh', 'Kumar', 'ETRX', 'B', 'TE', 'sitakumar05@gmail.com', 'Female', '9826775022', 'sita.kumar@vit.edu.in', 'SKBE2318', 99.5, 99.8, '0', 0, 0, '0000-00-00 00:00:00'),
('17103B0008', 'Nikita', 'Suresh', 'Suryavanshi', 'ETRX', 'B', '', 'nikitasuryavanshi755@gmail.com', 'Female', '9836555022', 'nikita.suryavanshi@vit.edu.in', 'NSBE2118', 99.8, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('17103B0009', 'Anita', 'Suresh', 'Rane', 'ETRX', 'B', '', 'anitarane885@gmail.com', 'Female', '9826755022', 'anita.rane@vit.edu.in', 'ARBE2018', 99.7, 99.6, '0', 0, 0, '0000-00-00 00:00:00'),
('17103B0988', 'Nikita', 'Suresh', 'Suryavanshi', 'ETRX', 'B', '', 'nikitasuryavanshi755@gmail.com', 'Female', '9836555022', 'nikita.suryavanshi@vit.edu.in', 'NSBE2118', 99.8, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('17103B0989', 'Anita', 'Suresh', 'Rane', 'ETRX', 'B', '', 'anitarane885@gmail.com', 'Female', '9826755022', 'anita.rane@vit.edu.in', 'ARBE2018', 99.7, 99.6, '0', 0, 0, '0000-00-00 00:00:00'),
('17104B0008', 'Harshada', 'Suresh', 'Kumar', 'EXTC', 'B', '', 'harshadakumar755@gmail.com', 'Female', '9826555012', 'harshada.kumar@vit.edu.in', 'HKBE2218', 97.3, 97.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17104B0009', 'Namita', 'Suresh', 'Kumar', 'EXTC', 'B', '', 'namitakumar855@gmail.com', 'Female', '9826055032', 'namita.kumar@vit.edu.in', 'NKBE2218', 97.3, 95.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17104B0010', 'Namrata', 'Ramesh', 'Kaur', 'EXTC', 'B', '', 'namratakaur55@gmail.com', 'Female', '9826075022', 'namrata.kaur@vit.edu.in', 'NKBE2018', 94.7, 94.8, '0', 0, 0, '0000-00-00 00:00:00'),
('17104B0978', 'Harshada', 'Suresh', 'Kumar', 'EXTC', 'B', '', 'harshadakumar755@gmail.com', 'Female', '9826555012', 'harshada.kumar@vit.edu.in', 'HKBE2218', 97.3, 97.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17104B0979', 'Namita', 'Suresh', 'Kumar', 'EXTC', 'B', '', 'namitakumar855@gmail.com', 'Female', '9826055032', 'namita.kumar@vit.edu.in', 'NKBE2218', 97.3, 95.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17104B9710', 'Namrata', 'Ramesh', 'Kaur', 'EXTC', 'B', 'TE', 'namratakaur55@gmail.com', 'Female', '9826075022', 'namrata.kaur@vit.edu.in', 'NKBE2018', 94.7, 94.8, '0', 0, 0, '0000-00-00 00:00:00'),
('17105B0969', 'Namita', 'Suresh', 'Sharma', '', 'B', '', 'namitasharma855@gmail.com', 'Female', '9826015022', 'namita.sharma@vit.edu.in', 'NSBE2218', 98.3, 98.5, '0', 0, 0, '0000-00-00 00:00:00'),
('17105B9610', 'Nirmala', 'Ramesh', 'Kumar', '', 'B', 'TE', 'nirmalakumar55@gmail.com', 'Female', '9825575022', 'nirmala.kumar@vit.edu.in', 'NKBE2018', 97.7, 98.8, '0', 0, 0, '0000-00-00 00:00:00'),
('18101A0006', 'Akshaj', 'Rahul', 'More', 'INFT', 'A', 'TE', 'akshajmore75@gmail.com', 'Male', '9830665122', 'akshaj.more@vit.edu.in', 'AMTE0318', 88.6, 88.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18101A0007', 'Vimal', 'Rahul', 'Chavan', 'INFT', 'A', 'TE', 'vimalchavan975@gmail.com', 'Male', '9820765522', 'vimal.chavan@vit.edu.in', 'VCTE2218', 89.6, 87.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18101A0996', 'Akshaj', 'Rahul', 'More', 'INFT', 'A', 'TE', 'akshajmore75@gmail.com', 'Male', '9830665122', 'akshaj.more@vit.edu.in', 'AMTE0318', 88.6, 88.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18101A0997', 'Vimal', 'Rahul', 'Chavan', 'INFT', 'A', 'TE', 'vimalchavan975@gmail.com', 'Male', '9820765522', 'vimal.chavan@vit.edu.in', 'VCTE2218', 89.6, 87.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18103A0006', 'Deepak', 'Rahul', 'More', 'ETRX', 'A', 'TE', 'deepakmore75@gmail.com', 'Male', '9837665122', 'deepak.more@vit.edu.in', 'DMTE0518', 88.9, 88.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18103A0007', 'Vishwas', 'Rahul', 'Rane', 'ETRX', 'A', 'TE', 'vishwasrane975@gmail.com', 'Male', '9820665522', 'vishwas.rane@vit.edu.in', 'VRTE2218', 99.6, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18103A0986', 'Deepak', 'Rahul', 'More', 'ETRX', 'A', 'TE', 'deepakmore75@gmail.com', 'Male', '9837665122', 'deepak.more@vit.edu.in', 'DMTE0518', 88.9, 88.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18103A0987', 'Vishwas', 'Rahul', 'Rane', 'ETRX', 'A', 'TE', 'vishwasrane975@gmail.com', 'Male', '9820665522', 'vishwas.rane@vit.edu.in', 'VRTE2218', 99.6, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18104A0006', 'Akshar', 'Rahul', 'Shukla', 'EXTC', 'A', 'TE', 'aksharshukla75@gmail.com', 'Male', '9830665922', 'akshar.shukla@vit.edu.in', 'ASTE1318', 88.9, 88.9, '0', 0, 0, '0000-00-00 00:00:00'),
('18104A0007', 'Namrata', 'Rahul', 'Chavan', 'EXTC', 'A', 'TE', 'namratachavan975@gmail.com', 'Female', '9820765522', 'namrata.chavan@vit.edu.in', 'NCTE2918', 95.6, 95.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18104A0976', 'Akshar', 'Rahul', 'Shukla', 'EXTC', 'A', 'TE', 'aksharshukla75@gmail.com', 'Male', '9830665922', 'akshar.shukla@vit.edu.in', 'ASTE1318', 88.9, 88.9, '0', 0, 0, '0000-00-00 00:00:00'),
('18104A0977', 'Namrata', 'Rahul', 'Chavan', 'EXTC', 'A', 'TE', 'namratachavan975@gmail.com', 'Female', '9820765522', 'namrata.chavan@vit.edu.in', 'NCTE2918', 95.6, 95.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18105A0006', 'Akshay', 'Rahul', 'More', '', 'A', 'TE', 'akshaymore85@gmail.com', 'Male', '9810665122', 'akshay.more@vit.edu.in', 'AMTE0318', 89.6, 88.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18105A0966', 'Akshay', 'Rahul', 'More', '', 'A', 'TE', 'akshaymore85@gmail.com', 'Male', '9810665122', 'akshay.more@vit.edu.in', 'AMTE0318', 89.6, 88.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18105B0007', 'Varun', 'Karan', 'Chavan', '', 'B', 'TE', 'varunchavan975@gmail.com', 'Male', '9820865532', 'varun.chavan@vit.edu.in', 'VCTE2218', 88.6, 88.7, '0', 0, 0, '0000-00-00 00:00:00'),
('18105B0967', 'Varun', 'Karan', 'Chavan', '', 'B', 'TE', 'varunchavan975@gmail.com', 'Male', '9820865532', 'varun.chavan@vit.edu.in', 'VCTE2218', 88.6, 88.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A0001', 'Praveen', 'Lalit', 'Sharma', 'INFT', 'A', 'FE', 'praveen.sharma@gmail.com', 'Male', '9820995522', 'praveen.sharma@vit.edu.in', 'PSFE1519', 70.5, 90.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A0004', 'Manmohan', 'Arun', 'Samant', 'INFT', 'A', 'SE', 'manmohansamant1495@gmail.com', 'Male', '9820595024', 'manmohan.samant@vit.edu.in', 'MSSE1319', 99.8, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A0005', 'Narendra', 'Vimal', 'Tiwari', 'INFT', 'A', 'SE', 'narendratiwari95@gmail.com', 'Male', '9830764022', 'narendra.tiwari@vit.edu.in', 'NTSE0119', 96.8, 87.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A0041', 'Praveen', 'Lalit', 'Sharma', 'INFT', 'A', 'FE', 'praveen.sharma@gmail.com', 'Male', '9820995522', 'praveen.sharma@vit.edu.in', 'PSFE1519', 70.5, 90.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A0090', 'John', 'Alex', 'Doe', 'CMPN', 'A', 'FE', 'john.doe@gmail.com', 'Male', '9876543210', 'john.doe@vit.edu.in', 'JDFE2820', 91.8, 78, '9.72', 2, 2, '2020-10-31 10:47:08'),
('19101A0091', 'keerthy', '-', 'Suresh', 'CMPN', 'A', 'FE', 'keerthy.suresh@gmail.com', 'Female', '7654321489', 'keerthy.suresh@vit.edu.in', 'KSSE1719', 92.4, 86.7, '9.72', 2, 1, '2020-10-31 14:34:03'),
('19101A0093', 'Smarika ', 'Girish', 'Sharma', 'CMPN', 'A', 'FE', 'smarika.sharma@gmail.com', 'Female', '9876543210', 'smarika.sharma@vit.edu.in', 'SSFE1820', 91.2, 88.89, '9.22', 1, 2, '2020-10-28 00:00:00'),
('19101A0099', 'Praveen', 'Lalit', 'Sharma', 'INFT', 'A', 'FE', 'praveen.sharma@gmail.com', 'Male', '9820995522', 'praveen.sharma@vit.edu.in', 'PSFE1519', 70.5, 90.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A0991', 'Praveen', 'Lalit', 'Sharma', 'INFT', 'A', 'FE', 'praveen.sharma@gmail.com', 'Male', '9820995522', 'praveen.sharma@vit.edu.in', 'PSFE1519', 70.5, 90.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A0994', 'Manmohan', 'Arun', 'Samant', 'INFT', 'A', 'SE', 'manmohansamant1495@gmail.com', 'Male', '9820595024', 'manmohan.samant@vit.edu.in', 'MSSE1319', 99.8, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A0995', 'Narendra', 'Vimal', 'Tiwari', 'INFT', 'A', 'SE', 'narendratiwari95@gmail.com', 'Male', '9830764022', 'narendra.tiwari@vit.edu.in', 'NTSE0119', 96.8, 87.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19101A9991', 'Praveen', 'Lalit', 'Sharma', 'INFT', 'A', 'FE', 'praveen.sharma@gmail.com', 'Male', '9820995522', 'praveen.sharma@vit.edu.in', 'PSFE1519', 70.5, 90.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19102A0003', 'Samit', 'Amit', 'Sharma', 'CMPN', 'A', 'FE', 'samit.sharma@gmail.com', 'Male', '9820995022', 'samit.sharma@vit.edu.in', 'SSFE1519', 70.1, 90.5, '8.88', 1, 2, '2020-10-21 08:20:23'),
('19102A0006', 'Anil', 'Arun', 'Samant', 'CMPN', 'A', 'SE', 'anilsamant1495@gmail.com', 'Male', '9820095022', 'anil.samant@vit.edu.in', 'ASSE1019', 98.8, 88.6, '7', 0, 0, '0000-00-00 00:00:00'),
('19102A0007', 'Arun', 'Vimal', 'Tiwari', 'CMPN', 'A', 'SE', 'aruntiwari95@gmail.com', 'Male', '9830765022', 'arun.tiwari@vit.edu.in', 'ATSE0119', 97.8, 88.7, '9.13', 0, 0, '2020-10-30 16:39:29'),
('19103A0001', 'Kartik', 'Lalit', 'Sharma', 'ETRX', 'A', 'FE', 'kartik.sharma@gmail.com', 'Male', '9820595522', 'kartik.sharma@vit.edu.in', 'KSFE1419', 70.5, 90.5, '0', 0, 0, '0000-00-00 00:00:00'),
('19103A0005', 'Naman', 'Ashok', 'Brighumaharishi', 'ETRX', 'A', 'SE', 'namanbrighumaharishi95@gmail.com', 'Male', '9830764032', 'naman.brighumaharishi@vit.edu.in', 'NBSE0219', 97.8, 89.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19103A0981', 'Kartik', 'Lalit', 'Sharma', 'ETRX', 'A', 'FE', 'kartik.sharma@gmail.com', 'Male', '9820595522', 'kartik.sharma@vit.edu.in', 'KSFE1419', 70.5, 90.5, '0', 0, 0, '0000-00-00 00:00:00'),
('19103A0985', 'Naman', 'Ashok', 'Bhrughumaharshi', 'ETRX', 'A', 'SE', 'namanbrighumaharishi95@gmail.com', 'Male', '9830764032', 'naman.brighumaharishi@vit.edu.in', 'NBSE0219', 97.8, 89.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19103B0004', 'Manoj', 'Arun', 'Raaj', 'ETRX', 'B', 'SE', 'manojraaj1495@gmail.com', 'Male', '9829595024', 'manoj.raaj@vit.edu.in', 'MRSE1519', 99.7, 95.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19103B0984', 'Manoj', 'Arun', 'Raaj', 'ETRX', 'B', 'SE', 'manojraaj1495@gmail.com', 'Male', '9829595024', 'manoj.raaj@vit.edu.in', 'MRSE1519', 99.7, 95.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19104A0001', 'Praveen', 'Lalit', 'Brighumaharishi', 'EXTC', 'A', 'FE', 'praveen.brighumaharishi@gmail.com', 'Male', '9827995522', 'praveen.brighumaharishi@vit.edu.in', 'PBFE1519', 76.5, 98.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19104A0004', 'Manmohan', 'Arun', 'Sharma', 'EXTC', 'A', 'SE', 'manmohansharma1495@gmail.com', 'Male', '9820595044', 'manmohan.sharma@vit.edu.in', 'MSSE1319', 99.8, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19104A0005', 'Aditya', 'Vimal', 'Jhadhav', 'EXTC', 'A', 'SE', 'adityajhadhav9587@gmail.com', 'Male', '9843764022', 'aditya.jhadhav@vit.edu.in', 'AJSE0319', 95.8, 87.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19104A0971', 'Praveen', 'Lalit', 'Brighumaharishi', 'EXTC', 'A', 'FE', 'praveen.bhrughumaharshi@gmail.com', 'Male', '9827995522', 'praveen.brighumaharishi@vit.edu.in', 'PBFE1519', 76.5, 98.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19104A0974', 'Manmohan', 'Arun', 'Sharma', 'EXTC', 'A', 'SE', 'manmohansharma1495@gmail.com', 'Male', '9820595044', 'manmohan.sharma@vit.edu.in', 'MSSE1319', 99.8, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19104A0975', 'Aditya', 'Vimal', 'Jhadhav', 'EXTC', 'A', 'SE', 'adityajhadhav9587@gmail.com', 'Male', '9843764022', 'aditya.jhadhav@vit.edu.in', 'AJSE0319', 95.8, 87.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19105A0001', 'Pankaj', 'Lalit', 'Sharma', '', 'A', 'FE', 'pankaj.sharma@gmail.com', 'Male', '9819995522', 'pankaj.sharma@vit.edu.in', 'PSFE1419', 68.5, 90.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19105A0004', 'Tejashwi', 'Arun', 'Samant', '', 'A', 'SE', 'tejashwisamant1405@gmail.com', 'Male', '9820595124', 'tejashwi.samant@vit.edu.in', 'TSSE1019', 99.8, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19105A0005', 'Narendra', 'Raman', 'Tiwari', '', 'A', 'SE', 'narendratiwari05@gmail.com', 'Male', '9831861022', 'narendra.tiwari@vit.edu.in', 'NTSE0219', 96.8, 87.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19105A0961', 'Pankaj', 'Lalit', 'Sharma', '', 'A', 'FE', 'pankaj.sharma@gmail.com', 'Male', '9819995522', 'pankaj.sharma@vit.edu.in', 'PSFE1419', 68.5, 90.6, '0', 0, 0, '0000-00-00 00:00:00'),
('19105A0964', 'Tejashwi', 'Arun', 'Samant', '', 'A', 'SE', 'tejashwisamant1405@gmail.com', 'Male', '9820595124', 'tejashwi.samant@vit.edu.in', 'TSSE1019', 99.8, 99.7, '0', 0, 0, '0000-00-00 00:00:00'),
('19105A0965', 'Narendra', 'Raman', 'Tiwari', '', 'A', 'SE', 'narendratiwari05@gmail.com', 'Male', '9831861022', 'narendra.tiwari@vit.edu.in', 'NTSE0219', 96.8, 87.7, '0', 0, 0, '0000-00-00 00:00:00'),
('20101A0002', 'Neeraj', 'Amit', 'Sharma', 'INFT', 'A', 'FE', 'neerajsharma05@gmail.com', 'Male', '9820575022', 'neeraj.sharma@vit.edu.in', 'NSFE1520', 79.7, 99.9, '0', 0, 0, '0000-00-00 00:00:00'),
('20101A0003', 'Amol', 'Anil', 'Verma', 'INFT', 'A', 'FE', 'amolverma05@gmail.com', 'Male', '9820595022', 'amol.verma@vit.edu.in', 'AVFE1520', 89.2, 97.6, '0', 0, 0, '0000-00-00 00:00:00'),
('20101A0992', 'Neeraj', 'Amit', 'Sharma', 'INFT', 'A', 'FE', 'neerajsharma05@gmail.com', 'Male', '9820575022', 'neeraj.sharma@vit.edu.in', 'NSFE1520', 79.7, 99.9, '0', 0, 0, '0000-00-00 00:00:00'),
('20101A0993', 'Amol', 'Anil', 'Verma', 'INFT', 'A', 'FE', 'amolverma05@gmail.com', 'Male', '9820595022', 'amol.verma@vit.edu.in', 'AVFE1520', 89.2, 97.6, '0', 0, 0, '0000-00-00 00:00:00'),
('20102A0005', 'Amol', 'Anil', 'Sawant', 'CMPN', 'A', 'FE', 'amolsawant05@gmail.com', 'Male', '9820595022', 'amol.sawant@vit.edu.in', 'ASFE1220', 89.1, 97.5, '9.11', 1, 1, '2020-10-14 05:13:14'),
('20103A0002', 'Pawan', 'Amit', 'Sharma', 'ETRX', 'A', 'FE', 'pawansharma05@gmail.com', 'Male', '9821575122', 'pawan.sharma@vit.edu.in', 'PSFE1520', 79.9, 99.9, '0', 0, 0, '0000-00-00 00:00:00'),
('20103A0003', 'Amit', 'Naveen', 'Verma', 'ETRX', 'A', 'FE', 'amitverma05@gmail.com', 'Male', '9820595122', 'amit.verma@vit.edu.in', 'AVFE1720', 80.2, 97.6, '0', 0, 0, '0000-00-00 00:00:00'),
('20103A0982', 'Pawan', 'Amit', 'Sharma', 'ETRX', 'A', 'FE', 'pawansharma05@gmail.com', 'Male', '9821575122', 'pawan.sharma@vit.edu.in', 'PSFE1520', 79.9, 99.9, '0', 0, 0, '0000-00-00 00:00:00'),
('20103A0983', 'Amit', 'Naveen', 'Verma', 'ETRX', 'A', 'FE', 'amitverma05@gmail.com', 'Male', '9820595122', 'amit.verma@vit.edu.in', 'AVFE1720', 80.2, 97.6, '0', 0, 0, '0000-00-00 00:00:00'),
('20104A0002', 'Neeraj', 'Amit', 'Saxena', 'EXTC', 'A', 'FE', 'neerajsaxena05@gmail.com', 'Male', '9826575022', 'neeraj.saxenna@vit.edu.in', 'NSFE1520', 89.7, 99.9, '0', 0, 0, '0000-00-00 00:00:00'),
('20104A0972', 'Neeraj', 'Amit', 'Saxena', 'EXTC', 'A', 'FE', 'neerajsaxena05@gmail.com', 'Male', '9826575022', 'neeraj.saxenna@vit.edu.in', 'NSFE1520', 89.7, 99.9, '0', 0, 0, '0000-00-00 00:00:00'),
('20104B0003', 'Neelabh', 'Anil', 'Verma', 'EXTC', 'B', 'FE', 'neelabhverma05@gmail.com', 'Male', '9820495022', 'neelabh.verma@vit.edu.in', 'NVFE1720', 99.2, 99.6, '0', 0, 0, '0000-00-00 00:00:00'),
('20104B0973', 'Neelabh', 'Anil', 'Verma', 'EXTC', 'B', 'FE', 'neelabhverma05@gmail.com', 'Male', '9820495022', 'neelabh.verma@vit.edu.in', 'NVFE1720', 99.2, 99.6, '0', 0, 0, '0000-00-00 00:00:00'),
('20105A0002', 'Anil', 'Amit', 'Sharma', '', 'A', 'FE', 'anilsharma05@gmail.com', 'Male', '9880575022', 'anil.sharma@vit.edu.in', 'ASFE1220', 70.7, 99.9, '0', 0, 0, '0000-00-00 00:00:00'),
('20105A0003', 'Amar', 'Akshaj', 'Verma', '', 'A', 'FE', 'amarverma05@gmail.com', 'Male', '9820695022', 'amar.verma@vit.edu.in', 'AVFE1120', 89.9, 97.6, '0', 0, 0, '0000-00-00 00:00:00'),
('20105A0962', 'Anil', 'Amit', 'Sharma', '', 'A', 'FE', 'anilsharma05@gmail.com', 'Male', '9880575022', 'anil.sharma@vit.edu.in', 'ASFE1220', 70.7, 99.9, '0', 0, 0, '0000-00-00 00:00:00'),
('20105A0963', 'Amar', 'Akshaj', 'Verma', '', 'A', 'FE', 'amarverma05@gmail.com', 'Male', '9820695022', 'amar.verma@vit.edu.in', 'AVFE1120', 89.9, 97.6, '0', 0, 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses_taken`
--
ALTER TABLE `courses_taken`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_fk_7` (`student_id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_fk_1` (`student_id`);

--
-- Indexes for table `project_links`
--
ALTER TABLE `project_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_fk_6` (`student_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_fk_3` (`student_id`);

--
-- Indexes for table `skills_learnt`
--
ALTER TABLE `skills_learnt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_fk_5` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rollNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses_taken`
--
ALTER TABLE `courses_taken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `project_links`
--
ALTER TABLE `project_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `skills_learnt`
--
ALTER TABLE `skills_learnt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses_taken`
--
ALTER TABLE `courses_taken`
  ADD CONSTRAINT `student_id_fk_7` FOREIGN KEY (`student_id`) REFERENCES `students` (`rollNo`);

--
-- Constraints for table `internships`
--
ALTER TABLE `internships`
  ADD CONSTRAINT `student_id_fk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`rollNo`);

--
-- Constraints for table `project_links`
--
ALTER TABLE `project_links`
  ADD CONSTRAINT `student_id_fk_6` FOREIGN KEY (`student_id`) REFERENCES `students` (`rollNo`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `student_id_fk_3` FOREIGN KEY (`student_id`) REFERENCES `students` (`rollNo`);

--
-- Constraints for table `skills_learnt`
--
ALTER TABLE `skills_learnt`
  ADD CONSTRAINT `student_id_fk_5` FOREIGN KEY (`student_id`) REFERENCES `students` (`rollNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
