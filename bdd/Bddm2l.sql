-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Mars 2017 à 12:59
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

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `mdp` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `mail` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `id_usertype` int(11) DEFAULT '1',
  `id_ligue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(17, 'jju', 'judhh', 'uiui@orange.fr', NULL, 1),
(18, 'alexs', '12345', 'jefiozjzep@gmail.com', NULL, 1),
(19, 'alex', '1234', 'laplap@gmail.com', NULL, 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_User_id_usertype` (`id_usertype`),
  ADD KEY `FK_User_id_ligue` (`id_ligue`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_User_id_ligue` FOREIGN KEY (`id_ligue`) REFERENCES `ligue` (`id_ligue`),
  ADD CONSTRAINT `FK_User_id_usertype` FOREIGN KEY (`id_usertype`) REFERENCES `usertype` (`id_usertype`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
