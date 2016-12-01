-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 01 2016 г., 16:59
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `php-level-2-lesson-7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `privs`
--

CREATE TABLE IF NOT EXISTS `privs` (
  `id_priv` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(32) NOT NULL,
  PRIMARY KEY (`id_priv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `privs`
--

INSERT INTO `privs` (`id_priv`, `name`, `description`) VALUES
(1, 'VIEW_SALARY', 'Просмотр зарплат'),
(2, 'VIEW_CONTACT', 'Просмотр контактов'),
(3, 'VIEW_MAP_USERS', 'Просмотр карты пользователей');

-- --------------------------------------------------------

--
-- Структура таблицы `privs2roles`
--

CREATE TABLE IF NOT EXISTS `privs2roles` (
  `id_priv` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `privs2roles`
--

INSERT INTO `privs2roles` (`id_priv`, `id_role`) VALUES
(1, 2),
(2, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(32) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_role`, `name`, `description`) VALUES
(1, 'manager', 'подчиненный'),
(2, 'boss', 'начальник');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id_session` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `sid` varchar(16) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_last` datetime NOT NULL,
  PRIMARY KEY (`id_session`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `sid`, `time_start`, `time_last`) VALUES
(7, 1, 'tThAPy27NA', '2016-12-01 16:44:35', '2016-12-01 16:44:38'),
(8, 1, 'ur4YN0YGJi', '2016-12-01 16:45:42', '2016-12-01 16:45:46'),
(9, 1, 'aszUN38BsE', '2016-12-01 16:46:22', '2016-12-01 16:46:25'),
(10, 1, 'hndshnUM9h', '2016-12-01 16:49:19', '2016-12-01 16:56:09'),
(11, 1, 'yAPBKwU54P', '2016-12-01 16:56:13', '2016-12-01 16:56:18'),
(12, 2, 'hIruwgqLRx', '2016-12-01 16:56:33', '2016-12-01 16:56:49'),
(13, 1, '6HsmiNUzRN', '2016-12-01 16:57:29', '2016-12-01 16:57:31'),
(14, 2, 'X9Kqtoc35j', '2016-12-01 16:57:35', '2016-12-01 16:57:37');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_role` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `id_role`, `name`) VALUES
(1, '1', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'pass = 1'),
(2, '2', 'c4ca4238a0b923820dcc509a6f75849b', 2, 'pass = 1 | boss');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
