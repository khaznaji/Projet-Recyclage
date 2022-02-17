-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 déc. 2021 à 19:35
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `id` varchar(20) NOT NULL,
  `offre` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id`, `offre`, `prix`) VALUES
('10', 'Basique Semestre', 298),
('15', 'Pro Semestre', 800),
('20', 'Premium Semestre', 999),
('25', 'Basique Annuel', 1399),
('30', 'Pro Annuel', 1899),
('35', 'Premium Annuel', 3200);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `ville` varchar(11) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `nomProduit` text NOT NULL,
  `modeP` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `ville`, `adresse`, `nomProduit`, `modeP`, `date`) VALUES
(85, 'Tunis', 'Ariana', 'Basique 12 mois', 'cash', '2021-12-01'),
(24285104, 'tunis', 'Carthage Byrsa', 'Basique 12 mois', 'cash', '2021-12-01'),
(144, 'Kairouan', 'rue ben ali', 'Premium 36 mois', 'carte', '2021-12-01'),
(59897641, 'Mahdia', 'rond point', 'Premium Annuel', 'carte', '2021-12-09'),
(99854001, 'Mahdia', 'kiosque', 'Premium Semestre', 'cash', '2021-12-09'),
(99854001, 'Mahdia', 'kiosque', 'Premium Semestre', 'cash', '2021-12-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
