<?php
	/*
	5.
	Задание со звездочкой. Повторите предыдущее задание, но выводите на экран
	только города, начинающиеся с буквы «К».
	*/

	$arr = array(
		'Russia' => array('Moscow', 'Samara', 'Kaliningrad'),
		'France' => array('Paris', 'Cannes', 'Lyon', 'Marseille'),
		'England' => array('London', 'Liverpool', 'Leeds', 'Manchester'),
	);

	foreach ($arr as $country) {
		foreach ($country as $town) {
			if ($town[0] == 'M')
				echo "$town ";
		}
	}
