-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 26 juil. 2018 à 12:58
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet 5`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recette_menu_burger`
--

DROP TABLE IF EXISTS `recette_menu_burger`;
CREATE TABLE IF NOT EXISTS `recette_menu_burger` (
  `id` int(11) NOT NULL,
  `recette` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `recette_menu_burger` (`id`,`recette`) VALUES (1,pain salade tomate oignons);

-- --------------------------------------------------------

--
-- Structure de la table `recette_menu_salade`
--

DROP TABLE IF EXISTS `recette_menu_salade`;
CREATE TABLE IF NOT EXISTS `recette_menu_salade` (
  `id` int(11) NOT NULL,
  `recette` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `recette_menu_salade` (`id`,`recette`) VALUES (1,pain salade tomate oignons);

-- --------------------------------------------------------

--
-- Structure de la table `rectette_burger_boeuf`
--

DROP TABLE IF EXISTS `recette_burger_boeuf`;
CREATE TABLE IF NOT EXISTS `recette_burger_boeuf` (
  `id` int(11) NOT NULL,
  `recette` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `recette_burger_boeuf` (`id`,`recette`) VALUES (1,pain salade tomate oignons);

-- --------------------------------------------------------

--
-- Structure de la table `rectette_burger_poulet`
--

DROP TABLE IF EXISTS `recette_burger_poulet`;
CREATE TABLE IF NOT EXISTS `recette_burger_poulet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recette` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

INSERT INTO `recette_burger_poulet` (`id`,`recette`) VALUES (1,pain salade tomate oignons);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
