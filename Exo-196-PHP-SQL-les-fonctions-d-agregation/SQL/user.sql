-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 02 mars 2021 à 07:00
-- Version du serveur :  5.7.33
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_cours`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `rue` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `numero` smallint(5) UNSIGNED NOT NULL,
  `code_postal` smallint(5) UNSIGNED NOT NULL,
  `ville` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pays` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `age`, `rue`, `numero`, `code_postal`, `ville`, `pays`, `mail`) VALUES
(1, 'Doe', 'John', 21, 'Rue de chez pas quoi', 5, 59610, 'Fourmies', 'France', 'j.doe@fondationface.org'),
(2, 'Honor', 'Sarah', 32, 'Rue de la Mairie', 2, 59610, 'Fourmies', 'France', 'conor.s@gmail.com'),
(3, 'Doe', 'Jane', 65, 'Rue de la haut', 9, 59610, 'Fourmies', 'France', 'doe@example.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
