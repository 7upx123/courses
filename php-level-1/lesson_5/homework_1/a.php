<?php
session_start();
if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
	$_SESSION['username'] = $_COOKIE['username'];
}
$username = $_SESSION['username'];
if ($username == null) {
	header("Location: index.php");
	exit();
}
$page = 'a';
$_SESSION['page'] = $page;
setcookie('page', $page, time() + 60 * 60 * 24);
?>

<!DOCTYPE html>
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