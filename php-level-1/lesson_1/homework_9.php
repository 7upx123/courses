<?php
	/*
	9.
	Дайте ответ на вопрос, как работает оператор xor? В каких случаях он
	возвращает значение true, в каких – false? Для этого напишите скрипт,
	который выводит значения операций со всеми возможными вариантами операндов
	(4 варианта). Чему равно $a xor $a для любых значений $a?
	*/

	// Деление по модулю 2, т.е. сумму всех true делим на 2 смотрим остаток

	echo "0 xor 0 : " . (int)(false xor false) . "<br>";
	echo "0 xor 1 : " . (int)(false xor true) . "<br>";
	echo "1 xor 0 : " . (int)(true xor false) . "<br>";
	echo "1 xor 1 : " . (int)(true xor true) . "<br>";
