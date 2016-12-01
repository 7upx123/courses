<?php

include_once 'model/M_MySQL.php';
include_once 'model/M_Users.php';

// Менеджеры
$mUsers = M_Users::Instance();

// Очистка старых сессий
$mUsers->ClearSessions();

// Текущий пользователь
$user = $mUsers->Get();

// Если пользователь не зарегистрирован - отправляем на страницу регистрации
if ($user == null) {
	header("Location: login.php");
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
	<h1>Контактная информация сотрудников</h1>
	<a href="index.php">Главная</a>
	<ul>
		<li>Иванов, (926) 123-45-67</li>
		<li>Петров, (925) 112-83-83</li>
		<li>Замуруев, (916) 523-15-61</li>
		<li>Семенова, (903) 323-44-66</li>
	</ul>
</body>
</html>
