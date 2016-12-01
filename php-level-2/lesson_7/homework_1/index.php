<?php

include_once 'model/M_MySQL.php';
include_once 'model/M_Users.php';

// Менеджеры
$mUsers = M_Users::Instance();

// Очиста старых сессий
$mUsers->ClearSessions();
// Правильно использовать Cron
// Cron - это система для автоматического запуска программ и скриптов на сервере в определённое время

// Текущий пользователь
$user = $mUsers->Get();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<h1>Главная</h1>
	<ul>
		<li><a href="login.php">Вход/Выход</a></li>
		<li><a href="contact.php">Контактная информация сотрудников</a></li>
		<li><a href="salary.php">Оклад сотрудников</a></li>
		<li><a href="map_users.php">Карта пользователей</a></li>
	</ul>
	<? if ($user != null): ?>
		<?=$user['login']?>
	<? endif ?>
</body>
</html>
