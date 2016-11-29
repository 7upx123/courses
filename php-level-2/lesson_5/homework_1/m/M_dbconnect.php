<?php

require_once 'M_dbconfig.php';

// Языковая настройка
setlocale(LC_ALL, 'ru_RU.UTF-8');
date_default_timezone_set('Europe/Moscow');

// Подключение к БД
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ('No connect with data base');
mysql_query('SET NAMES utf-8');
mysql_select_db(DB_NAME) or die('No data base');
