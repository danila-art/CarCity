-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2021 г., 10:30
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `car_city_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE `car` (
  `id_car` int(11) NOT NULL,
  `name` text NOT NULL,
  `registration_mark` text NOT NULL,
  `identification_number` text NOT NULL,
  `preview_main_choose_page` text NOT NULL,
  `preview_car_page_briefly` text NOT NULL,
  `preview_car_page` text NOT NULL,
  `information_exterior` text NOT NULL,
  `information_interior` text NOT NULL,
  `color_car` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `driver_license`
--

CREATE TABLE `driver_license` (
  `id_license` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `driver_license_number` int(11) NOT NULL,
  `driver_license_series` int(11) NOT NULL,
  `date_of issue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `exterior_img`
--

CREATE TABLE `exterior_img` (
  `id_exterior_img` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `exterior_img_name` text NOT NULL,
  `exterior_img_tmp` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `img_user`
--

CREATE TABLE `img_user` (
  `id_img` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `img_user_name` text NOT NULL,
  `img_user_tmp` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `interior_img`
--

CREATE TABLE `interior_img` (
  `id_interior_img` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `interior_img _name` text NOT NULL,
  `interior_img _tmp` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `passport_user`
--

CREATE TABLE `passport_user` (
  `id_pasport` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pasport_number` int(11) NOT NULL,
  `pasport_series` int(11) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `technical_specifications`
--

CREATE TABLE `technical_specifications` (
  `id_technical_specifications` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `volume` text NOT NULL,
  `fuel` text NOT NULL,
  `power_output` text NOT NULL,
  `drive` text NOT NULL,
  `transmition` text NOT NULL,
  `engine_type` text NOT NULL,
  `expenditure` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `patronymic` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`);

--
-- Индексы таблицы `driver_license`
--
ALTER TABLE `driver_license`
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `exterior_img`
--
ALTER TABLE `exterior_img`
  ADD PRIMARY KEY (`id_exterior_img`),
  ADD KEY `id_car` (`id_car`);

--
-- Индексы таблицы `img_user`
--
ALTER TABLE `img_user`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `interior_img`
--
ALTER TABLE `interior_img`
  ADD PRIMARY KEY (`id_interior_img`),
  ADD KEY `id_car` (`id_car`);

--
-- Индексы таблицы `passport_user`
--
ALTER TABLE `passport_user`
  ADD PRIMARY KEY (`id_pasport`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `technical_specifications`
--
ALTER TABLE `technical_specifications`
  ADD PRIMARY KEY (`id_technical_specifications`),
  ADD KEY `id_car` (`id_car`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `exterior_img`
--
ALTER TABLE `exterior_img`
  MODIFY `id_exterior_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `img_user`
--
ALTER TABLE `img_user`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `interior_img`
--
ALTER TABLE `interior_img`
  MODIFY `id_interior_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `passport_user`
--
ALTER TABLE `passport_user`
  MODIFY `id_pasport` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `technical_specifications`
--
ALTER TABLE `technical_specifications`
  MODIFY `id_technical_specifications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `driver_license`
--
ALTER TABLE `driver_license`
  ADD CONSTRAINT `driver_license_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `exterior_img`
--
ALTER TABLE `exterior_img`
  ADD CONSTRAINT `exterior_img_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`);

--
-- Ограничения внешнего ключа таблицы `img_user`
--
ALTER TABLE `img_user`
  ADD CONSTRAINT `img_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `interior_img`
--
ALTER TABLE `interior_img`
  ADD CONSTRAINT `interior_img_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`);

--
-- Ограничения внешнего ключа таблицы `passport_user`
--
ALTER TABLE `passport_user`
  ADD CONSTRAINT `passport_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `technical_specifications`
--
ALTER TABLE `technical_specifications`
  ADD CONSTRAINT `technical_specifications_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
