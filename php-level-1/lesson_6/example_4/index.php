<?php
// Функция вывода формым отправки файла
function print_form() {
	echo '<form method="post" enctype="multipart/form-data">';
	echo '<input type="file" name="text">';
	echo '<br>';
	echo '<input type="submit" value="Download">';
	echo '</form>';
}
// Функция загрузки файла на сервер
function upload_file($file) {
	echo '<a href="index.php">Еще раз</a>';
	echo '<br><br>';

	echo "<pre>";
	var_dump($file);
	echo "</pre>";

	if ($file['name'] == '') {
		echo "Файл не выбран<br>";
		return false;
	}

	if (copy($file['tmp_name'], $file['name'])) {
		echo "Файл успешно загружен<br>";
		return true;
	} else {
		echo "Ошибка загрузки файла<br>";
		return false;
	}
}

// Функция вывода содержиммого файла
function print_files($file) {
	$lines = file($file['tmp_name']);
	$i = 1;
	echo "<br>" . $file['tmp_name'] . "<br>";
	echo "<br><br>";
	echo "<table>";
	foreach ($lines as $s) {
		echo "<tr><td><small>$i:</small></td><td>$s</td></tr>";
		$i++;
	}
	echo "</table>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Загрузка файла на сервер</title>
</head>
<body>
<h1>Приммер загрузки файла на сервер</h1>
<?php
if (isset($_FILES['text'])) {
	if (upload_file($_FILES['text']))
		print_files($_FILES['text']);
} else {
	print_form();
}
?>
</body>
</html>
