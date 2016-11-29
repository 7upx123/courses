<?php

// 1
ob_start();
echo 'XYZ';
$x = ob_get_clean();
echo "X = [$x]";

echo "<br><br><br>";

// 2
ob_start();
echo 'X begin ';

	ob_start();
	echo 'Y begin ';
	echo 'Y end ';
	$y = ob_get_clean();

echo 'X end ';
$x = ob_get_clean();
echo "X = [$x]; Y = [$y];";
