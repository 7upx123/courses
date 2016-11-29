<?php
	/*
	6.
	С помощью рекурсии организуйте функцию возведения числа в степень.
	Формат: function power($val, $pow), где $val – заданное число,
	$pow – степень.
	*/

	function power($val, $pow) {
		if ($pow == 0)
			return ($val == 0) ? "ERROR: 0<sup>0</sup>" : 1;
		elseif ($pow < 0)
			return 1 / power($val, -$pow);
		else
			return $val * power($val, $pow - 1);
	}

	echo power(-2, 5) . "<br>";
	echo power(3, 0) . "<br>";
	echo power(0, 2) . "<br>";
	echo power(0, 0) . "<br>";
	echo power(2, -2) . "<br>";
