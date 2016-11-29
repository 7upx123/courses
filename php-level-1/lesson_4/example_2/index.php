<?php
	/*
	Если поля оставить пустыми то они определяются пустыми строками и
	isset = true, ошибка?
	Следует помнить, что null-байт ("\0") не является эквивалентом
	константе PHP NULL.
	*/

	// Функция вывода результата
	function show_result($a, $b) {
		$result = $a + $b;
		echo "$a + $b = <b>$result</b><br>";
		echo "<a href=\"index.php\">More</a>";
	}

	// Точка входа

	// Показываем рузультат операции или форму ввода
	if (isset($_POST['a']) && isset($_POST['b'])) {
		show_result($_POST['a'], $_POST['b']);
	} else {
		include('form.php');
	}
