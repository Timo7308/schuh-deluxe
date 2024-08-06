-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 15, 2021 at 01:02 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginnamen`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE latin1_german1_ci NOT NULL,
  `Preis` float NOT NULL,
  `Beschreibung` text COLLATE latin1_german1_ci NOT NULL,
  `Bild` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ID`, `Name`, `Preis`, `Beschreibung`, `Bild`) VALUES
(1, 'Nike Schuh', 60, 'Ein Schuh von Nike', 0x706963747572654e696b65),
(2, 'Adidas Schuh', 75, 'Ein Schuh von Adidas', 0x70696374757265416469646173),
(3, 'Reebok Schuh', 15, 'Ein Schuh von Reebok', 0x70696374757265526565626f6b),
(4, 'Vans Schuh', 150, 'Ein Schuh von Vans', 0x7069637475726556616e73),
(5, 'Crocs Schuh', 1, 'Ein Schuh von Crocs', 0x7069637475726543726f6373);

-- --------------------------------------------------------

--
-- Table structure for table `bestellung`
--

CREATE TABLE `bestellung` (
  `anzahl` int(11) NOT NULL,
  `bestelltan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `bestellung`
--

INSERT INTO `bestellung` (`anzahl`, `bestelltan`) VALUES
(2, '2020-09-09'),
(8, '2021-01-01'),
(3, '2021-03-02'),
(4, '2021-02-05'),
(7, '2021-10-10'),
(11, '2021-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwort` varchar(255) NOT NULL,
  `vorname` varchar(255) NOT NULL DEFAULT '',
  `nachname` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `passwort`, `vorname`, `nachname`) VALUES
(1, 'admin@minishop.de', '12345', 'Timo', 'Schuchmann');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
