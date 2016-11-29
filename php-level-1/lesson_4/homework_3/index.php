<?php
	/*
	3.
	Превратите получившийся сумматор в калькулятор с четырьмя операциями:
	сложение, вычитание, умножение, деление. Не забудьте обработать деление
	на ноль!
	*/
	// Функция вывода результата
	function show_result($a, $b) {
		switch ($_POST['oper']) {
			case '+':
				$result = $a + $b;
				break;
			case '-':
				$result = $a - $b;
				break;
			case '*':
				$result = $a * $b;
				break;
			case '/':
				if ($b != 0)
					$result = $a / $b;
				else
					echo "ERROR: Division by 0";
				break;
			default:
				echo "ERROR: No operation";
				break;
		}
		echo $result . "<br>";
	}

	// Точка входа

	// Показываем рузультат операции или форму ввода
	if (isset($_POST['a']) && isset($_POST['b'])) {
		include('form.php');
		show_result($_POST['a'], $_POST['b']);
	} else {
		include('form.php');
	}
