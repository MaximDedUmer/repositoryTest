-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2023 г., 04:18
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Kollage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id_group` int NOT NULL,
  `name_group` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id_group`, `name_group`) VALUES
(1, 'ИС - 402'),
(2, 'ИС - 401');

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id_lesson` int NOT NULL,
  `name_lesson` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id_lesson`, `name_lesson`) VALUES
(1, 'Программирование и разработка ПО'),
(2, 'Технический дизайн и графика'),
(3, 'Автоматизация производственных процессов'),
(4, 'Информационная безопасность'),
(5, 'Программирование на C++'),
(6, 'Электрические схемы и монтаж'),
(7, 'Сетевые технологии'),
(8, 'Микроэлектроника и микроконтроллеры'),
(9, '');

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE `rating` (
  `id_rating` int NOT NULL,
  `id_user` int NOT NULL,
  `id_lesson` int NOT NULL,
  `rating` int NOT NULL,
  `description_rating` varchar(60) NOT NULL,
  `date_rating` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `rating`
--

INSERT INTO `rating` (`id_rating`, `id_user`, `id_lesson`, `rating`, `description_rating`, `date_rating`) VALUES
(1, 1, 1, 5, 'КР', '2023-11-16'),
(2, 1, 1, 3, 'устный ответ', '2023-12-01'),
(3, 1, 4, 5, 'КР', '2023-11-13'),
(4, 1, 4, 5, 'КР', '2023-11-22'),
(5, 1, 4, 4, 'КР', '2023-11-14'),
(6, 1, 4, 4, 'КР', '2023-11-23'),
(7, 1, 2, 3, 'Тест', '2023-11-11'),
(8, 1, 2, 5, 'Тест', '2023-10-17'),
(9, 1, 2, 4, 'Тест', '2023-11-21'),
(10, 1, 2, 5, 'Тест', '2023-10-10'),
(11, 1, 4, 4, 'КР', '2023-12-05'),
(12, 1, 6, 3, 'Устный ответ', '2023-12-06'),
(13, 1, 6, 5, 'Тест', '2023-12-07'),
(14, 1, 5, 2, 'Практическая работа', '2023-12-08'),
(15, 1, 5, 4, 'Тест', '2023-12-09'),
(16, 1, 1, 4, 'КР', '2023-12-05'),
(17, 1, 1, 3, 'Устный ответ', '2023-12-06'),
(18, 1, 2, 5, 'Тест', '2023-12-07'),
(19, 1, 2, 2, 'Практическая работа', '2023-12-08'),
(20, 1, 3, 3, 'Устный ответ', '2023-12-06'),
(21, 1, 4, 5, 'Тест', '2023-12-07'),
(22, 1, 3, 2, 'Практическая работа', '2023-12-08'),
(23, 1, 6, 3, 'Устный ответ', '2023-12-06'),
(24, 1, 7, 5, 'Тест', '2023-12-07'),
(25, 1, 7, 2, 'Практическая работа', '2023-12-08'),
(26, 1, 7, 3, 'Устный ответ', '2023-12-06'),
(27, 1, 8, 5, 'Тест', '2023-12-07'),
(28, 1, 8, 2, 'Практическая работа', '2023-12-08'),
(29, 1, 8, 3, 'Устный ответ', '2023-12-06'),
(30, 1, 1, 5, 'Тест', '2023-12-07'),
(31, 1, 2, 2, 'Практическая работа', '2023-12-08'),
(70, 2, 6, 3, 'Практическая работа', '2023-12-08'),
(71, 2, 3, 4, 'Тест', '2023-12-09'),
(72, 2, 8, 2, 'КР', '2023-12-05'),
(73, 2, 1, 5, 'Устный ответ', '2023-12-06'),
(74, 2, 4, 4, 'Тест', '2023-12-07'),
(75, 2, 2, 2, 'Практическая работа', '2023-12-08'),
(76, 2, 7, 3, 'Тест', '2023-12-09'),
(77, 2, 5, 5, 'Устный ответ', '2023-12-05'),
(79, 2, 1, 3, 'Тест', '2023-12-07'),
(80, 2, 4, 2, 'Устный ответ', '2023-12-08'),
(81, 2, 2, 4, 'Тест', '2023-12-09'),
(82, 2, 3, 5, 'Практическая работа', '2023-12-05'),
(83, 2, 1, 3, 'Тест', '2023-12-06'),
(84, 2, 8, 2, 'Устный ответ', '2023-12-07'),
(86, 2, 5, 5, 'Тест', '2023-12-09'),
(87, 2, 7, 3, 'Практическая работа', '2023-12-05'),
(88, 2, 6, 4, 'Тест', '2023-12-06'),
(89, 2, 3, 2, 'Устный ответ', '2023-12-07'),
(90, 2, 8, 5, 'Тест', '2023-12-08'),
(91, 2, 4, 3, 'Практическая работа', '2023-12-09'),
(92, 2, 1, 4, 'Устный ответ', '2023-12-05'),
(93, 2, 9, 2, 'Тест', '2023-12-06'),
(94, 2, 5, 3, 'КР', '2023-12-07'),
(95, 2, 3, 5, 'Тест', '2023-12-08'),
(96, 2, 6, 4, 'Практическая работа', '2023-12-09'),
(97, 2, 7, 2, 'Тест', '2023-12-05'),
(98, 2, 2, 3, 'Устный ответ', '2023-12-06'),
(99, 2, 1, 5, 'Тест', '2023-12-07'),
(100, 2, 4, 2, 'Практическая работа', '2023-12-08'),
(101, 2, 8, 3, 'Устный ответ', '2023-12-09'),
(102, 2, 9, 4, 'КР', '2023-12-05'),
(103, 2, 5, 5, 'Тест', '2023-12-06'),
(104, 2, 3, 2, 'Практическая работа', '2023-12-07'),
(105, 2, 6, 3, 'Устный ответ', '2023-12-08'),
(106, 2, 7, 5, 'Тест', '2023-12-09'),
(107, 2, 1, 4, 'Тест', '2023-12-05'),
(108, 2, 2, 2, 'КР', '2023-12-06'),
(109, 2, 8, 3, 'Тест', '2023-12-07'),
(110, 2, 4, 5, 'Практическая работа', '2023-12-08'),
(111, 2, 5, 3, 'Тест', '2023-12-09');

-- --------------------------------------------------------

--
-- Структура таблицы `Teachers`
--

CREATE TABLE `Teachers` (
  `id_teacher` int NOT NULL,
  `name_teacher` varchar(30) NOT NULL,
  `surname_teacher` varchar(30) NOT NULL,
  `patronymic_teacher` varchar(30) NOT NULL,
  `id_lesson` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Teachers`
--

INSERT INTO `Teachers` (`id_teacher`, `name_teacher`, `surname_teacher`, `patronymic_teacher`, `id_lesson`) VALUES
(1, 'Дмитрий', 'Иванов', 'Анатольевич', 2),
(2, 'Александр', 'Ковалёв', 'Алексеевич', 3),
(3, 'Демьян', 'Иванов', 'Демьянов', 1),
(4, 'Семён', 'Краснопёров', 'Семёнович', 4),
(5, 'Михаил', 'Газонов', 'Михайлович', 5),
(6, 'Руслан', 'Чернов', 'Русланов', 6),
(7, 'Артем', 'Краснов', 'Артёмович', 7),
(8, 'Евгений', 'Ковалёв', 'Евгеньевич', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `name_user` varchar(30) NOT NULL,
  `surname_user` varchar(30) NOT NULL,
  `patronymic_user` varchar(30) NOT NULL,
  `group_user` int DEFAULT NULL,
  `address_user` varchar(60) NOT NULL,
  `tel_user` varchar(30) NOT NULL,
  `login_user` varchar(30) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `isTeacher` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `surname_user`, `patronymic_user`, `group_user`, `address_user`, `tel_user`, `login_user`, `password_user`, `isTeacher`) VALUES
(1, 'Максим', 'Казанцев', 'Дмитриевич', 1, 'Улица 22', '+78766767765', 'zxc', 'zxc', 0),
(2, 'Иван', 'Иванов', 'Иванович', 2, 'Улица 23', '+78766763456', 'qwe', 'qwe', 0),
(4, 'Дмитрий', 'Иванов', 'Анатольевич', NULL, 'Пушкина 10', '+78766760001', 'qwe1', 'qwe1', 1),
(5, 'Александр', 'Ковалёв', 'Алексеевич', NULL, 'Ленина 15', '+78766760002', 'qwe2', 'qwe2', 1),
(6, 'Демьян', 'Иванов', 'Демьянов', NULL, 'Маяковского 20', '+78766760003', 'qwe3', 'qwe2', 1),
(7, 'Семён', 'Краснопёров', 'Семёнович', NULL, 'Гагарина 5', '+78766760004', 'qwe4', 'qwe4', 1),
(8, 'Михаил', 'Газонов', 'Михайлович', NULL, 'Советская 12', '+78766760005', 'qwe5', 'qwe5', 1),
(9, 'Руслан', 'Чернов', 'Русланов', NULL, 'Кирова 8', '+78766760006', 'qwe6', 'qwe6', 1),
(10, 'Артем', 'Краснов', 'Артёмович', NULL, 'Лермонтова 18', '+78766760007', 'qwe7', 'qwe7', 1),
(11, 'Евгений', 'Ковалёв', 'Евгеньевич', NULL, 'Фрунзе 25', '+78766760008', 'qwe8', 'qwe8', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id_lesson`);

--
-- Индексы таблицы `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_lesson` (`id_lesson`);

--
-- Индексы таблицы `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`id_teacher`),
  ADD KEY `id_lesson` (`id_lesson`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `group_user` (`group_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id_lesson` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT для таблицы `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id_teacher` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_lesson`) REFERENCES `lessons` (`id_lesson`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `Teachers`
--
ALTER TABLE `Teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`id_lesson`) REFERENCES `lessons` (`id_lesson`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_user`) REFERENCES `groups` (`id_group`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
