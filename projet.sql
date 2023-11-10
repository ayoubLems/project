-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 10 nov. 2023 à 12:04
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
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `code` varchar(255) DEFAULT NULL,
  `product_name_fr` varchar(255) DEFAULT NULL,
  `nutrition_data_per` varchar(255) DEFAULT NULL,
  `energy_kcal_value_kcal` float DEFAULT NULL,
  `fat_value_g` float DEFAULT NULL,
  `saturated_fat_value_g` float DEFAULT NULL,
  `carbohydrates_value_g` float DEFAULT NULL,
  `sugars_value_g` float DEFAULT NULL,
  `fiber_value_g` float DEFAULT NULL,
  `proteins_value_g` float DEFAULT NULL,
  `salt_value_g` float DEFAULT NULL,
  `sodium_value_g` float DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`code`, `product_name_fr`, `nutrition_data_per`, `energy_kcal_value_kcal`, `fat_value_g`, `saturated_fat_value_g`, `carbohydrates_value_g`, `sugars_value_g`, `fiber_value_g`, `proteins_value_g`, `salt_value_g`, `sodium_value_g`, `id`) VALUES
('3,25187E+12', 'Soupe de poissons au safran', '100g', 39, 2.4, 0.5, 0.5, 0.5, NULL, 3.3, 0.88, 0.352, 1),
('8,01837E+12', 'Risotto au safran', '100g', 351, 1, 0, 75.7, 0.1, 4, 8, 0, 0, 2),
('8,01837E+12', 'Risotto au Safran', '100g', 401, 0.5, 0.1, 91, 1, NULL, 8.2, 0.01, 0.004, 3),
('8,01837E+12', 'Risotto au safran', '100g', 401, 0.5, 0.1, 91, 1, NULL, 8.2, 0.01, 0.004, 4),
('8,01837E+12', 'Risotto au safran', '100g', 351, 1, 0, 76, 0.5, 4, 8, 0.01, 0.004, 5),
('3,76033E+12', 'Soupe Potimarron Safran', '100g', 46, 2.4, 0.3, 4.6, 2.6, NULL, 0.8, 0.5, 0.2, 6),
('3,59671E+12', 'Safran moulu', '100g', 310, 5.9, 1.6, 65.4, 0, 5.1, 11.5, 0.37, 0.148, 7),
('3,28837E+12', 'Rouille au safran', '100g', 701.55, 75.98, 5.8, 1, 0.25, 0.37, 3, 1.15, 0.46, 8),
('3,76004E+12', 'Paëlla royale au véritable safran', '100g', 193, 10, 1.8, 17, 0.7, 1.3, 7.3, 0.41, 0.164, 9),
('8,03358E+12', 'Risotto au safran', '100g', 346, 0.9, 0.1, NULL, 0.9, 1.5, 6.9, 1.3, 0.52, 10),
('3,41796E+12', 'Safran poudre', '100g', 23, 53, NULL, NULL, 0, 1, 23, 0.1, 0.04, 11),
('3,76018E+12', 'Sauce poisson au safran', '100g', 55, 1.89, 0.45, 5.89, 1.15, NULL, 3.8, 0.0424, 0.01696, 12),
('3,76008E+12', 'Dorade au Safran Breton Bio', '100g', 203, 15.5, 10.2, 1.8, 1, NULL, 11.7, 0.875, 0.35, 13),
('3,76026E+12', 'Gelee de safran', '100g', 211, 0, 0, 51, 51, NULL, 0, 0.02, 0.008, 14),
('3,25901E+12', 'Galettes céréales riz, légumes, safran', '100g', 228, 8.8, 1, 30, 1.4, 3.9, 5.3, 1.1, 0.44, 15),
('3,25901E+12', 'Galette Riz Safran', '100g', 207, 4.6, 0.9, 35, 2, 3, 4.8, 1.1, 0.44, 16),
('3,26746E+12', 'Tagliatelles au safran', '100g', 354, 2.4, 0.6, 65.4, 2, 3.7, 13.6, 0.031, 0.0124, 17),
('3,38038E+12', 'Tortils Citron Safran 300G +20% Gratuit', '100g', 361, 1.9, 0.3, 73.5, 3.2, 2.9, 11, 0.01, 0.004, 18),
('3,38038E+12', 'Boulgour de riz coco et safran', '100g', 384, 6, 4.8, 73.6, 2.4, 3.9, 7.2, 0.02, 0.008, 19),
('3,77001E+12', 'Velouté Potimarron Safran', '100g', 39, 1.55, 0.58, 3.31, 0.29, NULL, 0.77, 0.53, 0.212, 20),
('3,77001E+12', 'Mulet fumé de Loire au safran de Touraine', '100g', 215, 17.6, 10.8, 1.6, 0.5, NULL, 10.5, 1.3, 0.52, 21),
('3,5507E+12', 'Safran', '100g', 310, 6, 2, 65, 42, NULL, 11, 14, 5.6, 22),
('3,34743E+12', 'Nids petit épeautre safran des Indes', '100g', 348, 2.68, 0.43, 66.02, 2.69, 5.8, 12.18, 0.01, 0.004, 23),
('3,76034E+12', 'Crème Asperge au Safran de Touraine', '100g', 128, 11, 1.4, 3, 1.1, NULL, 3.3, 0.93, 0.372, 24),
('8,4137E+12', 'Sazonador para paella con azafrán', '100g', 240, 4.2, 0.7, 32.8, 20.9, 13.6, 11, 29, 11.6, 25),
('3,76033E+12', 'Risotto aux cèpes et safran', '100g', 345, 1.7, 0.5, 73.8, 1.4, NULL, 8.3, 0, 0, 26),
('3,25039E+12', 'Cigalou Safran 0 3G Pot V', '100g', 10, 0, 0, 0, 0, NULL, 0, 10, 4, 27),
('3,5647E+12', 'Colin d Alaska sauce citron et son riz safran', '100g', 107, 2.3, 1, 16, 0.5, 0.5, 5.4, 0.93, 0.372, 28),
('3,54735E+12', 'Velouté de rouget au safran', '100g', 133, 1, 0.3, 4, 0.005, NULL, 2.5, 0.63, 0.252, 29),
('3,70024E+12', 'Rissoto aux cèpes et safran', '100g', 335, 1.5, 0.5, 73, 0.6, NULL, 7, 0.003, 0.0012, 30),
('3,26614E+12', 'Risotto Crevettes, safran & parmesan', '100g', 126, 5.2, 3, 15, 0.7, NULL, 4.7, 0.78, 0.312, 31),
('3,26183E+12', 'Terrine de campagne safran', '100g', 353, 32, 12, 2.5, 0.5, NULL, 13, 1.6, 0.64, 32),
('3,77E+12', 'Biscuits au Safran', '100g', 441, 21, 21, 56, 29, NULL, 6, 0.02, 0.008, 33),
('3,27367E+12', 'Croutons a huile olive et safran', '100g', 392, 6.2, 0.9, 70.6, 4.4, NULL, 11.9, 2, 0.8, 34),
('6,09119E+12', 'Mayil Curcuma Moulu Safran', '100g', 354, 9.9, 3.2, 4, 3.2, NULL, 7.8, 0, 0, 35),
('8,00142E+12', 'Risotto au safran', '100g', 350, 0, 0, 76, 0, NULL, 0, 0, 0, 36),
('3,52353E+12', 'Sablés au safran', '100g', 438, 24, 11, 49, 37, NULL, 7, 0, 0, 37),
('8,00917E+12', 'Morelli 1860 Linguine, Mit Safran Weizenkeimen', '100g', 359, 1.3, 0.3, 72, 4.4, NULL, 13, 0.02, 0.008, 38),
('3,76006E+12', 'Aventurier Nougat Safran Cranberry Pistache', '100g', 420, 17, 1.8, 61, 54, NULL, 7.8, 0.06, 0.024, 39),
('3,76005E+12', 'Croquants au safran du Quercy', '100g', 405, 13, 1, 62, 53, NULL, 8.2, 0.005, 0.002, 40),
('3,25187E+12', 'Sardines au Safran Bio Corse', '100g', 222, 13, 3.3, 0.5, 0, NULL, 26, 0.85, 0.34, 41),
('3,50279E+12', 'Croûtons Safran à huile olive', '100g', 392, 6.2, 0.9, 70.6, 4.4, NULL, 11.9, 2.07, 0.828, 42),
('0417242957854', 'Biscuits au safran de bayons', '100g', 0.1, 22, 8, 50, 22, NULL, 10, 0.3, 0.12, 43),
('3,70024E+12', 'RISOTTO AU SAFRAN', '100g', 335, 1.5, 0.5, 73, 0.6, NULL, 0, NULL, NULL, 44),
('3,77E+12', 'Yaourt safran', '100g', 92, 3.9, 2.5, 11.6, 11.6, NULL, 3.6, 3.1, 1.24, 45),
('3256228438218', 'Raclette sans croûte 3 poivres - Nature', '100g', 342, 28, 18, 0, 0, 0, 22, 0.6, 0.24, 46),
('3256229522008', 'Snacks poppés aux légumineuses saveur fromage poivre fumé', '100g', 421, 12, 1.7, 64, 1.5, 8.7, 9.9, 0.49, 0.196, 47),
('3253015300086', 'Snacks poppés aux légumineuses saveur fromage poivre fumé', '100g', 421, 12, 1.7, 64, 1.5, 8.7, 9.9, 0.49, 0.196, 48),
('3256228418999', 'Pavé de saumon au poivre de Timut', '100g', 232, 15, 2.3, 0.5, 0.5, NULL, 24, 3.1, 1.24, 49),
('3256228100252', 'Poivre gris moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50),
('3760024930055', 'Pate au poivre vert', '100g', 314, 27, 9.7, 1, 0.5, NULL, 17, 1.575, 0.63, 51),
('3256228740014', 'Assortiment de sauces Béarnaise Tartare Poivre Bourguignonne', '100g', 447.25, 40.5, 3.35, 5.825, 3.45, 0.7, 1.05, 2.2, 0.88, 52),
('3760083880438', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 53),
('3501890002176', 'Rillettes de maquereau fumé au poivre', '100g', 307, 28, 16, 0.8, 0.7, NULL, 13, 1.2, 0.48, 54),
('3166296204977', 'Poivre doux 5 baies', 'serving', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 55),
('3230140002610', 'Moutarde au poivre vert', '100g', 152, 12, 0.9, 3.2, 1.3, NULL, 7.3, 6.6, 2.64, 56),
('3242271000403', 'All’italia Pecorino poivre noir', '100g', 185, 8.1, 5.1, 19, 0.5, 1.7, 7.8, 0.63, 0.252, 57),
('3166290130029', 'Poivre gris moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 58),
('3564706626133', '2 hachés soja blé poivre et persil', '100g', 228, 13, 1.2, 6.8, 2.5, NULL, 18, 1.3, 0.52, 59),
('3760122961937', 'Petits sablés Beaufort', '100g', 508, 28, 19, 51, 3, NULL, 9, 1.8, 0.72, 60),
('4027900219642', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 61),
('4027900567767', 'Trois Poivres en grain', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 62),
('3389090021032', 'Mousse de saumon au fromage frais et au poivre du Népal', '100g', 221.1, 19, 8.4, 20, 1.8, NULL, 11, 1.3, 0.52, 63),
('4056489136934', 'Fromage pour raclette 3 poivres', '100g', 360, 28, 18, 1, 1, 0, 26, 1.5, 0.6, 64),
('3273625843216', 'Ribs aux 3 poivres', '100g', 200, 12, 3.8, 2.1, 1.3, NULL, 21, 1.1, 0.44, 65),
('20068004', 'Cayenne Pfeffer', '100g', 0, 0, 0, 0, 0, NULL, 0, 0, 0, 66),
('8423759058382', 'Viande séchée de boeuf au poivre', '100g', 162, 2.8, 1.2, 2.8, 2.1, NULL, 31, 3.3, 1.32, 67),
('3770011616107', 'Fuet au poivre', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 68),
('8712100634529', 'Knorr Peper Room Saus Sauce au poivre à la crème  300ML', '100g', 60, 3.5, 1, 5.6, 1.7, NULL, 1.3, 1.3, 0.52, 69),
('3270160720460', '8 fajitas au poulet', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 70),
('3700118301156', 'Pavé au poivre', '100g', 392, 32, 12, 3.4, 2.4, NULL, 23, 4.8, 1.92, 71),
('3589110393839', 'Beurre poivre et baies roses', '100g', 726, 79, 49, 3, 1.9, NULL, 0.8, 3.32, 1.328, 72),
('3580281893234', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 73),
('3517738126713', 'Pavé au poivre', '100g', 355, 27, 12, 3, 1.7, NULL, 22, 4.8, 1.92, 74),
('3760311991653', 'Poivre noir moulu de ceylan', '100g', 251, 3.3, 0, 64.61, 0, 25.2, 10, NULL, NULL, 75),
('3760324540022', 'Yaourt poivre de timut', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 76),
('3760122961876', 'Petits beurre Comté et poivre noir de Madagascar', '100g', 499, 25, 17, 55, 2.8, 5, 11, 1.6, 0.64, 77),
('3770013307379', 'Noix de Cajou Poivre de Tellicherry', '100g', 604, 45.76, 7.8, 21.96, 6.96, 8.16, 16.76, 1.06, 0.424, 78),
('3162050059036', 'Poivre Noir - Voantsy perifery - relevé', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 79),
('3376963467981', 'Fromage pour raclette, 3 saveurs: poivre, nature et fumée', '100g', 344, 28, 18, 1, 0, 0, 22, 2, 0.8, 80),
('2297893020736', 'Maquereaux fumés au poivre', '100g', 294, 24.3, 5.35, 0, 0, NULL, 18.8, 3.51, 1.404, 81),
('3580288084437', 'Le Mélange grillades poivron rouge, poivre, oignon', '100g', 291, 3.7, 0.9, 45, 30, NULL, 10, 10, 4, 82),
('7613035982055', 'GARDEN GOURMET Le Gourmand Soja, Poivre et Persil 160g', '100g', 173, 4.8, 0.4, 10.4, 3, 4.3, 20, 1.1, 0.44, 83),
('3266481351148', 'Amande citron et poivre vert', '100g', 624, 52, 3.9, 11, 1.4, NULL, 24, 1.9, 0.76, 84),
('8006614051904', 'Poivre noir', '100g', 280, 3.3, 0, 38.3, 0.6, NULL, 10.9, 0.1, 0.04, 85),
('3254637001719', 'Terrine de canard au poivre vert', '100g', 338, 30, 11, 1, 1, NULL, 16, 2.4, 0.96, 86),
('3233130500141', 'Jambonneau  poivre vert', '100g', 154, 8.2, 2.9, 0.5, 0.5, NULL, 20, 1.6, 0.64, 87),
('3580288089944', 'La belle chips', '100g', 546, 36, 4, 45, 0.9, NULL, 7.4, 0.9, 0.36, 88),
('3367824926570', 'Poitrine Plate au poivre', '100g', 308, 21.4, 7.9, 0.5, 0.5, NULL, 28.6, 5.47, 2.188, 89),
('7610071046246', 'Poivre et ail', '100g', 272, 2.7, 0.6, 43, 3.7, 19, 9.6, 14.6, 5.84, 90),
('3270160893089', 'Arancini cacio et pepe', '100g', 254, 9.9, 4.5, 33, 2.3, 1.2, 7.6, 1.2, 0.48, 91),
('3183811059287', 'Poivre noir', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 92),
('3760012400287', 'Sel de Guerande aux poivres et baies roses', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 93),
('59597032', 'Poivre noir', '100g', 330, 7.5, 2.9, 39.5, 0.64, 25.7, 13.3, 0.09, 0.036, 94),
('3367651009590', 'Le XXL Poivre', '100g', 289, 17, 4.7, 22, 1.7, NULL, 12, 0.73, 0.292, 95),
('3547130071984', 'Mélange de poivres façon O&CO.', '100g', 304, 3.3, 1, 45, 38, NULL, 11, 0, 0, 96),
('3256228438218', 'Raclette sans croûte 3 poivres - Nature', '100g', 342, 28, 18, 0, 0, 0, 22, 0.6, 0.24, 97),
('3256229522008', 'Snacks poppés aux légumineuses saveur fromage poivre fumé', '100g', 421, 12, 1.7, 64, 1.5, 8.7, 9.9, 0.49, 0.196, 98),
('3253015300086', 'Snacks poppés aux légumineuses saveur fromage poivre fumé', '100g', 421, 12, 1.7, 64, 1.5, 8.7, 9.9, 0.49, 0.196, 99),
('3256228418999', 'Pavé de saumon au poivre de Timut', '100g', 232, 15, 2.3, 0.5, 0.5, NULL, 24, 3.1, 1.24, 100),
('3256228100252', 'Poivre gris moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 101),
('3760024930055', 'Pate au poivre vert', '100g', 314, 27, 9.7, 1, 0.5, NULL, 17, 1.575, 0.63, 102),
('3256228740014', 'Assortiment de sauces Béarnaise Tartare Poivre Bourguignonne', '100g', 447.25, 40.5, 3.35, 5.825, 3.45, 0.7, 1.05, 2.2, 0.88, 103),
('3760083880438', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 104),
('3501890002176', 'Rillettes de maquereau fumé au poivre', '100g', 307, 28, 16, 0.8, 0.7, NULL, 13, 1.2, 0.48, 105),
('3166296204977', 'Poivre doux 5 baies', 'serving', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 106),
('3230140002610', 'Moutarde au poivre vert', '100g', 152, 12, 0.9, 3.2, 1.3, NULL, 7.3, 6.6, 2.64, 107),
('3242271000403', 'All italia Pecorino poivre noir', '100g', 185, 8.1, 5.1, 19, 0.5, 1.7, 7.8, 0.63, 0.252, 108),
('3166290130029', 'Poivre gris moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 109),
('3564706626133', '2 hachés soja blé poivre et persil', '100g', 228, 13, 1.2, 6.8, 2.5, NULL, 18, 1.3, 0.52, 110),
('3760122961937', 'Petits sablés Beaufort', '100g', 508, 28, 19, 51, 3, NULL, 9, 1.8, 0.72, 111),
('4027900219642', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 112),
('4027900567767', 'Trois Poivres en grain', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 113),
('3389090021032', 'Mousse de saumon au fromage frais et au poivre du Népal', '100g', 221.1, 19, 8.4, 20, 1.8, NULL, 11, 1.3, 0.52, 114),
('4056489136934', 'Fromage pour raclette 3 poivres', '100g', 360, 28, 18, 1, 1, 0, 26, 1.5, 0.6, 115),
('3273625843216', 'Ribs aux 3 poivres', '100g', 200, 12, 3.8, 2.1, 1.3, NULL, 21, 1.1, 0.44, 116),
('20068004', 'Cayenne Pfeffer', '100g', 0, 0, 0, 0, 0, NULL, 0, 0, 0, 117),
('8423759058382', 'Viande séchée de boeuf au poivre', '100g', 162, 2.8, 1.2, 2.8, 2.1, NULL, 31, 3.3, 1.32, 118),
('3770011616107', 'Fuet au poivre', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 119),
('8712100634529', 'Knorr Peper Room Saus Sauce au poivre à la crème  300ML', '100g', 60, 3.5, 1, 5.6, 1.7, NULL, 1.3, 1.3, 0.52, 120),
('3270160720460', '8 fajitas au poulet', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 121),
('3700118301156', 'Pavé au poivre', '100g', 392, 32, 12, 3.4, 2.4, NULL, 23, 4.8, 1.92, 122),
('3589110393839', 'Beurre poivre et baies roses', '100g', 726, 79, 49, 3, 1.9, NULL, 0.8, 3.32, 1.328, 123),
('3580281893234', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 124),
('3517738126713', 'Pavé au poivre', '100g', 355, 27, 12, 3, 1.7, NULL, 22, 4.8, 1.92, 125),
('3760311991653', 'Poivre noir moulu de ceylan', '100g', 251, 3.3, 0, 64.61, 0, 25.2, 10, NULL, NULL, 126),
('3760324540022', 'Yaourt poivre de timut', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 127),
('3760122961876', 'Petits beurre Comté et poivre noir de Madagascar', '100g', 499, 25, 17, 55, 2.8, 5, 11, 1.6, 0.64, 128),
('3770013307379', 'Noix de Cajou Poivre de Tellicherry', '100g', 604, 45.76, 7.8, 21.96, 6.96, 8.16, 16.76, 1.06, 0.424, 129),
('3162050059036', 'Poivre Noir - Voantsy perifery - relevé', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 130),
('3376963467981', 'Fromage pour raclette, 3 saveurs: poivre, nature et fumée', '100g', 344, 28, 18, 1, 0, 0, 22, 2, 0.8, 131),
('2297893020736', 'Maquereaux fumés au poivre', '100g', 294, 24.3, 5.35, 0, 0, NULL, 18.8, 3.51, 1.404, 132),
('3580288084437', 'Le Mélange grillades poivron rouge, poivre, oignon', '100g', 291, 3.7, 0.9, 45, 30, NULL, 10, 10, 4, 133),
('7613035982055', 'GARDEN GOURMET Le Gourmand Soja, Poivre et Persil 160g', '100g', 173, 4.8, 0.4, 10.4, 3, 4.3, 20, 1.1, 0.44, 134),
('3266481351148', 'Amande citron et poivre vert', '100g', 624, 52, 3.9, 11, 1.4, NULL, 24, 1.9, 0.76, 135),
('8006614051904', 'Poivre noir', '100g', 280, 3.3, 0, 38.3, 0.6, NULL, 10.9, 0.1, 0.04, 136),
('3254637001719', 'Terrine de canard au poivre vert', '100g', 338, 30, 11, 1, 1, NULL, 16, 2.4, 0.96, 137),
('3233130500141', 'Jambonneau  poivre vert', '100g', 154, 8.2, 2.9, 0.5, 0.5, NULL, 20, 1.6, 0.64, 138),
('3580288089944', 'La belle chips', '100g', 546, 36, 4, 45, 0.9, NULL, 7.4, 0.9, 0.36, 139),
('3367824926570', 'Poitrine Plate au poivre', '100g', 308, 21.4, 7.9, 0.5, 0.5, NULL, 28.6, 5.47, 2.188, 140),
('7610071046246', 'Poivre et ail', '100g', 272, 2.7, 0.6, 43, 3.7, 19, 9.6, 14.6, 5.84, 141),
('3270160893089', 'Arancini cacio et pepe', '100g', 254, 9.9, 4.5, 33, 2.3, 1.2, 7.6, 1.2, 0.48, 142),
('3183811059287', 'Poivre noir', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 143),
('3760012400287', 'Sel de Guerande aux poivres et baies roses', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 144),
('59597032', 'Poivre noir', '100g', 330, 7.5, 2.9, 39.5, 0.64, 25.7, 13.3, 0.09, 0.036, 145),
('3367651009590', 'Le XXL Poivre', '100g', 289, 17, 4.7, 22, 1.7, NULL, 12, 0.73, 0.292, 146),
('3547130071984', 'Mélange de poivres façon O&CO.', '100g', 304, 3.3, 1, 45, 38, NULL, 11, 0, 0, 147),
('3770025932514', 'Rillettes de truite au poivre vert', '100g', 170, 12, 6.7, 3.1, 1.3, NULL, 12, 1, 0.4, 148),
('3166290200852', 'Piment de cayenne extra fort moulus', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 149),
('3365629130024', 'Rillettes de maquereaux au poivre de kampot', '100g', 250, 21, 5.5, 12, 0.5, NULL, 15, 0.62, 0.248, 150),
('3760272100217', 'Mousse de canard au poivre vert', '100g', 479, 49, 1, 2, 1, NULL, 1, 10, 4, 151),
('3168930167891', 'Lay\'s Paysanne saveur fromage du Jura et poivre noir', '100g', 507, 28, 3, 55, 2.2, 4, 6.5, 1.2, 0.48, 152),
('3507170120103', 'Terrine de volaille au poivre vert Bio , 180g', '100g', 240, 19, 6.9, 0.7, 0.5, 3, 18, 1.2, 0.48, 153),
('3596710406418', 'Raclette aux 3 poivres', '100g', 362, 28, 18, 1, 1, 1.2, 26, 1.5, 0.6, 154),
('3265980164327', 'Brochettes de bœuf aux poivres', '100g', 234, 19, 6.8, 1.5, 0.7, NULL, 14, 1.1, 0.44, 155),
('3369640019641', 'La Buchette Poivre', '100g', 270, 22, 13.4, 2.05, 2.05, NULL, 16.1, 1, 0.4, 156),
('3278584521632', 'Poivre noir en grains', '100g', 330, 7.5, 2.9, 39.5, 0.64, 25.7, 13.3, 0.09, 0.036, 157),
('3517737622711', 'Pavé enrobé au poivre VPF', '100g', 367, 29, 11, 3.6, 2.3, NULL, 22, 5.1, 2.04, 158),
('5425010202896', 'Boeuf sauté au poivre noir', '100g', 111, 5.4, 1.4, 3, 1.3, NULL, 12.5, 0.1, 0.04, 159),
('3073870105417', 'Sardines à huile olive extra et poivre vert', '100g', 254, 18, 4.7, 0.5, 0.5, 0.5, 23, 0.84, 0.336, 160),
('3320686', 'Poivre noir en grains', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 161),
('965446', 'Poivre noir moulu', '100g', 25, 56, 45, 26, 3, 23, 2, 0.09, 0.036, 162),
('3278584570029', 'Poivre Noir Moulu Bio', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 163),
('9139787', 'Poivre noir moulin', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 164),
('8423018254661', 'Poivre Noir Entier', '100g', 263, 3.26, NULL, 63.95, 0.64, NULL, 10.39, 20, 8, 165),
('3760280090272', 'CROC poivre de Kampot et sel 110g', '100g', 573, 45.14, 8.16, 19.97, 4.61, NULL, 19.81, 1.11, 0.444, 166),
('3560071460518', 'Jambon de Bayonne frotté au poivre', '100g', 243, 13, 4.8, 0.6, 0.5, 0.6, 31, 4.9, 1.96, 167),
('3770025464282', 'Chocolat gingembre poivre', '100g', 657.2, 56.2, 26.7, 21.8, 9.7, 5.8, 10.9, 0.1, 0.04, 168),
('3770025932514', 'Rillettes de truite au poivre vert', '100g', 170, 12, 6.7, 3.1, 1.3, NULL, 12, 1, 0.4, 169),
('3166290200852', 'Piment de cayenne extra fort moulus', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 170),
('3365629130024', 'Rillettes de maquereaux au poivre de kampot', '100g', 250, 21, 5.5, 12, 0.5, NULL, 15, 0.62, 0.248, 171),
('5414360000000', NULL, '100g', 527, 32.9, 3.4, 51.8, 2.8, NULL, 6, 1.7, 0.68, 172),
('20491062', NULL, '100g', 88, 3.3, 0.3, 12.5, 12.2, NULL, 1, 1.13, 0.452, 173),
('7610100000000', 'Original Chips Paprika', '100g', 544, 34, 2, 51, 5.1, 5.3, 5.5, 1.2, 0.48, 174),
('4316270000000', 'Rote und Grüne Paprikaglocken', '100g', 187, 17, 10, 3.2, 1.1, NULL, 3.7, 2.7, 1.08, 175),
('3760080000000', NULL, '100g', 409, 10, 0.9, 68, 3.1, 3.4, 10, 2.1, 0.84, 176),
('3760340000000', NULL, '100g', 92, 3.6, 3.3, 6.7, 0.3, 16, 7.3, 0.47, 0.188, 177),
('3760370000000', NULL, '100g', 431, 14, 1.6, 60, 2.5, 5.5, 13.5, 0.73, 0.292, 178),
('3760370000000', NULL, '100g', 415, 12.5, 0.9, 56, 2, 8, 15.7, 1.34, 0.536, 179),
('3336970000000', NULL, '100g', 510, 33, 2.8, 46, 2.5, 4.6, 5.9, 1.3, 0.52, 180),
('4104420000000', 'Peperoni, eingelegt', '100g', 26, 0.6, 0.1, 3.3, 0.5, 2.4, 0.6, 5, 2, 181),
('4061460000000', 'Thunfischsalat mit Paprika', '100g', 258, 21, 2, 6.6, 4.9, 0, 11, 1.5, 0.6, 182),
('3760320000000', NULL, '100g', 265, 21, 7, 1, 0.8, NULL, 17, 1.9, 0.76, 183),
('3770010000000', NULL, '100g', 602, 44, 7.5, 21.5, 7.3, 7.8, 16, 1, 0.4, 184),
('3760350000000', NULL, '100g', 261, 4.4, 1.59, 43.8, 3.1, 3.8, 10.8, 1.44, 0.576, 185),
('3449870000000', NULL, '100g', 470, 38, 17, 5, 2, NULL, 27, 5.1, 2.04, 186),
('3276290000000', NULL, '100g', 115, 2, 0.7, 2.6, 0.6, NULL, 21, NULL, NULL, 187),
('2600720000000', NULL, '100g', 597, 46, 9.4, 23, 6.8, 4.6, 21, 0.8, 0.32, 188),
('4027900000000', NULL, '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 189),
('2600720000000', NULL, '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 190),
('2007030000000', NULL, '100g', 495, 25, 2.7, 62, 2.4, 3.6, 3.5, 2.1, 0.84, 191),
('3760090000000', NULL, '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 192),
('3175680000000', NULL, '100g', 226, 7.3, 0.8, 30, 2.2, 4.3, 7.9, 1, 0.4, 193),
('7610100000000', 'Snacketti Paprika Shells', '100g', 445, 17, 1.5, 67, 3, 3.5, 5, 2.6, 1.04, 194),
('3222480000000', NULL, '100g', 499, 25, 2, 62, 5.7, 4.7, 4.2, 1.3, 0.52, 195),
('7613040000000', NULL, '100g', 176, 10, 4.8, 4.1, 1.2, 4.7, 15, 1.1, 0.44, 196),
('4000400000000', 'Brunch - Paprika & Peperoni', '100g', 211, 20, 16, 3.5, 3.3, NULL, 4.3, 1.3, 0.52, 197),
('3456300000000', NULL, '100g', 128, 1.8, 0.9, 59.5, 4.8, 9.8, 11.6, 1.2, 0.48, 198),
('4004980000000', 'Cashews ohne Fett im Ofen geröstet Paprika', '100g', 595, 45, 8.6, 29, 8.8, NULL, 18, 2.2, 0.88, 199),
('3770020000000', NULL, '100g', 130, 3.7, 0.3, 21, 1.5, 1, 2.8, 0.54, 0.216, 200),
('29021673', 'Peperoni mazedonisch scharf', '100g', 19, 0.5, 0.5, 3, 2.8, NULL, 0.7, 2.2, 0.88, 201),
('8410080000000', NULL, '100g', 489, 25.5, 2.9, 56, 2.6, 5, 6.4, 1.25, 0.5, 202),
('20005702', 'Cruspies Paprika', '100g', 514, 31.8, 4.4, 40.8, 7.7, NULL, 13.9, 2.2, 0.88, 203),
('3046690000000', NULL, '100g', 534, 32.9, 3.4, 51.7, 2.2, NULL, 5.8, 1.3, 0.52, 204),
('8718540000000', NULL, '100g', 516, 29.3, 2.4, 54.5, 2.2, NULL, 6.4, 1.3, 0.52, 205),
('8718160000000', NULL, '100g', 478, 22, 1.7, 60.1, 1, NULL, 7.5, 2.6, 1.04, 206),
('8718540000000', NULL, '100g', 515, 29.2, 2.4, 54.6, 2.2, NULL, 6.4, 1.3, 0.52, 207),
('8718160000000', NULL, '100g', 534, 32.9, 3.4, 51.7, 2.2, NULL, 5.8, 1.3, 0.52, 208),
('8718540000000', NULL, '100g', 468, 20.2, 1.9, 60.3, 1.9, NULL, 9.1, 1.8, 0.72, 209),
('3278580000000', NULL, '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210),
('7614800000000', NULL, '100g', 450, 15, 10, 64, 5.3, 3.7, 13, 2.1, 0.84, 211),
('4018080000000', NULL, 'serving', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 212),
('3263860000000', NULL, '100g', 183, 9, 1.9, 1.6, 0, NULL, 23.3, 2.1, 0.84, 213),
('20851316', 'Wiesenländer Chili & Paprika', '100g', 351, 27, 19, 0, 0, NULL, 27, 1.2, 0.48, 214),
('3276720000000', NULL, '100g', 207, 14, 4.1, 2, 0.5, NULL, 18, 1.8, 0.72, 215),
('2225030000000', NULL, '100g', 149, 14, 4.2, 0.7, 0.7, 0, 16, 1.6, 0.64, 216),
('3266980000000', NULL, '100g', 202, 15, 4.2, 0, 0, 0, 17, 1.2, 0.48, 217),
('3266980000000', NULL, '100g', 194, 14, 4.2, 0.7, 0.7, 0, 16, 1.6, 0.64, 218),
('3250390000000', NULL, '100g', 211, 15, 4, 2.7, 1, 0, 16, 1.1, 0.44, 219),
('3564710000000', NULL, '100g', 175, 11, 3.2, 1.9, 0, 0, 17, 0.94, 0.376, 220),
('4056490000000', NULL, '100g', 273, 22.5, 11.5, 0.5, 0.5, 0.5, 17, 3.5, 1.4, 221),
('4056490000000', NULL, '100g', 471, 21, 2.1, 59.8, 3.8, NULL, 7.8, 1.05, 0.42, 222),
('8697440000000', NULL, '100g', 441, 17.27, 1.79, 43.67, 0, NULL, 11.69, 8, 3.2, 223),
('4061460000000', 'Vegane Steaks - Paprika', '100g', 172, 6.9, 0.9, 9.1, 3.3, NULL, 17, 1.7, 0.68, 224),
('3222480000000', NULL, '100g', 130, 0.9, 0.3, 8.9, 7.5, 1, 21, 1.2, 0.48, 225),
('20638955', NULL, '100g', 107, 2.5, 0.9, 0, 0, NULL, 21, 0.9, 0.36, 226),
('4017100000000', NULL, '100g', 519, 30, 13, 54, 1.8, 4.8, 5.9, 0, 0, 227),
('5413400000000', NULL, '100g', 266, 25, 2, 5.1, 3.5, 2.9, 3.7, 1.5, 0.6, 228),
('8596100000000', NULL, '100g', 401, 12, 7.6, 66, 2.4, 0, 7.7, 7.7, 3.08, 229),
('8437020000000', NULL, '100g', 128, 5.1, 2, 1.5, 0.4, NULL, 19.1, NULL, NULL, 230),
('4001240000000', NULL, '100g', 534, 33, 3, 50, 2.8, NULL, 6, 1.6, 0.64, 231),
('4260480000000', 'Paprika Olive', '100g', 242, 20, 3, 6, 2.6, NULL, 7.6, 1.8, 0.72, 232),
('8002350000000', NULL, '100g', 658, 60, 5.7, 3.7, 3.5, 7.7, 22, 0.8, 0.32, 233),
('7610100000000', 'Zweifel Peanuts Paprika', '100g', 565, 45, 8.4, 12, 5.4, 7.5, 24, 2.43, 0.972, 234),
('7610100000000', 'Original Chips Paprika', '100g', 544, 34, 2, 51, 5.1, 5.3, 5.5, 1.2, 0.48, 235),
('7610100000000', 'Cractiv Chips Paprika', '100g', 469, 20, 1, 60, 6, 6, 7, 1.4, 0.56, 236),
('3701460000000', NULL, '100g', 132.4, 7.9, 4.6, 8.7, 2.4, 4.3, 4.5, 0.8, 0.32, 237),
('3700370000000', NULL, '100g', 129, 7.7, 0.9, 8.1, 2.1, NULL, 5.6, 0.7, 0.28, 238),
('3770010000000', NULL, '100g', 448, 16.9, 1.9, 58, 11.6, NULL, 11.2, 1.07, 0.428, 239),
('3770025932514', 'Rillettes de truite au poivre vert', '100g', 170, 12, 6.7, 3.1, 1.3, NULL, 12, 1, 0.4, 240),
('3166290200852', 'Piment de cayenne extra fort moulus', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 241),
('3365629130024', 'Rillettes de maquereaux au poivre de kampot', '100g', 250, 21, 5.5, 12, 0.5, NULL, 15, 0.62, 0.248, 242),
('3760272100217', 'Mousse de canard au poivre vert', '100g', 479, 49, 1, 2, 1, NULL, 1, 10, 4, 243),
('3168930167891', 'Lay\'s Paysanne saveur fromage du Jura et poivre noir', '100g', 507, 28, 3, 55, 2.2, 4, 6.5, 1.2, 0.48, 244),
('3507170120103', 'Terrine de volaille au poivre vert Bio , 180g', '100g', 240, 19, 6.9, 0.7, 0.5, 3, 18, 1.2, 0.48, 245),
('3596710406418', 'Raclette aux 3 poivres', '100g', 362, 28, 18, 1, 1, 1.2, 26, 1.5, 0.6, 246),
('3265980164327', 'Brochettes de bœuf aux poivres', '100g', 234, 19, 6.8, 1.5, 0.7, NULL, 14, 1.1, 0.44, 247),
('3369640019641', 'La Buchette Poivre', '100g', 270, 22, 13.4, 2.05, 2.05, NULL, 16.1, 1, 0.4, 248),
('3278584521632', 'Poivre noir en grains', '100g', 330, 7.5, 2.9, 39.5, 0.64, 25.7, 13.3, 0.09, 0.036, 249),
('3517737622711', 'Pavé enrobé au poivre VPF', '100g', 367, 29, 11, 3.6, 2.3, NULL, 22, 5.1, 2.04, 250),
('5425010202896', 'Boeuf sauté au poivre noir', '100g', 111, 5.4, 1.4, 3, 1.3, NULL, 12.5, 0.1, 0.04, 251),
('3073870105417', 'Sardines à huile olive extra et poivre vert', '100g', 254, 18, 4.7, 0.5, 0.5, 0.5, 23, 0.84, 0.336, 252),
('3320686', 'Poivre noir en grains', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 253),
('965446', 'Poivre noir moulu', '100g', 25, 56, 45, 26, 3, 23, 2, 0.09, 0.036, 254),
('3278584570029', 'Poivre Noir Moulu Bio', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 255),
('9139787', 'Poivre noir moulin', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 256),
('8423018254661', 'Poivre Noir Entier', '100g', 263, 3.26, NULL, 63.95, 0.64, NULL, 10.39, 20, 8, 257),
('3760280090272', 'CROC poivre de Kampot et sel 110g', '100g', 573, 45.14, 8.16, 19.97, 4.61, NULL, 19.81, 1.11, 0.444, 258),
('3256228438218', 'Raclette sans croûte 3 poivres - Nature', '100g', 342, 28, 18, 0, 0, 0, 22, 0.6, 0.24, 259),
('3256229522008', 'Snacks poppés aux légumineuses saveur fromage poivre fumé', '100g', 421, 12, 1.7, 64, 1.5, 8.7, 9.9, 0.49, 0.196, 260),
('3253015300086', 'Snacks poppés aux légumineuses saveur fromage poivre fumé', '100g', 421, 12, 1.7, 64, 1.5, 8.7, 9.9, 0.49, 0.196, 261),
('3256228418999', 'Pavé de saumon au poivre de Timut', '100g', 232, 15, 2.3, 0.5, 0.5, NULL, 24, 3.1, 1.24, 262),
('3256228100252', 'Poivre gris moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 263),
('3760024930055', 'Pate au poivre vert', '100g', 314, 27, 9.7, 1, 0.5, NULL, 17, 1.575, 0.63, 264),
('3256228740014', 'Assortiment de sauces Béarnaise Tartare Poivre Bourguignonne', '100g', 447.25, 40.5, 3.35, 5.825, 3.45, 0.7, 1.05, 2.2, 0.88, 265),
('3760083880438', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 266),
('3501890002176', 'Rillettes de maquereau fumé au poivre', '100g', 307, 28, 16, 0.8, 0.7, NULL, 13, 1.2, 0.48, 267),
('3166296204977', 'Poivre doux 5 baies', 'serving', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 268),
('3230140002610', 'Moutarde au poivre vert', '100g', 152, 12, 0.9, 3.2, 1.3, NULL, 7.3, 6.6, 2.64, 269),
('3242271000403', 'All’italia Pecorino poivre noir', '100g', 185, 8.1, 5.1, 19, 0.5, 1.7, 7.8, 0.63, 0.252, 270),
('3166290130029', 'Poivre gris moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 271),
('3564706626133', '2 hachés soja blé poivre et persil', '100g', 228, 13, 1.2, 6.8, 2.5, NULL, 18, 1.3, 0.52, 272),
('3760122961937', 'Petits sablés Beaufort', '100g', 508, 28, 19, 51, 3, NULL, 9, 1.8, 0.72, 273),
('4027900219642', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 274),
('4027900567767', 'Trois Poivres en grain', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 275),
('3389090021032', 'Mousse de saumon au fromage frais et au poivre du Népal', '100g', 221.1, 19, 8.4, 20, 1.8, NULL, 11, 1.3, 0.52, 276),
('4056489136934', 'Fromage pour raclette 3 poivres', '100g', 360, 28, 18, 1, 1, 0, 26, 1.5, 0.6, 277),
('3273625843216', 'Ribs aux 3 poivres', '100g', 200, 12, 3.8, 2.1, 1.3, NULL, 21, 1.1, 0.44, 278),
('20068004', 'Cayenne Pfeffer', '100g', 0, 0, 0, 0, 0, NULL, 0, 0, 0, 279),
('8423759058382', 'Viande séchée de boeuf au poivre', '100g', 162, 2.8, 1.2, 2.8, 2.1, NULL, 31, 3.3, 1.32, 280),
('3770011616107', 'Fuet au poivre', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 281),
('8712100634529', 'Knorr Peper Room Saus Sauce au poivre à la crème  300ML', '100g', 60, 3.5, 1, 5.6, 1.7, NULL, 1.3, 1.3, 0.52, 282),
('3270160720460', '8 fajitas au poulet', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 283),
('3700118301156', 'Pavé au poivre', '100g', 392, 32, 12, 3.4, 2.4, NULL, 23, 4.8, 1.92, 284),
('3589110393839', 'Beurre poivre et baies roses', '100g', 726, 79, 49, 3, 1.9, NULL, 0.8, 3.32, 1.328, 285),
('3580281893234', 'Poivre noir moulu', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 286),
('3517738126713', 'Pavé au poivre', '100g', 355, 27, 12, 3, 1.7, NULL, 22, 4.8, 1.92, 287),
('3760311991653', 'Poivre noir moulu de ceylan', '100g', 251, 3.3, 0, 64.61, 0, 25.2, 10, NULL, NULL, 288),
('3760324540022', 'Yaourt poivre de timut', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 289),
('3760122961876', 'Petits beurre Comté et poivre noir de Madagascar', '100g', 499, 25, 17, 55, 2.8, 5, 11, 1.6, 0.64, 290),
('3770013307379', 'Noix de Cajou Poivre de Tellicherry', '100g', 604, 45.76, 7.8, 21.96, 6.96, 8.16, 16.76, 1.06, 0.424, 291),
('3162050059036', 'Poivre Noir - Voantsy perifery - relevé', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 292),
('3376963467981', 'Fromage pour raclette, 3 saveurs: poivre, nature et fumée', '100g', 344, 28, 18, 1, 0, 0, 22, 2, 0.8, 293),
('2297893020736', 'Maquereaux fumés au poivre', '100g', 294, 24.3, 5.35, 0, 0, NULL, 18.8, 3.51, 1.404, 294),
('3580288084437', 'Le Mélange grillades poivron rouge, poivre, oignon', '100g', 291, 3.7, 0.9, 45, 30, NULL, 10, 10, 4, 295),
('7613035982055', 'GARDEN GOURMET Le Gourmand Soja, Poivre et Persil 160g', '100g', 173, 4.8, 0.4, 10.4, 3, 4.3, 20, 1.1, 0.44, 296),
('3266481351148', 'Amande citron et poivre vert', '100g', 624, 52, 3.9, 11, 1.4, NULL, 24, 1.9, 0.76, 297),
('8006614051904', 'Poivre noir', '100g', 280, 3.3, 0, 38.3, 0.6, NULL, 10.9, 0.1, 0.04, 298),
('3254637001719', 'Terrine de canard au poivre vert', '100g', 338, 30, 11, 1, 1, NULL, 16, 2.4, 0.96, 299),
('3233130500141', 'Jambonneau  poivre vert', '100g', 154, 8.2, 2.9, 0.5, 0.5, NULL, 20, 1.6, 0.64, 300),
('3580288089944', 'La belle chips', '100g', 546, 36, 4, 45, 0.9, NULL, 7.4, 0.9, 0.36, 301),
('3367824926570', 'Poitrine Plate au poivre', '100g', 308, 21.4, 7.9, 0.5, 0.5, NULL, 28.6, 5.47, 2.188, 302),
('7610071046246', 'Poivre et ail', '100g', 272, 2.7, 0.6, 43, 3.7, 19, 9.6, 14.6, 5.84, 303),
('3270160893089', 'Arancini cacio et pepe', '100g', 254, 9.9, 4.5, 33, 2.3, 1.2, 7.6, 1.2, 0.48, 304),
('3183811059287', 'Poivre noir', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 305),
('3760012400287', 'Sel de Guerande aux poivres et baies roses', '100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 306),
('59597032', 'Poivre noir', '100g', 330, 7.5, 2.9, 39.5, 0.64, 25.7, 13.3, 0.09, 0.036, 307),
('3367651009590', 'Le XXL Poivre', '100g', 289, 17, 4.7, 22, 1.7, NULL, 12, 0.73, 0.292, 308),
('3547130071984', 'Mélange de poivres façon O&CO.', '100g', 304, 3.3, 1, 45, 38, NULL, 11, 0, 0, 309);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'customer',
  `age` int(11) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `sexe` varchar(50) DEFAULT NULL,
  `sport` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `age`, `taille`, `sexe`, `sport`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$eIUI0tDGqwqqUIJsH2neFeqd9yG.FoqUw/xC7xHGzpzZGtYHibNh6', 'admin', NULL, NULL, NULL, NULL),
(15, 'mhgj', 'jhg@gmail.com', '$2y$10$IXE.FG4gi0ozzMj40gdawendkE5zR6h.9AakGILX.e/3LJaWXJv.2', 'customer', 23, 100, '3', 'faible'),
(16, 'ayoub', 'ayoub@gmail.com', '$2y$10$eZD1ccZIulV3Qn4BXJA6m.Ln2/9LZnQ.rG7Bhzc8xHnP7Imkjv9Lu', 'customer', 23, 184, '1', 'moyen'),
(14, 'lemsoudi', 'bouzadi@gmail.com', '$2y$10$D/.nDiyjGpAT/AifY2nJ1eUck.N2382A.BcGyZj7Y7SDhO.lkwNS2', 'customer', 23, 104, '0', 'faible');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
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
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
