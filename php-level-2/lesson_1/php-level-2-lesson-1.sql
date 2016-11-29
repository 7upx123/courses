-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 29 2016 г., 12:50
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `php-level-2-lesson-1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `title_article` varchar(128) NOT NULL,
  `content_article` text,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `title_article`, `content_article`) VALUES
(1, 'Статья 1', 'Содержимое 1'),
(2, 'Статья 2', 'Содержимое 2'),
(3, 'Новая статья', 'Текст новой статьи'),
(13, 'Новая статья', 'Обновленный текст update'),
(15, 'Настольные процессоры Kaby Lake', 'До последнего времени считалось, что настольные процессоры Intel Core 7-го поколения (Kaby Lake-S) будут представлены 5 января на выставке потребительской электроники CES 2017, и вскоре после анонса Core i7-7700K, Core i5-7600K и другие модели дебютируют в розничной продаже. Каких-либо альтернативных сведений о сроках презентации новых CPU пока не поступало, но интересно другое: как минимум два нидерландских интернет-магазина — Centralpoint и ACESDirect — открыли приём предварительных заказов на четырёхъядерные процессоры Kaby Lake LGA1151 в варианте поставки «box». Речь идёт о моделях Core i7-7700K, Core i7-7700, Core i5-7600K, Core i5-7600, Core i5-7500 и Core i5-7400.'),
(21, 'Выход процессора Qualcomm Snapdragon 830', 'В середине ноября Qualcomm официально объявила, что новый флагманский процессор компании получит обозначение Snapdragon 835, а не Snapdragon 830, как предполагалось ранее. Как теперь сообщают сетевые источники, чип Snapdragon 830 также готовится к выпуску.'),
(22, 'HTML', 'asd &lt;html&gt; zxc'),
(23, 'SQL Injection', '5'' OR 1 = ''1 update'),
(24, 'LESSON 3 UPDATE 1', 'CONTENT LESSON 3 UPDATE 1'),
(26, 'CLASS UPDATE 2', 'CLASS CONTENT UPDATE 2'),
(27, 'LESSON 5', 'LESSON 5 CONTENT UPDATE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
