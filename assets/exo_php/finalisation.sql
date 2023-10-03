-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 29 sep. 2023 à 10:30
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `resto`
--

-- --------------------------------------------------------

--
-- Structure de la table `finalisation`
--

CREATE TABLE `finalisation` (
  `id_commande` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `adresse` text NOT NULL,
  `articles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`articles`)),
  `montant_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `finalisation`
--

INSERT INTO `finalisation` (`id_commande`, `nom`, `email`, `telephone`, `adresse`, `articles`, `montant_total`) VALUES
(1, 'gesg', 'teste@gmail.com', '0123654897', 'fqfzqef', '{\"3\":4}', '24.00'),
(2, 'gesgeyefef', 'teste@gmail.com', '0123654897', 'fqfzqef', 'null', '24.00'),
(3, 'dfguqfjbqfy', 'fsqfqfq@gmail.com', '0123654789', 'dqfdzfqqfzg', '{\"2\":\"1\",\"4\":\"50\"}', '608.00'),
(4, 'dfguqfjbqfy', 'fsqfqfq@gmail.com', '0123654789', 'dqfdzfqqfzg', 'null', '608.00'),
(5, 'fqgaqdgzagq', 'gqgfqgqgf@gmail.com', '0123645789', 'fshsfqf', '{\"1\":\"1000\"}', '10000.00'),
(6, 'fqgaqdgzagq', 'gqgfqgqgf@gmail.com', '0123645789', 'fshsfqf', 'null', '10000.00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `finalisation`
--
ALTER TABLE `finalisation`
  ADD PRIMARY KEY (`id_commande`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `finalisation`
--
ALTER TABLE `finalisation`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
