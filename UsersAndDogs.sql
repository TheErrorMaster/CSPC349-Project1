-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2020 at 01:49 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `dog`
--

DROP TABLE IF EXISTS `dog`;
CREATE TABLE IF NOT EXISTS `dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `breed` varchar(30) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `owner` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog`
--

INSERT INTO `dog` (`id`, `name`, `gender`, `size`, `breed`, `picture`, `owner`) VALUES
(8, 'Rocky', 'male', 'small', 'Chihuahua', 'uploads/chi.jpg', 'mauricio.macias'),
(9, 'Animal', 'male', 'small', 'goldenRet', 'uploads/otter5.jpg', 'maui'),
(10, 'Bongo The Ripper', 'male', 'large', 'Wolf', 'uploads/wulf.jpg', '123'),
(13, 'Peanut', 'male', 'small', 'beagle', 'uploads/Peanut.jpg', 'rlove1'),
(14, 'Sporg', 'male', 'medium', 'poodle', 'uploads/uglypooch.jpg', 'meee'),
(15, 'Scooby-Doo', 'male', 'large', 'greatDane', 'uploads/scooby.jpg', 'shag');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) NOT NULL,
  `fName` varchar(60) NOT NULL,
  `lName` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `fName`, `lName`, `password`, `phone`) VALUES
('123', 'mauricio.macias123@gmail.com', 'MAURICIO', 'MACIAS', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567890'),
('maui', 'mauricio.macias123@gmail.com', 'MAURICIO', 'MACIAS', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567890'),
('mauricio.macias', 'mauricio.macias123@gmail.com', 'MAURICIO', 'MACIAS', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567890'),
('meee', 'email@email.com', 'Me', 'yuu', '523a306936797d202026dd9e2f636e302fff91e3', '2456345245'),
('rlove1', 'reederloveland@gmail.com', 'Reeder', 'Loveland', '2fc1392c727824dbbd1958b3dd157c91793ca430', '7143483864'),
('shag', 'SHagster@gmail.com', 'Shaggy', 'Gang', '6a0b0d7e973d5f98c71868e1c2196b677540e9a3', '2345234523');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
