-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 24 juin 2018 à 22:30
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `habbo`
--

-- --------------------------------------------------------

--
-- Structure de la table `catalogue_items`
--

CREATE TABLE `catalogue_items` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `desc` varchar(250) NOT NULL,
  `costcredits` int(11) NOT NULL,
  `costduckets` int(11) NOT NULL,
  `qtq` int(11) NOT NULL DEFAULT '100',
  `icon` int(11) NOT NULL DEFAULT '0',
  `image` int(11) NOT NULL DEFAULT '0',
  `largeur` int(11) NOT NULL COMMENT 'Nombre de case vers la droite',
  `longueur` int(11) NOT NULL COMMENT 'Nombre de case vers la gauche'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `catalogue_items`
--

INSERT INTO `catalogue_items` (`id`, `name`, `desc`, `costcredits`, `costduckets`, `qtq`, `icon`, `image`, `largeur`, `longueur`) VALUES
(1, 'Canard en plastique', 'Coin!', 1, 0, 100, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `motto` varchar(100) NOT NULL DEFAULT 'Bienvenue sur Habbo!',
  `date_enregistrement` text NOT NULL,
  `derniere_connexion` text NOT NULL,
  `avatar` text,
  `avatarhead` text,
  `points` int(11) NOT NULL DEFAULT '0',
  `amis` int(11) NOT NULL,
  `hc` int(11) NOT NULL DEFAULT '0',
  `credits` int(11) NOT NULL DEFAULT '1000',
  `duckets` int(11) NOT NULL DEFAULT '500',
  `diamonds` int(11) NOT NULL DEFAULT '10'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`ID`, `pseudo`, `pass`, `motto`, `date_enregistrement`, `derniere_connexion`, `avatar`, `avatarhead`, `points`, `amis`, `hc`, `credits`, `duckets`, `diamonds`) VALUES
(1, 'Compte Test ;)', 'AucunMDP', 'Hey !', '2018-06-03 16:21:06', '06.24.18 à 22h29', 'https://www.habbo.com.br/habbo-imaging/avatarimage?hb=image&user=Robin&headonly=0&direction=2&head_direction=2&action=&gesture=&size=m', 'https://www.habbo.com.br/habbo-imaging/avatarimage?hb=image&user=Robin&headonly=1&direction=2&head_direction=2&action=&gesture=&size=m', 0, 0, 1, 82500, 8750, 10);

-- --------------------------------------------------------

--
-- Structure de la table `minimail`
--

CREATE TABLE `minimail` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catalogue_items`
--
ALTER TABLE `catalogue_items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `minimail`
--
ALTER TABLE `minimail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `catalogue_items`
--
ALTER TABLE `catalogue_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `minimail`
--
ALTER TABLE `minimail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
