-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 25 sep. 2021 à 09:16
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenance`
--

DROP TABLE IF EXISTS `appartenance`;
CREATE TABLE IF NOT EXISTS `appartenance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_club` int NOT NULL,
  `id_membre` int NOT NULL,
  `fonctionmembre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_club` (`id_club`),
  KEY `id_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=695 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartenance`
--

INSERT INTO `appartenance` (`id`, `id_club`, `id_membre`, `fonctionmembre`) VALUES
(489, 53, 52, 'President'),
(490, 53, 53, 'Secrétaire'),
(491, 53, 54, 'Trésorier');

-- --------------------------------------------------------

--
-- Structure de la table `campus`
--

DROP TABLE IF EXISTS `campus`;
CREATE TABLE IF NOT EXISTS `campus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `campus` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `campus`
--

INSERT INTO `campus` (`id`, `campus`) VALUES
(1, 'Calais'),
(2, 'Longuenesse'),
(3, 'Dunkerque');

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `id_type` int NOT NULL,
  `Annee_universitaire` varchar(20) NOT NULL,
  `Date_de_creation` date NOT NULL,
  `chef_de_projet` varchar(50) NOT NULL,
  `id_promotion` int NOT NULL,
  `id_specialite` int NOT NULL,
  `Objectif` text NOT NULL,
  `Nom_Parrain` varchar(50) NOT NULL,
  `approuve_BDE` int NOT NULL,
  `approuve_responsable` int NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_foreign_key_name` (`id_type`),
  KEY `id_promotion` (`id_promotion`),
  KEY `id_specialite` (`id_specialite`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`id`, `Nom`, `id_type`, `Annee_universitaire`, `Date_de_creation`, `chef_de_projet`, `id_promotion`, `id_specialite`, `Objectif`, `Nom_Parrain`, `approuve_BDE`, `approuve_responsable`, `Email`, `mdp`) VALUES
(53, 'EILCO\'TAKU', 2, '2020-2021', '2020-09-15', 'helinckx corentin', 4, 1, 'club sur la culture asiatique', 'Nicolas Waldhoff', 1, 1, 'corentin.hel@hotmail.fr', 'admin@2020'),
(54, 'chti\'gamer', 2, '2020-2021', '2020-10-07', 'tom lefebvre', 4, 1, 'test ', 'test parrain', 1, 1, 'tom.lefebvre.elv@eilco-ulco.fr', 'tom@2020');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `id_campus` int NOT NULL,
  `date_evenement` date NOT NULL,
  `Horaire_debut` time NOT NULL,
  `Horaire_fin` time NOT NULL,
  `Lieu` varchar(50) NOT NULL,
  `Type_evenement` varchar(50) NOT NULL,
  `Annee_universitaire` varchar(20) NOT NULL,
  `id_club` int NOT NULL,
  `Responsable` varchar(50) NOT NULL,
  `Objectif` text NOT NULL,
  `Aide_financiere` int NOT NULL,
  `Montant` double NOT NULL,
  `approuve_bde` int NOT NULL,
  `approuve_responsable` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_campus` (`id_campus`),
  KEY `id_club` (`id_club`)
) ENGINE=InnoDB AUTO_INCREMENT=440 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `Nom`, `id_campus`, `date_evenement`, `Horaire_debut`, `Horaire_fin`, `Lieu`, `Type_evenement`, `Annee_universitaire`, `id_club`, `Responsable`, `Objectif`, `Aide_financiere`, `Montant`, `approuve_bde`, `approuve_responsable`) VALUES
(438, 'testevent', 1, '2021-09-06', '23:54:44', '23:54:44', 'ici', 'test', 'ING3', 53, 'helinckx corentin', 'test', 0, 0, 1, 1),
(439, 'test2', 1, '2021-09-25', '12:55:00', '15:58:00', 'ici', 'test', '2020-2021', 53, 'helinckx corentin', 'test', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

DROP TABLE IF EXISTS `gestionnaire`;
CREATE TABLE IF NOT EXISTS `gestionnaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gestionnaire`
--

INSERT INTO `gestionnaire` (`id`, `Nom`, `Email`, `password`) VALUES
(1, 'SABINE Delvart', 'sabine.delvart@eilco-ulco.fr', 'sabine@2020'),
(2, 'BDE', 'bde@eilco-ulco.fr', 'bde@2020'),
(3, 'helinckx corentin', 'corentin.hel@hotmail.fr', 'admin@2020'),
(5, 'JEAN FRANCOIS Bernard', 'jean-francois.bernard@eilco-ulco.fr', 'jeanfrancois@2020');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `id_promotion` int NOT NULL,
  `id_specialite` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_promotion` (`id_promotion`),
  KEY `id_specialite` (`id_specialite`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `Nom`, `id_promotion`, `id_specialite`) VALUES
(8, 'mohammed zoughagh', 3, 1),
(9, 'salma bouhlla', 1, 1),
(10, 'Azaf meriem', 2, 2),
(11, 'Ezzitouni meryem', 1, 2),
(12, 'azaf meriem', 4, 1),
(13, 'azaf azaf', 4, 1),
(14, 'azaf meriem', 4, 1),
(15, 'azaf', 4, 1),
(16, 'Zoughagh Mohammed', 4, 1),
(17, 'El Hadri Farah', 4, 1),
(18, 'Duvivier ClÃ©ment', 4, 1),
(19, 'Barry Abdoulay', 4, 1),
(20, 'Atabit Meryeme', 4, 1),
(21, 'mohammed zoughagh', 4, 1),
(22, 'Duvivier ClÃ©ment', 4, 1),
(23, 'Atabit Meryeme', 4, 1),
(24, 'EL HADRI farah', 4, 1),
(25, 'Barry Abdoulay', 4, 1),
(52, 'Corentin Helinckx', 4, 1),
(53, 'Mathilde Rouvroy', 4, 1),
(54, 'Blongchia Lyfoung', 4, 1),
(55, 'tom lefebvre', 4, 1),
(56, 'corentin helinckx', 4, 1),
(57, 'helinckx corentin', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `promotion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `promotion`) VALUES
(1, 'CP1'),
(2, 'CP2'),
(3, 'ING1'),
(4, 'ING2'),
(5, 'ING3');

