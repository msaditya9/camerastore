-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 13, 2016 at 10:57 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `camera`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brandname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=latin1 COMMENT='User details';

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brandname`) VALUES
(203, 'Canon'),
(211, 'Gopro'),
(204, 'Nikon'),
(205, 'Sony');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1 COMMENT='camera specifications';

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `brand_id`, `model`, `type`, `color`, `price`) VALUES
(111, 205, 'Alpha 7s', 'DSLR', 'Grey', 2900),
(116, 203, '70D', 'DSLR', 'Black', 1000),
(118, 203, 'T6i', 'DSLR', 'Red', 400),
(124, 211, 'Hero 5', 'Video Cam', 'Silver', 399),
(126, 204, 'D5200', 'DSLR', 'Black', 999),
(127, 204, 'D610', 'DSLR', 'Black', 2499),
(128, 204, 'D90', 'DSLR', 'Grey', 750),
(129, 204, 'D630', 'Video Cam', 'Red', 4200),
(130, 204, 'D810', 'DSLR', 'Grey', 2400),
(131, 211, 'Here 3', 'Video Cam', 'White', 399),
(132, 211, 'Here 3+', 'Video Cam', 'Grey', 420),
(133, 211, 'Here 4', 'Video Cam', 'Grey', 450),
(134, 211, 'Hero 4 Silver', 'Video Cam', 'Grey', 499),
(135, 211, 'Hero 4 Black', 'Video Cam', 'Black', 530),
(136, 205, 'Alpha aii', 'Video & DSLR', 'Red', 3000),
(137, 205, 'Alpha 6s', 'DSLR', 'Black', 799),
(138, 205, 'Alpha 7sii', 'DSLR', 'Black', 2100),
(140, 203, '550D', 'DSLR', 'Black', 399),
(141, 203, '550D', 'Video Cam', 'Black', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brandname` (`brandname`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;