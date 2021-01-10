-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 05:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbait_batch_four_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(200) NOT NULL,
  `img` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `product_image` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `product_short_desc` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `product_name`, `product_short_desc`) VALUES
(1, 'https://cdn.pixabay.com/photo/2019/12/06/19/06/heart-4678021_1280.jpg', 'T-shirt', 'It is a long established fact that a reader will be distracted by the readable content of a page'),
(2, 'https://cdn.pixabay.com/photo/2019/12/06/19/06/heart-4678021_1280.jpg', 'Smart Watch', 'It is a long established fact that a reader will be distracted by the readable content of a page'),
(3, 'https://cdn.pixabay.com/photo/2019/12/06/19/06/heart-4678021_1280.jpg', 'T-shirt', 'It is a long established fact that a reader will be distracted by the readable content of a page'),
(4, 'https://cdn.pixabay.com/photo/2019/12/06/19/06/heart-4678021_1280.jpg', 'Smart Watch', 'It is a long established fact that a reader will be distracted by the readable content of a page'),
(5, 'https://cdn.pixabay.com/photo/2019/12/06/19/06/heart-4678021_1280.jpg', 'Smart Watch', 'It is a long established fact that a reader will be distracted by the readable content of a page'),
(6, 'https://cdn.pixabay.com/photo/2019/12/06/19/06/heart-4678021_1280.jpg', 'Smart Watch', 'It is a long established fact that a reader will be distracted by the readable content of a page'),
(7, 'https://cdn.pixabay.com/photo/2019/12/06/19/06/heart-4678021_1280.jpg', 'Smart Watch', 'It is a long established fact that a reader will be distracted by the readable content of a page');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `phone`, `email`) VALUES
(7, 'Nazmul', '014568764', 'nazmul@gmail.com'),
(19, 'Test', '1234564798', 'test@test.com'),
(21, 'Test Name', '123465789', 'test@test.com'),
(23, 'sdf', 'rty', 'ewtesry'),
(26, 'ertse', 'rey', 't6ut'),
(30, 'rert', '467486', 'dfgftr'),
(31, 'Test', '123456798454', 'abc@d.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
