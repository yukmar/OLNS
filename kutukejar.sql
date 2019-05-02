-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 01:28 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kutukejar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_tuts`
--

CREATE TABLE `bank_tuts` (
  `id_tut` int(100) NOT NULL,
  `name_tut` varchar(100) NOT NULL,
  `id_cat` int(2) NOT NULL,
  `desc_tut` text,
  `pdf` varchar(500) NOT NULL,
  `video` varchar(500) NOT NULL,
  `keys` varchar(500) NOT NULL,
  `point` int(100) NOT NULL,
  `waktu_dibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_tuts`
--

INSERT INTO `bank_tuts` (`id_tut`, `name_tut`, `id_cat`, `desc_tut`, `pdf`, `video`, `keys`, `point`, `waktu_dibuat`) VALUES
(1, 'Command & Control - level 2', 5, 'Berthier, with your help the computer have been identified. You have requested a memory dump and before starting your analysis you want to take a look at the antivirus logs. Unfortunately you forget to write down the workstation hostname. But it’s not a problem to get it back since you have a memory dump.\r\n\r\nThe validation flag is the workstation hostname\r\n\r\nThe uncompressed memory dump md5 hash is e3a902d4d44e0f7bd9cb29865e0a15de', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', '1234567890987654321', 15, '2018-09-24 11:18:47'),
(2, 'App Script Exercise 1', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-22 12:22:29'),
(4, 'App - System 1', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-27 07:45:20'),
(5, 'Cracking 1', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-27 17:23:36'),
(6, 'Cryptanalysis 1', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-27 07:46:31'),
(7, 'Network 1', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-27 18:13:34'),
(8, 'Programming 1', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-25 06:25:11'),
(9, 'Realist 1', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-27 16:21:35'),
(10, 'Steganography 1', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-13 17:28:16'),
(11, 'Web - Client 1', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-27 09:50:14'),
(12, 'Web - Server 1', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-26 12:19:44'),
(13, 'App - Script 2', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-28 13:51:37'),
(14, 'App - Script 3', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 10, '2018-09-28 13:51:37'),
(15, 'App - System 2', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', '1234567890', 5, '2018-09-28 14:07:06'),
(16, 'App - System 3', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:03:10'),
(17, 'App - System 4', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:04:51'),
(18, 'App - System 5', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:04:51'),
(19, 'Cracking 2', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:15:09'),
(20, 'Cracking 2', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:16:05'),
(21, 'Cracking 3', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:16:05'),
(22, 'Cracking 4', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:16:05'),
(23, 'Cracking 5', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:16:05'),
(24, 'Cracking 6', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:16:06'),
(25, 'Cracking 7', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:16:06'),
(26, 'Cryptanalysis 2', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:41'),
(27, 'Cryptanalysis 3', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:42'),
(28, 'Cryptanalysis 4', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:42'),
(29, 'Cryptanalysis 5', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:42'),
(30, 'Cryptanalysis 6', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:42'),
(31, 'Cryptanalysis 7', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:42'),
(32, 'Cryptanalysis 8', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:42'),
(33, 'Cryptanalysis 9', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:42'),
(34, 'Cryptanalysis 10', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:20:42'),
(35, 'Forensik 2', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:23:14'),
(36, 'Forensik 3', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:23:14'),
(37, 'Forensik 4', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:23:14'),
(38, 'Forensik 5', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:23:14'),
(39, 'Forensik 6', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:23:14'),
(40, 'Forensik 7', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:23:14'),
(41, 'Forensik 8', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:23:14'),
(42, 'Forensik 9', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:23:14'),
(43, 'Network 2', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:24:35'),
(44, 'Network 3', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:24:35'),
(45, 'Network 4', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:24:36'),
(46, 'Network 5', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:24:36'),
(47, 'Network 6', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:24:36'),
(48, 'Network 7', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:24:36'),
(49, 'Programming 2', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:27:08'),
(50, 'Programming 3', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:27:08'),
(51, 'Programming 4', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:27:08'),
(52, 'Programming 5', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:27:08'),
(53, 'Programming 6', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:27:08'),
(54, 'Programming 7', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:27:08'),
(55, 'Programming 8', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:27:08'),
(56, 'Programming 9', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:27:08'),
(57, 'Realist 2', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:28:23'),
(58, 'Realist 3', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:28:23'),
(59, 'Realist 4', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:28:23'),
(60, 'Realist 5', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:28:23'),
(61, 'Realist 6', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:28:23'),
(62, 'Realist 7', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:28:23'),
(63, 'Realist 8', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:28:23'),
(64, 'Realist 9', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:28:23'),
(65, 'Steganography 2', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:29:06'),
(66, 'Steganography 3', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:29:07'),
(67, 'Steganography 4', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:29:07'),
(68, 'Steganography 5', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:29:07'),
(69, 'Steganography 6', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:29:07'),
(70, 'Web - Client 2', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(71, 'Web - Client 3', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(72, 'Web - Client 4', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(73, 'Web - Client 5', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(74, 'Web - Client 6', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(75, 'Web - Client 7', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(76, 'Web - Client 8', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(77, 'Web - Client 9', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(78, 'Web - Client 10', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(79, 'Web - Client 11', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(80, 'Web - Client 12', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(81, 'Web - Client 13', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(82, 'Web - Client 14', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(83, 'Web - Client 15', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:31:39'),
(84, 'Web - Server 2', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:45'),
(85, 'Web - Server 3', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:45'),
(86, 'Web - Server 4', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:45'),
(87, 'Web - Server 5', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:45'),
(88, 'Web - Server 6', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:45'),
(89, 'Web - Server 7', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:46'),
(90, 'Web - Server 8', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:46'),
(91, 'Web - Server 9', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:46'),
(92, 'Web - Server 10', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:46'),
(93, 'Web - Server 11', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:46'),
(94, 'Web - Server 12', 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa. Magna sit amet purus gravida quis blandit turpis cursus in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Tempus egestas sed sed risus pretium quam vulputate.', 'https://drive.google.com/file/d/0Bz3tJytH6rFzcnkwd3ZKRmVXQWM/preview', 'https://www.youtube.com/embed/V3GJycgu-cs?rel=0', 'qwertyuiop', 5, '2018-09-30 01:38:46');

--
-- Triggers `bank_tuts`
--
DELIMITER $$
CREATE TRIGGER `auto_addtime_tut` BEFORE INSERT ON `bank_tuts` FOR EACH ROW set new.waktu_dibuat = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kejar`
--

