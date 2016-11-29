<?php
// Основной шаблон
// $title - заголовок
// $content- страница
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
</head>
<body>

<h1><?=$title?></h1>

<? content(); ?>

<p>
	<small>Все права защищены.</small>
</p>

</body>
</html>
