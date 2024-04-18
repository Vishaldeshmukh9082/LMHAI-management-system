-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 01:11 PM
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
-- Database: `flmhai`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `pid` varchar(1000) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `doctor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`pid`, `name`, `mobileno`, `age`, `email`, `gender`, `bloodgroup`, `date`, `doctor`) VALUES
('1', 'sumit sanjay deshmukh', '8530094339', '24', 'sumitdeshmukh879@gmail.com', 'male', 'A+', '2023-04-13', 'Dr.Kishor Shinde');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `photo` varchar(1000) NOT NULL,
  `name` varchar(200) NOT NULL,
  `education` varchar(200) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`photo`, `name`, `education`, `specialization`, `regno`, `password`) VALUES
('d1.jpeg', 'Dr.Kishor Shinde', 'M.B.B.S', 'O.P.D', 'd23aas', 'kishor123'),
('d2.png', 'Dr.Anilraje Nimbalkar', 'M.S', 'cardilogist', 'sag16y4s', 'anilraje123'),
('d6.jpeg', 'Dr.Surana Sandesh', 'B.A.M.S', 'Physiotherapy', '1342-214', 'surana123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `image` varchar(1000) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedbacktext` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`image`, `name`, `email`, `feedbacktext`) VALUES
('IMG-20230120-WA0004.jpg', 'sumit sanjay deshmukh', 'sumitdeshmukh879@gmail.com', 'very supportive hospital staff.'),
('t1.png', 'tushar amol gaikwad', 'tushargaikwad2003@gmail.com', 'very good doctors and skilled.');

-- --------------------------------------------------------

--
-- Table structure for table `patientdata`
--

CREATE TABLE `patientdata` (
  `pid` varchar(1000) NOT NULL,
  `treatmentno` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `drname` varchar(100) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `priscription` varchar(100) NOT NULL,
  `advise` varchar(100) NOT NULL,
  `report` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `pid` int(255) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`pid`, `photo`, `name`, `email`, `password`, `address`, `gender`, `mobileno`) VALUES
(1, 'IMG-20230120-WA0004.jpg', 'sumit sanjay deshmukh', 'sumitdeshmukh879@gmail.com', 'sumit@123', 'atpost mandave,tal-khatav,dist-satara', 'male', '8530094339'),
(2, 't1.png', 'tushar amol gaikwad', 'tushargaikwad2003@gmail.com', 'tushar@123', 'atpost kharshi,tal javli,satara', 'male', '8483924998');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `name` varchar(200) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`name`, `specialization`, `time`) VALUES
('Dr.Kishor Shinde', 'D.N.DMedicine', 'Everyday morning 9 to 10.30'),
('Dr.Gaikwad deepak', 'M.D.medicine', 'Everyday wednesday 9 to 1'),
('Dr.Desai deepak', 'Orthopedic specialist', 'Every Monday and thursaday afternoon 2 to 3'),
('Dr. Shende deepak ', 'General surgeon and laproscopic surgeon', 'Every tuesaday afternoon 2 to 3'),
('Dr.Ramen Chandrashekhar', 'Brain and spiral cord surgeon', '2nd and 4th saturday from 2pm to 5pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
