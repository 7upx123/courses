<?php

include_once 'model/M_MySQL.php';
include_once 'model/M_Users.php';

// Менеджеры
$mUsers = M_Users::Instance();

// Очистка старых сессий
$mUsers->ClearSessions();

// Текущий пользователь
$user = $mUsers->Get();

if ($user == null) {
	header('Location: login.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<h1>Оклад сотрудников</h1>
	<a href="index.php">Главная</a>
	<ul>
		<li>Иванов, 14 000</li>
		<li>Петров, 28 000</li>
		<li>Замуруев, 96 000</li>
		<li>Семенова, 48 000</li>
	</ul>
</body>
</html>
