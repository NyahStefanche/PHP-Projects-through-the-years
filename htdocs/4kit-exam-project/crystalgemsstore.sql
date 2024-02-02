-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране: 14 дек 2022 в 14:28
-- Версия на сървъра: 10.4.17-MariaDB
-- Версия на PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `crystalgemsstore`
--

-- --------------------------------------------------------

--
-- Структура на таблица `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user` varchar(40) NOT NULL,
  `password` char(32) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `admins`
--

INSERT INTO `admins` (`user_id`, `user`, `password`, `type`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin');

-- --------------------------------------------------------

--
-- Структура на таблица `crystals`
--

CREATE TABLE `crystals` (
  `CrystalID` int(10) NOT NULL,
  `Color` enum('Зелен','Червен','Бял') NOT NULL,
  `Name` char(40) NOT NULL,
  `Price` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `crystals`
--

INSERT INTO `crystals` (`CrystalID`, `Color`, `Name`, `Price`) VALUES
(2, 'Червен', 'Рубин', '40'),
(3, 'Бял', 'Диамант', '100'),
(4, 'Зелен', 'Смарагд 2', ' 50'),
(5, 'Зелен', 'Смарагд 3', ' 100');

-- --------------------------------------------------------

--
-- Структура на таблица `discount`
--

CREATE TABLE `discount` (
  `CatalogID` int(10) UNSIGNED NOT NULL,
  `Name` char(40) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `discount`
--

INSERT INTO `discount` (`CatalogID`, `Name`, `discount`, `price`) VALUES
(1, 'Диамант', '40.00', '20.00'),
(2, 'Смарагд', '50.00', '20.00');

-- --------------------------------------------------------

--
-- Структура на таблица `employee`
--

CREATE TABLE `employee` (
  `pers_id` int(10) UNSIGNED NOT NULL,
  `first` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `sex` enum('мъж','жена') NOT NULL,
  `b_day` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `employee`
--

INSERT INTO `employee` (`pers_id`, `first`, `father`, `last`, `sex`, `b_day`, `city`, `street`, `phone`) VALUES
(1, 'Петър', 'Иванов', 'Тодоров', 'мъж', '1952-10-16', 'Шумен', 'Петра 23', '(054) 4-23-21'),
(2, 'Ивайло', 'Петров', 'Иванов', 'мъж', '1966-10-15', 'Шумен', 'Априлов 2', '(054) 6-46-33'),
(3, 'Вяра', 'Крумова', 'Пеева', 'жена', '1965-09-23', 'Шумен', 'А. Златаров 5', '(054) 3-25-45'),
(4, 'Соня', 'Илиева', 'Томова', 'жена', '1971-07-31', 'Шумен', 'Вит 13', '(054) 5-23-15'),
(5, 'Иван', 'Иванов', 'Гюмов', 'мъж', '1960-11-13', 'Шумен', 'Брезник 12', '(054) 2-34-66'),
(6, 'Владимир', 'Капчев', 'Генов', 'мъж', '1970-01-21', 'Шумен', 'Батак 43', '(054) 3-78-97'),
(7, 'Велислава', 'Петрова', 'Динова', 'жена', '1965-10-22', 'София', 'Младост 2', '(02) 33-45-71'),
(8, 'Мария', 'Янева', 'Петрова', 'жена', '1972-04-21', 'Плевен', 'Средна гора 2', '(064) 21-33-67');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Индекси за таблица `crystals`
--
ALTER TABLE `crystals`
  ADD PRIMARY KEY (`CrystalID`);

--
-- Индекси за таблица `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`CatalogID`);

--
-- Индекси за таблица `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`pers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crystals`
--
ALTER TABLE `crystals`
  MODIFY `CrystalID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `CatalogID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `pers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
