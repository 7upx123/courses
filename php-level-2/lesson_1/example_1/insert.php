<?php

require_once('dbconfig.php');

// Языковая настройка
setlocale(LC_ALL, 'ru_RU.UTF-8');
date_default_timezone_set('Europe/Moscow');

// Подключение к БД
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ('No connect with data base');
mysql_query('SET NAMES utf-8');
mysql_select_db(DB_NAME) or die('No data base');

$result = mysql_query('INSERT INTO articles (title_article, content_article) VALUES ("Новая статья", "Текст новой статьи")');

if (!$result) die('ERROR data base: ' . mysql_error());
else echo 'Статей добавлено: ' . mysql_affected_rows();

mysql_close();
