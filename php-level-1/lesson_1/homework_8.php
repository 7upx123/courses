<?php
	/*
	8.
	Попробуйте в выражении использовать разные типы, например, сложите число
	«10» и строку «привет». Что получится? Объясните результат.
	*/

	$a = 10;
	$b = 111.222;
	$c = "String";
	$d = "1string";
	$e = 'String1';
	$f = '1string1';
	$g = "1.1string";

	echo $a + $c; echo "<br>";
	echo $a + $d; echo "<br>";
	echo $a + $e; echo "<br>";
	echo $a + $f; echo "<br>";

	echo $c + $f; echo "<br>";
	echo $c . $f; echo "<br>";
	echo $a . $c; echo "<br>";

	echo $a + $b; echo "<br>";
	echo $b + $g; echo "<br>";
