<?php
	$f = fopen('file.txt', 'r');
	$c = fread($f, 1);

	for ($i = 1; $c != null; $i++) {
		echo "$i: <b>$c</b><br>";
		$c = fread($f, 1);
	}

	fclose($f);

	echo "<br><br>";

	$str = file_get_contents('file.txt');
	echo $str;
	echo "<br>";
	var_dump($str);

	echo "<br><br>";

	$str = file('file.txt');
	echo $str;
	echo "<br>";
	var_dump($str);

	echo "<br><br>";
