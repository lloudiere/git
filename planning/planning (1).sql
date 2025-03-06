-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 fév. 2025 à 12:40
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
-- Base de données : `planning`
--

-- --------------------------------------------------------

--
-- Structure de la table `pla_etapes`
--

CREATE DATABASE IF NOT EXISTS ludovicl_planning;

-- Use the database
USE planning;


DROP TABLE IF EXISTS `pla_etapes`;
CREATE TABLE IF NOT EXISTS `pla_etapes` (
  `id_etape` int NOT NULL AUTO_INCREMENT,
  `etape_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `etape_obs` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_etape`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pla_etapes`
--

INSERT INTO `pla_etapes` (`id_etape`, `etape_name`, `etape_obs`) VALUES
(1, 'Analyse des Besoins', ''),
(2, 'Rédaction de la Note de Cadrage', ''),
(3, 'Création des Personas', ''),
(4, 'Veille Concurrentielle', ''),
(5, 'Conception du Site Web', ''),
(6, 'Développement et test', ''),
(7, 'Lancement et Suiv', '');

-- --------------------------------------------------------

--
-- Structure de la table `pla_events`
--

DROP TABLE IF EXISTS `pla_events`;
CREATE TABLE IF NOT EXISTS `pla_events` (
  `id_event` int NOT NULL AUTO_INCREMENT,
  `id_etape` int NOT NULL,
  `event_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `id_status` int NOT NULL,
  `event_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_event`),
  KEY `status_id` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pla_events`
--

INSERT INTO `pla_events` (`id_event`, `id_etape`, `event_title`, `event_start_date`, `event_end_date`, `id_status`, `event_desc`) VALUES
(1, 1, 'Rencontre avec le maître de stage', '2025-02-17', '2025-02-17', 4, 'Rencontre initiale pour discuter des attentes et des objectifs'),
(2, 1, 'Préparation des questions', '2025-02-18', '2025-02-18', 4, 'Préparer les questions pour la réunion'),
(3, 1, 'Rédaction du compte-rendu de réunion', '2025-02-20', '2025-02-20', 3, 'Rédiger le compte-rendu de la réunion avec le maître de stage'),
(4, 2, 'Définition des objectifs', '2025-02-21', '2025-02-21', 3, 'Définir les objectifs du projet'),
(5, 2, 'Délimitation du périmètre', '2025-02-22', '2025-02-22', 3, 'Délimiter le périmètre du projet'),
(6, 2, 'Liste des livrables', '2025-02-24', '2025-02-24', 2, 'Lister les livrables attendus'),
(7, 2, 'Établissement du planning', '2025-02-25', '2025-02-25', 1, 'Établir le planning du projet'),
(8, 2, 'Identification des ressources', '2025-02-26', '2025-02-26', 1, 'Identifier les ressources nécessaires'),
(9, 3, 'Identification des cibles', '2025-02-27', '2025-02-27', 1, 'Identifier les cibles du projet'),
(10, 3, 'Création des personas détaillés', '2025-02-28', '2025-02-28', 1, 'Créer des personas détaillés'),
(11, 4, 'Analyse des sites concurrents', '2025-03-03', '2025-03-07', 1, 'Analyser les sites concurrents'),
(12, 4, 'Identification des forces et faiblesses', '2025-03-08', '2025-03-08', 1, 'Identifier les forces et faiblesses des concurrents'),
(13, 5, 'Création des wireframes', '2025-03-10', '2025-03-14', 1, 'Créer les wireframes du site web'),
(14, 5, 'Réalisation des maquettes graphiques', '2025-03-17', '2025-03-21', 1, 'Réaliser les maquettes graphiques'),
(15, 6, 'Développement du site web', '2025-03-24', '2025-04-18', 1, 'Développer le site web'),
(16, 6, 'Tests et validation', '2025-04-21', '2025-04-25', 1, 'Tester et valider le site web'),
(17, 7, 'Mise en ligne du site', '2025-04-26', '2025-04-26', 1, 'Mettre en ligne le site web'),
(18, 7, 'Actions de promotion', '2025-04-27', '2025-04-27', 1, 'Promouvoir le site web');

-- --------------------------------------------------------

--
-- Structure de la table `pla_histo`
--

DROP TABLE IF EXISTS `pla_histo`;
CREATE TABLE IF NOT EXISTS `pla_histo` (
  `id_histo` int NOT NULL AUTO_INCREMENT,
  `id_event` int NOT NULL,
  `histo_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_status_avant` int NOT NULL,
  `id_status` int NOT NULL,
  `histo_desc` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_histo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pla_histo`
--

INSERT INTO `pla_histo` (`id_histo`, `id_event`, `histo_date`, `id_status_avant`, `id_status`, `histo_desc`) VALUES
(4, 2, '2025-02-18 13:19:54', 1, 4, 'Documents reçus'),
(5, 6, '2025-02-18 13:23:29', 1, 2, 'test'),
(6, 2, '2025-02-18 13:33:30', 1, 4, 'plus rapide'),
(7, 1, '2025-02-18 13:33:49', 1, 4, '');

-- --------------------------------------------------------

--
-- Structure de la table `pla_status`
--

DROP TABLE IF EXISTS `pla_status`;
CREATE TABLE IF NOT EXISTS `pla_status` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pla_status`
--

INSERT INTO `pla_status` (`id_status`, `status_name`) VALUES
(1, 'à faire'),
(2, 'en retard'),
(3, 'en cours'),
(4, 'terminée');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
