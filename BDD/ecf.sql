-- Active: 1689165483012@@127.0.0.1@3306@ecf
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 juil. 2023 à 14:42
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecf`
--
CREATE DATABASE IF NOT EXISTS `ecf` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `ecf`;

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `mileage` varchar(50) NOT NULL,
  `energy` varchar(50) NOT NULL,
  `price` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `doors_number` int(11) NOT NULL,
  `fiscal_power` varchar(50) NOT NULL,
  `interior_equipments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `exterior_equipments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `security_equipments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `others_equipments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `description`, `created_at`, `year`, `mileage`, `energy`, `price`, `transmission`, `color`, `doors_number`, `fiscal_power`, `interior_equipments`, `exterior_equipments`, `security_equipments`, `others_equipments`, `image`) VALUES
(1, 'Renault', 'Clio 4', 'air energy dci 75', '22/01/2017', 2017, '16 400 km', 'Diesel', '6 800 €', 'Manuelle', 'Rouge', 5, '5CV', 'Volant réglable, palette au volant, ordinateur de bord, accoudoir avant central, régulateur et limitateur de vitesse, banquette rabattable et coulissante, caméra de recul, climatisation automatique, fermeture électrique, GPS, prise audio USB et auxiliaires, vitres électriques, écran tactile', 'Aide parking, frein de parking automatique, jantes alu', 'ESP, antipatinage, ABS, aide au démarrage en côte, AFU, alerte franchissement des lignes, contrôle de pression des pneus,\r\nessuie-glaces automatiques, feux av et a. à LED, feux automatiques, kit téléphone main libre Bluetooth', 'Démarrage sans clé, fonction d\'appel d\'urgence, ceinture de vitrage chromée, ceintures avant ajustables en hauteur, compte tours, éclairage au sol, écran multifonction couleur, système Start & Stop, système audio, roue de secours galette', '/uploads/cars/clio4/clio1.jpg, \r\n/uploads/cars/clio4/clio3.jpg,\r\n/uploads/cars/clio4/clio4.jpg,\r\n/uploads/cars/clio4/clio2.jpg, \r\n/uploads/cars/clio4/clio6.jpg'),
(2, 'Mercedec', 'CLA', '200d business', '16/11/2018', 2018, '35 443 km', 'Diesel', '26 480 €', 'Automatique', 'Gris métallisé', 5, '7CV', 'Volant cuir multifonctions et réglable, palette au volant, ordinateur de bord, accoudoir avant central, régulateur et limitateur de vitesse, banquette rabattable, caméra de recul, climatisation, fermeture électrique, GPS, prise audio USB et auxiliaires, siège sport, vitres électriques', 'Jantes alu, rétroviseurs électriques', 'ESP, antipatinage, ABS, aide au démarrage en côte, AFU, contrôle de pression des pneus, essuie-glaces automatiques, feux av et a. à LED, feux automatiques, kit téléphone main libre Bluetooth', 'Calandre chromée, ceinture de vitrage chromée, ceintures avant ajustables en hauteur, compte tours, éclairage au sol,\r\nécran multifonction couleur, système Start & Stop et système audio', '/uploads/cars/CLA/avant.jpg, /uploads/cars/CLA/arrière.jpg, /uploads/cars/CLA/tableau de bord.jpg, \r\n/uploads/cars/CLA/intérieur avant.jpg, /uploads/cars/CLA/intérieurarrière.jpg'),
(3, 'Ford', 'Fiesta 6', 'ecoboost 100vi 1.0', '04/10/2019', 2019, '77 858 km', 'Essence', '13 490 €', 'Manuelle', 'Noir', 5, '5CV', 'Volant cuir, ordinateur de bord, accoudoir avant central, régulateur et limitateur de vitesse, banquette rabattable, carte main libre, climatisation automatique, fermeture électrique, prise 12V, GPS, prise audio USB, vitres ar surteintées, écran tactile', 'Aide au parking, jantes alu, rétroviseurs électriques', 'ESP, ABS, aide au démarrage en côte, alerte de franchissement de ligne, essuie-glaces automatiques, feux automatiques, projecteur antibrouillard, kit téléphone main libre Bluetooth', 'Calandre chromée, ceinture de vitrage chromée, commande mode ECO, démarrage sans clé, phares halogènes, système Start & Stop, contrôle de pressions des pneus', '/uploads/cars/fiesta6/avant.jpg, /uploads/cars/fiesta6/arrière.jpg, /uploads/cars/fiesta6/intérieur.jpg'),
(4, 'Peugeot', '508', 'gt line eat8 2.0', '13/01/2020', 2020, '57 022 km', 'Diesel', '27 990 €', 'Automatique', 'Gris', 5, '8CV', 'Ordinateur de bord, accoudoir avant central, régulateur de vitesse, carte main libre, climatisation automatique multizone, \r\nprise audio USB, vitres ar surteintées et électriques', 'Freins de parking automatique, jantes alu, rétroviseurs électriques et dégivrants', 'ESP, antipatinage, ABS, aide au démarrage en côte, AFU, alerte franchissement de ligne, EBD, essuie-glaces automatiques, feux automatiques, feux av et ar à LED, système de détection de somnolence', 'Calandre chromée, driver sport pack, dispositf de freinage automatique, connect SOS & assistance, démarrage sans clé, écran multifonction couleur, 2 prises USB à l\'arrière, fonction DAB, pédalier sport, système Start & Stop, i-cockpit Amplify', '/uploads/cars/508/avantdroit.jpg, /uploads/cars/508/avantgauche.jpg, /uploads/cars/508/arrière.jpg, /uploads/cars/508/intérieur.jpg'),
(5, 'Dacia', 'Sandero', '0.9 tce e6c', '07/11/2018', 2018, '55 196 km', 'Essence', '12 890 €', 'Automatique', 'Bleu marine', 5, '5CV', 'Volant cuir multifonctions et réglable, palette au volant, ordinateur de bord, accoudoir avant central, régulateur et limitateur de vitesse, banquette rabattable, caméra de recul, climatisation automatique, fermeture électrique, prise 12V, GPS, prise audio USB et auxiliaires, siège chauffant, vitres électriques, écran tactile', 'Barre de toit, radar de recul, rétroviseurs électriques', 'ESP, antipatinage, ABS, aide au démarrage en côte, AFU, feux av et ar à LED, projecteurs antibrouillard, kit téléphone main libre bluetooth', 'Ceintures avant ajustables, commande mode ECO, enjoliveurs, roue de secours avec cric, phares halogènes, système Start & Stop', '/uploads/cars/sandero/avant.jpg, /uploads/cars/sandero/côté.jpg, /uploads/cars/sandero/intérieurgauche.jpg, /uploads/cars/sandero/intérieurdroit.jpg'),
(6, 'Opel', 'Corsa 4', 'iv 2.1 65 top', '21/12/2012', 2012, '59 623 km', 'Diesel', '7 990 €', 'Manuelle', 'Bleu clair', 5, '4CV', '4 haut parleur, banquette rabattable, direction assistée, fermeture électrique, système audio CD mp3', 'Rétroviseurs électriques', 'ABS, fixations ISOFIX', 'Ceintures avant ajustables, camandre chromée, phares halogènes, compte tours', '/uploads/cars/corsa4/avant.jpg, /uploads/cars/corsa4/côté.jpg, /uploads/cars/corsa4/arrière.jpg, \r\n/uploads/cars/corsa4/tableaudebord.jpg, /uploads/cars/corsa4/intérieurarrière.jpg'),
(7, 'KIA', 'Ceed 2', 't-gdi 120 bv6', '18/06/2018', 2018, '43 310 km', 'Essence', '16 890 €', 'Manuelle', 'Noir', 5, '6CV', 'Volant multifonctions, ordinateur de bord, 6 hauts parleurs, accoudoir avant central, régulateur et limitateur de vitesse,\r\ncarte main libre, climatisation automatique ,prise 12V, fermeture électrique, GPS, prise audio USB et auxiliaires, vitres électriques', 'Rétroviseurs électriques et dégivrants, jantes alu, radar de recul', 'Antipatinage, ABS, aide au démarrage en côte, AFU, projecteurs antibrouillard, contrôle de pression des pneus, feux av et a. à LED, feux automatiques, essuie glaces automatiques, kit téléphone main libre bluetooth', 'Ecran multifonction couleur, interface média, pédalier sport, roue de secours galette, système start & stop, toit ouvrant panoramique, système audio', '/uploads/cars/ceed/avant.jpg, /uploads/cars/ceed/avantcôté.jpg, /uploads/cars/ceed/arrière.jpg, /uploads/cars/ceed/intérieur.jpg, \r\n/uploads/cars/ceed/tableaudebord.jpg'),
(8, 'DS', 'Crossback 7', 'bluehdi 180 business', '09/10/2020', 2020, '22 603 km', 'Diesel', '35 980 €', 'Automatique', 'Bleu nuit', 5, '9CV', 'Volant cuir multifonctions et réglable, palette au volant, ordinateur de bord, accoudoir avant central, régulateur et limitateur de vitesse, banquette rabattable, caméra de recul, climatisation automatique, prise 12V, fermeture électrique, GPS, prise audio USB et auxiliaires, vitres électriques, vitres ar surteintées, écran tactile, support lombaires', 'Aide parking, frein de parking automatique, projecteurs xénon', 'ESP, Antipatinage, ABS, aide au démarrage en côte, AFU, alerte franchissement de lignes, contrôle de pression des pneus, feux av et a. à LED, feux automatiques, essuie glaces automatiques, kit téléphone main libre bluetooth', 'Appel d\'urgence localisé, commandes vocales, DS CONNECT NAV avex radio numérique, ceinture de vitrage chromée, ceintures avant ajustables en hauteur, \r\nrétroviseur électrique, système audio, pack siège business', '/uploads/cars/crossback7/avant.jpg, /uploads/cars/crossback7/côté.jpg, /uploads/cars/crossback7/arrière.jpg, /uploads/cars/crossback7/intérieurconducteur.jpg, \r\n/uploads/cars/crossback7/intérieuravant.jpg, /uploads/cars/crossback7/intérieurarrière.jpg'),
(9, 'Renaut', 'Zoé', 'zen q210', '28/12/2012', 2012, '60 150 km', 'Electrique', '9 990 €', 'Automatique', 'Noir', 5, '1CV', 'Volant cuir multifonctions et réglable, palette au volant, ordinateur de bord, accoudoir avant central, régulateur et limitateur de vitesse, banquette rabattable, caméra de recul, climatisation automatique, fermeture électrique, GPS, prise audio USB et auxiliaires, vitres électriques, vitres ar surteintées, écran tactile', 'Aide parking, jantes alu, rétroviseurs électriques', 'ESP, antipatinage, ABS, aide au démarrage en côte, AFU, alerte franchissement de lignes, contrôle de pression des pneus, feux av et a. à LED, feux automatiques, essuie glaces automatiques, kit téléphone main libre Bluetooth', 'Démarrage sans clé, appel d\'urgence localisé, ceinture de vitrage chromée, ceintures avant ajustables en hauteur, compte tours, éclairage au sol, écran multifonction couleur, système Start & Stop, système audio, volant chauffant, caméra de recul panoramique à 180°', '/uploads/cars/zoé/avant.jpg, /uploads/cars/zoé/arrière.jpg, \r\n/uploads/cars/zoé/tableau de bord.jpg, /uploads/cars/zoé/intérieurarrière.jpg, \r\n/uploads/cars/zoé/coffre.jpg'),
(10, 'Jeep', 'Compass 2', 'mjet 170 4awd', '18/05/2018', 2018, '147 222 km', 'Diesel', '24 680 €', 'Automatique', 'Gris anthracite', 5, '9CV', 'Volant cuir multifonctions et réglable, palette au volant, ordinateur de bord, accoudoir avant central, régulateur et limitateur de vitesse, 9 hauts parleurs, carte main libre, climatisation automatique multizonage, fermeture électrique, GPS, prise audio USB et auxiliaires, vitres électriques, écran tactile', 'Aide parking, jantes alu, rétroviseurs électriques et dégivrants, barre de toit', 'ESP, antipatinage, ABS, aide au démarrage en côte, AFU, alerte franchissement de lignes, contrôle de pression des pneus, projecteurs antibrouillard, feux av et a. à LED, feux automatiques, essuie glaces automatiques, radar anti collusion, EBD', 'Apuis-tête avant actifs, commandes du sysytème audio au volant, commandes vocales, démarrage sans clé, éclairage d\'ambiance, écran multifonction couleurs,\r\ninterface média, système start & stop, TMC, système audio', '/uploads/cars/compass2/avant.jpg, /uploads/cars/compass2/côté.jpg, /uploads/cars/compass2/arrière.jpg, /uploads/cars/compass2/tableau de bord.jpg, \r\n/uploads/cars/compass2/intérieuravant.jpg, /uploads/cars/compass2/toit.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `opinions`
--

DROP TABLE IF EXISTS `opinions`;
CREATE TABLE IF NOT EXISTS `opinions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) NOT NULL,
  `opinion` text NOT NULL,
  `imgNote` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `opinions`
