<?php

class MathOperations
{
	static public function sum($x, $y) {
		return $x + $y;
	}

	static public function abs($x) {
		return ($x >= 0) ? $x : (-1) * $x;
	}
}

echo MathOperations::sum(2, 8) . '<br>';
echo MathOperations::abs(-5);
