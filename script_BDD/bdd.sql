CREATE DATABASE hotel_menton CHARACTER SET 'utf8';

USE hotel_menton;

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `date_entree` date NOT NULL,
  `date_depart` date NOT NULL,
  `chambre` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `phone` int(15) not NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `hash_pass` varchar(255) NOT NULL,
  `date_reservation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE users (
    id int auto_increment primary key not null,
    email varchar(50) not null,
    hash_pass varchar(255) not null,
    role varchar(25)
);
