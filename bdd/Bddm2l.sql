-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 24 Mars 2017 à 09:56
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
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question` text,
  `reponse` text,
  `dat_question` date DEFAULT NULL,
  `dat_reponse` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `reponse`, `dat_question`, `dat_reponse`, `id_user`) VALUES
(1, 'fhfhfhrggggggggaaaaaaa', 'rhrhrhrhgggggggggaaaaaaa', '2017-02-01', '2017-02-17', 7),
(2, 'ouais', 'nondfe""', '2017-02-02', '2017-02-17', 8),
(3, 'd"Ã©fze', NULL, '2017-03-10', NULL, 5),
(4, 'Ã§a marche', NULL, '2017-03-10', NULL, 5),
(5, 'fezfzefzefzezef', NULL, '2017-06-24', NULL, 2),
(6, 'ceci est ma question', NULL, '2015-06-15', NULL, 2),
(7, 'azdzdazdaz', NULL, '2017-03-17', NULL, 1),
(8, 'bonjour ?', NULL, '2017-03-24', NULL, 19);

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

CREATE TABLE `ligue` (
  `id_ligue` int(11) NOT NULL,
  `lib_lig` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

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

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(25) DEFAULT NULL,
  `mdp` varchar(25) DEFAULT NULL,
  `mail` varchar(25) DEFAULT NULL,
  `id_usertype` int(11) DEFAULT '1',
  `id_ligue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

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
(19, 'alex', '1234', 'laplap@gmail.com', NULL, 3),
(20, 'petitest', '1234', 'alxeis@mail.fr', 3, 2),
(21, 'lala', '1234', 'lala@alla.com', 1, 2),
(22, 'momo', '1234', 'gfezfze@fezfz.com', 1, 1),
(23, 'lolop', '1234', 'lolop@lolop.fr', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

CREATE TABLE `usertype` (
  `id_usertype` int(11) NOT NULL,
  `lib_usertype` varchar(25) DEFAULT NULL,
  `description` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `usertype`
--

INSERT INTO `usertype` (`id_usertype`, `lib_usertype`, `description`) VALUES
(1, 'user', 'simple utilisateur'),
(2, 'admin', 'contrôle sur son sport'),
(3, 'SuperAdmin', 'controle sur tous le site');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`),
  ADD KEY `FK_Faq_id_user` (`id_user`);

--
-- Index pour la table `ligue`
--
ALTER TABLE `ligue`
  ADD PRIMARY KEY (`id_ligue`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_User_id_usertype` (`id_usertype`),
  ADD KEY `FK_User_id_ligue` (`id_ligue`);

--
-- Index pour la table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id_usertype`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `ligue`
--
ALTER TABLE `ligue`
  MODIFY `id_ligue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id_usertype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
