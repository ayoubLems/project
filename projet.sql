-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2020 at 02:15 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

DROP TABLE IF EXISTS `matching`;
CREATE TABLE IF NOT EXISTS `matching` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `nom_client` varchar(64) ,
  `product_no` int(11) NOT NULL,
  `prix_estime` decimal(10,2),
  `commentaire` varchar(256) ,
  `Date_du_matching` date NOT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `type`, `price`, `description`, `image`) VALUES
(1, 'Beton', 150, 'Les matériaux sont issus dune rénovation disponible a enlever          Accessibilite: Camionnette,Camion          Ville: Lille', 'beton.jpeg'),
(3, 'Carrelages', 200, '25 metres carres de carrelages issue dune demolition a curer         Accessibilite: Camionnette, Camion, Voitire         Ville: Marseille', 'carrelage2.jpg'),
(4, 'Briques', 1500, '2 tonnes de briques issue dune rénovation disponible a enlever           Accessibilite: Camion, Remorque             Ville: Toulouse.
', 'bricks.jpg'),
(5, 'portes', 250, '15 portes issue dune demolition dune immeuble a demonter                    Accessibilite:Camionnette, Voiture          Ville: Paris', 'fenetres.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$eIUI0tDGqwqqUIJsH2neFeqd9yG.FoqUw/xC7xHGzpzZGtYHibNh6', 'admin'),
(2, '', 'codegenes@gmail.com', '$2y$10$g2/4RqP.58XDAGeels0foO01uoYR4oDVoXpQilzTMSDWi8LyntSfm', 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
