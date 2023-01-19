-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 01:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_tp8`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actionByType` (IN `a` INT)  NO SQL
BEGIN 
	SELECT * FROM action 
    WHERE action.idType = a;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_q2` (`a` INT)  BEGIN 
SELECT don.montantDon , donateur.nomD FROM don 
INNER JOIN donateur
ON donateur.idD = don.idD
WHERE YEAR(don.dateDon) = a;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `func_q3` (`a` INT) RETURNS FLOAT BEGIN 
	
    DECLARE i int DEFAULT 0;
    set i = (
	SELECT SUM(don.montantDon) FROM don 
    INNER JOIN action 
    ON action.idAct = don.idAct
    WHERE a = action.idType);
    
    RETURN i;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `idAct` int(11) NOT NULL,
  `nomAct` varchar(30) DEFAULT NULL,
  `description` varchar(60) DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `montantAct` float DEFAULT NULL,
  `nomBeneficiare` varchar(30) DEFAULT NULL,
  `prenBeneficiare` varchar(30) DEFAULT NULL,
  `dateDerniereDon` date DEFAULT NULL,
  `idType` int(11) DEFAULT NULL,
  `idResp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`idAct`, `nomAct`, `description`, `dateCreation`, `dateFin`, `montantAct`, `nomBeneficiare`, `prenBeneficiare`, `dateDerniereDon`, `idType`, `idResp`) VALUES
(1, 'ActionA', 'ActionA Action AActionA', '2023-01-01', '2023-01-26', 12000, 'bail', 'ali', '2023-01-09', 6, 2),
(2, 'ActionB', 'ActionB Action ActionB', '2022-01-01', '2023-01-26', 12200, 'tabi', 'omar', '2023-01-09', 2, 3),
(3, 'ActionC', 'ActionC Action ActionC', '2022-11-01', '2023-01-16', 1200, 'nor', 'ana', '2023-01-01', 5, 1),
(4, 'ActionD', 'ActionD Action ActionD', '2022-11-01', '2023-01-16', 1200, 'nor', 'ana', '2023-01-01', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `don`
--

CREATE TABLE `don` (
  `idDon` int(11) NOT NULL,
  `dateDon` date DEFAULT NULL,
  `montantDon` float DEFAULT NULL,
  `idAct` int(11) DEFAULT NULL,
  `idD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `don`
--

INSERT INTO `don` (`idDon`, `dateDon`, `montantDon`, `idAct`, `idD`) VALUES
(1, '2023-01-03', 103.12, 3, 2),
(2, '2023-01-02', 1098, 2, 1),
(3, '2022-01-06', 1027, 1, 3),
(4, '2022-01-06', 1000000, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `donateur`
--

CREATE TABLE `donateur` (
  `idD` int(11) NOT NULL,
  `nomD` varchar(30) DEFAULT NULL,
  `prenomD` varchar(30) DEFAULT NULL,
  `emailD` varchar(60) DEFAULT NULL,
  `passD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donateur`
--

INSERT INTO `donateur` (`idD`, `nomD`, `prenomD`, `emailD`, `passD`) VALUES
(1, 'asa', 'mohamed', 'moh@email.com', 'dskjezoeon,n'),
(2, 'trii', 'othmane', 'oth@email.com', 'dlzeoi13'),
(3, 'eakd', 'ahmed', 'ahmed@gmail.com', 'dslkjzeo287'),
(12, 'amzil', 'Mustapha', 'booksamzil99@gmail.com', 'AZE'),
(13, 'amzil', 'Mustapha', 'mustaphaamzil124@gmail.com', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `responsable`
--

CREATE TABLE `responsable` (
  `idResp` int(11) NOT NULL,
  `nomResp` varchar(30) DEFAULT NULL,
  `prenomResp` varchar(30) DEFAULT NULL,
  `emailResp` varchar(60) DEFAULT NULL,
  `passResp` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `responsable`
--

INSERT INTO `responsable` (`idResp`, `nomResp`, `prenomResp`, `emailResp`, `passResp`) VALUES
(1, 'respoA', 'respoA', 'respoA@email.com', 'jdskmnq'),
(2, 'respoB', 'respoB', 'respoB@email.com', 'elfkjkeflle'),
(3, 'respoC', 'respoC', 'respoC@email.com', 'lkdfjezmoe'),
(4, 'respoD', 'respoD', 'respoD@email.com', 'zeiovnl'),
(5, 'respoE', 'respoE', 'respoE@email.com', 'respodslkm');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `nomType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`idType`, `nomType`) VALUES
(1, 'TypeA'),
(2, 'TypeB'),
(3, 'TypeC'),
(4, 'TypeD'),
(5, 'TypeE'),
(6, 'TypeF'),
(7, 'TypeG'),
(8, 'TypeH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`idAct`),
  ADD KEY `type_t` (`idType`),
  ADD KEY `Resp_r` (`idResp`);

--
-- Indexes for table `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`idDon`),
  ADD KEY `const_d` (`idD`),
  ADD KEY `const_a` (`idAct`);

--
-- Indexes for table `donateur`
--
ALTER TABLE `donateur`
  ADD PRIMARY KEY (`idD`);

--
-- Indexes for table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`idResp`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `Resp_r` FOREIGN KEY (`idResp`) REFERENCES `responsable` (`idResp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `type_t` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `don`
--
ALTER TABLE `don`
  ADD CONSTRAINT `const_a` FOREIGN KEY (`idAct`) REFERENCES `action` (`idAct`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `const_d` FOREIGN KEY (`idD`) REFERENCES `donateur` (`idD`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
