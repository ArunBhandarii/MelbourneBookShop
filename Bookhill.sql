-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2022 at 06:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookhill`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `product` (
  `bookid` int(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `imageurl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `price`,'quantity', `imageurl`) VALUES
(1, 'From Goethe to Gundolf', '30', '3', ''),
(2, 'A heritage of Shadows', '56', '17', ''),
(3, 'From Goethe to Gundolf', '30', '3', ''),
(4, 'A heritage of Shadows', '56', '17', '');




-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`fname`, `lname`, `Email`, `Phone`, `State`, `message`) VALUES
('sad', 'asd', 'sadf', 4654, 'Victoria', 'asdf'),
('sad', 'asd', 'sadf', 4654, 'Victoria', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `postage` varchar(100) NOT NULL,
  `postcode` int(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `book` text NOT NULL,
  `pay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fname`, `lname`, `email`, `postage`, `postcode`, `phone`, `book`) VALUES
(1, 'arun', 'bhandari', 'arunbhandari@gmail.com', '1/233 cotham road', 3101, 042555244, 'paypal'),
(2, 'abc', 'def', 'abc@gmail.com', '1/233 cotham road', 3101, 0455554445 , 'paypal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `userstable` (`fname`, `lname`, `email`, `pass`,'phone') VALUES
('', '', 'arun@abc.com', '','0474557455'),
('jqjq', 'hhh', 'arun@abc.com', 'ababcd','0474557455'),
('john', 'wick', 'johnwick@johny.com', 'eq','421545215');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bookhill`
--
ALTER TABLE `bookhill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookhill`
--
ALTER TABLE `Bookhill`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
