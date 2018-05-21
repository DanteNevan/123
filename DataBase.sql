-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 20 2018 г., 17:08
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `Inwentarz`
--

CREATE TABLE `Inwentarz` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Inwentarz`
--

INSERT INTO `Inwentarz` (`id`, `nazwa`, `ilosc`) VALUES
(2, 'Husta', 12),
(3, 'qwqeq', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `haslo` text NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `stanowisko` text NOT NULL,
  `login` text NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `personal`
--

INSERT INTO `personal` (`id`, `haslo`, `imie`, `nazwisko`, `stanowisko`, `login`, `token`) VALUES
(21, 'ada', 'adad', 'Nazwisko', 'afaf', 'aaa', 'KG0pux1CME'),
(22, 'qwertyiuyyt', 'Arsen', 'Danilllll', 'Doc', '123', '3RYtenUY8S'),
(23, '3333333', '1233', '3333333', 'loh', '123', 'LaeGt81HUE'),
(24, '1234', 'Ivan', 'Ivanow', 'lekarz', 'Ivan', 'Tn3fSXlor1');

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int(11) NOT NULL,
  `nazwa_uslugi` varchar(256) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`id`, `nazwa_uslugi`, `cena`) VALUES
(1, 'new_usluga', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Inwentarz`
--
ALTER TABLE `Inwentarz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Inwentarz`
--
ALTER TABLE `Inwentarz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
