<?php
	echo "<select>";
	for ($i = 1920; $i <= 2000; $i++) {
		echo "<option value=\"$i\">$i</option>";
	}
	echo "</select><br>";


	$arr = array('Moscow', 'Saint-Petersburg', 'London');
	for ($i = 0; $i < count($arr); $i++)
		if ($arr[$i] == 'London')
			echo $i;
	echo "<br>";

	$arr = array(
		'hi' => 'hello',
		'bye' => 'goodbye'
	);
	echo $arr['hi'] . "<br>";


	$arr = array(
		'Russia' => array('Moscow', 'Saint-Petersburg'),
		'France' => array('Paris', 'Leon'),
		'England' => array('London', 'Liverpool')
	);
	echo $arr['Russia'][0] . "<br>";

	foreach ($arr as $index => $country) {
		echo $index . " : ";
		foreach ($country as $town) {
			echo $town . " ";
		}
		echo "<br>";
	}


	$str = "Ivanov|Ivan|Moscow|89109002020";
	echo $str . "<br>";

	$arr = explode('|', $str);
	
	var_dump($arr);
	$arr[2] = "Paris";
	echo "<br>";
	var_dump($arr);

	$str = implode('|', $arr);
	echo $str . "<br>";
