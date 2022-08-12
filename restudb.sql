-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 08:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `upassword` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `uname`, `upassword`, `uemail`, `role`) VALUES
(1, 'vidura', '123', 'vidura@gmail.com', 'Admin'),
(6, 'naveen', '123', 'naveen@gmail.com', 'Admin'),
(7, 'naveen11', '789', 'naveen@gmail.com11', 'Author');

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `fdetail` varchar(500) NOT NULL,
  `fimg` varchar(200) NOT NULL,
  `fprice` int(200) NOT NULL,
  `addtocart` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`id`, `fname`, `fdetail`, `fimg`, `fprice`, `addtocart`) VALUES
(34, 'Kotthu Roti', 'Chicken kottu - The best and the most popular Sri Lankan street food and probably the most popular Sri Lankan food in the world. It\'s a mix of roti pieces, some veggies, eggs, and a curry sauce. Chicken curry in this case.', 'images/kottu.jpg', 900, 1),
(35, 'Chicken Fried rice', 'Fried rice is a traditional Chinese preparation of cooked rice, vegetables, protein, soy sauce, and aromatics. The ingredients are stir-fried in a large pan or wok for even flavor distribution. An ideal use for leftovers, fried rice is quick, customizable, and incredibly simple to put together with whatever is in your fridge.', 'images/rice.jpg', 900, 0),
(36, 'Chicken Biryani', 'biryani is a spiced mix of meat and rice, traditionally cooked over an open fire in a leather pot. It is combined in different ways with a variety of components to create a number of highly tasty and unique flavor combinations. The word “biryani” itself comes from the word “birian,” a Persian term which translates to “fried before cooking.” .Any type of biryani consists of four main components: rice, meat, marinade, and spices. When it comes to making biryani rice, basmati rice is typically the ', 'images/biriyani.jpg', 1200, 1),
(37, 'Pol Roti', 'Pol roti (පොල් රොටි) in Sinhalese translates to coconut roti, or coconut flatbread. It’s a very popular type of flatbread made in Sri Lanka. It can be eaten for breakfast, lunch, dinner or even as a snack throughout the day. It’s super versatile!', 'images/roti.jpg', 50, 0),
(38, 'Pizza', 'A baked Italian dish of a thinly rolled bread dough crust typically topped before baking with tomato sauce, cheese, and other ingredients such as meat, vegetables or fruit', 'images/pizza.jpg', 1500, 1),
(39, 'Rice and curry', 'Sri Lankan cooking has evolved around rice. The national meal is not referred to as “curry” but as “rice and curry”: a mountainous plate of rice generally accompanied by assorted meat and/or vegetable curries, various pickles, sambols, and a handful of tiny poppadums.', 'images/fish.jpg', 600, 0),
(40, 'test food 1', 'test detail 1', '', 111, 0),
(41, 'test 2', 'test detail 2', 'undefined', 222, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbloder`
--

CREATE TABLE `tbloder` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `number` int(100) NOT NULL,
  `oder` varchar(500) NOT NULL,
  `addfood` varchar(500) NOT NULL,
  `howmuh` int(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(200) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbloder`
--

INSERT INTO `tbloder` (`id`, `name`, `number`, `oder`, `addfood`, `howmuh`, `datetime`, `address`, `msg`) VALUES
(32, 'test1', 10, 'test1o', 'test1f', 10, '2022-07-31 20:04:21', 'test1a', 'test1m'),
(33, 'test122555555555', 1022, 'test1o22', 'undefinedaaa', 10, '2022-07-31 22:28:15', 'dgdgdg', 'sssss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbloder`
--
ALTER TABLE `tbloder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbloder`
--
ALTER TABLE `tbloder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
