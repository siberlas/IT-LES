-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 30 Avril 2017 à 16:31
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db680011459`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Contenu de la table `bac`
--

INSERT INTO `bac` (`id`, `id_candidat`, `stream`, `distinction`, `bacschoolname`, `city`, `country`, `obtainingyear`) VALUES
(11, 2, 'ffff', 'fffff', 'Lassana Dansoko', 'ffffff', 'ffffff', '2017-04-08 00:00:00'),
(12, 17, 'ffff', 'frefre', 'Lassana Dansoko', 'fref', 'frefr', '2017-04-14 00:00:00'),
(14, 30, 'ffff', 'frefre', 'Lassana Dansoko', 'fref', 'frefr', '2017-04-14 00:00:00'),
(15, 31, 'ffff', 'frefre', 'Lassana Dansoko', 'fref', 'frefr', '2017-04-14 00:00:00'),
(16, 32, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(17, 32, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(18, 33, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(19, 33, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(20, 34, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(21, 34, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(22, 35, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(23, 35, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(24, 36, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(25, 37, 'dzdd', 'zdqd', 'Lassana Dansoko', 'dzqd', 'zdqdz', '2017-04-14 00:00:00'),
(26, 38, 'qcscq', 'csqsc', 'qcsqsc', 'qscsccqscqsc', 'qscqcsc', '2017-04-08 00:00:00'),
(27, 39, 'qcscq', 'csqsc', 'qcsqsc', 'qscsccqscqsc', 'qscqcsc', '2017-04-08 00:00:00'),
(28, 40, 'qcscq', 'csqsc', 'qcsqsc', 'qscsccqscqsc', 'qscqcsc', '2017-04-08 00:00:00'),
(29, 41, 'qcscq', 'csqsc', 'qcsqsc', 'qscsccqscqsc', 'qscqcsc', '2017-04-08 00:00:00'),
(30, 42, 'qcscq', 'csqsc', 'qcsqsc', 'qscsccqscqsc', 'qscqcsc', '2017-04-08 00:00:00'),
(31, 43, 'qcscq', 'csqsc', 'qcsqsc', 'qscsccqscqsc', 'qscqcsc', '2017-04-08 00:00:00'),
(32, 44, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(33, 45, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(34, 46, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(35, 47, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(36, 48, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(37, 49, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(38, 50, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(39, 51, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(40, 52, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(41, 53, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(42, 54, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(43, 55, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(44, 56, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(45, 57, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(46, 58, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(47, 59, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(48, 60, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(49, 61, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(50, 62, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(51, 63, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(52, 64, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(53, 65, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(54, 66, 'esfsf', 'sefef', 'esffe', 'sefsf', 'efsef', '2017-04-08 00:00:00'),
(55, 67, 'trh', 'htr', 'htrh', 'rthtr', 'rthtr', '2017-04-06 00:00:00');

-- --------------------------------------------------------

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
  `lastdegree` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cursus` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=68 ;

--
-- Contenu de la table `candidat`
--

