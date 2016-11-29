<?php
	/*
	4.
	Реализуйте все арифметические операции в виде функций с двумя параметрами.
	*/

	// Сложение
	function addition($a, $b) {
		return $a + $b;
	}

	// Вычетание
	function subtraction($a, $b) {
		return $a - $b;
	}

	// Умножение
	function multiplication($a, $b) {
		return $a * $b;
	}

	// Деление
	function division($a, $b) {
		if ($b == 0)
			return "ERROR: Division by 0";
		else
			return $a / $b;
	}

	echo addition(1, 2) . "<br>";
	echo subtraction(1, 2) . "<br>";
	echo multiplication(4, 2) . "<br>";
	echo division(1, 3) . "<br>";
	echo division(1, 0) . "<br>";
