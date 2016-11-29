<?php
	$handle = opendir('./');
	if ($handle != false) {
		echo "Дескриптор каталога: $handle<br>";
		echo "Файлы:<br>";
		while (($file = readdir($handle)) !== false) {
			echo "$file<br>";
		}
		closedir($handle);
	}
