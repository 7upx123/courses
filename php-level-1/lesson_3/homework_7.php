<?php
	/*
	7.
	Напишите функцию, которая заменяет в строке пробелы на подчеркивания и
	возвращает видоизмененную строчку.
	*/

	function space_off($str) {
		$a = explode(' ', $str);
		return implode('_', $a);
	}

	echo space_off('hello abc');
