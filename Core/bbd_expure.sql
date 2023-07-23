-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 23 juil. 2023 à 13:08
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
-- Base de données : `bbd_expure`
--

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE `artistes` (
  `id` int(11) NOT NULL,
  `name_artiste` varchar(100) NOT NULL,
  `description_artiste` text NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `img` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `artistes`
--

INSERT INTO `artistes` (`id`, `name_artiste`, `description_artiste`, `categorie`, `img`) VALUES
(1, 'Thomas', 'Godphpthunder', 'peinture', '/images/artiste1.jpg'),
(2, 'Test 13', 'testtestest', 'vêtement', '/images/robe-noire.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_products` varchar(150) NOT NULL,
  `price_products` float NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `long_description` text NOT NULL,
  `artiste_name` varchar(150) NOT NULL,
  `categorie_name` varchar(55) NOT NULL,
  `img` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name_products`, `price_products`, `short_description`, `long_description`, `artiste_name`, `categorie_name`, `img`) VALUES
(4, 'T-shirt beige', 59, 'Collection Expure 2021', 'T-shirt été collection 2021', 'Artiste 1', 'vêtement ', '/images/T-shirt-beige.jpg'),
(5, 'T-shirt Black & White', 49, 'T-shirt Black & White', 'T-shirt Black & White Collection hiver 2022', 'Artiste 1', 'Tableau', '/images/blackandwhite.jpg'),
(6, 'Air Force custom', 299, 'Air Force custom Fuji', 'Air Force custom du Mont Fuji handmade', 'Artiste 2', 'vêtement', '/images/chaussure1.jpg'),
(7, 'Air Force Wave', 299, 'Air Force custom Wave ', 'Air Force custom Wave ', 'Artiste 2', 'vêtement', '/images/chaussure3.jpg'),
(8, 'Robe blanche', 799, 'Robe blanche', 'Robe blanche haute couture', 'Artiste 1', 'vêtement', '/images/robe-blanche.jpg'),
(9, 'Tableau \"You\"', 79, 'Tableau \"You\" A4', 'Tableau \"You\" A4', 'Artiste 2', 'Tableau', '/images/tableau.jpg'),
(16, 'Tableau \"She\"', 79, 'Tableau \"She\" A4', 'Tableau \"She\" A4', 'Artiste 2', 'Tableau', '/images/tableau3.jpg'),
(17, 'Tableau \"Face\"', 79, 'Tableau \"Face\" A4', 'Tableau \"Face\" A4', 'Artiste 2', 'Tableau', '/images/tableau6.jpg'),
(18, 'Tableau \"Vitamine C\"', 79, 'Tableau \"Vitamine C\" A4', 'Tableau \"Vitamine C\" A4', 'Artiste 2', 'Tableau', '/images/tableau9.jpg'),
(19, 'Tableau \"Oy\"', 79, 'Tableau \"Oy\" A4', 'Tableau \"Oy\" A4', 'Artiste 2', 'Tableau', '/images/tableau5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `isAdmin`) VALUES
(1, 'chadi', 'test@test.ch', '$2y$10$R3HYNTG34A5dohkEpKPgQ.YrEEeSTNMyqKLXxZ9Sq4Jbt4ulr5UfC', 0),
(2, 'chadi', 'admin@admin.ch', '$2y$10$CyANBzkzJzcJjlGhD6qYGetmK7KzD7IfJW0IyHgtyF5pxCLAw0EpO', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
