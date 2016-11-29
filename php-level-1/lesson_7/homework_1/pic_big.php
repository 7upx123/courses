<?php

	include_once('startup.php');
	startup();

	echo "Картинка";
	echo "<br>";

	echo "Просмотров: " . $_GET['views'];
	echo "<br>";

	$path_pic_big = $_GET['path_pic_big'];
	echo "<img src=\"$path_pic_big\"></a>";

	$pic_id = $_GET['id'];
	$pic_views = $_GET['views'];
	$pic_views++;

	$sql = "UPDATE pictures SET views = '$pic_views' WHERE id = '$pic_id'";
	$result = mysql_query($sql);
		if (!$result)
			die(mysql_error());
