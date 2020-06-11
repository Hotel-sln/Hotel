-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 juin 2020 à 14:19
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hotel_menton`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

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
CREATE TABLE IF NOT EXISTS `chambres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chambre` varchar(255) NOT NULL,
  `type_chambre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imgs` varchar(255) NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `chambre`, `type_chambre`, `description`, `imgs`, `prix`) VALUES
(1, 'Classic+', 'Simple', 'L\'hôtel Bogdanoff vous accueille dans un cadre chaleureux, cette chambre classic+ saura vous satisfaire que ce soit pour une nuit comme à la location longue durée. La chambre est située non loin des toilette ce qui est fort pratique la nuit quand on a une petit envie. La suite parentale fera mouche pour toutes les ménagères grincheuses que vous trouverez bon d\'ammener... toutefois si vous venez en solo n\'oubliez pas que l\'hôtel est en partenariat avec une équipe de professionnelles de la luxure(cf. voir modalités à l\'accueil). Ce logement modeste vous proposera de grands rangements ainsi qu\'un espace corde à linge. Que ce soit pour les vacances ou un kidnapping cette chambre vous satisfera quoi qu\'il se passe.', 'classic1.jpg;classic2.jpg;classic3.jpg;', '90.00'),
(2, 'Penthouse', 'Triple', 'L\'hôtel Bogdanoff vous accueille dans un cadre merveilleux , cette suite avec SPA et jaccuzzi saura vous satisfaire que ce soit pour une nuit ou pour un séjour longue durée. L\'accès à cette chambre se fait par un ascenseur privatif, le service de chambre lui aussi sera privatif. Ce penthouse fera son petit effet sur toutes celles que vous amènerez... Toutefois si vous venez seul il sera possible d\'avoir un tarif privilégié pour nos accompagnatrices de luxe (cf. voir modalités à l\'accueil). Que ce soit pour le plaisir d’une nuit ou un séjour longue durée cette chambre vous satisfera quoi qu\'il se passe.', 'penthouse1.jpg;penthouse2.jpg;penthouse3.jpg;', '900.00'),
(3, '50 Shades', 'Double', 'L\'hôtel Bogdanoff vous accueille dans un cadre fantastique,qui ravira les petits comme les grands. Ce modèle de chambre basé sur le film 50 Nuances de Grey sera parfait pour vos parties fines et/ou pour corriger ceux et celles qui vous accompagnent. Vous satisfaire reste le plus gros désir de notre hôtel. Que ce soit pour une nuit comme pour un séjour longue durée. L\'accès à cette chambre se fait par un couloir privé à ses clients, le service de chambre lui aussi sera privatif. Pour les chauds lapins demandeurs il sera possible d\'avoir un tarif privilégié pour nos accompagnatrices de luxe (cf. voir modalités à l\'accueil). Que ce soit pour le plaisir d’une nuit ou un séjour longue durée cette chambre vous satisfera quoi qu\'il se passe.', 'shade1.jpg;shade2.jpg;shade3.jpg;', '255.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
