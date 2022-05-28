-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 01:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(255) NOT NULL,
  `APASS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_name` varchar(233) NOT NULL,
  `venue` varchar(222) NOT NULL,
  `date` date NOT NULL,
  `fee` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_name`, `venue`, `date`, `fee`, `id`) VALUES
(' Technical Symposium', 'HICAS', '2022-05-03', 100, 4),
(' Technical Symposium', 'HICAS', '2022-05-03', 100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `Ename` varchar(255) NOT NULL,
  `Etype` varchar(255) NOT NULL,
  `Edate` date NOT NULL,
  `session` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `Ename`, `Etype`, `Edate`, `session`, `class`, `subject`) VALUES
(1, ' Internal', 'CIA 1', '2022-04-30', 'FN', 'B.Sc Cs', 'C++'),
(3, ' Model', 'Model', '2022-05-05', 'AN', 'B.Sc Cs', 'Animation Techniques');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `Reg_no` varchar(255) NOT NULL,
  `Ename` varchar(255) NOT NULL,
  `Etype` varchar(233) NOT NULL,
  `Sub` varchar(233) NOT NULL,
  `Marks` int(11) NOT NULL,
  `Grade` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`Reg_no`, `Ename`, `Etype`, `Sub`, `Marks`, `Grade`) VALUES
('19bsc116', ' Internal', 'CIA 1', ' C++', 85, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `Staff_name` varchar(255) NOT NULL,
  `Staff_qulaify` varchar(255) NOT NULL,
  `Staff-pay` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Staff_name`, `Staff_qulaify`, `Staff-pay`, `username`, `password`) VALUES
(1, 'Ram', 'M.sc cs', '30000', 'RAMCS', '1234'),
(2, ' Ram', 'b.sc cs', ' 35555', 'RAMCS', '1234'),
(3, ' Ravi', 'M.sc physics', ' 30000', 'RAVIMSC', '1234'),
(4, ' mahesh', 'M.sc chemisty', ' 25900', 'MAHESHMSC', '1234'),
(11, 'udhay', 'PHD in mathematics', '26000', 'UDHAYMATHS', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Reg_no` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Batch` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `Pnumber` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Reg_no`, `Department`, `Batch`, `Age`, `Number`, `Pnumber`, `Email`) VALUES
(1, ' Pravin Kumar', ' 19bsc116', ' B.sc computer science', ' B', 21, 2147483647, 2147483647, 'pravinkumarspk2507@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
