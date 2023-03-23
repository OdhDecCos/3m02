-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 23, 2023 at 02:13 PM
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
-- Database: `sudriabotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `ax12`
--

CREATE TABLE `ax12` (
  `time` datetime NOT NULL,
  `R1_AX12_1_vitesse` int(11) NOT NULL,
  `R1_AX12_1_position` int(11) NOT NULL,
  `R1_AX12_2_vitesse` int(11) NOT NULL,
  `R1_AX12_2_position` int(11) NOT NULL,
  `R1_AX12_3_vitesse` int(11) NOT NULL,
  `R1_AX12_3_position` int(11) NOT NULL,
  `R1_AX12_4_vitesse` int(11) NOT NULL,
  `R1_AX12_4_position` int(11) NOT NULL,
  `R1_AX12_5_vitesse` int(11) NOT NULL,
  `R1_AX12_5_position` int(11) NOT NULL,
  `R1_AX12_6_vitesse` int(11) NOT NULL,
  `R1_AX12_6_position` int(11) NOT NULL,
  `R1_AX12_7_vitesse` int(11) NOT NULL,
  `R1_AX12_7_position` int(11) NOT NULL,
  `R1_AX12_8_vitesse` int(11) NOT NULL,
  `R1_AX12_8_position` int(11) NOT NULL,
  `R1_AX12_9_vitesse` int(11) NOT NULL,
  `R1_AX12_9_position` int(11) NOT NULL,
  `R1_AX12_10_vitesse` int(11) NOT NULL,
  `R1_AX12_10_position` int(11) NOT NULL,
  `R1_AX12_11_vitesse` int(11) NOT NULL,
  `R1_AX12_11_position` int(11) NOT NULL,
  `R1_AX12_12_vitesse` int(11) NOT NULL,
  `R1_AX12_12_position` int(11) NOT NULL,
  `R2_AX12_1_vitesse` int(11) NOT NULL,
  `R2_AX12_1_position` int(11) NOT NULL,
  `R2_AX12_2_vitesse` int(11) NOT NULL,
  `R2_AX12_2_position` int(11) NOT NULL,
  `R2_AX12_3_vitesse` int(11) NOT NULL,
  `R2_AX12_3_position` int(11) NOT NULL,
  `R2_AX12_4_vitesse` int(11) NOT NULL,
  `R2_AX12_4_position` int(11) NOT NULL,
  `R2_AX12_5_vitesse` int(11) NOT NULL,
  `R2_AX12_5_position` int(11) NOT NULL,
  `R2_AX12_6_vitesse` int(11) NOT NULL,
  `R2_AX12_6_position` int(11) NOT NULL,
  `R2_AX12_7_vitesse` int(11) NOT NULL,
  `R2_AX12_7_position` int(11) NOT NULL,
  `R2_AX12_8_vitesse` int(11) NOT NULL,
  `R2_AX12_8_position` int(11) NOT NULL,
  `R2_AX12_9_vitesse` int(11) NOT NULL,
  `R2_AX12_9_position` int(11) NOT NULL,
  `R2_AX12_10_vitesse` int(11) NOT NULL,
  `R2_AX12_10_position` int(11) NOT NULL,
  `R2_AX12_11_vitesse` int(11) NOT NULL,
  `R2_AX12_11_position` int(11) NOT NULL,
  `R2_AX12_12_vitesse` int(11) NOT NULL,
  `R2_AX12_12_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ax12`
--

INSERT INTO `ax12` (`time`, `R1_AX12_1_vitesse`, `R1_AX12_1_position`, `R1_AX12_2_vitesse`, `R1_AX12_2_position`, `R1_AX12_3_vitesse`, `R1_AX12_3_position`, `R1_AX12_4_vitesse`, `R1_AX12_4_position`, `R1_AX12_5_vitesse`, `R1_AX12_5_position`, `R1_AX12_6_vitesse`, `R1_AX12_6_position`, `R1_AX12_7_vitesse`, `R1_AX12_7_position`, `R1_AX12_8_vitesse`, `R1_AX12_8_position`, `R1_AX12_9_vitesse`, `R1_AX12_9_position`, `R1_AX12_10_vitesse`, `R1_AX12_10_position`, `R1_AX12_11_vitesse`, `R1_AX12_11_position`, `R1_AX12_12_vitesse`, `R1_AX12_12_position`, `R2_AX12_1_vitesse`, `R2_AX12_1_position`, `R2_AX12_2_vitesse`, `R2_AX12_2_position`, `R2_AX12_3_vitesse`, `R2_AX12_3_position`, `R2_AX12_4_vitesse`, `R2_AX12_4_position`, `R2_AX12_5_vitesse`, `R2_AX12_5_position`, `R2_AX12_6_vitesse`, `R2_AX12_6_position`, `R2_AX12_7_vitesse`, `R2_AX12_7_position`, `R2_AX12_8_vitesse`, `R2_AX12_8_position`, `R2_AX12_9_vitesse`, `R2_AX12_9_position`, `R2_AX12_10_vitesse`, `R2_AX12_10_position`, `R2_AX12_11_vitesse`, `R2_AX12_11_position`, `R2_AX12_12_vitesse`, `R2_AX12_12_position`) VALUES
('2023-02-16 17:07:00', 0, 2, 3, 2, 4, 4, 5, 2, 3, 5, 4, 3, 2, 3, 2, 4, 0, 0, 0, 1, 4, 3, 3, 2, 1, 3, 2, 4, 1, 3, 1, 3, 1, 4, 4, 4, 4, 1, 5, 0, 1, 0, 3, 3, 2, 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gpio`
--

