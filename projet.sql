-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 jan. 2022 à 18:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `libelle`) VALUES
(1, 'HTML'),
(2, 'PHP');

-- --------------------------------------------------------

--
-- Structure de la table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(64) CHARACTER SET utf8 NOT NULL,
  `resume` text NOT NULL,
  `id_categorie` int(11) NOT NULL DEFAULT '1',
  `format` int(1) DEFAULT '1',
  `lien` text,
  `statut` tinyint(1) DEFAULT '1',
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lessons`
--

INSERT INTO `lessons` (`id`, `libelle`, `resume`, `id_categorie`, `format`, `lien`, `statut`, `date`) VALUES
(1, 'HTML Initiation', 'Lorem ipsum dolor sit amet. \r\nAb neque maiores est galisum quia 33 totam eaque amet maiores? Quo iure qui voluptatem dignissimos est dolor assumenda et porro impedit vel temporibus laborum a sunt corporis ut veritatis explicabo. ', 1, 1, '', 1, '2022-01-09 18:51:42'),
(2, 'HTML Perfectionnement', ' Ex perspiciatis soluta ex facere optio et officiis quidem et inventore voluptatem ea enim sapiente est inventore quos et odio illum. Laboriosam voluptatem quo voluptatibus dolorem est culpa omnis ut enim libero est enim repudiandae? ', 1, 1, '', 1, '2022-01-09 18:51:42'),
(3, 'PHP Initiation', 'Ea natus rerum ab aliquid deserunt est saepe optio eum error rerum. Ut libero fugiat eos expedita omnis in quae doloribus ut consequatur ipsum est ullam ipsam qui aspernatur fugit. ', 2, 1, '', 1, '2022-01-09 18:51:42'),
(4, 'PHP Perfectionnement', 'In iusto dolor ea quia velit non nobis deserunt sit dolor atque et dolores voluptatem non expedita rerum. Qui quod nihil non quia voluptatum ad voluptas culpa qui repellendus minima est veritatis tenetur et nemo eligendi.', 2, 1, '', 1, '2022-01-09 18:51:42'),
(42, 'Culture Générale', 'blabla', 1, 1, 'bonne_conduite.pdf', 1, '2022-01-09 18:51:42'),
(43, 'cahier-des-charges', 'blabla', 1, 1, 'cahier_des_charges.pdf', 1, '2022-01-09 18:51:42'),
(44, 'Développement Web', 'Cours Jquery', 1, 1, 'COURS_JQUERY.pdf', 1, '2022-01-09 18:51:42'),
(45, 'Cours SQL', 'blabla', 1, 1, 'cours-sql.pdf', 1, '2022-01-09 18:51:42'),
(46, 'Anglais', 'blabla', 2, 2, 'https://www.youtube.com/embed/0vsTGO1GPm0', 1, '2022-01-09 18:51:42');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `role` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nom`, `prenom`, `role`) VALUES
(1, 'user1', 'Password_1', 'Dupont', 'Paul', 'admin'),
(2, 'user2', 'Password_2', 'Durand', 'Pierre', 'formateur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
