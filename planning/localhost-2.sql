-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 24 fév. 2025 à 11:44
-- Version du serveur : 8.0.40
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
CREATE DATABASE IF NOT EXISTS `menu` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `menu`;

-- --------------------------------------------------------

--
-- Structure de la table `nav`
--

CREATE TABLE `nav` (
  `id_nav` int NOT NULL,
  `nav_titre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nav_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `nav`
--

INSERT INTO `nav` (`id_nav`, `nav_titre`, `nav_url`) VALUES
(1, 'Accueil', '#'),
(2, 'Services', '#');

-- --------------------------------------------------------

--
-- Structure de la table `sous_nav`
--

CREATE TABLE `sous_nav` (
  `id_sous_nav` int NOT NULL,
  `sn_titre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sn_lien` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_nav` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id_nav`);

--
-- Index pour la table `sous_nav`
--
ALTER TABLE `sous_nav`
  ADD PRIMARY KEY (`id_sous_nav`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `nav`
--
ALTER TABLE `nav`
  MODIFY `id_nav` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sous_nav`
--
ALTER TABLE `sous_nav`
  MODIFY `id_sous_nav` int NOT NULL AUTO_INCREMENT;
--
-- Base de données : `planning`
--
CREATE DATABASE IF NOT EXISTS `planning` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `planning`;

-- --------------------------------------------------------

--
-- Structure de la table `pla_etapes`
--

CREATE TABLE `pla_etapes` (
  `id_etape` int NOT NULL,
  `etape_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `etape_obs` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `pla_events` (
  `id_event` int NOT NULL,
  `event_ordre` int NOT NULL,
  `id_etape` int NOT NULL,
  `event_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `event_jour` float NOT NULL,
  `id_status` int NOT NULL,
  `event_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pla_events`
--

INSERT INTO `pla_events` (`id_event`, `event_ordre`, `id_etape`, `event_title`, `event_start_date`, `event_end_date`, `event_jour`, `id_status`, `event_desc`) VALUES
(1, 10, 1, 'Rencontre avec le maître de stage', '2025-02-17', '2025-02-17', 0.5, 3, 'Rencontre initiale pour discuter des attentes et des objectifs'),
(2, 20, 1, 'Préparation des questions', '2025-02-17', '2025-02-17', 0.5, 3, 'Préparer les questions pour la réunion'),
(3, 30, 1, 'Rédaction du compte-rendu de réunion', '2025-02-18', '2025-02-18', 0.5, 3, 'Rédiger le compte-rendu de la réunion avec le maître de stage'),
(4, 40, 2, 'Définition des objectifs', '2025-02-19', '2025-02-19', 0.5, 3, 'Définir les objectifs du projet'),
(5, 50, 2, 'Délimitation du périmètre', '2025-02-19', '2025-02-19', 0.5, 3, 'Délimiter le périmètre du projet'),
(6, 60, 2, 'Liste des livrables', '2025-02-20', '2025-02-20', 0.5, 3, 'Lister les livrables attendus'),
(7, 70, 2, 'Établissement du planning', '2025-02-20', '2025-02-20', 0.5, 2, 'Établir le planning du projet'),
(8, 80, 2, 'Identification des ressources', '2025-02-21', '2025-02-21', 0.5, 3, 'Identifier les ressources nécessaires'),
(9, 120, 3, 'Identification des cibles', '2025-02-24', '2025-02-24', 0.5, 3, 'Identifier les cibles du projet'),
(10, 130, 3, 'Création des personas détaillés', '2025-02-24', '2025-02-25', 1.5, 3, 'Créer des personas détaillés'),
(11, 100, 4, 'Analyse des sites concurrents', '2025-02-19', '2025-02-19', 0.5, 3, 'Analyser les sites concurrents'),
(12, 90, 4, 'Identification des forces et faiblesses', '2025-02-26', '2025-02-26', 0.5, 3, 'Identifier les forces et faiblesses des concurrents'),
(13, 110, 5, 'Création des wireframes', '2025-02-20', '2025-02-21', 2, 3, 'Créer les wireframes du site web'),
(14, 140, 5, 'Réalisation des maquettes graphiques', '2025-03-05', '2025-03-07', 3, 2, 'Réaliser les maquettes graphiques'),
(15, 150, 6, 'Développement du site web', '2025-03-10', '2025-03-10', 0, 1, 'Développer le site web'),
(16, 200, 6, 'Tests et validation', '2025-04-24', '2025-04-29', 4, 1, 'Tester et valider le site web'),
(17, 210, 7, 'Mise en ligne du site', '2025-04-29', '2025-04-29', 0.5, 1, 'Mettre en ligne le site web'),
(18, 220, 7, 'Actions de promotion', '2025-04-29', '2025-04-29', 0.5, 1, 'Promouvoir le site web'),
(19, 152, 6, 'Etablissement du MCD', '2025-03-10', '2025-03-12', 2, 1, 'Etablissement du MCD'),
(20, 154, 6, 'Etablissement du MLD', '2025-03-13', '2025-03-14', 2, 1, 'Etablissement du MLD'),
(21, 156, 6, 'Etablissement des pages HTML CSS', '2025-03-17', '2025-04-04', 15, 1, 'Etablissement des pages HTML CSS'),
(22, 158, 6, 'Création de la base de données', '2025-03-31', '2025-04-03', 4, 1, 'Création de la base de données'),
(23, 160, 6, 'Création de page back office', '2025-04-04', '2025-04-18', 10.5, 1, 'Création de page back office');

-- --------------------------------------------------------

--
-- Structure de la table `pla_histo`
--

CREATE TABLE `pla_histo` (
  `id_histo` int NOT NULL,
  `id_event` int NOT NULL,
  `id_etape` int NOT NULL,
  `histo_ordre_ancien` int NOT NULL,
  `histo_ordre` int NOT NULL,
  `histo_start_date` datetime NOT NULL,
  `histo_end_date` datetime NOT NULL,
  `histo_jour_ancien` float NOT NULL,
  `histo_jour` float NOT NULL,
  `histo_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_status_avant` int NOT NULL,
  `id_status` int NOT NULL,
  `histo_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pla_histo`
--

INSERT INTO `pla_histo` (`id_histo`, `id_event`, `id_etape`, `histo_ordre_ancien`, `histo_ordre`, `histo_start_date`, `histo_end_date`, `histo_jour_ancien`, `histo_jour`, `histo_date`, `id_status_avant`, `id_status`, `histo_desc`) VALUES
(127, 1, 1, 10, 9, '2025-02-17 00:00:00', '2025-02-17 00:00:00', 0.5, 1, '2025-02-19 10:34:27', 3, 2, 'test'),
(128, 1, 1, 9, 10, '2025-02-17 00:00:00', '2025-02-17 00:00:00', 1, 0.5, '2025-02-19 10:35:36', 2, 3, 'test2'),
(129, 3, 1, 30, 30, '2025-02-18 00:00:00', '2025-02-18 00:00:00', 0.5, 0.5, '2025-02-19 10:57:12', 2, 4, ''),
(130, 4, 2, 40, 40, '2025-02-19 00:00:00', '2025-02-19 00:00:00', 0.5, 0.5, '2025-02-19 10:57:22', 2, 4, ''),
(131, 5, 2, 50, 51, '2025-02-19 00:00:00', '2025-02-19 00:00:00', 0.5, 1, '2025-02-19 11:04:23', 1, 2, ''),
(132, 5, 2, 51, 50, '2025-02-19 00:00:00', '2025-02-19 00:00:00', 1, 0.5, '2025-02-19 11:05:50', 2, 1, ''),
(133, 5, 2, 50, 50, '2025-02-19 00:00:00', '2025-02-19 00:00:00', 0.5, 0.5, '2025-02-19 18:52:04', 1, 3, ''),
(134, 4, 2, 40, 40, '2025-02-19 00:00:00', '2025-02-19 00:00:00', 0.5, 0.5, '2025-02-19 18:52:11', 4, 3, ''),
(135, 11, 4, 110, 110, '2025-02-26 00:00:00', '2025-02-26 00:00:00', 0.5, 0.5, '2025-02-20 12:32:01', 2, 3, ''),
(136, 12, 4, 120, 120, '2025-02-26 00:00:00', '2025-02-26 00:00:00', 0.5, 0.5, '2025-02-20 12:32:13', 1, 3, ''),
(137, 6, 2, 60, 60, '2025-02-20 00:00:00', '2025-02-20 00:00:00', 0.5, 0.5, '2025-02-20 12:32:50', 1, 3, ''),
(138, 8, 2, 80, 80, '2025-02-21 00:00:00', '2025-02-21 00:00:00', 0.5, 0.5, '2025-02-20 12:32:59', 1, 3, ''),
(139, 13, 5, 130, 130, '2025-02-20 00:00:00', '2025-03-21 00:00:00', 1, 2, '2025-02-20 15:28:16', 1, 1, ''),
(140, 11, 4, 110, 110, '2025-02-19 00:00:00', '2025-02-26 00:00:00', 0.5, 0.5, '2025-02-20 15:28:39', 3, 3, ''),
(141, 11, 4, 110, 110, '2025-02-19 00:00:00', '2025-02-19 00:00:00', 0.5, 0.5, '2025-02-20 15:28:59', 3, 3, ''),
(142, 13, 5, 130, 85, '2025-02-20 00:00:00', '2025-03-21 00:00:00', 2, 2, '2025-02-20 15:29:52', 1, 1, ''),
(143, 13, 5, 85, 85, '2025-02-20 00:00:00', '2025-03-21 00:00:00', 2, 2, '2025-02-20 15:30:02', 1, 2, ''),
(144, 11, 4, 110, 83, '2025-02-19 00:00:00', '2025-02-19 00:00:00', 0.5, 0.5, '2025-02-20 15:30:38', 3, 3, ''),
(145, 12, 4, 120, 82, '2025-02-26 00:00:00', '2025-02-26 00:00:00', 0.5, 0.5, '2025-02-20 15:30:58', 3, 3, ''),
(146, 10, 3, 100, 130, '2025-02-24 00:00:00', '2025-02-25 00:00:00', 1.5, 1.5, '2025-02-20 15:32:34', 1, 1, ''),
(147, 9, 3, 90, 120, '2025-02-24 00:00:00', '2025-02-24 00:00:00', 0.5, 0.5, '2025-02-20 15:32:46', 1, 1, ''),
(148, 13, 5, 85, 110, '2025-02-20 00:00:00', '2025-03-21 00:00:00', 2, 2, '2025-02-20 15:33:00', 2, 2, ''),
(149, 11, 4, 83, 100, '2025-02-19 00:00:00', '2025-02-19 00:00:00', 0.5, 0.5, '2025-02-20 15:33:20', 3, 3, ''),
(150, 12, 4, 82, 90, '2025-02-26 00:00:00', '2025-02-26 00:00:00', 0.5, 0.5, '2025-02-20 15:33:36', 3, 3, ''),
(151, 13, 5, 110, 110, '2025-02-20 00:00:00', '2025-02-21 00:00:00', 2, 2, '2025-02-20 15:35:37', 2, 2, ''),
(152, 15, 6, 150, 150, '2025-03-10 00:00:00', '2025-04-10 00:00:00', 35, 0, '2025-02-20 15:47:06', 1, 1, ''),
(153, 15, 6, 150, 150, '2025-03-10 00:00:00', '2025-04-08 00:00:00', 0, 0, '2025-02-20 15:47:26', 1, 1, ''),
(154, 15, 6, 150, 150, '2025-03-10 00:00:00', '2025-03-10 00:00:00', 0, 0, '2025-02-20 15:48:02', 1, 1, ''),
(155, 19, 6, 152, 152, '2025-03-10 00:00:00', '2025-03-12 00:00:00', 2, 2, '2025-02-20 15:48:36', 1, 1, ''),
(156, 20, 6, 154, 154, '2025-03-13 00:00:00', '2025-03-14 00:00:00', 2, 2, '2025-02-20 15:49:16', 1, 1, ''),
(157, 21, 6, 156, 156, '2025-03-17 00:00:00', '2025-03-28 00:00:00', 2, 10, '2025-02-20 15:50:22', 1, 1, ''),
(158, 22, 6, 158, 158, '2025-03-31 00:00:00', '2025-04-03 00:00:00', 2, 2, '2025-02-20 15:51:25', 1, 1, ''),
(159, 22, 6, 158, 158, '2025-03-31 00:00:00', '2025-04-03 00:00:00', 2, 4, '2025-02-20 15:51:39', 1, 1, ''),
(160, 23, 6, 160, 160, '2025-04-04 00:00:00', '2025-04-25 00:00:00', 2, 7, '2025-02-20 15:52:15', 1, 1, ''),
(161, 21, 6, 156, 156, '2025-03-17 00:00:00', '2025-04-04 00:00:00', 10, 15, '2025-02-20 15:52:56', 1, 1, ''),
(162, 23, 6, 160, 160, '2025-04-04 00:00:00', '2025-05-02 00:00:00', 7, 13.5, '2025-02-20 15:53:27', 1, 1, ''),
(163, 23, 6, 160, 160, '2025-04-04 00:00:00', '2025-06-21 00:00:00', 13.5, 12.5, '2025-02-20 15:54:04', 1, 1, ''),
(164, 23, 6, 160, 160, '2025-04-04 00:00:00', '2025-04-18 00:00:00', 12.5, 12.5, '2025-02-20 15:54:30', 1, 1, ''),
(165, 21, 6, 156, 156, '2025-03-17 00:00:00', '2025-04-04 00:00:00', 15, 15, '2025-02-20 15:54:54', 1, 1, ''),
(166, 23, 6, 160, 160, '2025-04-04 00:00:00', '2025-04-18 00:00:00', 12.5, 10.5, '2025-02-20 15:55:07', 1, 1, ''),
(176, 13, 5, 110, 110, '2025-02-20 00:00:00', '2025-02-21 00:00:00', 2, 2, '2025-02-21 21:36:30', 2, 3, ''),
(177, 9, 3, 120, 120, '2025-02-24 00:00:00', '2025-02-24 00:00:00', 0.5, 0.5, '2025-02-21 21:36:43', 1, 3, ''),
(178, 10, 3, 130, 130, '2025-02-24 00:00:00', '2025-02-25 00:00:00', 1.5, 1.5, '2025-02-21 21:36:50', 1, 3, ''),
(179, 14, 5, 140, 140, '2025-03-05 00:00:00', '2025-03-07 00:00:00', 3, 3, '2025-02-21 22:17:10', 1, 2, ''),
(180, 3, 1, 30, 30, '2025-02-18 00:00:00', '2025-02-18 00:00:00', 0.5, 0.5, '2025-02-21 22:17:23', 4, 3, '');

-- --------------------------------------------------------

--
-- Structure de la table `pla_status`
--

CREATE TABLE `pla_status` (
  `id_status` int NOT NULL,
  `status_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pla_status`
--

INSERT INTO `pla_status` (`id_status`, `status_name`) VALUES
(1, 'process'),
(2, 'en cours'),
(3, 'fini'),
(4, 'en retard');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pla_etapes`
--
ALTER TABLE `pla_etapes`
  ADD PRIMARY KEY (`id_etape`);

--
-- Index pour la table `pla_events`
--
ALTER TABLE `pla_events`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `status_id` (`id_status`);

--
-- Index pour la table `pla_histo`
--
ALTER TABLE `pla_histo`
  ADD PRIMARY KEY (`id_histo`);

--
-- Index pour la table `pla_status`
--
ALTER TABLE `pla_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pla_etapes`
--
ALTER TABLE `pla_etapes`
  MODIFY `id_etape` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `pla_events`
--
ALTER TABLE `pla_events`
  MODIFY `id_event` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `pla_histo`
--
ALTER TABLE `pla_histo`
  MODIFY `id_histo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT pour la table `pla_status`
--
ALTER TABLE `pla_status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Base de données : `portfolio`
--
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `portfolio`;

-- --------------------------------------------------------

--
-- Structure de la table `stu_civilities`
--

CREATE TABLE `stu_civilities` (
  `id_civilities` int NOT NULL,
  `civ_libelle` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stu_civilities`
--

INSERT INTO `stu_civilities` (`id_civilities`, `civ_libelle`) VALUES
(1, 'Monsieur'),
(2, 'Madame');

-- --------------------------------------------------------

--
-- Structure de la table `stu_classes`
--

CREATE TABLE `stu_classes` (
  `id_class` int NOT NULL,
  `cla_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cla_create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_year` int NOT NULL,
  `cla_img` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_student` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stu_classes`
--

INSERT INTO `stu_classes` (`id_class`, `cla_name`, `cla_create_date`, `id_year`, `cla_img`, `id_student`) VALUES
(2, '6ème A', '2025-01-16 18:21:47', 1, '6.png', 8),
(3, '6ème B', '2025-01-18 13:28:32', 2, '6.png', 2),
(4, '5ème B', '2025-01-18 13:28:32', 2, '5.png', 2),
(5, '4ème B', '2025-01-18 13:28:32', 2, '4.png', 8);

-- --------------------------------------------------------

--
-- Structure de la table `stu_roles`
--

CREATE TABLE `stu_roles` (
  `id_role` int NOT NULL,
  `role_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_level` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stu_roles`
--

INSERT INTO `stu_roles` (`id_role`, `role_name`, `role_level`) VALUES
(1, 'Elève', 1),
(2, 'Parent', 50),
(3, 'Professeur', 100);

-- --------------------------------------------------------

--
-- Structure de la table `stu_students`
--

CREATE TABLE `stu_students` (
  `id_student` int NOT NULL,
  `student_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `student_firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `student_mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_role` int NOT NULL,
  `id_civilities` int NOT NULL,
  `student_photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stu_students`
--

INSERT INTO `stu_students` (`id_student`, `student_name`, `student_firstname`, `student_mail`, `id_role`, `id_civilities`, `student_photo`) VALUES
(1, 'Loudiere', 'Ludovic', 'lloudiere@gmail.com', 1, 1, 'll.png'),
(2, 'Colliot', 'Eddy', 'ecolliot@gmail.com', 3, 1, 'eddy.png'),
(3, 'Opiela', 'Britta', 'bri.op@hotmail.fr', 1, 1, 'britta.jpg'),
(4, 'schnell', 'Nausikaa', 'a@a.fr', 1, 1, 'img1.jpg'),
(5, 'maccione', 'aldo', 'a@m.fr', 1, 1, 'img3.jpg'),
(8, 'Lescault', 'Julie', 'jlescault@gmail.com', 3, 2, ''),
(10, 'Chasles', 'Eleazar', 'a@a.fr', 1, 1, 'aldoamccione_9c6f60.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `stu_students_classes`
--

CREATE TABLE `stu_students_classes` (
  `id_student_class` int NOT NULL,
  `id_student` int NOT NULL,
  `id_class` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stu_students_classes`
--

INSERT INTO `stu_students_classes` (`id_student_class`, `id_student`, `id_class`) VALUES
(1, 1, 4),
(2, 2, 4),
(3, 3, 4),
(4, 4, 3),
(8, 5, 5),
(10, 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `stu_years`
--

CREATE TABLE `stu_years` (
  `id_year` int NOT NULL,
  `year_name` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stu_years`
--

INSERT INTO `stu_years` (`id_year`, `year_name`) VALUES
(1, 2024),
(2, 2025),
(3, 2026),
(4, 2027);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `stu_civilities`
--
ALTER TABLE `stu_civilities`
  ADD PRIMARY KEY (`id_civilities`);

--
-- Index pour la table `stu_classes`
--
ALTER TABLE `stu_classes`
  ADD PRIMARY KEY (`id_class`);

--
-- Index pour la table `stu_roles`
--
ALTER TABLE `stu_roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `stu_students`
--
ALTER TABLE `stu_students`
  ADD PRIMARY KEY (`id_student`);

--
-- Index pour la table `stu_students_classes`
--
ALTER TABLE `stu_students_classes`
  ADD PRIMARY KEY (`id_student_class`);

--
-- Index pour la table `stu_years`
--
ALTER TABLE `stu_years`
  ADD PRIMARY KEY (`id_year`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `stu_civilities`
--
ALTER TABLE `stu_civilities`
  MODIFY `id_civilities` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `stu_classes`
--
ALTER TABLE `stu_classes`
  MODIFY `id_class` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `stu_roles`
--
ALTER TABLE `stu_roles`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `stu_students`
--
ALTER TABLE `stu_students`
  MODIFY `id_student` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `stu_students_classes`
--
ALTER TABLE `stu_students_classes`
  MODIFY `id_student_class` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `stu_years`
--
ALTER TABLE `stu_years`
  MODIFY `id_year` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