--

INSERT INTO `opinions` (`id`, `client_name`, `opinion`, `imgNote`) VALUES
(2, 'Nicolas COUDRINO', 'Super accueil ! Le prix des prestations sont corrects et les devis sont transmis avant chaque réparation pour ne pas avoir de surprise !', '/uploads/etoiles avis/5stars.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE IF NOT EXISTS `planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planning1` varchar(50) NOT NULL,
  `hours1` varchar(50) NOT NULL,
  `planning2` varchar(50) DEFAULT NULL,
  `hours2` varchar(50) DEFAULT NULL,
  `planning3` varchar(50) DEFAULT NULL,
  `hours3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `planning`
--

INSERT INTO `planning` (`id`, `planning1`, `hours1`, `planning2`, `hours2`, `planning3`, `hours3`) VALUES
(1, 'Du lundi au vendredi', '08h00-12h30 14h30-18h30', 'Samedi', '08h00-12h00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `publish_opinion`
--

DROP TABLE IF EXISTS `publish_opinion`;
CREATE TABLE IF NOT EXISTS `publish_opinion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) NOT NULL,
  `opinion` text NOT NULL,
  `imgNote` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `publish_opinion`
--

INSERT INTO `publish_opinion` (`id`, `client_name`, `opinion`, `imgNote`) VALUES
(1, 'Sebastien REPEROT', 'Très bon garage. Réparation rapide et de qualité. equipe à l\'écoute des clients.', '/uploads/etoiles avis/5stars.jpg'),
(2, 'Matthieu MOURET', 'Un garage moins grand qu\'une concession et pourtant un accueil chaleureux et des véhicules à des prix corrects.', '/uploads/etoiles avis/5stars.jpg'),
(3, 'Allan GAPORIT', 'Garage très professionnel et à l\'écoute des ses clients', '/uploads/etoiles avis/5stars.jpg'),
(4, 'Jonathan JUSPIN', 'Profesionnels sérieux et honnêtes', '/uploads/etoiles avis/5stars.jpg'),
(5, 'Caroline RAUTUREAU', 'Très bien reçu. Bons conseils et à l\'écoute', '/uploads/etoiles avis/4stars.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `picture`) VALUES
(1, 'Atelier de mécanique automobile', 'Des techniciens qualifiés et régulièrement formes s\'occupent de votre voiture au sein de nos ateliers pour toutes les interventions d\'entretien courant.\r\n- Diagnostique et recherche de panne électrique\r\n- Préparation au contrôle technique\r\n- Pneumatiques\r\n- Freinage\r\n- Echappement', '/uploads/services/mecanique'),
(2, 'Atelier de carrosserie', 'Qualifiés et expérimentés nos carrossiers peintre disposent d un outillage de pointe pour effectuer tous les travaux de tôlerie, carrosserie et peinture.\r\n- Débosselage sans peinture\r\n- Tôlerie ou peinture\r\n- Réparation ou changement de parebrise\r\n- Vitres surteintées', '/uploads/services/carrosserie'),
(3, 'Service entretien', 'Nos techniciens qualifiés s occupent de votre voiture pour toutes les interventions de maintenance.\r\n- Changement d\'essuie-glace\r\n- Eclairage\r\n- Vidange\r\n- Climatisation\r\n- Batterie', '/uploads/services/entretien');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'PARROT', 'Vincent', 'test@test.fr', 'test', 'administrateur'),
(3, 'PIVETEAU', 'Maureen', 'piveteau.maureen@gmail.com', '1234', 'employé');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
