-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
<<<<<<< HEAD
-- Время создания: Янв 27 2023 г., 11:24
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30
=======
-- Время создания: Окт 22 2022 г., 23:13
-- Версия сервера: 10.7.5-MariaDB
-- Версия PHP: 7.2.34
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bdshka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
<<<<<<< HEAD
  `id` int NOT NULL,
  `message` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
=======
  `id` int(11) NOT NULL,
  `message` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `message`, `date`) VALUES
(3, '134', '2022-10-22 18:57:11'),
(3, '124', '2022-10-22 19:00:33'),
(3, '2352352', '2022-10-22 19:00:36'),
(3, 'Обновочка', '2022-10-22 19:02:05'),
(3, 'ОПА', '2022-10-22 19:02:08'),
(3, 'И еще раз', '2022-10-22 19:02:14'),
(3, '23', '2022-10-22 19:03:31'),
(3, '234', '2022-10-22 19:03:35'),
(3, '123', '2022-10-22 19:03:57'),
(3, '234', '2022-10-22 19:04:56'),
(3, '345', '2022-10-22 19:05:02'),
(1, '23', '2022-10-22 19:05:30'),
<<<<<<< HEAD
(3, 'УРА, РАБОТАЕТ!', '2022-10-22 20:05:48'),
(1, 'Базару ', '2023-01-12 10:07:48'),
(1, 'Базару 0', '2023-01-12 10:07:56'),
(4, 'я родился!', '2023-01-25 13:52:40');
=======
(3, 'УРА, РАБОТАЕТ!', '2022-10-22 20:05:48');
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
<<<<<<< HEAD
  `id` int NOT NULL,
  `chatHash` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
=======
  `id` int(11) NOT NULL,
  `chatHash` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `chatHash`) VALUES
<<<<<<< HEAD
(1, '0d3c5e60299bdacc1fbb51d132d022a5');
=======
(1, '71b6b19fc269182d27fc7418ab3e7663');
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
<<<<<<< HEAD
  `id` int NOT NULL,
  `login` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
=======
  `id` int(11) NOT NULL,
  `login` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `token`) VALUES
<<<<<<< HEAD
(1, 'vasya', '123', 'Vasya Pupkin', '121e60192631a08e0f4cfedc4669ed08'),
(2, 'petya', '111', 'petrovich', NULL),
(3, 'masha', '123', 'masha killer', '9f2214ad36c951b5898bbc3f280b2035'),
(4, 'Lexa', '123', 'Lexa Gang', '2cf0121f388ef1c664f78c2f64dcf065'),
(5, 'Bratik', '123', 'Brat2', NULL);
=======
(1, 'vasya', '123', 'Vasya Pupkin', 'ae29416cff9a54f7b2c6040dd85d9c78'),
(2, 'petya', '111', 'petrovich', NULL),
(3, 'masha', '123', 'masha killer', '9f2214ad36c951b5898bbc3f280b2035'),
(9, 'leha', '123', 'leha', NULL);
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
<<<<<<< HEAD
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
