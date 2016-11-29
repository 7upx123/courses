<?php
	/*
	2.
	Измените сумматор таким образом, чтобы два режима его отображения
	объединить в один. Вот как это должно выглядеть:
	*/
	// Функция вывода результата
	function show_result($a, $b) {
		$result = $a + $b;
		echo "<b>$result</b><br>";
	}

	// Точка входа

	// Показываем рузультат операции или форму ввода
	if (isset($_POST['a']) && isset($_POST['b'])) {
		include('form.php');
		show_result($_POST['a'], $_POST['b']);
	} else {
		include('form.php');
	}
