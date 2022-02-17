-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 déc. 2021 à 23:37
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `catevent`
--

CREATE TABLE `catevent` (
  `id_catevent` int(11) NOT NULL,
  `nom_catevent` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `catevent`
--

INSERT INTO `catevent` (`id_catevent`, `nom_catevent`) VALUES
(74, 'nouvelle cat'),
(75, 'Brains bloom'),
(76, 'Deuxiemeevennement');

-- --------------------------------------------------------

--
-- Structure de la table `evennements`
--

CREATE TABLE `evennements` (
  `id_ev` int(11) NOT NULL,
  `date_ev` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `image_ev` varchar(255) NOT NULL,
  `nom_ev` varchar(255) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evennements`
--

INSERT INTO `evennements` (`id_ev`, `date_ev`, `lieu`, `image_ev`, `nom_ev`, `id_cat`) VALUES
(241156, '2021-12-16', 'hammamet', 'image5.jpg', 'nouvev', 74),
(241159, '2022-01-14', 'tabarka', 'image2.jpg', 'brainsbloom', 74),
(241160, '2021-12-06', 'tozeur', 'image1.jpg', 'eventgroupe', 75),
(241161, '2021-12-14', 'sousse', 'image5.jpg', 'nourthr', 75);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catevent`
--
ALTER TABLE `catevent`
  ADD PRIMARY KEY (`id_catevent`);

--
-- Index pour la table `evennements`
--
ALTER TABLE `evennements`
  ADD PRIMARY KEY (`id_ev`),
  ADD KEY `evennements_ibfk_1` (`id_cat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `catevent`
--
ALTER TABLE `catevent`
  MODIFY `id_catevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `evennements`
--
ALTER TABLE `evennements`
  MODIFY `id_ev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241162;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evennements`
--
ALTER TABLE `evennements`
  ADD CONSTRAINT `evennements_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `catevent` (`id_catevent`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
