<?php
	// Точка входа
	session_start();
	// Если в контексте сессии не установлено имя пользователя, пытаемся взять его из cookies
	if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
		$_SESSION['username'] = $_COOKIE['username'];
		echo "SESSION = ";
	}
	// Еще раз ищем имя пользователя в контексте сессии
	$username = $_SESSION['username'];
	$_SESSION['page'] = 'a';
	// Неавторизованных пользователей отправляем на страницу регистрации
	if ($username == null) {
		header("Location: login.php");
		exit();
	}
?>

<html>
<head>
	<title>Страница А</title>
</head>
<body>
<h1>Страница А</h1>
<b>А</b> и <a href="b.php">Б</a> сидели на трубе.
<br>
<br>
Вы вошди как <b><?php echo $username; ?></b> | <a href="login.php">Выход</a>
</body>
</html>
