<?php

include_once 'model/M_MySQL.php';
include_once 'model/M_Users.php';

// Менеджеры
$mUsers = M_Users::Instance();

// Выход
$mUsers->Logout();

// Обработка отправки формы
if (!empty($_POST)) {
	if ($mUsers->Login($_POST['login'], $_POST['password'], isset($_POST['remember']))) {
		header('Location: index.php');
		exit();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<h1>Авторизация</h1>
	<a href="index.php">Главная</a>
	<form method="post">
		E-mail: <input type="text" name="login"><br>
		Пароль: <input type="password" name="password"><br>
		<input type="checkbox" name="remember">Запомить меня<br>
		<input type="submit">
	</form>
</body>
</html>
