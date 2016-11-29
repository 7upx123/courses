<?php
	function startup() {
		// Настройки подключения к БД
		$hostname = 'localhost';
		$username = 'root';
		$password = '';
		$dbname   = 'issart_1_7-hw1';

		// Языковая настройка
		setlocale(LC_ALL, 'ru_RU.UTF-8');

		// Подключение к БД
		mysql_connect($hostname, $username, $password) or die('No connect is DB');
		mysql_query('SET NAMES UTF-8');
		mysql_select_db($dbname) or die('No DB');

		// Открытие сессии
		session_start();
	}
