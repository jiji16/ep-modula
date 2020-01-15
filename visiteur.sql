-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 14 jan. 2020 à 23:13
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `id` int(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lmail` text NOT NULL,
  `subject` text NOT NULL,
  `datenvoie` date NOT NULL,
  `heurenvoie` time(5) NOT NULL,
  `adip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `lname`, `fname`, `lmail`, `subject`, `datenvoie`, `heurenvoie`, `adip`) VALUES
(0, 'kilin', 'jiji', 'jiji@gmail.com', 'bjr, je veux avoir svp plus d\'infos sur les 2 excursions d\'istanbul', '2020-01-12', '05:00:00.00000', '192.154.213.568'),
(1, 'olmi', 'kiki', 'kiki@gmail.com', 'bjr, je veux avoir svp plus d\'infos sur les 2 excursions du marrakech', '2020-01-13', '10:00:00.00000', '141.241.225.000'),
(2, 'yion', 'ikon', 'ikon@gmail.com', 'bjr, je veux avoir svp plus d\'infos sur les 2 excursions du sud tunisien', '2020-01-14', '07:00:00.00000', '110.251.320.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
