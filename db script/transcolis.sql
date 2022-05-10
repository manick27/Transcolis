-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 04:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projetsemestre2`
--

-- --------------------------------------------------------

--
-- Table structure for table `agence`
--

CREATE TABLE IF NOT EXISTS `agence` (
  `num_ag` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ag` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(9) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `logo` blob,
  PRIMARY KEY (`num_ag`),
  UNIQUE KEY `nom_ag` (`nom_ag`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `matricule` varchar(10) NOT NULL,
  `numcni` int(9) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sex` char(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(9) NOT NULL,
  `region` varchar(10) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  PRIMARY KEY (`matricule`),
  UNIQUE KEY `numcni` (`numcni`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `num_pro` int(11) NOT NULL,
  `poids` int(11) DEFAULT NULL,
  `taille` varchar(10) DEFAULT NULL,
  `valeur` int(11) NOT NULL,
  `description` text,
  `image` blob NOT NULL,
  `num_ag` int(11) NOT NULL,
  `num_trans` int(11) NOT NULL,
  PRIMARY KEY (`num_pro`),
  KEY `fk1_pro` (`num_ag`),
  KEY `fk2_pro` (`num_trans`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `num_trans` int(11) NOT NULL AUTO_INCREMENT,
  `montant` int(11) NOT NULL,
  `date_trans` date NOT NULL,
  `nom_prenom_desti` varchar(100) DEFAULT NULL,
  `ville_desti` varchar(255) NOT NULL,
  `tel_desti` int(9) NOT NULL,
  `email_desti` varchar(255) DEFAULT NULL,
  `matricule` varchar(10) NOT NULL,
  PRIMARY KEY (`num_trans`),
  UNIQUE KEY `email_desti` (`email_desti`),
  KEY `fk_trans` (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk2_pro` FOREIGN KEY (`num_trans`) REFERENCES `transaction` (`num_trans`),
  ADD CONSTRAINT `fk1_pro` FOREIGN KEY (`num_ag`) REFERENCES `agence` (`num_ag`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_trans` FOREIGN KEY (`matricule`) REFERENCES `client` (`matricule`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
