

CREATE TABLE `pla_etapes` (
  `id_etape` int NOT NULL AUTO_INCREMENT,
  `etape_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `etape_obs` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_etape`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO pla_etapes VALUES ('1', 'Analyse des Besoins', '');
INSERT INTO pla_etapes VALUES ('2', 'Rédaction de la Note de Cadrage', '');
INSERT INTO pla_etapes VALUES ('3', 'Création des Personas', '');
INSERT INTO pla_etapes VALUES ('4', 'Veille Concurrentielle', '');
INSERT INTO pla_etapes VALUES ('5', 'Conception du Site Web', '');
INSERT INTO pla_etapes VALUES ('6', 'Développement et test', '');
INSERT INTO pla_etapes VALUES ('7', 'Lancement et Suiv', '');
INSERT INTO pla_etapes VALUES ('11', 'développement desktop', '');
INSERT INTO pla_etapes VALUES ('12', 'développement Responsive', '');
INSERT INTO pla_etapes VALUES ('13', 'développement php mysql', '');


CREATE TABLE `pla_events` (
  `id_event` int NOT NULL AUTO_INCREMENT,
  `event_ordre` int NOT NULL,
  `id_etape` int NOT NULL,
  `event_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `event_jour` float NOT NULL,
  `id_status` int NOT NULL,
  `event_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_event`),
  KEY `status_id` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO pla_events VALUES ('1', '20', '1', 'Rencontre avec le maître de stage', '2025-02-17', '2025-02-17', '0.5', '3', 'Rencontre initiale pour discuter des attentes et des objectifs');
INSERT INTO pla_events VALUES ('2', '40', '1', 'Préparation des questions', '2025-02-17', '2025-02-17', '0.5', '3', 'Préparer les questions pour la réunion');
INSERT INTO pla_events VALUES ('3', '60', '1', 'Rédaction du compte-rendu de réunion', '2025-02-18', '2025-02-18', '0.5', '3', 'Rédiger le compte-rendu de la réunion avec le maître de stage');
INSERT INTO pla_events VALUES ('4', '80', '2', 'Définition des objectifs', '2025-02-19', '2025-02-19', '0.5', '3', 'Définir les objectifs du projet');
INSERT INTO pla_events VALUES ('5', '100', '2', 'Délimitation du périmètre', '2025-02-19', '2025-02-19', '0.5', '3', 'Délimiter le périmètre du projet');
INSERT INTO pla_events VALUES ('6', '120', '2', 'Liste des livrables', '2025-02-20', '2025-02-20', '0.5', '3', 'Lister les livrables attendus');
INSERT INTO pla_events VALUES ('7', '140', '2', 'Établissement du planning', '2025-02-20', '2025-02-20', '0.5', '2', 'Établir le planning du projet');
INSERT INTO pla_events VALUES ('8', '160', '2', 'Identification des ressources', '2025-02-21', '2025-02-21', '0.5', '3', 'Identifier les ressources nécessaires');
INSERT INTO pla_events VALUES ('9', '240', '3', 'Identification des cibles', '2025-02-24', '2025-02-24', '0.5', '3', 'Identifier les cibles du projet');
INSERT INTO pla_events VALUES ('10', '260', '3', 'Création des personas détaillés', '2025-02-24', '2025-02-25', '1.5', '3', 'Créer des personas détaillés');
INSERT INTO pla_events VALUES ('11', '200', '4', 'Analyse des sites concurrents', '2025-02-19', '2025-02-19', '0.5', '3', 'Analyser les sites concurrents');
INSERT INTO pla_events VALUES ('12', '180', '4', 'Identification des forces et faiblesses', '2025-02-26', '2025-02-26', '0.5', '3', 'Identifier les forces et faiblesses des concurrents');
INSERT INTO pla_events VALUES ('13', '220', '5', 'Création des wireframes', '2025-02-20', '2025-02-21', '2', '3', 'Créer les wireframes du site web');
INSERT INTO pla_events VALUES ('14', '280', '5', 'Réalisation des maquettes graphiques', '2025-03-05', '2025-03-07', '3', '2', 'Réaliser les maquettes graphiques');
INSERT INTO pla_events VALUES ('15', '300', '6', 'Développement du site web', '2025-03-10', '2025-03-10', '0', '2', 'Développer le site web');
INSERT INTO pla_events VALUES ('16', '460', '6', 'Tests et validation', '2025-04-24', '2025-04-29', '4', '1', 'Tester et valider le site web');
INSERT INTO pla_events VALUES ('17', '480', '7', 'Mise en ligne du site', '2025-04-29', '2025-04-29', '0.5', '1', 'Mettre en ligne le site web');
INSERT INTO pla_events VALUES ('18', '500', '7', 'Actions de promotion', '2025-04-29', '2025-04-29', '0.5', '1', 'Promouvoir le site web');
INSERT INTO pla_events VALUES ('19', '320', '6', 'Etablissement du MCD', '2025-03-10', '2025-03-12', '2', '2', 'Etablissement du MCD');
INSERT INTO pla_events VALUES ('20', '340', '6', 'Etablissement du MLD', '2025-03-13', '2025-03-14', '2', '2', 'Etablissement du MLD');
INSERT INTO pla_events VALUES ('21', '360', '6', 'Etablissement des pages HTML CSS', '2025-03-17', '2025-04-04', '15', '1', 'Etablissement des pages HTML CSS');
INSERT INTO pla_events VALUES ('22', '420', '6', 'Création de la base de données', '2025-03-31', '2025-04-03', '4', '1', 'Création de la base de données');
INSERT INTO pla_events VALUES ('23', '440', '6', 'Création de page back office', '2025-04-04', '2025-04-18', '10.5', '1', 'Création de page back office');
INSERT INTO pla_events VALUES ('35', '380', '11', 'Page Accueil', '2025-03-05', '2025-03-06', '2', '3', '');
INSERT INTO pla_events VALUES ('36', '400', '12', 'Page accueil responsive', '2025-03-07', '2025-03-07', '1', '3', '');


CREATE TABLE `pla_histo` (
  `id_histo` int NOT NULL AUTO_INCREMENT,
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
  `histo_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_histo`)
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO pla_histo VALUES ('127', '1', '1', '10', '9', '2025-02-17 00:00:00', '2025-02-17 00:00:00', '0.5', '1', '2025-02-19 10:34:27', '3', '2', 'test');
INSERT INTO pla_histo VALUES ('128', '1', '1', '9', '10', '2025-02-17 00:00:00', '2025-02-17 00:00:00', '1', '0.5', '2025-02-19 10:35:36', '2', '3', 'test2');
INSERT INTO pla_histo VALUES ('129', '3', '1', '30', '30', '2025-02-18 00:00:00', '2025-02-18 00:00:00', '0.5', '0.5', '2025-02-19 10:57:12', '2', '4', '');
INSERT INTO pla_histo VALUES ('130', '4', '2', '40', '40', '2025-02-19 00:00:00', '2025-02-19 00:00:00', '0.5', '0.5', '2025-02-19 10:57:22', '2', '4', '');
INSERT INTO pla_histo VALUES ('131', '5', '2', '50', '51', '2025-02-19 00:00:00', '2025-02-19 00:00:00', '0.5', '1', '2025-02-19 11:04:23', '1', '2', '');
INSERT INTO pla_histo VALUES ('132', '5', '2', '51', '50', '2025-02-19 00:00:00', '2025-02-19 00:00:00', '1', '0.5', '2025-02-19 11:05:50', '2', '1', '');
INSERT INTO pla_histo VALUES ('133', '5', '2', '50', '50', '2025-02-19 00:00:00', '2025-02-19 00:00:00', '0.5', '0.5', '2025-02-19 18:52:04', '1', '3', '');
INSERT INTO pla_histo VALUES ('134', '4', '2', '40', '40', '2025-02-19 00:00:00', '2025-02-19 00:00:00', '0.5', '0.5', '2025-02-19 18:52:11', '4', '3', '');
INSERT INTO pla_histo VALUES ('135', '11', '4', '110', '110', '2025-02-26 00:00:00', '2025-02-26 00:00:00', '0.5', '0.5', '2025-02-20 12:32:01', '2', '3', '');
INSERT INTO pla_histo VALUES ('136', '12', '4', '120', '120', '2025-02-26 00:00:00', '2025-02-26 00:00:00', '0.5', '0.5', '2025-02-20 12:32:13', '1', '3', '');
INSERT INTO pla_histo VALUES ('137', '6', '2', '60', '60', '2025-02-20 00:00:00', '2025-02-20 00:00:00', '0.5', '0.5', '2025-02-20 12:32:50', '1', '3', '');
INSERT INTO pla_histo VALUES ('138', '8', '2', '80', '80', '2025-02-21 00:00:00', '2025-02-21 00:00:00', '0.5', '0.5', '2025-02-20 12:32:59', '1', '3', '');
INSERT INTO pla_histo VALUES ('139', '13', '5', '130', '130', '2025-02-20 00:00:00', '2025-03-21 00:00:00', '1', '2', '2025-02-20 15:28:16', '1', '1', '');
INSERT INTO pla_histo VALUES ('140', '11', '4', '110', '110', '2025-02-19 00:00:00', '2025-02-26 00:00:00', '0.5', '0.5', '2025-02-20 15:28:39', '3', '3', '');
INSERT INTO pla_histo VALUES ('141', '11', '4', '110', '110', '2025-02-19 00:00:00', '2025-02-19 00:00:00', '0.5', '0.5', '2025-02-20 15:28:59', '3', '3', '');
INSERT INTO pla_histo VALUES ('142', '13', '5', '130', '85', '2025-02-20 00:00:00', '2025-03-21 00:00:00', '2', '2', '2025-02-20 15:29:52', '1', '1', '');
INSERT INTO pla_histo VALUES ('143', '13', '5', '85', '85', '2025-02-20 00:00:00', '2025-03-21 00:00:00', '2', '2', '2025-02-20 15:30:02', '1', '2', '');
INSERT INTO pla_histo VALUES ('144', '11', '4', '110', '83', '2025-02-19 00:00:00', '2025-02-19 00:00:00', '0.5', '0.5', '2025-02-20 15:30:38', '3', '3', '');
INSERT INTO pla_histo VALUES ('145', '12', '4', '120', '82', '2025-02-26 00:00:00', '2025-02-26 00:00:00', '0.5', '0.5', '2025-02-20 15:30:58', '3', '3', '');
INSERT INTO pla_histo VALUES ('146', '10', '3', '100', '130', '2025-02-24 00:00:00', '2025-02-25 00:00:00', '1.5', '1.5', '2025-02-20 15:32:34', '1', '1', '');
INSERT INTO pla_histo VALUES ('147', '9', '3', '90', '120', '2025-02-24 00:00:00', '2025-02-24 00:00:00', '0.5', '0.5', '2025-02-20 15:32:46', '1', '1', '');
INSERT INTO pla_histo VALUES ('148', '13', '5', '85', '110', '2025-02-20 00:00:00', '2025-03-21 00:00:00', '2', '2', '2025-02-20 15:33:00', '2', '2', '');
INSERT INTO pla_histo VALUES ('149', '11', '4', '83', '100', '2025-02-19 00:00:00', '2025-02-19 00:00:00', '0.5', '0.5', '2025-02-20 15:33:20', '3', '3', '');
INSERT INTO pla_histo VALUES ('150', '12', '4', '82', '90', '2025-02-26 00:00:00', '2025-02-26 00:00:00', '0.5', '0.5', '2025-02-20 15:33:36', '3', '3', '');
INSERT INTO pla_histo VALUES ('151', '13', '5', '110', '110', '2025-02-20 00:00:00', '2025-02-21 00:00:00', '2', '2', '2025-02-20 15:35:37', '2', '2', '');
INSERT INTO pla_histo VALUES ('152', '15', '6', '150', '150', '2025-03-10 00:00:00', '2025-04-10 00:00:00', '35', '0', '2025-02-20 15:47:06', '1', '1', '');
INSERT INTO pla_histo VALUES ('153', '15', '6', '150', '150', '2025-03-10 00:00:00', '2025-04-08 00:00:00', '0', '0', '2025-02-20 15:47:26', '1', '1', '');
INSERT INTO pla_histo VALUES ('154', '15', '6', '150', '150', '2025-03-10 00:00:00', '2025-03-10 00:00:00', '0', '0', '2025-02-20 15:48:02', '1', '1', '');
INSERT INTO pla_histo VALUES ('155', '19', '6', '152', '152', '2025-03-10 00:00:00', '2025-03-12 00:00:00', '2', '2', '2025-02-20 15:48:36', '1', '1', '');
INSERT INTO pla_histo VALUES ('156', '20', '6', '154', '154', '2025-03-13 00:00:00', '2025-03-14 00:00:00', '2', '2', '2025-02-20 15:49:16', '1', '1', '');
INSERT INTO pla_histo VALUES ('157', '21', '6', '156', '156', '2025-03-17 00:00:00', '2025-03-28 00:00:00', '2', '10', '2025-02-20 15:50:22', '1', '1', '');
INSERT INTO pla_histo VALUES ('158', '22', '6', '158', '158', '2025-03-31 00:00:00', '2025-04-03 00:00:00', '2', '2', '2025-02-20 15:51:25', '1', '1', '');
INSERT INTO pla_histo VALUES ('159', '22', '6', '158', '158', '2025-03-31 00:00:00', '2025-04-03 00:00:00', '2', '4', '2025-02-20 15:51:39', '1', '1', '');
INSERT INTO pla_histo VALUES ('160', '23', '6', '160', '160', '2025-04-04 00:00:00', '2025-04-25 00:00:00', '2', '7', '2025-02-20 15:52:15', '1', '1', '');
INSERT INTO pla_histo VALUES ('161', '21', '6', '156', '156', '2025-03-17 00:00:00', '2025-04-04 00:00:00', '10', '15', '2025-02-20 15:52:56', '1', '1', '');
INSERT INTO pla_histo VALUES ('162', '23', '6', '160', '160', '2025-04-04 00:00:00', '2025-05-02 00:00:00', '7', '13.5', '2025-02-20 15:53:27', '1', '1', '');
INSERT INTO pla_histo VALUES ('163', '23', '6', '160', '160', '2025-04-04 00:00:00', '2025-06-21 00:00:00', '13.5', '12.5', '2025-02-20 15:54:04', '1', '1', '');
INSERT INTO pla_histo VALUES ('164', '23', '6', '160', '160', '2025-04-04 00:00:00', '2025-04-18 00:00:00', '12.5', '12.5', '2025-02-20 15:54:30', '1', '1', '');
INSERT INTO pla_histo VALUES ('165', '21', '6', '156', '156', '2025-03-17 00:00:00', '2025-04-04 00:00:00', '15', '15', '2025-02-20 15:54:54', '1', '1', '');
INSERT INTO pla_histo VALUES ('166', '23', '6', '160', '160', '2025-04-04 00:00:00', '2025-04-18 00:00:00', '12.5', '10.5', '2025-02-20 15:55:07', '1', '1', '');
INSERT INTO pla_histo VALUES ('176', '13', '5', '110', '110', '2025-02-20 00:00:00', '2025-02-21 00:00:00', '2', '2', '2025-02-21 21:36:30', '2', '3', '');
INSERT INTO pla_histo VALUES ('177', '9', '3', '120', '120', '2025-02-24 00:00:00', '2025-02-24 00:00:00', '0.5', '0.5', '2025-02-21 21:36:43', '1', '3', '');
INSERT INTO pla_histo VALUES ('178', '10', '3', '130', '130', '2025-02-24 00:00:00', '2025-02-25 00:00:00', '1.5', '1.5', '2025-02-21 21:36:50', '1', '3', '');
INSERT INTO pla_histo VALUES ('179', '14', '5', '140', '140', '2025-03-05 00:00:00', '2025-03-07 00:00:00', '3', '3', '2025-02-21 22:17:10', '1', '2', '');
INSERT INTO pla_histo VALUES ('180', '3', '1', '30', '30', '2025-02-18 00:00:00', '2025-02-18 00:00:00', '0.5', '0.5', '2025-02-21 22:17:23', '4', '3', '');
INSERT INTO pla_histo VALUES ('181', '15', '6', '150', '150', '2025-03-10 00:00:00', '2025-03-10 00:00:00', '0', '0', '2025-03-04 21:25:08', '1', '2', '');
INSERT INTO pla_histo VALUES ('182', '19', '6', '152', '152', '2025-03-10 00:00:00', '2025-03-12 00:00:00', '2', '2', '2025-03-04 21:25:14', '1', '2', '');
INSERT INTO pla_histo VALUES ('183', '20', '6', '154', '154', '2025-03-13 00:00:00', '2025-03-14 00:00:00', '2', '2', '2025-03-04 21:27:01', '1', '2', '');
INSERT INTO pla_histo VALUES ('184', '35', '1', '0', '157', '2025-03-06 00:00:00', '2025-03-06 00:00:00', '0', '2', '2025-03-06 22:58:26', '1', '3', '');
INSERT INTO pla_histo VALUES ('185', '22', '6', '158', '159', '2025-03-31 00:00:00', '2025-04-03 00:00:00', '4', '4', '2025-03-06 22:58:38', '1', '1', '');
INSERT INTO pla_histo VALUES ('186', '36', '1', '0', '158', '2025-03-07 00:00:00', '2025-03-07 00:00:00', '0', '1', '2025-03-06 22:59:20', '1', '2', '');
INSERT INTO pla_histo VALUES ('187', '35', '1', '157', '157', '2025-03-05 00:00:00', '2025-03-06 00:00:00', '2', '2', '2025-03-06 22:59:30', '3', '3', '');
INSERT INTO pla_histo VALUES ('188', '35', '6', '157', '157', '2025-03-05 00:00:00', '2025-03-06 00:00:00', '2', '2', '2025-03-06 23:00:43', '3', '3', '');
INSERT INTO pla_histo VALUES ('189', '36', '6', '158', '158', '2025-03-07 00:00:00', '2025-03-07 00:00:00', '1', '1', '2025-03-06 23:00:50', '2', '2', '');
INSERT INTO pla_histo VALUES ('190', '35', '11', '157', '157', '2025-03-05 00:00:00', '2025-03-06 00:00:00', '2', '2', '2025-03-06 23:02:15', '3', '3', '');
INSERT INTO pla_histo VALUES ('191', '36', '12', '158', '158', '2025-03-07 00:00:00', '2025-03-07 00:00:00', '1', '1', '2025-03-06 23:02:23', '2', '2', '');
INSERT INTO pla_histo VALUES ('192', '36', '12', '158', '158', '2025-03-07 00:00:00', '2025-03-07 00:00:00', '1', '1', '2025-03-08 11:59:19', '2', '3', '');
INSERT INTO pla_histo VALUES ('193', '1', '0', '10', '20', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('194', '2', '0', '20', '40', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('195', '3', '0', '30', '60', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('196', '4', '0', '40', '80', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('197', '5', '0', '50', '100', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('198', '6', '0', '60', '120', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('199', '7', '0', '70', '140', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('200', '8', '0', '80', '160', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('201', '12', '0', '90', '180', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('202', '11', '0', '100', '200', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('203', '13', '0', '110', '220', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('204', '9', '0', '120', '240', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('205', '10', '0', '130', '260', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('206', '14', '0', '140', '280', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('207', '15', '0', '150', '300', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('208', '19', '0', '152', '320', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('209', '20', '0', '154', '340', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('210', '21', '0', '156', '360', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('211', '35', '0', '157', '380', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('212', '36', '0', '158', '400', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('213', '22', '0', '159', '420', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('214', '23', '0', '160', '440', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('215', '16', '0', '200', '460', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('216', '17', '0', '210', '480', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');
INSERT INTO pla_histo VALUES ('217', '18', '0', '220', '500', '2025-03-08 12:19:55', '2025-03-08 12:19:55', '0', '0', '2025-03-08 12:19:55', '999', '999', 'Renumérotation automatique de event_ordre');


CREATE TABLE `pla_status` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO pla_status VALUES ('1', 'process');
INSERT INTO pla_status VALUES ('2', 'en cours');
INSERT INTO pla_status VALUES ('3', 'fini');
INSERT INTO pla_status VALUES ('4', 'en retard');
INSERT INTO pla_status VALUES ('999', 'non affecté');