CREATE TABLE `kategori_kejar` (
  `id_cat` int(2) NOT NULL,
  `name_cat` varchar(20) NOT NULL,
  `desc_cat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_kejar`
--

INSERT INTO `kategori_kejar` (`id_cat`, `name_cat`, `desc_cat`) VALUES
(1, 'App - Script', 'App - Script Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'App - System', 'App - System Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Cracking', 'Cracking Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'Cryptanalysis', 'Cryptanalysis Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Forensic', 'Forensic Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Network', 'Network Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 'Programming', 'Programming Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(8, 'Realist', 'Realist Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(9, 'Steganography', 'Steganography Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(10, 'Web - Client', 'Web - Client Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(11, 'Web - Server', 'Web - Server Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `log_submit_keys`
--

CREATE TABLE `log_submit_keys` (
  `username` varchar(10) NOT NULL,
  `id_tut` int(100) NOT NULL,
  `date_submit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_submit_keys`
--

INSERT INTO `log_submit_keys` (`username`, `id_tut`, `date_submit`) VALUES
('admin1', 2, '2018-09-24 00:00:00'),
('admin1', 1, '2018-09-24 00:00:00'),
('user1', 2, '2018-09-24 21:13:53'),
('user1', 11, '2018-09-24 21:14:35'),
('user3', 7, '2018-09-26 23:44:24'),
('user4', 10, '2018-09-26 23:44:24'),
('user3', 1, '2018-09-26 23:48:23'),
('user5', 2, '2018-09-26 23:48:23'),
('user6', 1, '2018-09-26 23:48:23'),
('user5', 8, '2018-09-26 23:48:23'),
('user7', 5, '2018-09-26 23:48:23'),
('user1', 11, '2018-09-27 00:00:07'),
('user3', 6, '2018-09-27 00:00:07'),
('nyamuk1', 13, '2018-09-28 13:53:34'),
('Rotan2', 13, '2018-09-28 13:53:34'),
('user3', 26, '2018-09-30 11:42:36'),
('user3', 30, '2018-09-30 11:42:36'),
('user5', 10, '2018-09-30 13:17:46'),
('user5', 5, '2018-09-30 13:17:46'),
('user5', 9, '2018-09-30 13:18:48'),
('user5', 57, '2018-09-30 13:18:48'),
('user3', 2, '2018-09-30 16:09:57');

--
-- Triggers `log_submit_keys`
--
DELIMITER $$
CREATE TRIGGER `date_auto` BEFORE INSERT ON `log_submit_keys` FOR EACH ROW set new.date_submit = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `privilege_lvl`
--

CREATE TABLE `privilege_lvl` (
  `id_priv` int(1) NOT NULL,
  `nama_priv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege_lvl`
--

INSERT INTO `privilege_lvl` (`id_priv`, `nama_priv`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `id_priv` int(1) NOT NULL,
  `password` varchar(64) NOT NULL,
  `waktu_dibuat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `id_priv`, `password`, `waktu_dibuat`) VALUES
('admin1', 'Budi', 1, '1234', '2018-09-20 00:00:00'),
('nyamuk1', 'Agus', 2, 'asdf', '2018-09-27 13:38:10'),
('Rotan2', 'Andik', 1, 'asdf', '2018-09-27 13:56:34'),
('Setapak', 'Daniel', 2, 'qwer', '2018-09-30 14:33:34'),
('Teratai02', 'Mala', 2, 'asdf', '2018-09-27 13:57:22'),
('user1', 'Aniy', 2, 'qwer', '2018-09-22 00:00:00'),
('user3', 'Lina', 2, 'qwer', '2018-09-26 22:41:43'),
('user4', 'Lani', 2, 'qwer', '2018-09-26 22:41:43'),
('user5', 'Dani', 2, 'qwer', '2018-09-26 23:47:00'),
('user6', 'Diana', 1, 'qwer', '2018-09-26 23:47:00'),
('user7', 'Bayu', 2, 'qwer', '2018-09-26 23:47:00');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `auto_addtime_user` BEFORE INSERT ON `user` FOR EACH ROW set new.waktu_dibuat = now()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_tuts`
--
ALTER TABLE `bank_tuts`
  ADD PRIMARY KEY (`id_tut`);

--
-- Indexes for table `kategori_kejar`
--
ALTER TABLE `kategori_kejar`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `privilege_lvl`
--
ALTER TABLE `privilege_lvl`
  ADD PRIMARY KEY (`id_priv`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_tuts`
--
ALTER TABLE `bank_tuts`
  MODIFY `id_tut` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `kategori_kejar`
--
ALTER TABLE `kategori_kejar`
  MODIFY `id_cat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
