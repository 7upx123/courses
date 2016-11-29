<?php
	/*
	6.
	Объявите массив, индексами которого являются буквы русского языка, а
	значениями – соответствующие латинские буквосочетания (‘а’=> ’a’,
	‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, ..., ‘э’ => ‘e’, ‘ю’ => ‘yu’,
	‘я’ => ‘ya’). Напишите функцию транслитерации строк.
	*/

	function translit($str) {
		$str_buffer = mb_strtolower($str, "utf-8");
		$letters = array(
			'a' => 'A',
			'b' => 'B',
			'c' => 'C',
			'd' => 'D',
			'e' => 'E',
			'f' => 'F'
		);
		$str_output = "";
		for ($i = 0; $i < strlen($str_buffer); $i++) {
			$str_output .= $letters[$str_buffer[$i]];
		}
		return $str_output;
	}

	echo translit('Abcdef');

	echo "<br>";

	function translit2($str) {
		$str_buffer = mb_strtolower($str, "utf-8");
		$letters = array(
			'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
			'е' => 'e', 'ё' => 'e', 'ж' => 'j',	'з' => 'z', 'и' => 'i',
			'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm',	'н' => 'n',
			'о' => 'o',	'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
			'у' => 'y',	'ф' => 'f', 'х' => 'h', 'ц' => 'c',	'ч' => 'ch',
			'ш' => 'sh', 'щ' => 'sh', 'ъ' => '\'', 'ы' => 'i', 'ь' => '\'',
			'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
		);
		return strtr($str_buffer, $letters);
	}

	echo translit2('привет');
