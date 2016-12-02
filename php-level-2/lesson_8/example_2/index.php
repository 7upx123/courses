<?php

// Маршрутизация.
//$info_ = explode('/', $_SERVER['PATH_INFO']); // для index.php/$0
$info_ = explode('/', $_GET['q']); // для index.php?q=$0
$info = array();

foreach ($info_ as $v)
{
	if ($v != '')
		$info[] = $v;
}

$n = count($info);

// Базовый URL.
$baseURL = '/example_2';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>URL Rewrite</title>
</head>
<body>
	<a href="<?=$baseURL?>/articles/123">articles/123</a>
	<br/>
	<a href="<?=$baseURL?>/articles/58/edit">articles/58/edit</a>
	<br/>
	<br/>

	<ul>
	<? foreach ($info as $v): ?>
		<li><?=$v?></li>
	<? endforeach ?>
	</ul>
</body>
</html>
