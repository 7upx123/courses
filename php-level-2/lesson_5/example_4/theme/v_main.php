<?php
// Основной шаблон
// $title - заголовок
// $content - HTML страницы
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css">
</head>
<body>
	<div id="header">
		<h1><?=$title?></h1>
	</div>

	<div id="menu">
		<a href="index.php">Читать текст</a> |
		<a href="index.php?c=edit">Редактировать текст</a>
	</div>

	<div id="content">
		<?=$content?>
	</div>

	<div id="footer">
		Все права защищены. Адрес. Телефон.
	</div>
</body>
</html>
