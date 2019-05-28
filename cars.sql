-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2019 г., 22:40
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cars`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `manufacturer` text NOT NULL,
  `model` varchar(250) NOT NULL,
  `created` date NOT NULL,
  `horsepower` varchar(250) NOT NULL,
  `transmission` varchar(250) NOT NULL,
  `engine_power` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `name`, `manufacturer`, `model`, `created`, `horsepower`, `transmission`, `engine_power`) VALUES
(1, 'tesla model 3', 'tesla company', '3', '2016-03-03', '258', 'auto', '258'),
(2, 'tesla model s', 'tesla company', 's', '2017-04-20', '228', 'auto', '228'),
(3, '1', '11', '11', '2019-05-18', '1', '1', '1'),
(4, 'tes66', '46567', '2376', '2019-05-30', '7', '7', '7'),
(5, 'test3434', 'BMW', '4564', '2016-03-03', '156', 'auto', '456'),
(6, 'carName345', 'BMW', '344', '2016-03-03', '12', '33', '45'),
(7, 'te6', 'BMW', '236', '2016-03-03', '4', '4', '4'),
(8, 'te6', 'companyname', '236', '2018-04-12', '4', '4', '4'),
(9, 'carName345', 'compan43ame', '344', '2018-04-14', '12', '33', '45'),
(10, 'carName-2', 'companyname', '344', '2018-04-12', '12', '45', '45'),
(28, 'te6', 'companyname', '236', '2018-04-12', '4', '5', '4'),
(31, 'l;l;', 'companyname', '344', '2018-04-12', '12', '45', '45'),
(32, 'carName345', 'companyname', '344', '2018-04-12', '12', '45', '45'),
(33, 'carName56', '0000', '444', '2018-04-12', '12', '45', '45'),
(40, '5rtrt', 'companyname', '344', '2018-04-12', '12', '45', '45'),
(55, '54555', 'wwww', '236', '2018-04-05', '4', '54', '4'),
(56, '4rtrt', 'compan42ame', '43', '2018-04-05', '12', '45', '45'),
(61, 'uy1t', 'compan42ame', '3442', '2018-04-05', '12', '42', '42');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
