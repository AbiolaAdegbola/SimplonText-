-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 21 Janvier 2023 à 10:17
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `simplonbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `listeparticipant`
--

CREATE TABLE IF NOT EXISTS `listeparticipant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `numeroTelephone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateEnregistrer` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `listeparticipant`
--

INSERT INTO `listeparticipant` (`id`, `nom`, `prenom`, `numeroTelephone`, `email`, `dateEnregistrer`) VALUES
(1, 'abiola', 'adegbola', '0141058779', 'abiole68@gmail.com', '2023-01-19'),
(2, 'kone', 'aliou', '0141058770', 'abiole@gmail.com', '2023-01-19'),
(10, 'kouame', 'Koffi Alexis', '0555678909', 'koffi@gmail.com', '2023-01-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
