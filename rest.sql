-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 08:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(50) NOT NULL,
  `dish_img` text NOT NULL,
  `dish_ingridients` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `dish_type` varchar(50) NOT NULL,
  `dish_price` varchar(200) NOT NULL,
  `ingridients` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ingridients`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `dish_name`, `dish_img`, `dish_ingridients`, `dish_type`, `dish_price`, `ingridients`) VALUES
(1, 'Бефстроганов из говядины со сметаной ', './img/1.jpg', 'Говядина – 800 г/Репчатый лук – 80г/ Сметана – 300г /Томатная паста – 30г/Сливочное масло – 40 г/Соль – 4г/Черный молотый перец – 5г/Зелень – 10г\r\n', 'rest', '[0.25,0.04,0.23, 0.3, 0.32, 0.013, 0.6, 0.06]', '[\r\n{\"name\": \"Говядина\", \"weight\": 800, \"price\": 0.25},\r\n{\"name\": \"Репчатый лук\", \"weight\": 80, \"price\": 0.04},\r\n{\"name\": \"Сметана\", \"weight\": 300, \"price\": 0.04},\r\n{\"name\": \"Томатная паста\", \"weight\": 30, \"price\": 0.23},\r\n{\"name\": \"Сливочное масло\", \"weight\": 40, \"price\": 0.3},\r\n{\"name\": \"Соль\", \"weight\": 4, \"price\": 0.32},\r\n{\"name\": \"Черный молотый перец\", \"weight\": 5, \"price\": 0.13},\r\n{\"name\": \"Зелень\", \"weight\": 10, \"price\": 0.6}\r\n]'),
(2, 'Тигровые креветки, жаренные в томатном соусе', './img/3.jpg', 'Креветки тигровые – 400 г/Чеснок – 4г/Соус томатный – 40г/Соевый соус – 20г/Вустерский соус – 10г', 'rest', '', ''),
(3, 'Тост Скаген', './img/6.jpg', 'Белый хлеб – 350г/Сливочное масло – 45г/Креветки – 30г/Укроп – 80г/Майонез – 40г', 'rest', '', ''),
(4, 'Каша манная', './img/12.jpg', 'Молоко – 200 г/Манная крупа – 20 г/Сахар – 5 г/Сливочное масло – 45 г', 'common', '', ''),
(5, 'Пельмени с мясом', './img/14.jpg', 'Лук репчатый – 80г/Свиной фарш – 300 г/Говяжий фарш– 200 г/Соль – 5г/Яйцо – 45г', 'common', '', ''),
(6, 'Салат Оливье', './img/15.jpg', 'Картофель вареный – 38г/Морковь – 19г/Колбаса вареная– 50г/Яйца – 31/Соленый огурец – 43г/Майонез – 50г/Зеленый горошек – 50г', 'common', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
