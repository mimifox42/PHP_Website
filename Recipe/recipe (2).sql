-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2022 at 06:22 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe_info`
--

DROP TABLE IF EXISTS `recipe_info`;
CREATE TABLE IF NOT EXISTS `recipe_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `recipe_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recipe_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recipe_ingredients` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recipe_instructions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `recipe_info`
--

INSERT INTO `recipe_info` (`id`, `name`, `recipe_name`, `recipe_description`, `recipe_ingredients`, `recipe_instructions`) VALUES
(15, 'mimi', 'Chocolate Chip Cookies', 'easy chewy CC cookies', '2 eggs, 1 stick margarine, 2 cups sugar, .5 cup cc, 1.5 cups flour, 1 teaspoon of baking powder and vanilla', 'mix all ingredients together and add cc to taste'),
(16, 'Sarah', 'Home made Pizza', 'Simple pizza at home using store bought pizza dough', '1 store bought pizza dough, .5 can marinara suace, 1 pack of cheese ', 'spread out dough and layer with sauce and cheese, season with spices to taste'),
(18, 'Anne', 'Fries', 'Quick fries at home using an airfryer', '2 regular potatoes , frying oil, salt and pepper to taste', 'peel and chop potatoes to french fry shape, mix with oil and psices and bake in the airfryer for 20 minutes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
