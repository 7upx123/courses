<?php

function startup()
{
	// Настройки подключения к БД.
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbName   = 'php-level-2-lesson-8';

	// Языковая настройка.
	setlocale(LC_ALL, 'ru_RU.UTF-8');

	// Подключение к БД.
	mysql_connect($hostname, $username, $password) or die('No connect with data base');
	mysql_query('SET NAMES utf-8');
	mysql_select_db($dbName) or die('No data base');

	// Открытие сессии.
	session_start();
}
