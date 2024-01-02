-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Дек 04 2023 г., 12:31
-- Версия сервера: 5.7.39
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zapravka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `avtozapravka`
--

CREATE TABLE `avtozapravka` (
  `id_kolonki` int(45) NOT NULL,
  `id_avtozapravki` int(245) NOT NULL,
  `name_firm` varchar(45) NOT NULL,
  `adress` varchar(45) NOT NULL,
  `vid_topliva` varchar(45) NOT NULL,
  `cena` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `avtozapravka`
--

INSERT INTO `avtozapravka` (`id_kolonki`, `id_avtozapravki`, `name_firm`, `adress`, `vid_topliva`, `cena`) VALUES
(1, 121, 'Лукойл ', 'М4 ЮФО ', 'Дизель', '70'),
(2, 121, 'Лукойл ', 'М4 ЮФО ', 'АИ-98', '55'),
(3, 142, 'Газпром ', 'ул. Серова 2 ', 'АИ-92', '50'),
(4, 214, 'Этиламин ', 'Е58 ', 'АИ-92', '52'),
(5, 121, 'Лукойл ', 'М4 ЮФО ', 'Метан', '22'),
(6, 111, 'Этиламин ', 'ул. Соборная 45', 'АИ-95', '57'),
(7, 142, 'Газпром ', 'ул. Серова 2', 'Дизель', '75'),
(8, 119, 'Роснефть ', 'ул. Соборная 78', 'АИ-98', '50'),
(9, 142, 'Газпром ', 'ул. Серова 2', 'Метан', '25'),
(10, 111, 'Этиламин ', 'ул. Соборная 45', 'Дизель', '80'),
(11, 111, 'Этиламин ', 'ул. Соборная 45', 'Метан', '24'),
(12, 111, 'Этиламин ', 'ул. Соборная 45', 'АИ-92', '48'),
(13, 111, ' Этиламин ', 'ул. Соборная 45', 'АИ-98', '51'),
(14, 144, 'Роснефть ', 'Е58 ', 'Дизель', '78'),
(15, 144, 'Роснефть ', 'Е58 ', 'Метан', '22'),
(16, 144, 'Роснефть ', 'Е58 ', 'АИ-92', '56'),
(17, 144, 'Роснефть', 'Е58', 'АИ-95', '59'),
(18, 119, 'Роснефть', 'ул. Соборная 78', 'Дизель', '74'),
(19, 119, 'Роснефть ', 'ул. Соборная 78', 'Метан', '19'),
(20, 214, 'Этиламин ', 'Е58 ', 'АИ-95', '55'),
(21, 333, 'Этиламин ', 'Е58 ', 'Метан', '22');

--
-- Триггеры `avtozapravka`
--
DELIMITER $$
CREATE TRIGGER `Delete` AFTER DELETE ON `avtozapravka` FOR EACH ROW BEGIN
INSERT INTO avtozapravka_logs(`id`,`id_kolonki`,`id_avtozapravki`,`name_firm`,`adress`,`vid_topliva`,`cena`,`date`,`action`) VALUES (NULL,old.`id_kolonki`,old.`id_avtozapravki`,old.`name_firm`,old.`adress`,old.`vid_topliva`,old.`cena`,NOW(),'Удаление');
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Insert` AFTER INSERT ON `avtozapravka` FOR EACH ROW BEGIN
INSERT INTO avtozapravka_logs(`id`,`id_kolonki`,`id_avtozapravki`,`name_firm`,`adress`,`vid_topliva`,`cena`,`date`,`action`) VALUES (NULL,new.`id_kolonki`,new.`id_avtozapravki`,new.`name_firm`,new.`adress`,new.`vid_topliva`,new.`cena`,NOW(),'Добавление');
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update` AFTER UPDATE ON `avtozapravka` FOR EACH ROW BEGIN
INSERT INTO avtozapravka_logs(`id`,`id_kolonki`,`id_avtozapravki`,`name_firm`,`adress`,`vid_topliva`,`cena`,`date`,`action`) VALUES (NULL,old.`id_kolonki`,old.`id_avtozapravki`,old.`name_firm`,old.`adress`,old.`vid_topliva`,old.`cena`,NOW(),'Изменение');
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `avtozapravka_logs`
--

CREATE TABLE `avtozapravka_logs` (
  `id` int(11) NOT NULL,
  `id_kolonki` int(45) NOT NULL,
  `id_avtozapravki` int(245) NOT NULL,
  `name_firm` varchar(45) NOT NULL,
  `adress` varchar(45) NOT NULL,
  `vid_topliva` varchar(45) NOT NULL,
  `cena` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `avtozapravka_logs`
--

INSERT INTO `avtozapravka_logs` (`id`, `id_kolonki`, `id_avtozapravki`, `name_firm`, `adress`, `vid_topliva`, `cena`, `date`, `action`) VALUES
(1, 23, 333, 'Shel', 'Ткачева 31', 'Дизель', '100', '2023-11-15 15:35:36', 'Добавление'),
(2, 23, 333, 'Shel', 'Ткачева 31', 'Дизель', '100', '2023-11-17 15:20:20', 'Удаление'),
(3, 21, 214, 'Этиламин ', 'Е58 ', 'Метан', '22', '2023-11-18 15:17:15', 'Изменение');

-- --------------------------------------------------------

--
-- Структура таблицы `firma`
--

CREATE TABLE `firma` (
  `id` int(11) NOT NULL,
  `name_firm` varchar(45) NOT NULL,
  `ur_adress` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `firma`
--

INSERT INTO `firma` (`id`, `name_firm`, `ur_adress`, `phone`) VALUES
(1, 'Газпром', 'г. Ростов-на-Дону, ул. Донская ', '+78952545777'),
(2, 'Лукойл ', 'г. Ростов-на-Дону, ул. Соборная ', '+79295875411'),
(3, 'Роснефть  ', 'г. Ростов-на-Дону, ул. Фрунзе', '+79287505115'),
(4, 'Этиламин  ', 'г. Ростов-на-Дону, ул. Орбитальная', '+79285712254');

-- --------------------------------------------------------

--
-- Структура таблицы `firma_logs`
--

CREATE TABLE `firma_logs` (
  `id` int(11) NOT NULL,
  `id_firm` int(11) NOT NULL,
  `name_firm` varchar(45) NOT NULL,
  `ur_adress` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `klients`
--

CREATE TABLE `klients` (
  `id` int(11) NOT NULL,
  `fio` varchar(45) NOT NULL,
  `adress` varchar(45) NOT NULL,
  `phonenumder` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `klients`
--

INSERT INTO `klients` (`id`, `fio`, `adress`, `phonenumder`) VALUES
(1, 'Гаaзманов А. И', 'ул. Соборная 7', '+78985645544'),
(2, 'Иванов А. А.', 'ул. Кристок 89', '+79895125477'),
(3, 'Юсупов М. А. ', 'ул. Висторная 1 ', '+79295841136'),
(4, 'Артамонов Ш. А.  ', 'ул. Морская 91', '+79295451123'),
(5, 'Круглова И. В.', 'пр. Маркса 4', '+78927782456'),
(6, 'Марков Е. А.  ', 'ул. Ленина 57', '+78988455467'),
(7, 'Карк Г. Р.  ', 'ул. Маркса 90', '+78984752112'),
(8, 'Григорьев А. О.  ', 'ул. Блажена 32', '+78892125547');

--
-- Триггеры `klients`
--
DELIMITER $$
CREATE TRIGGER `Delete1` AFTER DELETE ON `klients` FOR EACH ROW BEGIN
INSERT INTO klients_logs(`id`,`id_klients`,`fio`,`adress`,`phonenumder`,`date`,`action`) VALUES (NULL,old.`id`,old.`fio`,old.`adress`,old.`phonenumder`,NOW(),'Удалено');
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Insert1` AFTER INSERT ON `klients` FOR EACH ROW BEGIN
INSERT INTO klients_logs(`id`,`id_klients`,`fio`,`adress`,`phonenumder`,`date`,`action`) VALUES (NULL,new.`id`,new.`fio`,new.`adress`,new.`phonenumder`,NOW(),'Добавление');
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update1` AFTER UPDATE ON `klients` FOR EACH ROW BEGIN
INSERT INTO klients_logs(`id`,`id_klients`,`fio`,`adress`,`phonenumder`,`date`,`action`) VALUES (NULL,old.`id`,old.`fio`,old.`adress`,old.`phonenumder`,NOW(),'Изменено');
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `klients_logs`
--

CREATE TABLE `klients_logs` (
  `id` int(11) NOT NULL,
  `id_klients` int(11) NOT NULL,
  `fio` int(45) NOT NULL,
  `adress` int(45) NOT NULL,
  `phonenumder` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `prodigy`
--

CREATE TABLE `prodigy` (
  `id` int(11) NOT NULL,
  `date_prodag` varchar(45) NOT NULL,
  `card_chet_klient` int(11) NOT NULL,
  `id_avtozapravki` int(11) NOT NULL,
  `id_topliva` int(11) NOT NULL,
  `kolichestvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prodigy`
--

INSERT INTO `prodigy` (`id`, `date_prodag`, `card_chet_klient`, `id_avtozapravki`, `id_topliva`, `kolichestvo`) VALUES
(1, '2022-09-01', 1, 121, 4, 90),
(2, '2022-09-02', 3, 121, 2, 55),
(3, '2023-11-14', 6, 313, 3, 150);

-- --------------------------------------------------------

--
-- Структура таблицы `prodigy_logs`
--

CREATE TABLE `prodigy_logs` (
  `id` int(11) NOT NULL,
  `id_prodigy` int(11) NOT NULL,
  `date_prodag` varchar(45) NOT NULL,
  `card_chet_klient` int(11) NOT NULL,
  `id_avtozapravki` int(11) NOT NULL,
  `id_topliva` int(11) NOT NULL,
  `kolichestvo` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `svaz`
--

CREATE TABLE `svaz` (
  `id` int(11) NOT NULL,
  `id_firm` int(11) NOT NULL,
  `id_topliva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `toplivo`
--

CREATE TABLE `toplivo` (
  `id_topliva` int(11) NOT NULL,
  `vid_topliva` varchar(45) NOT NULL,
  `ed_izmirenia` varchar(45) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `toplivo`
--

INSERT INTO `toplivo` (`id_topliva`, `vid_topliva`, `ed_izmirenia`, `cena`) VALUES
(1, 'АИ-92', 'литр', 47),
(2, 'АИ-95 ', 'литр ', 50),
(3, 'АИ-98', 'литр ', 55),
(4, 'Дизель', 'литр', 60),
(5, 'Метан', 'куб', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `toplivo_logs`
--

CREATE TABLE `toplivo_logs` (
  `id` int(11) NOT NULL,
  `id_topliva` int(11) NOT NULL,
  `vid_topliva` varchar(45) NOT NULL,
  `ed_izmirenia` varchar(45) NOT NULL,
  `cena` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$i5pditHmJM.XTatF/c2LsuLnNVNBGM8913QUxT/7NcMqtJLjyOfoS', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `avtozapravka`
--
ALTER TABLE `avtozapravka`
  ADD PRIMARY KEY (`id_kolonki`);

--
-- Индексы таблицы `avtozapravka_logs`
--
ALTER TABLE `avtozapravka_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `firma_logs`
--
ALTER TABLE `firma_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `klients`
--
ALTER TABLE `klients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `klients_logs`
--
ALTER TABLE `klients_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prodigy`
--
ALTER TABLE `prodigy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `card_chet_klient` (`card_chet_klient`),
  ADD KEY `id_avtozapravki` (`id_avtozapravki`),
  ADD KEY `id_topliva` (`id_topliva`);

--
-- Индексы таблицы `prodigy_logs`
--
ALTER TABLE `prodigy_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `svaz`
--
ALTER TABLE `svaz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_firm` (`id_firm`,`id_topliva`),
  ADD KEY `id_topliva` (`id_topliva`);

--
-- Индексы таблицы `toplivo`
--
ALTER TABLE `toplivo`
  ADD PRIMARY KEY (`id_topliva`);

--
-- Индексы таблицы `toplivo_logs`
--
ALTER TABLE `toplivo_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `avtozapravka`
--
ALTER TABLE `avtozapravka`
  MODIFY `id_kolonki` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `avtozapravka_logs`
--
ALTER TABLE `avtozapravka_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `firma`
--
ALTER TABLE `firma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `firma_logs`
--
ALTER TABLE `firma_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `klients`
--
ALTER TABLE `klients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `klients_logs`
--
ALTER TABLE `klients_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `prodigy`
--
ALTER TABLE `prodigy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `prodigy_logs`
--
ALTER TABLE `prodigy_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `svaz`
--
ALTER TABLE `svaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `toplivo`
--
ALTER TABLE `toplivo`
  MODIFY `id_topliva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `toplivo_logs`
--
ALTER TABLE `toplivo_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `prodigy`
--
ALTER TABLE `prodigy`
  ADD CONSTRAINT `prodigy_ibfk_2` FOREIGN KEY (`card_chet_klient`) REFERENCES `klients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodigy_ibfk_3` FOREIGN KEY (`id_topliva`) REFERENCES `toplivo` (`id_topliva`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `svaz`
--
ALTER TABLE `svaz`
  ADD CONSTRAINT `svaz_ibfk_2` FOREIGN KEY (`id_topliva`) REFERENCES `toplivo` (`id_topliva`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `svaz_ibfk_3` FOREIGN KEY (`id_firm`) REFERENCES `firma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `svaz_ibfk_4` FOREIGN KEY (`id`) REFERENCES `avtozapravka` (`id_kolonki`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
