-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 29 jan. 2022 à 02:34
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `api-voyages`
--

-- --------------------------------------------------------

--
-- Structure de la table `forfaits`
--

CREATE TABLE `forfaits` (
  `id` int NOT NULL,
  `destination` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `villedepart` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `coordonnees` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `etoiles` int NOT NULL,
  `chambres` int NOT NULL,
  `caracteristiques` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datedepart` date NOT NULL,
  `dateretour` date NOT NULL,
  `prix` decimal(7,2) NOT NULL,
  `rabais` decimal(7,2) NOT NULL,
  `vedette` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `forfaits`
--

INSERT INTO `forfaits` (`id`, `destination`, `villedepart`, `nom`, `coordonnees`, `etoiles`, `chambres`, `caracteristiques`, `datedepart`, `dateretour`, `prix`, `rabais`, `vedette`) VALUES
(1, 'MexiquoModifié', 'Vancouver', 'Cerveza-Por Favor', '111 Biera, Mexico', 4, 1200, 'bar; piscine; vue plage; golf; spa', '2022-02-10', '2022-02-25', '899.00', '99299.99', 1),
(3, 'Barbade', 'Edmonton', 'The Sands Barbados', '3986 Barbados, Bridgetown', 4, 165, 'VIP; suite; limousine; croisière', '2022-03-01', '2022-03-10', '3252.99', '199.99', 1),
(4, 'Paris', 'Montréal', 'EauChan-Hélizay', '325 Champs-Élysée, Paris', 5, 300, 'piscine;spa', '2022-03-10', '2022-03-17', '2455.99', '99.99', 1),
(5, 'Costa Rica', 'Montréal', 'Beach Break Resort', '200M South of the Muni of Jaco Beach, Jaco', 4, 825, 'Wi-Fi; golf; tennis; mariage; réception', '2021-04-01', '2021-04-08', '659.25', '95.00', 1),
(7, 'Montréal', 'Toronto', 'Delta', '555 Gauchetière', 4, 1450, 'spa;piscine;massothérapie', '2021-02-22', '2021-03-06', '1100.99', '0.00', 0),
(9, 'Ajout forfait', 'J\'ajoute-City', 'ajoutInn', '999 ajoutStreet', 3, 1, 'J\'ajoute;Un;forfait', '2022-01-28', '2022-01-29', '1.00', '0.99', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `forfaits`
--
ALTER TABLE `forfaits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `forfaits`
--
ALTER TABLE `forfaits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
