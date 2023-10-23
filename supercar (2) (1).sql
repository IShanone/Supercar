-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 13 sep. 2023 à 15:10
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `supercar`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(50) DEFAULT NULL,
  `prenom_client` varchar(50) DEFAULT NULL,
  `e_mail` varchar(320) DEFAULT NULL,
  `Adresse` varchar(100) DEFAULT NULL,
  `tel_client` varchar(20) DEFAULT NULL,
  `mdp_client` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `e_mail`, `Adresse`, `tel_client`, `mdp_client`) VALUES
(1, 'Nonci', 'cimer', 'nonci@gmail.com', '16 Avenu Trianon', '+2301234567898', 'Nonci'),
(2, 'fehizoro', 'angelin', 'fehizoroscania@gmail.com', '16 avenu ', '55171601', 'oui'),
(3, 'Andri', 'Fitia', 'fitia@gmail.com', 'Quatre Borne', '55171601', '0000'),
(4, 'Andri', 'Fi', 'fi@gmail.com', '3', '55171601', 'de'),
(5, 'Fitia', 'Andri', 'Fitiandri@gmail.com', '35 Avenu Trianon', '55141601', 'fitia');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom_contact` varchar(20) DEFAULT NULL,
  `prénom` varchar(20) DEFAULT NULL,
  `e_mail` varchar(320) DEFAULT NULL,
  `objet` varchar(30) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `id_client` int DEFAULT NULL,
  PRIMARY KEY (`id_contact`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom_contact`, `prénom`, `e_mail`, `objet`, `Message`, `id_client`) VALUES
(1, 'Fitia', 'Andri', 'fitia@gmail.com', 'demande', 'Merci de prendre en main', 3),
(2, 'riki', 'lo', 'liki@gmail.com', 'de', 'as', NULL),
(3, 'test', 'oublie', 'fehizoroscania@gmail.com', 'dde', 'ecec', 2),
(4, 'fitia', 'Andri', 'fi@gmail.com', 'demande', 'J\'ai besoin d\'une voiture de classe B', 4);

-- --------------------------------------------------------

--
-- Structure de la table `demande_essai`
--

