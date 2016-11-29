<?php
	/*
	4.
	Объявите массив, где в качестве ключей будут использоваться названия
	областей, а в качестве значений – массивы с названиями городов из
	соответствующей области. Выведите в цикле значения массива, чтобы
	результат был таким: Московская область: Москва, Зеленоград,
	Клин Ленинградская область: Санкт-Петербург, Всеволожск, Павловск,
	Кронштадт Рязанская область ...
	(названия городов можно найти на maps.yandex.ru)
	*/

	$arr = array(
		'Russia' => array('Moscow', 'Samara', 'Kaliningrad'),
		'France' => array('Paris', 'Cannes', 'Lyon', 'Marseille'),
		'England' => array('London', 'Liverpool', 'Leeds', 'Manchester'),
	);

	foreach ($arr as $index => $country) {
		echo "$index: ";
		foreach ($country as $town) {
			echo "$town ";
		}
		echo "<br>";
	}
