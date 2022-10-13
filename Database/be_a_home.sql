-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 05:46 AM
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
-- Database: `be_a_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal_detail`
--

CREATE TABLE `animal_detail` (
  `animal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `animal_category` varchar(150) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `district` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal_detail`
--

INSERT INTO `animal_detail` (`animal_id`, `user_id`, `animal_category`, `picture`, `district`, `address`, `contact_no`, `status`) VALUES
(2, 1, 'Cat', 'Animal_Image/catWall2.jpg', 'Colombo', 'No:21,Weralagewatta,Madiha,Kamburugamuwa', 765259905, 'deactivated'),
(5, 2, 'Dog', 'Animal_Image/dogWall.jpg', 'Matara', 'No:21,Weralagewatta,Madiha,Kamburugamuwa', 765259905, 'activated'),
(14, 3, 'Cat', 'Animal_Image/1.jpg', 'Galle', 'No. Ginganga Lodge, Sri Piyarathana Mawatha, Bope 80000, Sri Lanka', 764534567, 'activated'),
(15, 4, 'Cat', 'Animal_Image/2.jpg', 'Matara', 'Matara - Akuressa Hwy, Matara, Sri Lanka', 786745345, 'activated'),
(16, 5, 'Cat', 'Animal_Image/3.jpg', 'Colombo', 'Jayantha Weerasekara Mawatha, Colombo 01000, Sri Lanka', 756745345, 'activated'),
(17, 6, 'Cat', 'Animal_Image/4.jpg', 'Kalutara', '11 Sir Cyryl de Zoysa Mawatha, Kalutara 12000, Sri Lanka', 764567890, 'activated'),
(18, 1, 'Dog', 'Animal_Image/5.jpg', 'Anuradhapura', 'No 341, Andarawewa, Trincomalee Road, Sinharagama, Sri Lanka', 784534567, 'activated'),
(19, 2, 'Cat', 'Animal_Image/6.jpg', 'Polonnaruwa', '13, Somill Junction,, Batticaloa Road, Polonnaruwa, Kaduruwela 51000, Sri Lanka', 702345567, 'activated'),
(20, 3, 'Cat', 'Animal_Image/7.jpg', 'Matale', '23, 27 Pulleyar Kovil Rd, Matale 21000, Sri Lanka', 712345678, 'activated'),
(21, 3, 'Cat', 'Animal_Image/8.jpg', 'Kandy', 'No:429/10 Sarasavigama Road Mahankanda, Hindagala 20414, Sri Lanka', 763467890, 'activated'),
(22, 4, 'Cat', 'Animal_Image/9.jpg', 'Nuwara Eliya', 'No23/14th step,Ruwaneliya nuwaraeliya, Nuwaraeliya 22200, Sri Lanka', 712345987, 'activated'),
(23, 5, 'Cat', 'Animal_Image/10.jpg', 'Ratnapura', '234, Thannapita Watta, Panukerepitiya - Palmgarden Rd, Ratnapura 70012, Sri Lanka', 723456789, 'activated'),
(24, 6, 'Dog', 'Animal_Image/11.jpg', 'Puttalam', '37 Poles Rd, Puttalam 61300, Sri Lanka', 764578906, 'activated'),
(25, 1, 'Dog', 'Animal_Image/12.jpg', 'Kurunegala', 'F9M9+3FJ, Suratissa Mawatha, Kurunegala, Sri Lanka', 764543423, 'activated'),
(26, 2, 'Dog', 'Animal_Image/13.jpg', 'Jaffna', '841/6 Navalar Rd, Jaffna 40000, Sri Lanka', 753456789, 'activated'),
(27, 3, 'Dog', 'Animal_Image/14.jpg', 'Trincomalee', '286 Nc road, Trincomalee, Sri Lanka', 712345678, 'activated'),
(28, 4, 'Dog', 'Animal_Image/15.jpg', 'Badulla', '18, Dharmaduta Road, Badulla 90000, Sri Lanka', 724567890, 'activated'),
(29, 5, 'Dog', 'Animal_Image/16.jpg', 'Monaragala', 'Colombo - Batticaloa Hwy, Monaragala, Sri Lanka', 785678345, 'activated'),
(30, 6, 'Dog', 'Animal_Image/17.jpg', 'Hambantota', 'Arabokka Road Sippikulama, 82000, Sri Lanka', 753456789, 'activated'),
(31, 1, 'Dog', 'Animal_Image/18.jpg', 'Gampaha', 'no 83, Gampaha 11000, Sri Lanka', 782341234, 'activated'),
(32, 5, 'Dog', 'Animal_Image/19.jpg', 'Galle', '91 Hirimbura Rd, Galle 80000, Sri Lanka', 763467876, 'activated'),
(33, 1, 'Dog', 'Animal_Image/catWall2.jpg', 'Matara', 'ggggggggg', 753456789, 'deactivated');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `email`, `message`) VALUES
(1, 'Lahiru', 'lahirumadu2341@gmail.com', 'I want know how to donate '),
(2, 'Lahiru', 'cst19034@std.uwu.ac.lk', 'I want to donate money'),
(3, 'Lahiru', 'cst19034@std.uwu.ac.lk', 'I want to donate money'),
(4, 'Lahiru', 'lahirumadu2341@gmail.com', 'ggggggggggg'),
(5, 'Lahiru Madushanka Kulathunga', 'cst19034@std.uwu.ac.lk', 'gggggggggg'),
(6, 'Lahiru Madushanka Kulathunga', 'cst19034@std.uwu.ac.lk', 'yyyyyyyyyyy'),
(7, 'Lahiru Madushanka Kulathunga', 'cst19034@std.uwu.ac.lk', 'fwwwwwwwwwww'),
(8, 'Lahiru Madushanka Kulathunga', 'cst19034@std.uwu.ac.lk', 'fwwwwwwwwwww'),
(9, 'Lahiru Madushanka Kulathunga', 'cst19034@std.uwu.ac.lk', 'dddddddd'),
(10, 'jhgffdfdvc dlllkkkkk', 'lahirumadu2341@gmail.com', 'hhhhhhhhhhh'),
(11, 'Lahiru Madushanka Kulathunga', 'cst19034@std.uwu.ac.lk', 'hhhhhhhhhh'),
(12, 'Lahiru Madushanka Kulathunga', 'cst19034@std.uwu.ac.lk', 'jjjjjjjjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `puppy_delivery_detail`
--

CREATE TABLE `puppy_delivery_detail` (
  `delivery_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `animal_category` varchar(20) NOT NULL,
  `district` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puppy_delivery_detail`
--

INSERT INTO `puppy_delivery_detail` (`delivery_id`, `animal_id`, `firstname`, `lastname`, `email`, `animal_category`, `district`, `address`, `phone`) VALUES
(1, 1, 'Lahiru', 'Madushanka', 'lahirumadu2341@gmail.com', 'Dog', 'Matara', 'Premananda Mwtha, Madiha.', '0765259905'),
(2, 3, 'Lahiru', 'Madushanka', 'lahirumadu2341@gmail.com', 'Cat', 'Matara', 'Premananda Mwtha, Madiha.', '0785678345'),
(3, 2, 'Lahiru', 'Madushanka', 'lahirumadu2341@gmail.com', 'Dog', 'Matara', 'gggggggggggg', '0765259905'),
(4, 2, 'Lahiru', 'Madushanka', 'lahirumadu2341@gmail.com', 'Cat', 'Matara', 'gggggggggggg', '0765259905'),
(5, 2, 'Lahiru', 'Madushanka', 'lahirumadu2341@gmail.com', 'Cat', 'Matara', 'No:21,Weralagewatta,Madiha,Kamburugamuwa', '0765259905'),
(6, 5, 'Lahiru', 'Madushanka', 'lahirumadu2341@gmail.com', 'Dog', 'Matara', 'No:21,Weralagewatta,Madiha,Kamburugamuwa', '0765259905');

-- --------------------------------------------------------

--
-- Table structure for table `puppy_get_detail`
--

CREATE TABLE `puppy_get_detail` (
  `get_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `district` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `animal_category` varchar(10) NOT NULL,
  `get_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puppy_get_detail`
--

INSERT INTO `puppy_get_detail` (`get_id`, `animal_id`, `firstname`, `lastname`, `district`, `email`, `phone`, `animal_category`, `get_date`) VALUES
(1, 4, 'Tharaka', 'Sadaruwan', 'Matara', 'lahirumadu2341@gmail.com', '0765259905', 'Dog', '2022-09-28'),
(2, 5, 'Lahiru', 'Madushanka', 'Matara', 'lahirumadu2341@gmail.com', '0784567345', 'Dog', '2022-09-15'),
(3, 2, 'Lahiru', 'Madushanka', 'Matara', 'lahirumadu2341@gmail.com', '0764534567', 'Cat', '2022-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `user_id` int(11) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `district` varchar(150) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `profile_pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`user_id`, `phone_number`, `district`, `firstname`, `lastname`, `gender`, `address`, `email`, `profile_pic`) VALUES
(1, 765259905, 'Matara', 'Lahiru', 'Madushanka', 'Male', 'No:21,Weralagewatta,Madiha,Kamburugamuwa', 'lahirumadu2341@gmail.com', 'userpics/lahiru.jpg'),
(2, 764534567, 'Galle', 'kavindu', 'geethanjana', 'Male', 'No. Ginganga Lodge, Sri Piyarathana Mawatha, Bope 80000, Sri Lanka', 'kavindu@gmail.com', 'userpics/11.jpg'),
(4, 765259905, 'Matara', 'Jeewake', 'Perera', 'Male', 'Matara - Akuressa Hwy, Matara, Sri Lanka', 'jeewake@gmail.com', 'userpics/4.jpg'),
(5, 765259905, 'Colombo', 'Rasika', 'Jayathilaka', 'Male', 'Jayantha Weerasekara Mawatha, Colombo 01000, Sri Lanka', 'rasika@gmail.com', 'userpics/10.jpg'),
(6, 785634234, 'Colombo', 'Kavindi', 'Nirashani', 'Female', '68 Vijaya Rd, Kolonnawa 10600, Sri Lanka', 'kavindi@gmail.com', 'userpics/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `username`, `password`, `code`, `status`) VALUES
(1, 'Lahiru', '900150983cd24fb0d6963f7d28e17f72', 570243, 'verified'),
(2, 'Kavindu', '900150983cd24fb0d6963f7d28e17f72', 570243, 'verified'),
(4, 'Jeewake', '900150983cd24fb0d6963f7d28e17f72', 267582, 'verified'),
(5, 'Raskia', '900150983cd24fb0d6963f7d28e17f72', 158585, 'verified'),
(6, 'Kavindi', '900150983cd24fb0d6963f7d28e17f72', 158578, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal_detail`
--
ALTER TABLE `animal_detail`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `puppy_delivery_detail`
--
ALTER TABLE `puppy_delivery_detail`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `puppy_get_detail`
--
ALTER TABLE `puppy_get_detail`
  ADD PRIMARY KEY (`get_id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal_detail`
--
ALTER TABLE `animal_detail`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `puppy_delivery_detail`
--
ALTER TABLE `puppy_delivery_detail`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `puppy_get_detail`
--
ALTER TABLE `puppy_get_detail`
  MODIFY `get_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