DROP TABLE IF EXISTS `demande_essai`;
CREATE TABLE IF NOT EXISTS `demande_essai` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `adresse_essai` varchar(100) DEFAULT NULL,
  `date_essai` date DEFAULT NULL,
  `heure_essai` time DEFAULT NULL,
  `statut` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'en cours',
  `id_client` int NOT NULL,
  `id_voiture` int NOT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `id_client` (`id_client`),
  KEY `id_voiture` (`id_voiture`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `demande_essai`
--

INSERT INTO `demande_essai` (`id_demande`, `adresse_essai`, `date_essai`, `heure_essai`, `statut`, `id_client`, `id_voiture`) VALUES
(1, '36 Avenu Trianon', '2023-05-24', '21:07:00', 'en cours', 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `image_voiture`
--

DROP TABLE IF EXISTS `image_voiture`;
CREATE TABLE IF NOT EXISTS `image_voiture` (
  `id_image` int NOT NULL AUTO_INCREMENT,
  `url_image` varchar(100) DEFAULT NULL,
  `id_voiture` int NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_voiture` (`id_voiture`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `image_voiture`
--

INSERT INTO `image_voiture` (`id_image`, `url_image`, `id_voiture`) VALUES
(1, '/assets/images/voitures/navara.png', 10),
(2, '/assets/images/voitures/navara_1.png', 10),
(3, '/assets/images/voitures/navara_2.png', 10),
(4, '/assets/images/voitures/qashqai.png', 11),
(5, '/assets/images/voitures/qashqai_1.png', 11),
(6, '/assets/images/voitures/qashqai_2.png', 11),
(7, '/assets/images/voitures/raptor.jpeg', 4),
(8, '/assets/images/voitures/raptor_1.jpeg', 4),
(9, '/assets/images/voitures/raptor_2.jpg', 4),
(10, '/assets/images/voitures/rio.jpg', 15),
(11, '/assets/images/voitures/rio_1.jpg', 15),
(12, '/assets/images/voitures/rio_2.avif', 15),
(13, '/assets/images/voitures/selto.png', 13),
(14, '/assets/images/voitures/selto_1.png', 13),
(15, '/assets/images/voitures/seltos_2.avif', 13),
(16, '/assets/images/voitures/Silverado.png', 3),
(17, '/assets/images/voitures/Silverado_1.png', 3),
(18, '/assets/images/voitures/Silverado_2.png', 3),
(19, '/assets/images/voitures/blazer.png', 2),
(20, '/assets/images/voitures/blazer_1.png', 2),
(21, '/assets/images/voitures/Blazer_2.png', 2),
(22, '/assets/images/voitures/bt50.png', 7),
(23, '/assets/images/voitures/bt50_1.png', 7),
(24, '/assets/images/voitures/bt50_2.png', 7),
(25, '/assets/images/voitures/cerato.avif', 14),
(26, '/assets/images/voitures/cerato_1.jpg', 14),
(27, '/assets/images/voitures/cerato_2.avif', 14),
(28, '/assets/images/voitures/cruze (1).png', 1),
(29, '/assets/images/voitures/cruze (2).png', 1),
(30, '/assets/images/voitures/cruze (3).png', 1),
(31, '/assets/images/voitures/cx5.png', 9),
(32, '/assets/images/voitures/cx5_1.png', 9),
(33, '/assets/images/voitures/cx5_2.png', 9),
(34, '/assets/images/voitures/kuga.png', 5),
(35, '/assets/images/voitures/kuga_1.png', 5),
(36, '/assets/images/voitures/kuga_2.png', 5),
(37, '/assets/images/voitures/maxima.png', 12),
(38, '/assets/images/voitures/maxima_1.png', 12),
(39, '/assets/images/voitures/maxima_2.png', 12),
(40, '/assets/images/voitures/mazda3.png', 8),
(41, '/assets/images/voitures/mazda3_1.png', 8),
(42, '/assets/images/voitures/mazda3_2.png', 8),
(43, '/assets/images/voitures/mondeo.png', 6),
(44, '/assets/images/voitures/mondeo_1.png', 6),
(45, '/assets/images/voitures/mondeo_2.png', 6);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id_marque` int NOT NULL AUTO_INCREMENT,
  `nom_marque` varchar(50) DEFAULT NULL,
  `url_marque` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_marque`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `nom_marque`, `url_marque`) VALUES
(1, 'Chevolet', 'assets/images/marques/Chevrolet.png'),
(2, 'Ford', 'assets/images/marques/ford.png'),
(3, 'Kia', 'assets/images/marques/Kia.png'),
(4, 'Mazda', 'assets/images/marques/Mazda.png'),
(5, 'Nissan', 'assets/images/marques/nissan.png');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(50) DEFAULT NULL,
  `image_service` varchar(100) DEFAULT NULL,
  `petitePhrases` varchar(255) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `nom_service`, `image_service`, `petitePhrases`, `description`) VALUES
(1, 'ENTRETIEN ET MAINTENANCE', 'assets/images/services/entretien.png', 'Nous offrons des services d\'entretien et de maintenance pour assurer que votre équipement reste en parfait état.', 'Chez supercar Services, nous savons à quel point il est important de maintenir vos équipements en bon état de fonctionnement. C\'est pourquoi nous offrons une gamme complète de services d\'entretien et de maintenance pour répondre à vos besoins spécifiques. Nos techniciens qualifiés sont équipés pour résoudre tous vos problèmes techniques.\r\n      Nous offrons une variété de services d\'entretien et de maintenance, y compris la maintenance préventive, la réparation, le nettoyage, l\'inspection et bien plus encore. Nous travaillons avec vous pour créer un plan d\'entretien personnalisé qui répond à vos besoins spécifiques.\r\n      Nous sommes là pour vous aider à prolonger la durée de vie de vos équipements et à minimiser les temps d\'arrêt. Nos services d\'entretien et de maintenance sont conçus pour vous offrir la tranquillité d\'esprit dont vous avez besoin pour vous concentrer sur votre entreprise.'),
(2, 'PIÈCES D’ORIGINE', 'assets/images/services/Pièces.png', 'Nous fournissons des pièces d\'origine pour garantir la qualité de votre équipement.', 'Chez supercar Services, nous croyons que l\'utilisation de pièces d\'origine est essentielle pour garantir la qualité, la fiabilité et la durabilité de nos produits. Nous offrons une large gamme de pièces d\'origine pour tous vos besoins. Nos pièces sont testées pour garantir leur qualité et leur performance.\r\n      Nous offrons des pièces d\'origine pour tous les produits que nous proposons, ainsi que pour les équipements de la plupart des principaux fabricants. Nous sommes fiers de notre vaste inventaire de pièces d\'origine de qualité supérieure, ainsi que de notre équipe de professionnels expérimentés qui peuvent vous aider à trouver la pièce dont vous avez besoin.\r\n      Nous offrons également des services de consultation pour vous aider à identifier les pièces dont vous avez besoin. Notre équipe de professionnels expérimentés est là pour vous aider à trouver la pièce d\'origine dont vous avez besoin pour votre équipement.'),
(3, 'GARANTIE', 'assets/images/services/garantie.png', 'Nous offrons une garantie de satisfaction pour nos services et produits.', 'Chez supercar Services, nous nous engageons à offrir des produits et des services de qualité supérieure. C\'est pourquoi nous proposons une variété de garanties pour nos produits et services. Nous sommes fiers de notre travail et nous voulons que nos clients soient satisfaits à 100%. Si vous rencontrez un problème avec un de nos produits ou services, notre équipe de service à la clientèle est là pour vous aider.\r\n      Nos garanties varient en fonction des produits et services. Nous proposons des garanties limitées, des garanties prolongées et des garanties de remplacement. Les détails de chaque garantie se trouvent sur la page de chaque voiture. Si vous avez des questions sur une garantie, n\'hésitez pas à nous contacter.\r\n      Nous sommes fiers de nos produits et services, et nous voulons que nos clients soient satisfaits. C\'est pourquoi nous offrons des garanties pour protéger votre investissement et vous donner la tranquillité d\'esprit dont vous avez besoin.');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int NOT NULL AUTO_INCREMENT,
  `nom_type` varchar(30) DEFAULT NULL,
  `image_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `nom_type`, `image_type`) VALUES
(1, 'pickup', 'assets/images/types/pickup.png'),
(2, 'SUV', 'assets/images/types/SUV.png'),
(3, 'berline', 'assets/images/types/berline.png');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id_voiture` int NOT NULL AUTO_INCREMENT,
  `nom_voiture` varchar(50) DEFAULT NULL,
  `annee_voiture` int DEFAULT NULL,
  `couleur_voiture` varchar(30) DEFAULT NULL,
  `transmission` varchar(20) DEFAULT NULL,
  `km` decimal(10,2) DEFAULT NULL,
  `prix_voiture` decimal(10,2) DEFAULT NULL,
  `pays_importation` varchar(50) DEFAULT NULL,
  `id_marque` int NOT NULL,
  `id_type` int DEFAULT NULL,
  PRIMARY KEY (`id_voiture`),
  KEY `id_marque` (`id_marque`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id_voiture`, `nom_voiture`, `annee_voiture`, `couleur_voiture`, `transmission`, `km`, `prix_voiture`, `pays_importation`, `id_marque`, `id_type`) VALUES
(1, 'Cruze', 2011, 'red', 'manuelle', '3000.00', '276000.00', 'Amérique', 1, 3),
(2, 'Blazer', 2019, 'red', 'automatique', '200.00', '360000.00', 'Amérique', 1, 2),
(3, 'Silverado', 2020, 'white', 'automatique', '500.00', '350000.00', 'Amérique', 1, 1),
(4, 'Raptor', 2014, 'black', 'automatique', '3500.00', '400000.00', 'Amérique', 2, 1),
(5, 'Kuga', 2009, 'black', 'manuelle', '4000.00', '100000.00', 'Amérique', 2, 2),
(6, 'Mondeo', 2007, 'gray', 'manuelle', '6000.00', '90000.00', 'Amérique', 2, 3),
(7, 'BT-50', 2020, 'white', 'automatique', '2000.00', '600000.00', 'Japon', 4, 1),
(8, '3', 2018, 'red', 'manuelle', '3000.00', '25000.00', 'Japon', 4, 3),
(9, 'CX-5', 2012, 'blue', 'manuelle', '6000.00', '100000.00', 'Japon', 4, 2),
(10, 'Navara', 2011, 'brown', 'manuelle', '3000.00', '250000.00', 'Japon', 5, 1),
(11, 'Qashqai', 2018, 'blue', 'automatique', '4000.00', '300000.00', 'Japon', 5, 2),
(12, 'Maxima', 2017, 'white', 'automatique', '2000.00', '250000.00', 'Japon', 5, 3),
(13, 'Selto', 2022, 'white', 'automatique', '200.00', '500000.00', 'Corée', 3, 2),
(14, 'Cerato', 2022, 'white', 'automatique', '200.00', '500000.00', 'Corée', 3, 3),
(15, 'Rio', 2022, 'black', 'automatique', '200.00', '500000.00', 'Corée', 3, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `demande_essai`
--
ALTER TABLE `demande_essai`
  ADD CONSTRAINT `demande_essai_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `demande_essai_ibfk_2` FOREIGN KEY (`id_voiture`) REFERENCES `voiture` (`id_voiture`);

--
-- Contraintes pour la table `image_voiture`
--
ALTER TABLE `image_voiture`
  ADD CONSTRAINT `image_voiture_ibfk_1` FOREIGN KEY (`id_voiture`) REFERENCES `voiture` (`id_voiture`);

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `id_type` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`),
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