INSERT INTO `candidat` (`id`, `civility`, `lastname`, `firstname`, `mail`, `phone`, `dob`, `pob`, `nationality`, `curentlevel`, `leschoice`, `lastdegree`, `cursus`) VALUES
(1, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-16 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(2, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '3', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(3, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '3', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(4, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '3', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(5, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '3', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(6, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(7, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(8, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(9, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(10, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(11, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(12, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(13, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(14, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(15, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(16, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-13 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1'),
(17, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(18, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(19, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(20, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(21, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(22, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(23, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(24, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(25, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(26, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(27, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(28, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(29, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(30, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(31, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-07 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', '', 'Cursus 1'),
(32, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-08 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'dzqdz', 'Cursus 1'),
(33, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-08 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'dzqdz', 'Cursus 1'),
(34, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-08 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'dzqdz', 'Cursus 1'),
(35, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-08 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'dzqdz', 'Cursus 1'),
(36, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-08 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'dzqdz', 'Cursus 1'),
(37, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-08 00:00:00', 'Noisy-le-Sec', 'France', '2', 'fdsfesfesf', 'dzqdz', 'Cursus 1'),
(38, 'Mme', 'qesfcdc', 'qcsqccq', 'sqcsqcq', 'cqscsqc', '2017-04-21 00:00:00', 'sqcq', 'qscqc', '2', 'fdsfesfesf', 'sqcsc', 'Cursus 1'),
(39, 'Mme', 'qesfcdc', 'qcsqccq', 'sqcsqcq', 'cqscsqc', '2017-04-21 00:00:00', 'sqcq', 'qscqc', '2', 'fdsfesfesf', 'sqcsc', 'Cursus 1'),
(40, 'Mme', 'qesfcdc', 'qcsqccq', 'sqcsqcq', 'cqscsqc', '2017-04-21 00:00:00', 'sqcq', 'qscqc', '2', 'fdsfesfesf', 'sqcsc', 'Cursus 1'),
(41, 'Mme', 'qesfcdc', 'qcsqccq', 'sqcsqcq', 'cqscsqc', '2017-04-21 00:00:00', 'sqcq', 'qscqc', '2', 'fdsfesfesf', 'sqcsc', 'Cursus 1'),
(42, 'Mme', 'qesfcdc', 'qcsqccq', 'sqcsqcq', 'cqscsqc', '2017-04-21 00:00:00', 'sqcq', 'qscqc', '2', 'fdsfesfesf', 'sqcsc', 'Cursus 1'),
(43, 'Mme', 'qesfcdc', 'qcsqccq', 'sqcsqcq', 'cqscsqc', '2017-04-21 00:00:00', 'sqcq', 'qscqc', '2', 'fdsfesfesf', 'sqcsc', 'Cursus 1'),
(44, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(45, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(46, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(47, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(48, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(49, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(50, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(51, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(52, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(53, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(54, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(55, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(56, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(57, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(58, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(59, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(60, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(61, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(62, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(63, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(64, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(65, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(66, 'Mme', 'esfse', 'fesfes', 'esfsef', 'efse', '2017-04-13 00:00:00', 'fesfs', 'esfef', '2', 'fdsfesfesf', 'fsefe', 'Cursus 1'),
(67, 'Mme', 'Dansoko', 'Lassana', 'lassana.dansoko@gmail.com', '658933757', '2017-04-30 00:00:00', 'Noisy le sec', 'France', '2', 'fdsfesfesf', 'feezfzf', 'Cursus 1');

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

--
-- Contenu de la table `gamerinfos`
--

INSERT INTO `gamerinfos` (`id`, `id_candidat`, `rangSoloQ`, `position`, `rang`) VALUES
(1, 64, 'Diamant 1', 'Top planer', 'a:1:{i:0;a:1:{s:6:"fesfef";s:10:"2017-04-04";}}'),
(2, 64, 'Diamant 1', 'Top planer', 's:47:"a:1:{i:0;a:1:{s:6:"fesfef";s:10:"2017-04-04";}}";'),
(3, 64, 'Diamant 1', 'Top planer', 's:55:"s:47:"a:1:{i:0;a:1:{s:6:"fesfef";s:10:"2017-04-04";}}";";'),
(4, 65, 'Diamant 1', 'Top planer', 'a:1:{i:0;a:1:{s:6:"fesfef";s:10:"2017-04-04";}}'),
(5, 65, 'Diamant 1', 'Top planer', 's:47:"a:1:{i:0;a:1:{s:6:"fesfef";s:10:"2017-04-04";}}";'),
(6, 65, 'Diamant 1', 'Top planer', 's:55:"s:47:"a:1:{i:0;a:1:{s:6:"fesfef";s:10:"2017-04-04";}}";";'),
(7, 66, 'Diamant 1', 'Top planer', 'a:1:{i:0;a:1:{s:6:"fesfef";s:10:"2017-04-04";}}'),
(8, 67, 'Diamant 1', 'Top planer', 'a:1:{i:0;a:1:{s:6:"fesfef";s:10:"2017-04-04";}}');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Contenu de la table `postbac`
--

INSERT INTO `postbac` (`id`, `id_candidat`, `postDegree`, `postSchoolName`, `city`, `country`, `obtainingYear`) VALUES
(4, 35, 'dvsdrs', 'vsdvsdv', 'vdvsdv', 'dsvdvd', '2017-04-05 00:00:00'),
(5, 36, 'dvsdrs', 'vsdvsdv', 'vdvsdv', 'dsvdvd', '2017-04-05 00:00:00'),
(6, 37, 'dvsdrs', 'vsdvsdv', 'vdvsdv', 'dsvdvd', '2017-04-05 00:00:00'),
(7, 38, 'csqsc', 'qscqsc', 'qccs', 'qcc', '2017-04-04 00:00:00'),
(8, 39, 'csqsc', 'qscqsc', 'qccs', 'qcc', '2017-04-04 00:00:00'),
(9, 40, 'csqsc', 'qscqsc', 'qccs', 'qcc', '2017-04-04 00:00:00'),
(10, 41, 'csqsc', 'qscqsc', 'qccs', 'qcc', '2017-04-04 00:00:00'),
(11, 42, 'csqsc', 'qscqsc', 'qccs', 'qcc', '2017-04-04 00:00:00'),
(12, 43, 'csqsc', 'qscqsc', 'qccs', 'qcc', '2017-04-04 00:00:00'),
(13, 44, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(14, 45, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(15, 46, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(16, 47, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(17, 48, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(18, 49, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(19, 50, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(20, 51, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(21, 52, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(22, 53, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(23, 54, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(24, 55, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(25, 56, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(26, 57, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(27, 58, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(28, 59, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(29, 60, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(30, 61, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(31, 62, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(32, 63, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(33, 64, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(34, 65, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(35, 66, 'sefes', 'efsef', 'efsef', 'esffe', '2017-04-19 00:00:00'),
(36, 67, 'htrhtrh', 'htrht', 'rhhr', 'rhthr', '2017-04-21 00:00:00');

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
