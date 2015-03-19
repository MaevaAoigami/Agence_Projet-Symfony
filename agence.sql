-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 19 Mars 2015 à 15:17
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `agence`
--

-- --------------------------------------------------------

--
-- Structure de la table `AdressesUtilisateurs`
--

CREATE TABLE `AdressesUtilisateurs` (
`id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codePostal` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `complementInformation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Categories`
--

CREATE TABLE `Categories` (
`id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Categories`
--

INSERT INTO `Categories` (`id`, `Name`) VALUES
(1, 'ETOILE'),
(2, 'BALLERINE'),
(3, 'PREMIERE DANSEUSE');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
`id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `valider` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `reference` int(11) NOT NULL,
  `commande` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `utilisateur_id`, `valider`, `date`, `reference`, `commande`) VALUES
(1, 7, 1, '2015-03-17 12:09:22', 1, 'a:7:{s:3:"tva";a:1:{s:3:"%20";d:249.80000000000001136868377216160297393798828125;}s:8:"danseuse";a:1:{i:5;a:4:{s:9:"reference";s:15:"ÉMILIE COZETTE";s:8:"quantite";i:1;s:6:"prixHT";d:1246;s:7:"prixTTC";d:1495.799999999999954525264911353588104248046875;}}s:9:"livraison";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:11:"facturation";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:6:"prixHT";d:1246;s:7:"prixTTC";d:1495.799999999999954525264911353588104248046875;s:5:"token";s:40:"9310c603964dccc01abf4c7e4f1162008558ee9e";}'),
(2, 7, 1, '2015-03-18 18:29:28', 2, 'a:7:{s:3:"tva";a:1:{s:3:"%20";d:3463.3000000000001818989403545856475830078125;}s:8:"danseuse";a:3:{i:3;a:4:{s:9:"reference";s:18:"ELEONORA ABBAGNATO";s:8:"quantite";s:1:"7";s:6:"prixHT";d:1235;s:7:"prixTTC";d:1482.589999999999918145476840436458587646484375;}i:5;a:4:{s:9:"reference";s:15:"ÉMILIE COZETTE";s:8:"quantite";i:1;s:6:"prixHT";d:1246;s:7:"prixTTC";d:1495.799999999999954525264911353588104248046875;}i:6;a:4:{s:9:"reference";s:15:"AURÉLIE DUPONT";s:8:"quantite";s:1:"8";s:6:"prixHT";d:923;s:7:"prixTTC";d:1108.0399999999999636202119290828704833984375;}}s:9:"livraison";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:11:"facturation";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:6:"prixHT";d:17275;s:7:"prixTTC";d:20738.29999999999927240423858165740966796875;s:5:"token";s:40:"5eeab54f2a5631608c6545711bcbcda5381f07a2";}'),
(3, 7, 1, '2015-03-19 09:05:40', 3, 'a:7:{s:3:"tva";a:1:{s:3:"%20";d:1295.299999999999954525264911353588104248046875;}s:8:"danseuse";a:1:{i:6;a:4:{s:9:"reference";s:15:"AURÉLIE DUPONT";s:8:"quantite";s:1:"7";s:6:"prixHT";d:923;s:7:"prixTTC";d:1108.0399999999999636202119290828704833984375;}}s:9:"livraison";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:11:"facturation";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:6:"prixHT";d:6461;s:7:"prixTTC";d:7756.3000000000001818989403545856475830078125;s:5:"token";s:40:"6191664e02f22f9c813de813331249c31536895c";}'),
(4, 7, 1, '2015-03-19 10:09:10', 4, 'a:7:{s:3:"tva";a:1:{s:3:"%20";d:1966.509999999999990905052982270717620849609375;}s:8:"danseuse";a:2:{i:3;a:4:{s:9:"reference";s:18:"ELEONORA ABBAGNATO";s:8:"quantite";s:1:"4";s:6:"prixHT";d:1235;s:7:"prixTTC";d:1482.589999999999918145476840436458587646484375;}i:7;a:4:{s:9:"reference";s:17:"DOROTHÉE GILBERT";s:8:"quantite";s:1:"3";s:6:"prixHT";d:1623;s:7:"prixTTC";d:1948.3800000000001091393642127513885498046875;}}s:9:"livraison";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:11:"facturation";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:6:"prixHT";d:9809;s:7:"prixTTC";d:11775.510000000000218278728425502777099609375;s:5:"token";s:40:"828370e7da0276980b3ab7ff16bb8af3ee782655";}'),
(5, 7, 1, '2015-03-19 11:12:48', 5, 'a:7:{s:3:"tva";a:1:{s:3:"%20";d:3240.760000000000218278728425502777099609375;}s:8:"danseuse";a:2:{i:3;a:4:{s:9:"reference";s:18:"ELEONORA ABBAGNATO";s:8:"quantite";s:1:"3";s:6:"prixHT";d:1235;s:7:"prixTTC";d:1482.589999999999918145476840436458587646484375;}i:5;a:4:{s:9:"reference";s:15:"ÉMILIE COZETTE";s:8:"quantite";s:2:"10";s:6:"prixHT";d:1246;s:7:"prixTTC";d:1495.799999999999954525264911353588104248046875;}}s:9:"livraison";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:11:"facturation";a:7:{s:6:"prenom";s:9:"Charlotte";s:3:"nom";s:8:"Campiche";s:9:"telephone";s:10:"0659411835";s:7:"adresse";s:20:"12 rue pierre lamere";s:2:"cp";s:5:"92300";s:5:"ville";s:16:"Levallois-Perret";s:4:"pays";s:6:"France";}s:6:"prixHT";d:16165;s:7:"prixTTC";d:19405.75999999999839928932487964630126953125;s:5:"token";s:40:"bba836b138b632eeff6197b112c44766baaa386d";}');

-- --------------------------------------------------------

--
-- Structure de la table `Contact`
--

CREATE TABLE `Contact` (
`id` int(11) NOT NULL,
  `Nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Message` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `danseuses`
--

CREATE TABLE `danseuses` (
`id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `tva_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `valider` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `danseuses`
--

INSERT INTO `danseuses` (`id`, `image_id`, `tva_id`, `categories_id`, `utilisateur_id`, `nom`, `description`, `prix`, `disponible`, `valider`) VALUES
(3, 3, 1, 1, 7, 'ELEONORA ABBAGNATO', 'Un danseur est nommé danseur étoile à l''issue d''une représentation sur scène, en tant que premier danseur.\r\n\r\nPour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l''Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.\r\n\r\nEn cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l''issue de ce concours.\r\n\r\nDans la première étape, passé le concours d''entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l''Opéra de Paris comme stagiaire.', 1235, 1, 1),
(4, 4, 1, 3, 7, 'AMANDINE ALBISSON', 'Un danseur est nommé danseur étoile à l''issue d''une représentation sur scène, en tant que premier danseur.\r\n\r\nPour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l''Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.\r\n\r\nEn cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l''issue de ce concours.\r\n\r\nDans la première étape, passé le concours d''entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l''Opéra de Paris comme stagiaire.', 425, 1, 0),
(5, 5, 1, 1, 7, 'ÉMILIE COZETTE', 'Un danseur est nommé danseur étoile à l''issue d''une représentation sur scène, en tant que premier danseur.\r\n\r\nPour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l''Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.\r\n\r\nEn cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l''issue de ce concours.\r\n\r\nDans la première étape, passé le concours d''entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l''Opéra de Paris comme stagiaire.', 1246, 1, 0),
(6, 6, 1, 1, 7, 'AURÉLIE DUPONT', 'Un danseur est nommé danseur étoile à l''issue d''une représentation sur scène, en tant que premier danseur.\r\n\r\nPour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l''Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.\r\n\r\nEn cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l''issue de ce concours.\r\n\r\nDans la première étape, passé le concours d''entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l''Opéra de Paris comme stagiaire.', 923, 1, 0),
(7, 7, 1, 1, 7, 'DOROTHÉE GILBERT', 'Un danseur est nommé danseur étoile à l''issue d''une représentation sur scène, en tant que premier danseur.\r\n\r\nPour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l''Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.\r\n\r\nEn cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l''issue de ce concours.\r\n\r\nDans la première étape, passé le concours d''entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l''Opéra de Paris comme stagiaire.', 1623, 1, 0),
(8, 8, 1, 3, 7, 'MARIE-AGNÈS GILLOT', 'Un danseur est nommé danseur étoile à l''issue d''une représentation sur scène, en tant que premier danseur.\r\n\r\nPour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l''Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.\r\n\r\nEn cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l''issue de ce concours.\r\n\r\nDans la première étape, passé le concours d''entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l''Opéra de Paris comme stagiaire.', 734, 1, 0),
(9, 9, 1, 1, 7, 'VAGINA TURLUTOVA', 'Un danseur est nommé danseur étoile à l''issue d''une représentation sur scène, en tant que premier danseur.\r\n\r\nPour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l''Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.\r\n\r\nEn cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l''issue de ce concours.\r\n\r\nDans la première étape, passé le concours d''entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l''Opéra de Paris comme stagiaire.', 2513, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
`id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateHour` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`id`, `image_id`, `Name`, `Location`, `DateHour`) VALUES
(1, 1, 'KAGUYAHIME', 'OPÉRA GARNIER', '2015-02-17 19:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `evenements_danseuses`
--

CREATE TABLE `evenements_danseuses` (
  `evenements_id` int(11) NOT NULL,
  `danseuses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `evenements_danseuses`
--

INSERT INTO `evenements_danseuses` (`evenements_id`, `danseuses_id`) VALUES
(1, 3),
(1, 4),
(1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `name`, `path`) VALUES
(1, 'ELEONORA ABBAGNATO', NULL),
(2, 'AMANDINE ALBISSON', '80fce9dfa1de3beef37d3646d492d4c3b61fccee.jpeg'),
(3, 'ELEONORA ABBAGNATO', 'dfbaf0b3308a66eff8e22384e1e6845b77332e30.jpeg'),
(4, 'AMANDINE ALBISSON', '8e4f9b21ad527c5498ae7850d0060ff9d19709db.jpeg'),
(5, 'ÉMILIE COZETTE', '1a284c2d2d51616d43ca49398cf2e88104b91243.jpeg'),
(6, 'AURÉLIE DUPONT', '745721ff9e1572a3986b5ae5c7369a7d1aeaeadf.jpeg'),
(7, 'DOROTHÉE GILBERT', '64cb7014665f9b852266e286c8654a0977ef2b03.jpeg'),
(8, 'MARIE-AGNÈS GILLOT', 'dd627c543a99de4a2bf473c48de8cdd1af74ebad.jpeg'),
(9, 'VAGINA TURLUTOVA', 'fe664388614ce3180cad096cfd8d8143de4c4cb6.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `MediaEvent`
--

CREATE TABLE `MediaEvent` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `MediaEvent`
--

INSERT INTO `MediaEvent` (`id`, `name`, `path`) VALUES
(1, 'KAGUYAHIME', '891ee91c2fb6a6a340de7839f7d244952fd4a7dc.jpeg'),
(2, 'CARMEN DE BIZET', '7e6fe934875da1f00fd6f10a4d6e086f36c964e0.jpeg'),
(3, 'jhgmoqihgperighre', '846f47cf51f03212276c617e19f0eaba60a4245a.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `Tva`
--

CREATE TABLE `Tva` (
`id` int(11) NOT NULL,
  `multiplicate` double NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Tva`
--

INSERT INTO `Tva` (`id`, `multiplicate`, `name`, `valeur`) VALUES
(1, 0.833, 'TVA 20%', '20');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurAdresse`
--

CREATE TABLE `utilisateurAdresse` (
`id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateurAdresse`
--

INSERT INTO `utilisateurAdresse` (`id`, `utilisateur_id`, `nom`, `prenom`, `telephone`, `adresse`, `cp`, `ville`, `pays`) VALUES
(1, 7, 'Campiche', 'Charlotte', '0659411835', '12 rue pierre lamere', '92300', 'Levallois-Perret', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(2, 'Louis', 'louis', 'louis@gmail.com', 'louis@gmail.com', 1, 'gbp75u9kirk08g4cwk84wg04w440cgs', 'eYO4tDbrRSqvRrkY8q55DjHDOeu67MX01aDtx/rSaoLwx2B6iBqC/0wN16xZJi6YyzNwFiYG6gaiQc2Wm8yElg==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(3, 'Marco', 'marco', 'marco@gmail.com', 'marco@gmail.com', 1, '46fqk17s5yckkokccgcwo4ogws4sc0c', 'pVe+YAnpYtePVJTtHPQf39lb6FsVJRgIUu/mkLQH88cX+qgCAy4PDmEvUgmNKswynxNlMjb1USrOKyO0T/9fxQ==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(4, 'Janette', 'janette', 'janette@gmail.com', 'janette@gmail.com', 1, '5eu9em2fs34swss0g0kwkcc4oskwg08', 'HrL/0DYqZIIU+pQIl8dg+0RZ4/RCJi+7X2OkSw9rDi1KbTdYk9PqFJ1fjcx9CeqJHNlXxkN45bZ/wRs45o4jpw==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(5, 'Paul', 'paul', 'paul@gmail.com', 'paul@gmail.com', 1, 'g1mhemwwa348w44gkos8wsos0skg4sc', 'j//n/aSa4Yncv8cIF6/PzhTRoYx5aj7eCJw/pcNu1krFI4xdzIzvX5urvZLU87GRmWzDAlvtMHJMVZbA33Nd9Q==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(6, 'Marie', 'marie', 'marie@gmail.com', 'marie@gmail.com', 1, '7pyhlzd3l88w0wkkooog04gk8gg4ckk', 'Ib1pVWTPDo1PKBB/fltAJvyVT3NfWMoSL/qn0Coddyulb9LhaRUduY1zWDaDi5x5jTdKhIyVTXFrkHcpR1Kajw==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(7, 'Playerone75', 'playerone75', 'craig.eric75@gmail.com', 'craig.eric75@gmail.com', 1, 't5zjw848ag0kgsk48gsw48o0wgk8g8c', 'AOX/npRv+SpEHJDeJtfbFaIS2msfmtT6NIBB4XviGL1cfx8pfK5tl2oOCXiv5vj3ZguVWxeJOI7IGhc+YMUe1g==', '2015-03-19 13:53:03', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `AdressesUtilisateurs`
--
ALTER TABLE `AdressesUtilisateurs`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Categories`
--
ALTER TABLE `Categories`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_6EEAA67DFB88E14F` (`utilisateur_id`);

--
-- Index pour la table `Contact`
--
ALTER TABLE `Contact`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `danseuses`
--
ALTER TABLE `danseuses`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_27FAED0A3DA5256D` (`image_id`), ADD KEY `IDX_27FAED0A4D79775F` (`tva_id`), ADD KEY `IDX_27FAED0AA21214B7` (`categories_id`), ADD KEY `IDX_27FAED0AFB88E14F` (`utilisateur_id`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_E10AD4003DA5256D` (`image_id`);

--
-- Index pour la table `evenements_danseuses`
--
ALTER TABLE `evenements_danseuses`
 ADD PRIMARY KEY (`evenements_id`,`danseuses_id`), ADD KEY `IDX_179AED4963C02CD4` (`evenements_id`), ADD KEY `IDX_179AED49DD6ED662` (`danseuses_id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `MediaEvent`
--
ALTER TABLE `MediaEvent`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Tva`
--
ALTER TABLE `Tva`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurAdresse`
--
ALTER TABLE `utilisateurAdresse`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_947CEC82FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_497B315E92FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_497B315EA0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `AdressesUtilisateurs`
--
ALTER TABLE `AdressesUtilisateurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Categories`
--
ALTER TABLE `Categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Contact`
--
ALTER TABLE `Contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `danseuses`
--
ALTER TABLE `danseuses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `MediaEvent`
--
ALTER TABLE `MediaEvent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Tva`
--
ALTER TABLE `Tva`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateurAdresse`
--
ALTER TABLE `utilisateurAdresse`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
ADD CONSTRAINT `FK_6EEAA67DFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `danseuses`
--
ALTER TABLE `danseuses`
ADD CONSTRAINT `FK_27FAED0AFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`),
ADD CONSTRAINT `FK_27FAED0A3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media` (`id`),
ADD CONSTRAINT `FK_27FAED0A4D79775F` FOREIGN KEY (`tva_id`) REFERENCES `Tva` (`id`),
ADD CONSTRAINT `FK_27FAED0AA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `Categories` (`id`);

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
ADD CONSTRAINT `FK_E10AD4003DA5256D` FOREIGN KEY (`image_id`) REFERENCES `MediaEvent` (`id`);

--
-- Contraintes pour la table `evenements_danseuses`
--
ALTER TABLE `evenements_danseuses`
ADD CONSTRAINT `FK_179AED49DD6ED662` FOREIGN KEY (`danseuses_id`) REFERENCES `danseuses` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `FK_179AED4963C02CD4` FOREIGN KEY (`evenements_id`) REFERENCES `evenements` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateurAdresse`
--
ALTER TABLE `utilisateurAdresse`
ADD CONSTRAINT `FK_947CEC82FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
