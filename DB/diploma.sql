-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2022 г., 15:13
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diploma`
--
CREATE DATABASE IF NOT EXISTS `diploma` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `diploma`;

-- --------------------------------------------------------

--
-- Структура таблицы `cabinets`
--

CREATE TABLE `cabinets` (
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cabinets`
--

INSERT INTO `cabinets` (`type`) VALUES
('102(1)'),
('102(2)'),
('102(3)');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `number` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cont` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `type`, `number`, `cont`) VALUES
(1, 'Комплект ПК HP (Системный блок HP, монитор HP, клавиатура, мышь, и провода)', '102(1)', 'ОС 0031074987\r\nОС 0031074821\r\nОС 0031074819\r\nОС 0031074981\r\nОС 0031074952\r\nОС 0031074951\r\nОС 0031074097\r\nОС 0031074823\r\nОС 0031074824\r\nОС 0031074991\r\nОС 0031074896\r\nОС 00310б/н\r\nМ 00000535\r\nМ 00000509\r\nМ 00000510', 15),
(2, 'Стол офисный (белый, габариты 140х60х74)', '102(1)', 'б\\н', 18),
(3, 'Тумба офисная на колесиках (белая, на 3 секции, габариты 40х45х58)', '102(1)', 'б\\н', 13),
(4, 'Стул офисный ISO (кожаный)', '102(1)', 'б\\н', 21),
(5, 'Стул офисный ISO (тканевый)', '102(1)', 'б\\н', 3),
(6, 'Стул офисный', '102(1)', 'б\\н', 3),
(7, 'Кондиционер Panasonic S-F24DTE5/U-YL24HBE5/CZ-RD513C', '102(1)', 'б\\н', 1),
(8, 'Проектор Epson EMP-X52', '102(1)', 'б\\н', 1),
(9, 'Часы', '102(1)', 'б\\н', 1),
(10, 'Пробковый стенд 90х120 (пластиковая основа)', '102(1)', '01025361', 1),
(11, 'Корзина для мусора (пластик)', '102(1)', 'б\\н', 1),
(12, 'Огнетушитель порошковый ОП-4(з)', '102(1)', '102', 1),
(13, 'Жалюзи (цвет пастельный, 2 метра)', '102(1)', 'б\\н', 3),
(14, 'Стол офисный (белый, габариты 140х60х74)', '102(2)', 'б\\н', 3),
(15, 'Тумба офисная на колесиках (белая, на 3 секции, габариты 40х45х58)', '102(2)', 'б\\н', 4),
(16, 'Шкаф офисный (белый, 5 секций, с дверями, габариты 72х34х195)', '102(2)', 'б\\н', 3),
(17, 'Стул офисный ISO (тканевый)', '102(2)', 'б\\н', 5),
(18, 'Кондиционер Panasonic S-F24DTE5/U-YL24HBE5/CZ-RD513C', '102(2)', 'б\\н', 1),
(19, 'Пробковый стенд 90х120 (пластиковая основа)', '102(2)', 'б\\н', 1),
(20, 'Корзина для мусора (пластик)', '102(2)', 'б\\н', 1),
(21, 'Огнетушитель порошковый ОП-4(з)', '102(2)', 'б\\н', 1),
(22, 'Стол офисный (цвет Ольха, габариты 140х60х74)', '102(2)', 'б\\н', 1),
(23, 'Коммутационный шкаф Cabeus (чёрный, со стеклом)', '102(2)', 'б\\н', 1),
(24, 'Коммутатор HP ProCurve Switch 2510B-24', '102(2)', 'б\\н', 1),
(25, 'Коммутатор D-Link', '102(2)', 'б\\н', 1),
(26, 'Жалюзи (цвет пастельный, 2 метра)', '102(2)', 'б\\н', 1),
(27, 'Жалюзи алюминиевые (ширина 60)', '102(2)', 'б\\н', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'Tinn02', 'zxc'),
(2, 'RSSU', '1234qwer!@#$');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cabinets`
--
ALTER TABLE `cabinets`
  ADD PRIMARY KEY (`type`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
