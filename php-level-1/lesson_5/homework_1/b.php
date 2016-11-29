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
$page = 'b';
$_SESSION['page'] = $page;
setcookie('page', $page, time() + 60 * 60 * 24);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Страница Б</title>
</head>
<body>
<h1>Страница Б</h1>
<a href="a.php">А</a> и <b>Б</b> сидели на трубе.
<br>
<br>
Вы вошди как <b><?php echo $username; ?></b> | <a href="login.php">Выход</a>
</body>
</html>