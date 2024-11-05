-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 oct. 2024 à 09:31
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `el`
--

CREATE TABLE `el` (
  `id` int(11) NOT NULL,
  `num_matricule` varchar(255) NOT NULL,
  `Malagasy` int(11) NOT NULL,
  `Français` int(11) NOT NULL,
  `Anglais` int(11) NOT NULL,
  `MATH` int(11) NOT NULL,
  `SPHYS` int(11) NOT NULL,
  `ELEC` int(11) NOT NULL,
  `TECHNO` int(11) NOT NULL,
  `Equipement` int(11) NOT NULL,
  `SCH_AUTO` int(11) NOT NULL,
  `DESS` int(11) NOT NULL,
  `INST` int(11) NOT NULL,
  `ESMES` int(11) NOT NULL,
  `EPS` int(11) NOT NULL,
  `EE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `el`
--

INSERT INTO `el` (`id`, `num_matricule`, `Malagasy`, `Français`, `Anglais`, `MATH`, `SPHYS`, `ELEC`, `TECHNO`, `Equipement`, `SCH_AUTO`, `DESS`, `INST`, `ESMES`, `EPS`, `EE`) VALUES
(13, '11111', 12, 13, 15, 30, 45, 45, 15, 45, 45, 12, 13, 23, 13, 12);

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `numero` int(4) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `sexe` varchar(6) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL,
  `id_filiere` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `moyenne` double NOT NULL,
  `rang` int(11) DEFAULT NULL,
  `appreciation` varchar(255) NOT NULL,
  `absence` int(11) NOT NULL,
  `retard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `id_eleve`, `id_filiere`, `id_classe`, `moyenne`, `rang`, `appreciation`, `absence`, `retard`) VALUES
(7, 3, 13, 0, 8.2439024390244, 1, 'aaaaa', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `uti` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `uti`, `mdp`) VALUES
(1, 'admin', 'admin'),
(2, 'user1', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `el`
--
ALTER TABLE `el`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `el`
--
ALTER TABLE `el`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
