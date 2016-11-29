<?php
	/*
	5.
	Реализуйте функцию с тремя параметрами: function mathOperation($arg1,
	$arg2, $operation), где $arg1, $arg2 – значения аргументов. $operation –
	строка с названием операции. В зависимости от переданного значения
	операции выполните одну из арифметических операций (используйте функции
	из пункта 4) и верните полученное значение (используйте switch).
	*/

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
			echo "ERROR: Division by 0";
		else
			return $a / $b;
	}

	function mathOperation($arg1, $arg2, $operation) {
		switch ($operation) {
			case '+':
				return addition($arg1, $arg2);
			case '-':
				return subtraction($arg1, $arg2);
			case '*':
				return multiplication($arg1, $arg2);
			case '/':
				return division($arg1, $arg2);
			default:
				echo "ERROR: No operation";
				break;
		}
	}

	echo mathOperation(1, 2, '+') . "<br>";
	echo mathOperation(1, 2, '-') . "<br>";
	echo mathOperation(1, 2, '*') . "<br>";
	echo mathOperation(1, 4, '/') . "<br>";
	echo mathOperation(1, 2, 'a') . "<br>";
