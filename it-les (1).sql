-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 01 Mai 2017 à 22:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `it-les`
--

-- --------------------------------------------------------

--
-- Structure de la table `bac`
--

CREATE TABLE IF NOT EXISTS `bac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidat` int(11) NOT NULL,
  `stream` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `distinction` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `bacschoolname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obtainingyear` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_candidat` (`id_candidat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=102 ;

--
-- Contenu de la table `bac`
--



--
-- Structure de la table `candidat`
--

CREATE TABLE IF NOT EXISTS `candidat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civility` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `dob` datetime NOT NULL,
  `pob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `curentlevel` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `leschoice` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lastdegree` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cursus` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `candidatType` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=114 ;

--
-- Contenu de la table `candidat`
--


-- --------------------------------------------------------

--
-- Structure de la table `gamerinfos`
--

CREATE TABLE IF NOT EXISTS `gamerinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidat` int(11) NOT NULL,
  `rangSoloQ` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL,
  `rang` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Structure de la table `postbac`
--

CREATE TABLE IF NOT EXISTS `postbac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidat` int(11) NOT NULL,
  `postDegree` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `postSchoolName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obtainingYear` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_candidat` (`id_candidat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Contenu de la table `postbac`
--



--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bac`
--
ALTER TABLE `bac`
  ADD CONSTRAINT `bac_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`);

--
-- Contraintes pour la table `postbac`
--
ALTER TABLE `postbac`
  ADD CONSTRAINT `postbac_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
