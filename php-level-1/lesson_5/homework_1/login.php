<?php
function Login($username, $remember) {
	if (trim($username) == '') {
		return false;
	}
	$_SESSION['username'] = $username;
	$_SESSION['page'] = 'a';
	if ($remember) {
		setcookie('username', $username, time() + 60 * 60 * 24);
		setcookie('page', 'a', time() + 60 * 60 * 24);
	}
	return true;
}
function Logout() {
	setcookie('username', '', time() - 1);
	setcookie('page', '', time() - 1);
	unset($_SESSION['username']);
	unset($_SESSION['page']);
}
session_start();
$enter_site = false;
Logout();
if (count($_POST) > 0) {
	$enter_site = Login($_POST['username'], $_POST['remember'] == 'on');
}
if ($enter_site) {
	header("Location: index.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Вход на сайт</title>
</head>
<body>
<form action="" method="post">
	Введите имя:<br>
	<input  type="text" name="username"><br>
	<input type="checkbox" name="remember">Запомнить меня<br>
	<input type="submit" value="Войти">
</form>
</body>
</html>