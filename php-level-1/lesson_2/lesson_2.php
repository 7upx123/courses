<?php
	$a = 15;
	$b = 10;

	if ($a > $b)
		echo "$a > $b";
	elseif ($a < $b)
		echo "$a < $b";
	else
		echo "$a = $b";
	echo "<br>";


	$c = 21;

	switch ($c) {
		case 1:
			echo "c = 1<br>";
			break;
		case '2' . '1': // $c = 21
			echo "c = 21<br>";
			break;
		case $c > 3:
			echo "c = 3<br>";
			break;
		default:
			echo "c ???<br>";
	}


	function compare_numbers($a, $b) {
		if ($a > $b)
			echo "$a > $b";
		elseif ($a < $b)
			echo "$a < $b";
		else
			echo "$a = $b";
		echo "<br>";
	}

	compare_numbers(3, 7);
	compare_numbers(9, 5);
	compare_numbers(1, 1);


	function sum($a, $b = 1) {
		return $a + $b;
	}

	$d = sum(100, 11);
	echo (int)$d . "<br>";

	$e = sum(100);
	echo (int)$e . "<br>";


	$f = 1;

	function plus($f) {
		$f++;
		echo $f . "<br>";
	}

	echo $f . "<br>";
	plus($f) . "<br>";
	echo $f . "<br>";


	function not_1($a) {
		if ($a == 1)
			return $a;
		echo "a != 1<br>";
	}

	not_1(2);
	not_1(1);
	not_1(4);


	function fact($a) {
		if ($a == 1)
			return 1;
		else
			return $a * fact($a - 1);
	}

	echo fact(8) . "<br>";
