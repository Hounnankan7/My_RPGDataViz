-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 15, 2022 at 09:57 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_data`
--

CREATE TABLE `class_data` (
  `id` int(1) NOT NULL,
  `classe_name` varchar(200) NOT NULL,
  `health_point` int(3) NOT NULL,
  `technical_point` int(3) NOT NULL,
  `attack_point` int(11) NOT NULL,
  `defense_point` int(11) NOT NULL,
  `agility_point` int(11) NOT NULL,
  `karma_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_data`
--

INSERT INTO `class_data` (`id`, `classe_name`, `health_point`, `technical_point`, `attack_point`, `defense_point`, `agility_point`, `karma_point`) VALUES
(1, 'Swordman', 100, 50, 20, 50, 20, 10),
(2, 'Spearman', 100, 50, 10, 20, 30, 80),
(3, 'Ninja', 100, 60, 10, 25, 40, 50),
(4, 'Archer', 100, 50, 30, 45, 20, 10),
(5, 'Gunner', 100, 30, 20, 10, 10, 60),
(6, 'Artificier', 100, 50, 30, 60, 60, 10),
(7, 'Exorcist', 100, 20, 30, 20, 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `ennemy_table`
--

CREATE TABLE `ennemy_table` (
  `id_ennemy` int(11) NOT NULL,
  `name_ennemy` varchar(200) NOT NULL,
  `health` int(11) NOT NULL,
  `technical` int(11) NOT NULL,
  `attack` int(11) NOT NULL,
  `defense` int(11) NOT NULL,
  `agility` int(11) NOT NULL,
  `karma` int(11) NOT NULL,
  `exp_loot` int(11) NOT NULL,
  `path_to_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ennemy_table`
--

INSERT INTO `ennemy_table` (`id_ennemy`, `name_ennemy`, `health`, `technical`, `attack`, `defense`, `agility`, `karma`, `exp_loot`, `path_to_image`) VALUES
(1, 'Kenshin Uesugi', 120, 50, 60, 40, 30, 40, 150, 'images_ennemie/Kenshin Uesugi.png'),
(2, 'Motochika Chosokabe', 140, 80, 40, 65, 15, 35, 200, 'images_ennemie/Motochika Chosokabe.png'),
(3, 'Nagamasa Azai', 150, 20, 25, 35, 65, 50, 300, 'images_ennemie/Nagamasa Azai.png'),
(4, 'Oda Nobunaga', 200, 100, 50, 50, 35, 50, 25, 'images_ennemie/Oda Nobunaga.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_data`
--
ALTER TABLE `class_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ennemy_table`
--
ALTER TABLE `ennemy_table`
  ADD PRIMARY KEY (`id_ennemy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_data`
--
ALTER TABLE `class_data`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ennemy_table`
--
ALTER TABLE `ennemy_table`
  MODIFY `id_ennemy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
