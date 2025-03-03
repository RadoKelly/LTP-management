-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 nov. 2024 à 14:44
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
  `EE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cec`
--

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
  `EE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dem`
--

INSERT INTO `dem` (`id`, `num_matricule`, `Malagasy`, `Français`, `Anglais`, `MATH`, `RDM`, `SPHYS`, `TECHNO`, `HYDRAU`, `TOPO`, `DESS`, `TP`, `MOREX`, `EPS`, `EE`) VALUES
(14, '488768', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(15, '488768', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14),
(16, '488768', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14),
(17, '488768', 88, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8),
(18, '488768', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, '488768', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, '488768', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, '488768', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(22, '2', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9);

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
(13, '11111', 12, 13, 15, 30, 45, 45, 15, 45, 45, 12, 13, 23, 13, 12),
(14, '4535', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(15, '4535', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(16, '4535', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id`, `nom`, `prenom`, `date_naissance`, `numero`, `matricule`, `sexe`, `secteur`, `filiere`, `niveau`) VALUES
(1, 'rado', 'nirinaiii', '2024-10-02', 17, '4535', 'H', 'genie civile', 'el', '1er'),
(2, 'jjjj', 'ddd', '2024-10-02', 3, '455', 'H', 'genie civile', 'el', '1er'),
(3, 'jean', 'bas', '2024-11-15', 2, '488768', 'H', 'ter', 'dem', '1er'),
(4, 'kotog3', 'kotog3', '1932-01-06', 2, '46546', 'H', 'ter', 'g3', '3em'),
(5, 'kotoOM', 'kotoOM', '2008-11-07', 5, '45454', 'H', 'indu', 'om', '3em'),
(6, 'kotoCEC', 'kotoCEC', '1997-11-07', 2, '2', 'H', 'gc', 'cec', '1er'),
(8, 'radoOB', 'radoOB', '2024-11-04', 4, '3453453', 'H', 'indu', 'ob', '3em'),
(9, 'kotoG2', 'kotoG2', '2024-11-06', 4, '35487', 'H', 'ter', 'g2', '2em'),
(10, 'radoG2', 'radoG2', '2024-11-13', 3, '273649', 'F', 'ter', 'g2', '3em');

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
(20, '273649', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3em');

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

--
-- Déchargement des données de la table `g3`
--

INSERT INTO `g3` (`id`, `num_matricule`, `Malagasy`, `Français`, `Anglais`, `MATH_G`, `Philosophie`, `Maths_fi`, `Statistiques`, `Compta_g`, `INFO`, `Economie`, `Droit_fiscal`, `Droit_com`, `Droit_soc`, `Droit_civ`, `Tec_com`, `EPS`, `EE`, `Trimestre`) VALUES
(14, '46546', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(15, '46546', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(16, '46546', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, ''),
(17, '46546', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, ''),
(18, '46546', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2em'),
(19, '46546', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '1er'),
(20, '46546', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1er');

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
(7, 3, 13, 0, 8.2439024390244, 1, 'aaaaa', 3, 2),
(8, 1, 14, 0, 0.68292682926829, 1, '2', 2, 2),
(9, 1, 14, 0, 0.68292682926829, 1, 'mmmmmmmmmmm', 2, 2),
(10, 1, 14, 0, 0.68292682926829, 1, '1', 1, 1),
(11, 3, 14, 0, 1.7073170731707, 1, 'demdemdem', 1, 1),
(12, 3, 14, 0, 1.7073170731707, 1, '4', 4, 4),
(13, 4, 14, 0, 0, 1, '7', 7, 7),
(14, 5, 14, 0, 0.36111111111111, 1, 'om', 1, 1),
(15, 5, 14, 0, 0.36111111111111, 1, 'om', 5, 5),
(16, 6, 22, 0, 3.5, 1, 'cec', 9, 9),
(17, 6, 22, 0, 3.5, 1, 'cec', 9, 9),
(18, 4, 14, 0, 0, 1, '1er trimestre', 2, 2),
(19, 4, 14, 0, 0, 1, 'mmm', 7, 7),
(20, 8, 3, 0, 7, 1, '7', 7, 7),
(21, 4, 14, 0, 0, 1, '4', 1, 2),
(22, 10, 20, 0, 0, 1, 'g2', 2, 3);

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
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, '3453453', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '1er'),
(4, '3453453', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '1er'),
(5, '3453453', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '1er');

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
  `EE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `om`
--

INSERT INTO `om` (`id`, `num_matricule`, `Malagasy`, `Français`, `Anglais`, `MATH`, `SPHYS`, `TECHNO`, `RDM`, `ANFAB`, `TRC`, `TP`, `DESS`, `EPS`, `EE`) VALUES
(14, '45454', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(15, '45454', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(16, '45454', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(17, '45454', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `dem`
--
ALTER TABLE `dem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `el`
--
ALTER TABLE `el`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `g2`
--
ALTER TABLE `g2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `g3`
--
ALTER TABLE `g3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `ob`
--
ALTER TABLE `ob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `om`
--
ALTER TABLE `om`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
