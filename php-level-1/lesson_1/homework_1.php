<?php
	/*
	1.
	С помощью оператора echo выведите на страницу:
		a. Строковую переменную
		b. Целочисленную переменную
		c. Переменную с дробного типа
		d. константу
		e. число в восьмеричной нотации
		f. число в шестнадцатеричной нотации
	*/

	$a = "string";
	$b = 'string';
	$c = 10;
	define('MY_CONST', '100');
	$d = 07;
	$e = 0xf;

	echo $a . "<br>";
	echo $b . "<br>";
	echo $c . "<br>";
	echo MY_CONST . "<br>";
	echo $d . "<br>";
	echo $e . "<br>";
