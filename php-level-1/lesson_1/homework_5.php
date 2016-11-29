<?php
	/*
	5.
	Выведите 16 чисел в шестнадцатеричной системе, так чтобы в браузере
	отобразилось «0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15»
	*/

	echo "0x0 = " . 0x0 . "<br>";
	echo "0x1 = " . 0x1 . "<br>";
	echo "0x2 = " . 0x2 . "<br>";
	echo "0x3 = " . 0x3 . "<br>";
	echo "0x4 = " . 0x4 . "<br>";
	echo "0x5 = " . 0x5 . "<br>";
	echo "0x6 = " . 0x6 . "<br>";
	echo "0x7 = " . 0x7 . "<br>";
	echo "0x8 = " . 0x8 . "<br>";
	echo "0x9 = " . 0x9 . "<br>";
	echo "0xa = " . 0xa . "<br>";
	echo "0xb = " . 0xb . "<br>";
	echo "0xc = " . 0xc . "<br>";
	echo "0xd = " . 0xd . "<br>";
	echo "0xe = " . 0xe . "<br>";
	echo "0xf = " . 0xf . "<br><br>";

	echo "0xa1 = " . 0xa1 . "<br>";
	echo "a1<sub>16</sub> =
		a * 16<sup>1</sup> + 1 * 16<sup>0</sup> =
		10 * 16 + 1 = 161<br>";
	echo "a1<sub>16</sub> =
		10100001<sub>2</sub> =
		1 * 2<sup>7</sup> + 0 * 2<sup>6</sup> + 1 * 2<sup>5</sup> + 0 * 2<sup>4</sup> +
		0 * 2<sup>3</sup> + 0 * 2<sup>2</sup> + 0 * 2<sup>1</sup> + 1 * 2<sup>0</sup> =
		128 + 0 + 32 + 0 + 0 + 0 + 0 + 1 = 161<br><br>";
	echo "161<sub>10</sub> / 2 = 10100001<sub>2</sub><br>";
	echo "161 / 2 = 80 / 1<br>";
	echo "80 / 2 = 40 / 0<br>";
	echo "40 / 2 = 20 / 0<br>";
	echo "20 / 2 = 10 / 0<br>";
	echo "10 / 2 = 5 / 0<br>";
	echo "5 / 2 = 2 / 1<br>";
	echo "2 / 2 = 1 / 0<br>";
	echo "1 / 2 = 0 / 1";