CREATE TABLE `gpio` (
  `time` datetime NOT NULL,
  `GPIO1` tinyint(1) NOT NULL,
  `GPIO2` tinyint(1) NOT NULL,
  `GPIO3` tinyint(1) NOT NULL,
  `GPIO4` tinyint(1) NOT NULL,
  `GPIO5` tinyint(1) NOT NULL,
  `GPIO6` tinyint(1) NOT NULL,
  `GPIO7` tinyint(1) NOT NULL,
  `GPIO8` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gpio`
--

INSERT INTO `gpio` (`time`, `GPIO1`, `GPIO2`, `GPIO3`, `GPIO4`, `GPIO5`, `GPIO6`, `GPIO7`, `GPIO8`) VALUES
('2023-02-16 16:28:42', 0, 1, 0, 0, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `moteurs`
--

CREATE TABLE `moteurs` (
  `time` datetime NOT NULL,
  `R1_moteur_1_pwm` int(11) NOT NULL,
  `R1_moteur_1_dir` tinyint(1) NOT NULL,
  `R1_moteur_2_pwm` int(11) NOT NULL,
  `R1_moteur_2_dir` tinyint(1) NOT NULL,
  `R2_moteur_1_pwm` int(11) NOT NULL,
  `R2_moteur_1_dir` tinyint(1) NOT NULL,
  `R2_moteur_2_pwm` int(11) NOT NULL,
  `R2_moteur_2_dir` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moteurs`
--

INSERT INTO `moteurs` (`time`, `R1_moteur_1_pwm`, `R1_moteur_1_dir`, `R1_moteur_2_pwm`, `R1_moteur_2_dir`, `R2_moteur_1_pwm`, `R2_moteur_1_dir`, `R2_moteur_2_pwm`, `R2_moteur_2_dir`) VALUES
('2023-02-16 16:44:34', 5, 0, 10, 1, 5, 0, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `objets`
--

CREATE TABLE `objets` (
  `time` datetime NOT NULL,
  `B_E1_pos_X` int(11) NOT NULL,
  `B_E1_pos_Y` int(11) NOT NULL,
  `B_E1_pos_theta` varchar(6) NOT NULL,
  `B_E2_pos_X` int(11) NOT NULL,
  `B_E2_pos_Y` int(11) NOT NULL,
  `B_E2_pos_theta` varchar(6) NOT NULL,
  `B_E3_pos_X` int(11) NOT NULL,
  `B_E3_pos_Y` int(11) NOT NULL,
  `B_E3_pos_theta` varchar(6) NOT NULL,
  `B_E4_pos_X` int(11) NOT NULL,
  `B_E4_pos_Y` int(11) NOT NULL,
  `B_E4_pos_theta` varchar(6) NOT NULL,
  `B_E5_pos_X` int(11) NOT NULL,
  `B_E5_pos_Y` int(11) NOT NULL,
  `B_E5_pos_theta` varchar(6) NOT NULL,
  `B_E6_pos_X` int(11) NOT NULL,
  `B_E6_pos_Y` int(11) NOT NULL,
  `B_E6_pos_theta` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

CREATE TABLE `robots` (
  `time` datetime NOT NULL,
  `B_R1_pos_X` int(11) NOT NULL,
  `B_R1_pos_Y` int(11) NOT NULL,
  `B_R1_pos_theta` int(11) NOT NULL,
  `B_R2_pos_X` int(11) NOT NULL,
  `B_R2_pos_Y` int(11) NOT NULL,
  `B_R2_pos_Theta` int(11) NOT NULL,
  `B_R1ADV_pos_X` int(11) NOT NULL,
  `B_R1ADV_pos_Y` int(11) NOT NULL,
  `B_R1ADV_pos_theta` int(11) NOT NULL,
  `B_R2ADV_pos_X` int(11) NOT NULL,
  `B_R2ADV_pos_Y` int(11) NOT NULL,
  `B_R2ADV_pos_theta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `time` datetime NOT NULL,
  `R1.pos_odom.X` int(11) NOT NULL,
  `R1.pos_odom.Y` int(11) NOT NULL,
  `R1.pos_odom.Theta` int(11) NOT NULL,
  `R2.pos_odom.X` int(11) NOT NULL,
  `R2.pos_odom.Y` int(11) NOT NULL,
  `R2.pos_odom.Theta` int(11) NOT NULL,
  `R1ADV.pos.X` int(11) NOT NULL,
  `R1ADV.pos.Y` int(11) NOT NULL,
  `R2ADV.pos.X` int(11) NOT NULL,
  `R2ADV.pos.Y` int(11) NOT NULL,
  `E1.pos.X` int(11) DEFAULT NULL,
  `E1.pos.Y` int(11) DEFAULT NULL,
  `E1.couleur` varchar(6) DEFAULT NULL,
  `E2.pos.X` int(11) DEFAULT NULL,
  `E2.pos.Y` int(11) DEFAULT NULL,
  `E2.couleur` varchar(6) DEFAULT NULL,
  `E3.pos.X` int(11) DEFAULT NULL,
  `E3.pos.Y` int(11) DEFAULT NULL,
  `E3.couleur` varchar(6) DEFAULT NULL,
  `E4.pos.X` int(11) DEFAULT NULL,
  `E4.pos.Y` int(11) DEFAULT NULL,
  `E4.couleur` varchar(6) DEFAULT NULL,
  `E5.pos.X` int(11) DEFAULT NULL,
  `E5.pos.Y` int(11) DEFAULT NULL,
  `E5.couleur` varchar(6) DEFAULT NULL,
  `E6.pos.X` int(11) DEFAULT NULL,
  `E6.pos.Y` int(11) DEFAULT NULL,
  `E6.couleur` varchar(6) DEFAULT NULL,
  `E7.pos.X` int(11) DEFAULT NULL,
  `E7.pos.Y` int(11) DEFAULT NULL,
  `E7.couleur` varchar(6) DEFAULT NULL,
  `E8.pos.X` int(11) DEFAULT NULL,
  `E8.pos.Y` int(11) DEFAULT NULL,
  `E8.couleur` varchar(6) DEFAULT NULL,
  `E9.pos.X` int(11) DEFAULT NULL,
  `E9.pos.Y` int(11) DEFAULT NULL,
  `E9.couleur` varchar(6) DEFAULT NULL,
  `E10.pos.X` int(11) DEFAULT NULL,
  `E10.pos.Y` int(11) DEFAULT NULL,
  `E10.couleur` varchar(6) DEFAULT NULL,
  `E11.pos.X` int(11) DEFAULT NULL,
  `E11.pos.Y` int(11) DEFAULT NULL,
  `E11.couleur` varchar(6) DEFAULT NULL,
  `E12.pos.X` int(11) DEFAULT NULL,
  `E12.pos.Y` int(11) DEFAULT NULL,
  `E12.couleur` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`time`, `R1.pos_odom.X`, `R1.pos_odom.Y`, `R1.pos_odom.Theta`, `R2.pos_odom.X`, `R2.pos_odom.Y`, `R2.pos_odom.Theta`, `R1ADV.pos.X`, `R1ADV.pos.Y`, `R2ADV.pos.X`, `R2ADV.pos.Y`, `E1.pos.X`, `E1.pos.Y`, `E1.couleur`, `E2.pos.X`, `E2.pos.Y`, `E2.couleur`, `E3.pos.X`, `E3.pos.Y`, `E3.couleur`, `E4.pos.X`, `E4.pos.Y`, `E4.couleur`, `E5.pos.X`, `E5.pos.Y`, `E5.couleur`, `E6.pos.X`, `E6.pos.Y`, `E6.couleur`, `E7.pos.X`, `E7.pos.Y`, `E7.couleur`, `E8.pos.X`, `E8.pos.Y`, `E8.couleur`, `E9.pos.X`, `E9.pos.Y`, `E9.couleur`, `E10.pos.X`, `E10.pos.Y`, `E10.couleur`, `E11.pos.X`, `E11.pos.Y`, `E11.couleur`, `E12.pos.X`, `E12.pos.Y`, `E12.couleur`) VALUES
('2023-02-26 08:10:59', 221, 131, 21, 100, 99, 171, 268, 6, 146, 67, 63, 10, 'jaune', 183, 182, 'jaune', 216, 173, 'jaune', 51, 51, 'jaune', 229, 10, 'marron', 290, 135, 'marron', 140, 65, 'marron', 63, 16, 'marron', 234, 132, 'rose', 288, 162, 'rose', 54, 92, 'rose', 231, 95, 'rose'),
('2023-02-26 08:11:05', 33, 199, 232, 73, 55, 234, 127, 34, 172, 73, 30, 80, 'jaune', 213, 70, 'jaune', 183, 0, 'jaune', 54, 180, 'jaune', 288, 21, 'marron', 190, 170, 'marron', 106, 45, 'marron', 15, 116, 'marron', 227, 8, 'rose', 282, 115, 'rose', 14, 102, 'rose', 122, 101, 'rose'),
('2023-02-26 08:13:13', 271, 24, 320, 26, 154, 210, 184, 63, 219, 142, 108, 134, 'jaune', 81, 69, 'jaune', 272, 102, 'jaune', 245, 112, 'jaune', 102, 6, 'marron', 39, 110, 'marron', 112, 43, 'marron', 283, 15, 'marron', 165, 106, 'rose', 298, 76, 'rose', 276, 93, 'rose', 169, 84, 'rose'),
('2023-02-26 08:13:54', 165, 72, 52, 193, 158, 7, 219, 117, 221, 187, 138, 100, 'jaune', 37, 24, 'jaune', 64, 144, 'jaune', 287, 124, 'jaune', 71, 63, 'marron', 260, 78, 'marron', 103, 111, 'marron', 220, 3, 'marron', 260, 59, 'rose', 262, 96, 'rose', 231, 84, 'rose', 235, 131, 'rose');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ax12`
--
ALTER TABLE `ax12`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `gpio`
--
ALTER TABLE `gpio`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `moteurs`
--
ALTER TABLE `moteurs`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `objets`
--
ALTER TABLE `objets`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
