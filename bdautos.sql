-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 17 sep. 2023 à 10:47
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdautos`
--

-- --------------------------------------------------------

--
-- Structure de la table `autoform`
--

CREATE TABLE `autoform` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `codepostal` varchar(100) DEFAULT NULL,
  `departement` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `autoform`
--

INSERT INTO `autoform` (`id`, `nom`, `prenom`, `telephone`, `message`, `ville`, `codepostal`, `departement`) VALUES
(11, 'POULAIN', 'OLIVIER', '0629111535', 'BONJOUR AUTOFORM  C EST OLIVIER POULAIN', 'LESTREVET', '29550', 'FINISTERE'),
(12, 'POULAIN', 'OLIVIER', '0629111535', 'BONJOUR AUTOFORM  C EST OLIVIER POULAIN', 'LESTREVET', '29550', 'FINISTERE'),
(13, 'POULAIN', 'OLIVIER', '0629111535', 'BONJOUR AUTOFORM  C EST OLIVIER POULAIN', 'LESTREVET', '29550', 'FINISTERE'),
(14, 'POULAIN', 'OLIVIER', '0629111535', 'BONJOUR AUTOFORM  C EST OLIVIER POULAIN', 'LESTREVET', '29550', 'FINISTERE'),
(15, 'POULAIN', 'OLIVIER', '0629111535', 'BONJOUR AUTOFORM  C EST OLIVIER POULAIN', 'LESTREVET', '29550', 'BRETAGNE'),
(16, 'POUL', 'O', '0629111535', 'BONJOUR POULAIN', 'MENEZ', '29550', 'BRETAGNE'),
(17, 'POULAIN', 'MICHEL', '0628132676', 'C EST BIEN RECU', 'DRAGUIGNAN', '83300', 'VAR'),
(18, 'poulain', 'olivier', '0629111535', 'TEST EFFICACE DU JOUR', 'GISY', '89140', 'YONNE'),
(19, 'poulain ', 'olivier', '0629111535', 'TEST EFFICACE DU JOUR REQUIRE', 'GISY LES NOBLES', '89140', '89');

-- --------------------------------------------------------

--
-- Structure de la table `autopost`
--

CREATE TABLE `autopost` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_immatriculation` date DEFAULT NULL,
  `Marque` varchar(255) DEFAULT NULL,
  `Modele` varchar(255) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Telephone` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `marque` text DEFAULT NULL,
  `modele` text DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `couleur` text DEFAULT NULL,
  `usermail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `marque`, `modele`, `prix`, `couleur`, `usermail`) VALUES
(18, 'marque', 'modele', 0.00, 'couleur', 'usermail'),
(19, 'PORSCHE', '911', 234500.00, 'ROUGE', 'poulain@outlook.com'),
(20, 'marque', 'modele', 0.00, 'couleur', 'usermail'),
(21, 'PORSCHE', '911', 239500.00, 'ROUGE ET BLANC', 'poulain@outlook.fr'),
(22, 'Porsche', '911 Turbo s Cabriolet', 247600.00, 'grise', 'o.poulain@outlook.com'),
(23, 'Porsche', '911 Turbo s Cabriolet', 247600.00, 'rouge', 'isabelle@hotmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `Id` int(11) UNSIGNED NOT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`Id`, `prenom`, `email`) VALUES
(1, 'prenom', 'email'),
(2, 'prenom', 'email'),
(3, 'prenom', 'email'),
(4, 'prenom', 'email'),
(5, 'prenom', 'email'),
(6, 'prenom', 'email'),
(7, 'prenom', 'email'),
(8, 'prenom', 'email');

-- --------------------------------------------------------

--
-- Structure de la table `usersname`
--

CREATE TABLE `usersname` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Adresse` varchar(70) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Codepostal` int(10) UNSIGNED NOT NULL,
  `Pays` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateInscription` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Marque` varchar(30) NOT NULL,
  `Modele` varchar(30) NOT NULL,
  `Prix` decimal(10,2) NOT NULL,
  `Couleur` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `usersname`
--

INSERT INTO `usersname` (`Id`, `Lastname`, `Firstname`, `Adresse`, `Ville`, `Codepostal`, `Pays`, `Email`, `DateInscription`, `Marque`, `Modele`, `Prix`, `Couleur`) VALUES
(1, 'lastname', 'firstname', 'adresse', 'ville', 0, 'pays', 'mail', '0000-00-00 00:00:00', 'marque', 'modele', 0.00, 'couleur'),
(5, 'lastname', 'firstname', 'adresse', 'ville', 0, 'pays', 'email', '0000-00-00 00:00:00', 'marque', 'modele', 0.00, 'couleur'),
(9, 'lastname', 'firstname', 'adresse', 'ville', 0, 'pays', 'NULL', '0000-00-00 00:00:00', 'marque', 'modele', 0.00, 'couleur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `autoform`
--
ALTER TABLE `autoform`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `autopost`
--
ALTER TABLE `autopost`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `usersname`
--
ALTER TABLE `usersname`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Mail` (`Email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autoform`
--
ALTER TABLE `autoform`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `usersname`
--
ALTER TABLE `usersname`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;