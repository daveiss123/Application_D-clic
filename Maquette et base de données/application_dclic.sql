-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2023 at 01:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application_dclic`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminis`
--

CREATE TABLE `adminis` (
  `email` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adminis`
--

INSERT INTO `adminis` (`email`, `mot_de_passe`) VALUES
('dave@mail.com', '123.123'),
('salina@mail.com', '123321');

-- --------------------------------------------------------

--
-- Table structure for table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `formation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `apprenant`
--

INSERT INTO `apprenant` (`id`, `nom`, `prenom`, `birthday`, `ville`, `formation`) VALUES
(1, 'BAMOUNI', 'Dieudonné', '1972-06-10', 'Réo', 'Management'),
(2, 'BAMOUNI', 'Bertrant', '1998-06-10', 'Réo', 'Droit'),
(3, 'NAMA', 'Donald', '1995-06-11', 'Sapouy', 'Art'),
(4, 'BAMOUNI', 'Samson', '1965-06-11', 'Sapouy', 'Diplomatie'),
(5, 'BAMOUNI', 'Ousmane', '1965-11-01', 'Leo', 'Secrétariat'),
(6, 'BAMOUNI', 'Ousmane', '1965-11-01', 'Leo', 'Secrétariat'),
(7, 'BAMOUNI', 'Dave', '1998-12-12', 'Oslo', 'Comptabilité'),
(8, 'BAKO', 'Dave', '1998-12-12', 'Oslo', 'Comptabilité');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
