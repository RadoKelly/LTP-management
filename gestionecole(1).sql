-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 mars 2025 à 09:57
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
-- Structure de la table `cec`
--

CREATE TABLE `cec` (
  `id` int(11) NOT NULL,
  `num_matricule` varchar(255) NOT NULL,
  `Malagasy` int(11) NOT NULL,
  `Français` int(11) NOT NULL,
  `Anglais` int(11) NOT NULL,
  `MATH` int(11) NOT NULL,
  `RDM` int(11) NOT NULL,
  `SPHYS` int(11) NOT NULL,
  `TECHNO` int(11) NOT NULL,
  `HYDRAU` int(11) NOT NULL,
  `TOPO` int(11) NOT NULL,
  `DESS` int(11) NOT NULL,
  `TP` int(11) NOT NULL,
  `MOREX` int(11) NOT NULL,
  `EPS` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `Trimestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cec`
--

INSERT INTO `cec` (`id`, `num_matricule`, `Malagasy`, `Français`, `Anglais`, `MATH`, `RDM`, `SPHYS`, `TECHNO`, `HYDRAU`, `TOPO`, `DESS`, `TP`, `MOREX`, `EPS`, `EE`, `Trimestre`) VALUES
(1, '4343151', 14, 14, 14, 14, 14, 19, 19, 9, 19, 19, 12, 12, 12, 12, '1er');

-- --------------------------------------------------------

--
-- Structure de la table `dem`
--

CREATE TABLE `dem` (
  `id` int(11) NOT NULL,
  `num_matricule` varchar(255) NOT NULL,
  `Malagasy` int(11) NOT NULL,
  `Français` int(11) NOT NULL,
  `Anglais` int(11) NOT NULL,
  `MATH` int(11) NOT NULL,
  `RDM` int(11) NOT NULL,
  `SPHYS` int(11) NOT NULL,
  `TECHNO` int(11) NOT NULL,
  `HYDRAU` int(11) NOT NULL,
  `TOPO` int(11) NOT NULL,
  `DESS` int(11) NOT NULL,
  `TP` int(11) NOT NULL,
  `MOREX` int(11) NOT NULL,
  `EPS` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `Trimestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dem`
--

INSERT INTO `dem` (`id`, `num_matricule`, `Malagasy`, `Français`, `Anglais`, `MATH`, `RDM`, `SPHYS`, `TECHNO`, `HYDRAU`, `TOPO`, `DESS`, `TP`, `MOREX`, `EPS`, `EE`, `Trimestre`) VALUES
(1, '4357878', 13, 13, 13, 13, 13, 15, 15, 15, 15, 18, 18, 18, 16, 16, '1er');

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
  `EE` int(11) NOT NULL,
  `Trimestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `el`
--

INSERT INTO `el` (`id`, `num_matricule`, `Malagasy`, `Français`, `Anglais`, `MATH`, `SPHYS`, `ELEC`, `TECHNO`, `Equipement`, `SCH_AUTO`, `DESS`, `INST`, `ESMES`, `EPS`, `EE`, `Trimestre`) VALUES
(1, '6535', 15, 15, 15, 15, 15, 15, 16, 16, 16, 16, 13, 13, 13, 13, '1er');

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
  `niveau` varchar(255) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Inscription` varchar(100) NOT NULL,
  `Observation` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id`, `nom`, `prenom`, `date_naissance`, `numero`, `matricule`, `sexe`, `secteur`, `filiere`, `niveau`, `Contact`, `Address`, `Inscription`, `Observation`) VALUES
(6, 'RATIANARIVELO', 'Radonirina', '2025-02-06', 11, '4343151', 'H', 'gc', 'cec', '1er', '0337453917', '0518 C 245 Ambalavato Sud', '2024-2025', 'Passant'),
(2, 'koto', 'koto', '2024-12-11', 10, '4357878', 'H', 'indu', 'dem', '1er', '033148565', '518 C 245 Ambalavato', '2024-2025', 'Passant'),
(3, 'test', 'testtttt', '2024-12-06', 5545454, '545454', 'H', 'gc', 'el', '1er', '0337453917', '0518 C 245 Ambalavato Sud', '2024-2025', 'Passant'),
(4, 'eleve3', 'eleve3', '2024-12-13', 22, '11112222', 'H', 'gc', 'el', '1er', '0337453917', '0518 C 245 Ambalavato Sud', '2024-2025', 'Passant'),
(5, 'eleve4', 'eleve4', '2024-12-11', 9, '1212121', 'H', 'gc', 'ob', '1er', '0337453917', '0518 C 245 Ambalavato Sud', '2024-2025', 'Passant');

-- --------------------------------------------------------

--
-- Structure de la table `fm`
--

CREATE TABLE `fm` (
  `id` int(11) NOT NULL,
  `num_matricule` varchar(255) NOT NULL,
  `Malagasy` int(11) NOT NULL,
  `Français` int(11) NOT NULL,
  `Anglais` int(11) NOT NULL,
  `MATH` int(11) NOT NULL,
  `SPHYS` int(11) NOT NULL,
  `TECHNO` int(11) NOT NULL,
  `MRDM` int(11) NOT NULL,
  `ANFAB` int(11) NOT NULL,
  `TP` int(11) NOT NULL,
  `DESS` int(11) NOT NULL,
  `EPS` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `Trimestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `g2`
--

CREATE TABLE `g2` (
  `id` int(11) NOT NULL,
  `num_matricule` varchar(255) NOT NULL,
  `Malagasy` int(11) NOT NULL,
  `Français` int(11) NOT NULL,
  `Anglais` int(11) NOT NULL,
  `MATH_G` int(11) NOT NULL,
  `Philosophie` int(11) NOT NULL,
  `Maths_fi` int(11) NOT NULL,
  `Statistiques` int(11) NOT NULL,
  `Compta` int(11) NOT NULL,
  `INFO` int(11) NOT NULL,
  `Economie` int(11) NOT NULL,
  `Droit_fiscal` int(11) NOT NULL,
  `Droit_com` int(11) NOT NULL,
  `Droit_soc` int(11) NOT NULL,
  `EPS` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `Trimestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `g2`
--

INSERT INTO `g2` (`id`, `num_matricule`, `Malagasy`, `Français`, `Anglais`, `MATH_G`, `Philosophie`, `Maths_fi`, `Statistiques`, `Compta`, `INFO`, `Economie`, `Droit_fiscal`, `Droit_com`, `Droit_soc`, `EPS`, `EE`, `Trimestre`) VALUES
(1, '23322', 12, 12, 12, 12, 12, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, '1er'),
(2, '23322', 12, 12, 12, 12, 12, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, '1er'),
(3, '23322', 12, 12, 12, 12, 12, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, '1er');

-- --------------------------------------------------------

--
-- Structure de la table `g3`
--

CREATE TABLE `g3` (
  `id` int(11) NOT NULL,
  `num_matricule` varchar(255) NOT NULL,
  `Malagasy` int(11) NOT NULL,
  `Français` int(11) NOT NULL,
  `Anglais` int(11) NOT NULL,
  `MATH_G` int(11) NOT NULL,
  `Philosophie` int(11) NOT NULL,
  `Maths_fi` int(11) NOT NULL,
  `Statistiques` int(11) NOT NULL,
  `Compta_g` int(11) NOT NULL,
  `INFO` int(11) NOT NULL,
  `Economie` int(11) NOT NULL,
  `Droit_fiscal` int(11) NOT NULL,
  `Droit_com` int(11) NOT NULL,
  `Droit_soc` int(11) NOT NULL,
  `Droit_civ` int(11) NOT NULL,
  `Tec_com` int(11) NOT NULL,
  `EPS` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `Trimestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL,
  `id_filiere` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `total_note` int(5) NOT NULL,
  `moyenne` float(10,0) NOT NULL,
  `rang` int(11) DEFAULT NULL,
  `appreciation` varchar(255) NOT NULL,
  `absence` int(11) NOT NULL,
  `retard` int(11) NOT NULL,
  `trimestre` varchar(11) NOT NULL,
  `moyenne_classe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `id_eleve`, `id_filiere`, `id_classe`, `total_note`, `moyenne`, `rang`, `appreciation`, `absence`, `retard`, `trimestre`, `moyenne_classe`) VALUES
(1, 1, 1, 0, 206, 15, 1, '', 2, 2, '1er', 0),
(2, 2, 1, 0, 211, 15, 1, '', 0, 0, '1er', 0),
(3, 5, 6, 0, 196, 14, 1, '', 0, 0, '1er', 0),
(4, 6, 1, 0, 203, 15, 1, '', 0, 0, '1er', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ob`
--

CREATE TABLE `ob` (
  `id` int(11) NOT NULL,
  `num_matricule` varchar(255) NOT NULL,
  `Malagasy` int(11) NOT NULL,
  `FRANCAIS` int(11) NOT NULL,
  `Anglais` int(11) NOT NULL,
  `MATH` int(11) NOT NULL,
  `SPHYS` int(11) NOT NULL,
  `OTS` int(11) NOT NULL,
  `TECHNO` int(11) NOT NULL,
  `RDM` int(11) NOT NULL,
  `EFAB` int(11) NOT NULL,
  `DESS` int(11) NOT NULL,
  `TP` int(11) NOT NULL,
  `GEOD` int(11) NOT NULL,
  `IE` int(11) NOT NULL,
  `EPS` int(11) NOT NULL,
  `TRIMESTRE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ob`
--

INSERT INTO `ob` (`id`, `num_matricule`, `Malagasy`, `FRANCAIS`, `Anglais`, `MATH`, `SPHYS`, `OTS`, `TECHNO`, `RDM`, `EFAB`, `DESS`, `TP`, `GEOD`, `IE`, `EPS`, `TRIMESTRE`) VALUES
(1, '6535', 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, '3em'),
(2, '6535', 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, '3em'),
(3, '6535', 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, '3em'),
(4, '6535', 19, 19, 19, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 13, '3em'),
(5, '6535', 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, '1er'),
(6, '1212121', 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, '1er'),
(7, '1212121', 12, 12, 12, 12, 12, 19, 19, 19, 19, 19, 17, 17, 17, 15, '1er');

-- --------------------------------------------------------

--
-- Structure de la table `om`
--

CREATE TABLE `om` (
  `id` int(11) NOT NULL,
  `num_matricule` varchar(255) NOT NULL,
  `Malagasy` int(11) NOT NULL,
  `Français` int(11) NOT NULL,
  `Anglais` int(11) NOT NULL,
  `MATH` int(11) NOT NULL,
  `SPHYS` int(11) NOT NULL,
  `TECHNO` int(11) NOT NULL,
  `RDM` int(11) NOT NULL,
  `ANFAB` int(11) NOT NULL,
  `TRC` int(11) NOT NULL,
  `TP` int(11) NOT NULL,
  `DESS` int(11) NOT NULL,
  `EPS` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `Trimestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Index pour la table `cec`
--
ALTER TABLE `cec`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dem`
--
ALTER TABLE `dem`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `fm`
--
ALTER TABLE `fm`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `g2`
--
ALTER TABLE `g2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `g3`
--
ALTER TABLE `g3`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`);

--
-- Index pour la table `ob`
--
ALTER TABLE `ob`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `om`
--
ALTER TABLE `om`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cec`
--
ALTER TABLE `cec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `dem`
--
ALTER TABLE `dem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `el`
--
ALTER TABLE `el`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `fm`
--
ALTER TABLE `fm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `g2`
--
ALTER TABLE `g2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `g3`
--
ALTER TABLE `g3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ob`
--
ALTER TABLE `ob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `om`
--
ALTER TABLE `om`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
