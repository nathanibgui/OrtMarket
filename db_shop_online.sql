-- Adminer 4.8.1 MySQL 5.5.5-10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Adresse`;
CREATE TABLE `Adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Pays` varchar(50) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Code_postal` int(11) NOT NULL,
  `Rue` varchar(200) NOT NULL,
  `N°` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Articles`;
CREATE TABLE `Articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Date_ajout` datetime DEFAULT NULL,
  `id_Catégories` int(11) DEFAULT NULL,
  `picture` longtext DEFAULT NULL,
  `qtn` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_Catégories` (`id_Catégories`),
  CONSTRAINT `Articles_ibfk_1` FOREIGN KEY (`id_Catégories`) REFERENCES `Catégories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Articles` (`id`, `Title`, `Description`, `Date_ajout`, `id_Catégories`, `picture`, `qtn`) VALUES
(1,	'Coca ',	'Coca',	'2027-02-23 00:00:00',	NULL,	'https://www.delcourt.fr/4520-thickbox_default/Coca-cola-33-cl-Lot-de-24.jpg',	'17');

DROP TABLE IF EXISTS `Catégories`;
CREATE TABLE `Catégories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `commande`;
CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` date DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `Users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `commande` (`id_commande`, `date_commande`, `id_client`) VALUES
(1,	'2023-02-27',	2),
(2,	'2023-02-27',	2),
(3,	'2023-02-27',	2);

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE `ligne_commande` (
  `id_ligne` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) DEFAULT NULL,
  `id_commande` int(11) DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ligne`),
  KEY `id_produit` (`id_produit`),
  KEY `id_commande` (`id_commande`),
  CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `Articles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `ligne_commande` (`id_ligne`, `quantite`, `id_commande`, `id_produit`) VALUES
(1,	2,	1,	1),
(2,	2,	2,	1),
(3,	6,	3,	1);

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(15) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Mail` varchar(100) DEFAULT NULL,
  `Login` varchar(100) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Date_Creation` datetime DEFAULT NULL,
  `Date_Activité` datetime DEFAULT NULL,
  `Etat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Users` (`id`, `cat`, `Nom`, `Prenom`, `Mail`, `Login`, `Password`, `Date_Creation`, `Date_Activité`, `Etat`) VALUES
(2,	'root',	'demo',	'demo',	'demo@demo.fr',	'demo',	'demo',	NULL,	'2023-02-27 13:27:22',	NULL);

-- 2023-02-27 12:27:58