-- --------------------------------------------------------

--
-- Structure de la table `soutenance`
--

DROP TABLE IF EXISTS `soutenance`;
CREATE TABLE IF NOT EXISTS `soutenance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_club` int NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `date_soutenance` date NOT NULL,
  `heure_soutenance` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_club` (`id_club`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
CREATE TABLE IF NOT EXISTS `specialite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `specialite` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id`, `specialite`) VALUES
(1, 'Informatique'),
(2, 'Génie industriel '),
(3, 'Génie énergétique et environnement  ');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `Type`) VALUES
(1, 'Association'),
(2, 'Club');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenance`
--
ALTER TABLE `appartenance`
  ADD CONSTRAINT `appartenance_ibfk_1` FOREIGN KEY (`id_club`) REFERENCES `club` (`id`),
  ADD CONSTRAINT `appartenance_ibfk_2` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);

--
-- Contraintes pour la table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `club_ibfk_1` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id`),
  ADD CONSTRAINT `club_ibfk_2` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`id`),
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`id_type`) REFERENCES `type` (`id`);

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `evenement_ibfk_1` FOREIGN KEY (`id_campus`) REFERENCES `campus` (`id`),
  ADD CONSTRAINT `evenement_ibfk_2` FOREIGN KEY (`id_club`) REFERENCES `club` (`id`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_ibfk_1` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id`),
  ADD CONSTRAINT `membre_ibfk_2` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`id`);

--
-- Contraintes pour la table `soutenance`
--
ALTER TABLE `soutenance`
  ADD CONSTRAINT `soutenance_ibfk_1` FOREIGN KEY (`id_club`) REFERENCES `club` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
