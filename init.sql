-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : dim. 05 déc. 2021 à 18:45
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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
CREATE DATABASE IF NOT EXISTS drugs;

USE drugs;

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
(1, 'zaza', 'test@gmail.com', 'zaazza'),
(2, 'feazfzea', 'test@gmail.com', 'fezafzeaf'),
(3, 'efazefzaer', 'test1@gmail.com', 'fezafzeafzae'),
(4, 'eazfezafeza', 'test2@gmail.com', 'azefzeafazef'),
(5, 'eztretg', 'blabla@gmail.fr', 'eferafafr'),
(6, 'faze', 'ezafzef@fzeafe.fr', 'ezfazf'),
(7, 'efaezff', 'ezafeazf@efaezf.fr', 'azefeazfezfa'),
(8, 'efaezff', 'ezafeazf@efaezf.fr', 'azefeazfezfa'),
(9, 'azerfezaf', 'ezafaezf@hrezhgre.fr', 'efzaezfazefe'),
(10, 'azerfezaf', 'ezafaezf@hrezhgre.fr', 'efzaezfazefe'),
(11, 'greazgza', 'tom@gmol.com', 'feazfaze'),
(12, 'greazgza', 'tom@gmol.com', 'feazfaze'),
(13, 'teztazg', 'azeazer@gmail.com', 'zeafezfaze');

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
(1, 'root', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(2, 'test', 'd693b084ed2de11b14bfbdfdc65742e6', ''),
(3, '', '', ''),
(4, 'test1', '64d37ec5ca5c21c72dc0fdee5a9ca897', 'test1@gmail.com'),
(5, 'rererere', '1f3962c1cadd011b08b4050f87545aa1', 'tom.mollon@gmail.com'),
(6, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa@aaa.com'),
(7, 'test42', '098f6bcd4621d373cade4e832627b4f6', 'test42@gmail.com'),
(8, 'admin', '$2y$10$Zc1/QPZ7vQ8.bpEyaGaweOkRniY7jb2/8SWi7tO8LdxL1hCS5StSe', 'admin@gmail.com');

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
(69, 'Produit1', 'Ma nouvelle description', '50', 1),
(70, 'Produit2', 'eses', '50', 2),
(71, 'Produit2', 'eses', '50', 2),
(72, 'Produit2', 'eses', '50', 2),
(73, 'Produit72', 'erserserser', '5055', 3),
(74, 'Produitereresrsers72', 'ersersresrsrerser', '5055', 3),


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Avis`
--
ALTER TABLE `Avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
