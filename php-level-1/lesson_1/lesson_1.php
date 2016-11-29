<?php
	echo "Hello, World!<br>";


	$a = 45;
	echo "$a<br>";


	define('MY_CONST', '200');
	echo MY_CONST . "<br>";


	$b = 45.7;
	echo "$b<br>";
	$str1 = "var b = $b";
	$str2 = 'var b = $b';

	echo $str1 . "<br>";
	echo $str2 . "<br>";


	// comment
	/*
	 * comment
	 */


	$bool1 = true;
	$bool2 = false;

	echo "bool1 (true) = $bool1<br>";
	echo "bool2 (false) = *" . $bool2 . "*<br>";
	echo "bool2 (false) = *" . (int)$bool2 . "*<br>";
	echo "var_dump : ";
	var_dump($bool1);
	var_dump($bool2);
	echo "<br>";


	$c = '111.222';
	echo (int)$c . "<br>";
	echo (float)$c . "<br>"; // double, string, bool

	$d = 'a333.444';
	echo $d . "<br>";
	echo (int)$d . "<br>";


	$e = 5 + 4;
	$e = $e - 5;
	$e = $e / 2;
	$e = $e * $e;
	$e = $e % 3;

	$f = 5 + 4;
	$f -= 5;
	$f /= 2;
	$f *= $f;
	$f %= 3;

	echo "e = $e | f = $f<br>";


	$g = 'Hello, ';
	$username = 'Username';
	$g .= $username;

	echo "<p>$g</p>";


	$h = (5 == 5.0);
	echo (int)$h . "<br>";

	$i = (5 === 5.0);
	echo (int)$i . "<br>";


	$j = 5;

	echo $j++ . "<br>";
	echo $j . "<br>";
	echo ++$j . "<br>";
	echo $j . "<br>";
