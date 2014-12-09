-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 08 Décembre 2014 à 14:54
-- Version du serveur: 5.5.37
-- Version de PHP: 5.4.6-1ubuntu1.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `margo`
--

-- --------------------------------------------------------

--
-- Structure de la table `ANNEESCOL`
--

CREATE TABLE IF NOT EXISTS `ANNEESCOL` (
  `ANNEESCOL` char(9) NOT NULL,
  PRIMARY KEY (`ANNEESCOL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ANNEESCOL`
--

INSERT INTO `ANNEESCOL` (`ANNEESCOL`) VALUES
('2008-2009'),
('2009-2010'),
('2010-2011'),
('2011-2012'),
('2012-2013'),
('2013-2014'),
('2014-2015');

-- --------------------------------------------------------

--
-- Structure de la table `CLASSE`
--

CREATE TABLE IF NOT EXISTS `CLASSE` (
  `NUMCLASSE` char(32) NOT NULL,
  `NUMFILIERE` int(11) NOT NULL,
  `NOMCLASSE` varchar(128) NOT NULL,
  PRIMARY KEY (`NUMCLASSE`),
  KEY `CLASSE_IBFK_2` (`NUMFILIERE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CLASSE`
--

INSERT INTO `CLASSE` (`NUMCLASSE`, `NUMFILIERE`, `NOMCLASSE`) VALUES
('1SIOA', 4, '1ére année BTS Service Informatique auxOrganisation'),
('1SIOB', 4, '1ére année BTS Service Informatique auxOrganisation'),
('2SISR', 4, '2ème année BTS Service Informatique auxOrganisation'),
('2SLAM', 4, '2ème année BTS Service Informatique auxOrganisation');

-- --------------------------------------------------------

--
-- Structure de la table `FILIERE`
--

CREATE TABLE IF NOT EXISTS `FILIERE` (
  `NUMFILIERE` int(11) NOT NULL,
  `LIBELLEFILIERE` varchar(128) NOT NULL,
  PRIMARY KEY (`NUMFILIERE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `FILIERE`
--

INSERT INTO `FILIERE` (`NUMFILIERE`, `LIBELLEFILIERE`) VALUES
(1, 'Management des Unités Commerciales'),
(2, 'Comptabilité et Gestion des Organisations'),
(3, 'Informatique de Gestion'),
(4, 'Services Informatiques aux Organisations'),
(5, 'Diplôme de Comptabilité et de Gestion'),
(6, 'Formation Complémentaire d''Initiative Locale');

-- --------------------------------------------------------

--
-- Structure de la table `PERSONNE`
--

CREATE TABLE IF NOT EXISTS `PERSONNE` (
  `IDPERSONNE` int(11) NOT NULL AUTO_INCREMENT,
  `IDROLE` smallint(6) NOT NULL,
  `CIVILITE` char(32) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `NUM_TEL` char(13) NOT NULL,
  `ADRESSE_MAIL` varchar(30) NOT NULL,
  `NUM_TEL_MOBILE` char(15) DEFAULT NULL,
  `LOGINUTILISATEUR` varchar(128) DEFAULT NULL,
  `MDPUTILISATEUR` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`IDPERSONNE`),
  KEY `PERSONNE_IBFK_2` (`IDROLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `PERSONNE`
--

INSERT INTO `PERSONNE` (`IDPERSONNE`, `IDROLE`, `CIVILITE`, `NOM`, `PRENOM`, `NUM_TEL`, `ADRESSE_MAIL`, `NUM_TEL_MOBILE`, `LOGINUTILISATEUR`, `MDPUTILISATEUR`) VALUES
(1, 1, 'Monsieur', 'Bourgeois', 'Nicolas', '0240809080', 'admin-gestage@la-joliverie.com', NULL, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 4, 'Mr', 'DEMARLY', 'thomas', '0600000000', 'tdemarl@gmail.com', '0600000000', 'tdemarly', 'ff289fa7cd0ed8339f20a43fa5f032d32fedd1d8'),
(13, 5, 'Monsieur', 'Jobs', 'Steve', '0000000000', 'test1@gmail.com', '', 'etudiant', '2df87b6c0bfbdb58b91c7a50ac9ca42b086db583'),
(14, 3, 'Monsieur', 'Beauvais', 'Jean pierre', '0000000000', 'test@mail.fr', '0000000000', 'test', '51abb9636078defbf888d8457a7c76f85c8f114c'),
(16, 4, 'Monsieur', 'Bouchet', 'Kevin', '0000000000', 'enseignant@live.fr', '0685635853', 'enseignant', '895a0cf6ba52053acfc853c78983eb5f6919e111');

-- --------------------------------------------------------

--
-- Structure de la table `PROMOTION`
--

CREATE TABLE IF NOT EXISTS `PROMOTION` (
  `ANNEESCOL` char(9) NOT NULL,
  `IDPERSONNE` int(11) NOT NULL,
  `NUMCLASSE` char(32) NOT NULL,
  PRIMARY KEY (`ANNEESCOL`,`IDPERSONNE`,`NUMCLASSE`),
  KEY `PROMOTION_IBFK_4` (`IDPERSONNE`),
  KEY `PROMOTION_IBFK_5` (`NUMCLASSE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ROLE`
--

CREATE TABLE IF NOT EXISTS `ROLE` (
  `IDROLE` smallint(6) NOT NULL,
  `RANG` smallint(6) NOT NULL,
  `LIBELLE` varchar(30) NOT NULL,
  PRIMARY KEY (`IDROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ROLE`
--

INSERT INTO `ROLE` (`IDROLE`, `RANG`, `LIBELLE`) VALUES
(0, 0, 'Autre'),
(1, 1, 'Administrateur'),
(2, 2, 'Secrétaire'),
(3, 3, 'Professeur'),
(4, 4, 'Etudiant'),
(5, 5, 'MaitreDeStage');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CLASSE`
--
ALTER TABLE `CLASSE`
  ADD CONSTRAINT `CLASSE_IBFK_2` FOREIGN KEY (`NUMFILIERE`) REFERENCES `FILIERE` (`NUMFILIERE`);

--
-- Contraintes pour la table `PERSONNE`
--
ALTER TABLE `PERSONNE`
  ADD CONSTRAINT `PERSONNE_IBFK_2` FOREIGN KEY (`IDROLE`) REFERENCES `ROLE` (`IDROLE`);

--
-- Contraintes pour la table `PROMOTION`
--
ALTER TABLE `PROMOTION`
  ADD CONSTRAINT `PROMOTION_IBFK_3` FOREIGN KEY (`ANNEESCOL`) REFERENCES `ANNEESCOL` (`ANNEESCOL`),
  ADD CONSTRAINT `PROMOTION_IBFK_4` FOREIGN KEY (`IDPERSONNE`) REFERENCES `PERSONNE` (`IDPERSONNE`),
  ADD CONSTRAINT `PROMOTION_IBFK_5` FOREIGN KEY (`NUMCLASSE`) REFERENCES `CLASSE` (`NUMCLASSE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
