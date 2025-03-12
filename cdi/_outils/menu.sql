-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 12 mars 2025 à 17:01
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `menu`
--

-- --------------------------------------------------------

--
-- Structure de la table `nav`
--

DROP TABLE IF EXISTS `nav`;
CREATE TABLE IF NOT EXISTS `nav` (
  `id_nav` int NOT NULL AUTO_INCREMENT,
  `nav_titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nav_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nav_actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_nav`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `nav`
--

INSERT INTO `nav` (`id_nav`, `nav_titre`, `nav_url`, `nav_actif`) VALUES
(1, 'Le golf', 'index.php', 1),
(2, 'Parcours1', '#', 1),
(3, 'Compétitions', '#', 1),
(4, 'Enseignement', '#', 1),
(5, 'Actualités', '#', 1),
(6, 'Contact', 'contact.php', 1),
(7, '|', '#', 1),
(8, 'Réserver un départ', '#', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sous_nav`
--

DROP TABLE IF EXISTS `sous_nav`;
CREATE TABLE IF NOT EXISTS `sous_nav` (
  `id_sous_nav` int NOT NULL AUTO_INCREMENT,
  `sn_titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sn_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_nav` int NOT NULL,
  `sn_actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_sous_nav`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sous_nav`
--

INSERT INTO `sous_nav` (`id_sous_nav`, `sn_titre`, `sn_url`, `id_nav`, `sn_actif`) VALUES
(1, 'Trou  1', '#', 2, 1),
(2, 'Trou  2', '#', 2, 1),
(3, 'Trou  3', '#', 2, 1),
(4, 'Trou  4', '#', 2, 1),
(5, 'Trou  5', '#', 2, 1),
(6, 'Trou  6', '#', 2, 1),
(7, 'Trou  7', '#', 2, 1),
(8, 'Trou  8', '#', 2, 1),
(9, 'Trou  9', '#', 2, 1),
(10, 'Trou 10', '#', 2, 1),
(11, 'Trou 11', '#', 2, 1),
(12, 'Trou 12', '#', 2, 1),
(13, 'Trou 13', '#', 2, 1),
(14, 'Trou 14', '#', 2, 1),
(15, 'Trou 15', '#', 2, 1),
(16, 'Trou 16', '#', 2, 1),
(17, 'Trou 17', '#', 2, 1),
(18, 'Trou 18', '#', 2, 1),
(19, 'Histoire', '#', 3, 1),
(20, 'Équipe', '#', 3, 1),
(21, 'Contact', '#', 3, 1),
(22, 'Histoire', '#', 4, 1),
(23, 'Équipe', '#', 4, 1),
(24, 'Contact', '#', 4, 1),
(25, 'Histoire', '#', 5, 1),
(26, 'Équipe', '#', 5, 1),
(27, 'Ludovic LOUDIERE', 'http://ludovicloudiere.eu/via', 5, 1),
(28, 'Moi', '#', 8, 1),
(29, 'Toi', '#', 8, 1),
(30, 'Lui', '#', 8, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
