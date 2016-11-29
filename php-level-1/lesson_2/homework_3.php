<?php
	/*
	3.
	Присвойте $а значение в промежутке [0..9]. С помощью оператора switch
	организуйте вывод чисел от $a до 9.
	*/

	$a = 5;

	switch ($a) {
		case 0:
			echo $a++ . "<br>";
		case 1:
			echo $a++ . "<br>";
		case 2:
			echo $a++ . "<br>";
		case 3:
			echo $a++ . "<br>";
		case 4:
			echo $a++ . "<br>";
		case 5:
			echo $a++ . "<br>";
		case 6:
			echo $a++ . "<br>";
		case 7:
			echo $a++ . "<br>";
		case 8:
			echo $a++ . "<br>";
		case 9:
			echo $a++ . "<br>";
			break;
		default:
			echo "a > 9";
	}
