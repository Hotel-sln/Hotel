-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 19 juin 2020 à 15:12
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel_menton`
--
CREATE DATABASE IF NOT EXISTS `hotel_menton` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotel_menton`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `admin`:
--

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `motdepasse`) VALUES
(1, 'Labu', 'oui@oui.fr', '123');

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE `chambres` (
  `id` int(11) NOT NULL,
  `chambre` varchar(255) NOT NULL,
  `type_chambre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imgs` varchar(255) NOT NULL,
  `prix` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `chambres`:
--

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `chambre`, `type_chambre`, `description`, `imgs`, `prix`) VALUES
(1, 'Classic+', 'Simple', 'L\'hôtel Bogdanoff vous accueille dans un cadre chaleureux, cette chambre classic+ saura vous satisfaire que ce soit pour une nuit comme à la location longue durée. La chambre est située non loin des toilette ce qui est fort pratique la nuit quand on a une petit envie. La suite parentale fera mouche pour toutes les ménagères grincheuses que vous trouverez bon d\'ammener... toutefois si vous venez en solo n\'oubliez pas que l\'hôtel est en partenariat avec une équipe de professionnelles de la luxure(cf. voir modalités à l\'accueil). Ce logement modeste vous proposera de grands rangements ainsi qu\'un espace corde à linge. Que ce soit pour les vacances ou un kidnapping cette chambre vous satisfera quoi qu\'il se passe.', 'classic1.jpg;classic2.jpg;classic3.jpg;', '90.00'),
(2, 'Penthouse', 'Triple', 'L\'hôtel Bogdanoff vous accueille dans un cadre merveilleux , cette suite avec SPA et jaccuzzi saura vous satisfaire que ce soit pour une nuit ou pour un séjour longue durée. L\'accès à cette chambre se fait par un ascenseur privatif, le service de chambre lui aussi sera privatif. Ce penthouse fera son petit effet sur toutes celles que vous amènerez... Toutefois si vous venez seul il sera possible d\'avoir un tarif privilégié pour nos accompagnatrices de luxe (cf. voir modalités à l\'accueil). Que ce soit pour le plaisir d’une nuit ou un séjour longue durée cette chambre vous satisfera quoi qu\'il se passe.', 'penthouse1.jpg;penthouse2.jpg;penthouse3.jpg;', '900.00'),
(3, '50 Shades', 'Double', 'L\'hôtel Bogdanoff vous accueille dans un cadre fantastique,qui ravira les petits comme les grands. Ce modèle de chambre basé sur le film 50 Nuances de Grey sera parfait pour vos parties fines et/ou pour corriger ceux et celles qui vous accompagnent. Vous satisfaire reste le plus gros désir de notre hôtel. Que ce soit pour une nuit comme pour un séjour longue durée. L\'accès à cette chambre se fait par un couloir privé à ses clients, le service de chambre lui aussi sera privatif. Pour les chauds lapins demandeurs il sera possible d\'avoir un tarif privilégié pour nos accompagnatrices de luxe (cf. voir modalités à l\'accueil). Que ce soit pour le plaisir d’une nuit ou un séjour longue durée cette chambre vous satisfera quoi qu\'il se passe.', 'shade1.jpg;shade2.jpg;shade3.jpg;', '255.00');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `date_reservation` date NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `phone` int(16) NOT NULL,
  `addresse` varchar(255) NOT NULL,
  `ville` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `reservation`:
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation_chambres`
--

DROP TABLE IF EXISTS `reservation_chambres`;
CREATE TABLE `reservation_chambres` (
  `id_reservation` int(11) NOT NULL,
  `id_chambres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `reservation_chambres`:
--   `id_chambres`
--       `chambres` -> `id`
--   `id_reservation`
--       `reservation` -> `id`
--

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `reservation_chambres`
--
ALTER TABLE `reservation_chambres`
  ADD KEY `id_chambres` (`id_chambres`),
  ADD KEY `id_reservation` (`id_reservation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation_chambres`
--
ALTER TABLE `reservation_chambres`
  ADD CONSTRAINT `reservation_chambres_ibfk_1` FOREIGN KEY (`id_chambres`) REFERENCES `chambres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_chambres_ibfk_2` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
