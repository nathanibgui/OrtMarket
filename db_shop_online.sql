-- Adminer 4.8.1 MySQL 5.5.5-10.6.11-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `Shop_online` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `Shop_online`;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Users` (`id`, `cat`, `Nom`, `Prenom`, `Mail`, `Login`, `Password`, `Date_Creation`) VALUES
(1,	'root',	'Sroussi',	'Nathan',	'Nathansroussi@gmail.com',	'Nat.5_',	'root',	'2022-11-23 19:16:23'),
(2,	'root',	'demo',	'demo',	'demo@demo.fr',	'demo',	'demo',	NULL);

-- 2023-02-26 09:11:11