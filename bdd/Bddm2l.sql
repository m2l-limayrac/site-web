-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Mars 2017 à 10:12
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l`
--
CREATE DATABASE IF NOT EXISTS `m2l` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `m2l`;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8,
  `reponse` text CHARACTER SET utf8,
  `dat_question` date DEFAULT NULL,
  `dat_reponse` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_faq`),
  KEY `FK_Faq_id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8_general_ci;

--
-- Contenu de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `reponse`, `dat_question`, `dat_reponse`, `id_user`) VALUES
(1, 'fhfhfhr', 'rhrhrhrh', '2017-02-01', '2017-02-17', 7),
(2, 'ouais', 'non', '2017-02-02', '2017-02-17', 8);

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

DROP TABLE IF EXISTS `ligue`;
CREATE TABLE IF NOT EXISTS `ligue` (
  `id_ligue` int(11) NOT NULL AUTO_INCREMENT,
  `lib_lig` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_ligue`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8_general_ci;

--
-- Contenu de la table `ligue`
--

INSERT INTO `ligue` (`id_ligue`, `lib_lig`) VALUES
(1, 'Rugby'),
(2, 'Volley'),
(3, 'Escrime');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `mdp` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `mail` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `id_usertype` int(11) DEFAULT 1,
  `id_ligue` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `FK_User_id_usertype` (`id_usertype`),
  KEY `FK_User_id_ligue` (`id_ligue`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8_general_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `mail`, `id_usertype`, `id_ligue`) VALUES
(1, 'clement', '1234', 'clement@m2l.fr', 3, 1),
(2, 'Alexis', '1234', 'alexis@m2l.fr', 2, 1),
(3, 'Julien', '1234', 'julien@m2l.fr', 2, 2),
(4, 'toto', '1235', 'jul@m2l.fr', NULL, 2),
(5, 'Julien21', '12345', 'julien@m2l.fr', NULL, 2),
(6, 'jtjtj', 'gtgg', 'tjtj@orangr.fr', NULL, 1),
(7, 'tjt', 'tjtj', 'tjtj@orangr.fr', NULL, 1),
(8, 'uuuu', 'uuu', 'ff@gmail.com', NULL, 2),
(9, 'u(jut', 'jtjtj', 'ff@gmail.com', NULL, 2),
(10, 'zegeg', 'egegeg', 'tjtj@orangr.fr', NULL, 2),
(11, 'Xxjulien69xX2000', '12345', 'ff@gmail.com', NULL, 1),
(12, 'f', 'ggg', 'rhrh@ezgzeg', NULL, 2),
(13, '(u(', '(u(u(u', 'ff@gmail.com', NULL, 2),
(14, 'tyjutj', 'tjtj', 'rhrh@ezgzeg', NULL, 2),
(15, 'tyjutj', 'tjtj', 'rhrh@ezgzeg', NULL, 2),
(16, '(u(u', '(u(u', 'uiui@orange.fr', NULL, 2),
(17, 'jju', 'judhh', 'uiui@orange.fr', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `id_usertype` int(11) NOT NULL AUTO_INCREMENT,
  `lib_usertype` varchar(25) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usertype`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8_general_ci;

--
-- Contenu de la table `usertype`
--

INSERT INTO `usertype` (`id_usertype`, `lib_usertype`, `description`) VALUES
(1, 'user', 'simple utilisateur'),
(2, 'admin', 'contrôle sur son sport'),
(3, 'SuperAdmin', 'controle sur tous le site');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `FK_Faq_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_User_id_ligue` FOREIGN KEY (`id_ligue`) REFERENCES `ligue` (`id_ligue`),
  ADD CONSTRAINT `FK_User_id_usertype` FOREIGN KEY (`id_usertype`) REFERENCES `usertype` (`id_usertype`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
