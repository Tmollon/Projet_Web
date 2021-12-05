-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : dim. 05 déc. 2021 à 20:14
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE drugs;
USE drugs;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `drugs`
--

-- --------------------------------------------------------

--
-- Structure de la table `Avis`
--

CREATE TABLE `Avis` (
  `id` int NOT NULL,
  `NomPrenom` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Avis` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Avis`
--

INSERT INTO `Avis` (`id`, `NomPrenom`, `Email`, `Avis`) VALUES
(1, 'Kyllian holder', 'kyllianholder@gmail.com', 'test envoie formulaire'),
(2, 'NEYMAR Jean', 'jean.neymar@gmail.com', 'Super site mais aucun produits affichés =('),
(3, 'METTEZ nouvingt', 'metteznousvingt@svp.fr', 'Ce site est vraiment super meme si il a quelques bug il mérité une belle note');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `nom` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`, `created_at`, `updated_at`) VALUES
(1, 'dure', 'drogue dure', '2021-12-05 15:21:06', '2021-12-05 15:21:25'),
(2, 'douce', 'drogue douce', '2021-12-05 15:21:43', '2021-12-05 15:21:58'),
(3, 'legale', 'drogue légale', '2021-12-05 15:22:39', '2021-12-05 15:22:52');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `mdp` char(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mdp`, `email`) VALUES
(1, 'admin', '$2y$10$cBUET3E3qO3NP.1tGcT47eL.iRz7JGbtx7asyOpGwssvQdhpRkY9C', 'admin@mail.com');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `IDpanier` int NOT NULL,
  `Contenue` varchar(100) DEFAULT NULL,
  `Total` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int NOT NULL,
  `nom` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `categories_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `prix`, `categories_id`) VALUES
(1, 'Canabis', 'canabis sativa', '10', 2),
(2, 'Extasy Mitsubishi', 'Extasy Mitsubishi , très puissant et peu cher', '5', 1),
(3, 'Extasy Mario', 'Extasy Mario, pour retrouver la princesse Peach', '5', 1),
(4, 'Extasy Superman', 'Extasy Superman, pour planer toute la soirée', '5', 1),
(5, 'Poppers', 'Poppers surpuissant pour t\'accompagner pendant tes nuits', '14', 3),
(6, 'Canabis Indica', 'De la frappe qui colle au canapé', '8', 2),
(7, 'La frappe à Jardinius', 'Canabis cultivé de manière écologique et local', '21', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Avis`
--
ALTER TABLE `Avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`IDpanier`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Avis`
--
ALTER TABLE `Avis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
