<?php

include_once 'model/M_MySQL.php';
include_once 'model/M_Users.php';

// Менеджеры.
$mUsers = M_Users::Instance();

// Очиста старых сессий
$mUsers->ClearSessions();
// Правильно использовать Cron
// Cron - это система для автоматического запуска программ и скриптов на сервере в определённое время

// Текущий пользователь
$user = $mUsers->Get();

if ($user == null) {
	header("Location: login.php");
	exit();
}

// Может ли пользователь смотерть зарплату?
if (!$mUsers->Can('VIEW_MAP_USERS')) {
	die('Отказано в доступе');
}

$users = $mUsers->IsOnline();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Карта пользователей</title>
</head>
<body>

<h1>Карта пользователей</h1>
<a href="index.php">Главная</a><hr>

<table border="1">
	<tr>
		<td>id_session</td>
		<td>id_user</td>
		<td>time_last</td>
	</tr>
	<? for ($i = 0; $i < count($users); $i++): ?>
		<tr>
			<td><?=$users[$i]['id_session']?></td>
			<td><?=$users[$i]['id_user']?></td>
			<td><?=$users[$i]['time_last']?></td>
		</tr>
	<? endfor ?>
</table>

</body>
</html>
