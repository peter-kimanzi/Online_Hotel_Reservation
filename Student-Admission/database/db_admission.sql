-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 02:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `gname` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `class` varchar(10) NOT NULL,
  `shift` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blgroup` varchar(5) NOT NULL,
  `division` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sname`, `gname`, `contact`, `email`, `address`, `class`, `shift`, `gender`, `blgroup`, `division`) VALUES
(8, 'Tahmid Nishat', 'Abul khasem khan', '01683302276', 'tahmaaidoane@gmail.com', 'Maheshkhali', 'Hons', 1, '', 'A+', 1),
(17, 'Tahmid Uddin Mahmud Nishat', 'Abul khasem khan', '01822597379', 'tahmidnishat@gmail.com', 'Maheshkhali', '12', 1, 'male', 'A+', 1),
(18, 'Izaz Mahmud Tahur', 'Abul khasem khan', '01683302276', 'izaz@gmail.com', 'Fakiraghona, Bara Maheshkhali', '5', 1, 'male', 'A+', 1),
(19, 'Abid Mahmud Abrar', 'Abul khasem khan', '01683302276', 'abid@gmail.com', 'Maheskhali , Cox\'s Bazar', '8', 1, 'male', 'O+', 1),
(20, 'Niaz Mahmud Tazbeed', 'Abul khasem khan', '01822597379', 'niaz@gmail.com', 'Cox\'s Bazar', '6', 1, 'male', 'A+', 2),
(21, 'Hares Uddin Mahmud Shakil', 'Abul khasem khan', '01683302276', 'shakil@gmail.com', 'Dhaka', 'Hons', 2, 'male', 'B+', 1),
(22, 'Saif Uddin Mahmud Sohan', 'Abul khasem khan', '01816057775', 'sohan@gmail.com', 'Dhaka', 'Hons', 1, 'male', 'AB+', 3),
(38, 'Tahmid Uddin Mahmud Nishat', 'Abul khasem khan', '01683302276', 'tahmid.umn@gmail.com', 'Kamarpara, Turag, Dhaka 1230', 'Hons', 1, 'male', 'A+', 1),
(40, 'Al Amin Fahad', 'Mr Fahad Dad', '01718559966', 'alamin@gmail.com', 'Valuka, Mymenshing', 'Hons', 1, 'male', 'O+', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
