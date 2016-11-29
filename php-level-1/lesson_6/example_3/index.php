<?php
	// Запись в файл информмации о  посещении страницы
	$f = fopen('visits.txt', 'a+');
	fwrite($f, date('Y-m-d H:i:s') . "\r\n");
	fwrite($f, $_SERVER['REMOTE_ADDR'] . "\r\n");
	fwrite($f, $_SERVER['HTTP_REFERER'] . "\r\n");
	fclose($f);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Наш Сайт</title>
</head>
<body>
	<h1>Это главная страница сайта</h1>
	Мы <a href="visits.php">следим</a> за ее посещаемостью!
	<br><br>
	На нас ссылаются два сайта:
	<a href="site1.html">Раз</a>, <a href="site2.html">Два</a>
</body>
</html>
