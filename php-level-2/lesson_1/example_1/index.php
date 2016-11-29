<?php

require_once('dbconfig.php');

// Языковая настройка
setlocale(LC_ALL, 'ru_RU.UTF-8');
date_default_timezone_set('Europe/Moscow');

// Подключение к БД
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ('No connect with data base');
mysql_query('SET NAMES utf-8');
mysql_select_db(DB_NAME) or die('No data base');

echo "<b>mysql_fetch_array</b><br>";

$result = mysql_query('SELECT * FROM articles');
if (!$result) die('ERROR data base: ' . mysql_error());

while ($row = mysql_fetch_array($result)) {
	echo $row['id_article'] . '<br>';
	echo $row[1] . '<br>';
	echo $row['content_article'] . '<br><hr>';
	// echo "<pre>"; var_dump($row); echo "</pre>";
}
/*
echo "<b>mysql_fetch_assoc</b><br>";

$result = mysql_query('SELECT * FROM articles');
if (!$result) die('ERROR data base: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) {
	echo $row['id_article'] . '<br>';
	echo $row['title_article'] . '<br>';
	echo $row['content_article'] . '<br><hr>';
	// echo "<pre>"; var_dump($row); echo "</pre>";
}

echo "<b>mysql_fetch_row</b><br>";

$result = mysql_query('SELECT * FROM articles');
if (!$result) die('ERROR data base: ' . mysql_error());

while ($row = mysql_fetch_row($result)) {
	echo $row[0] . '<br>';
	echo $row[1] . '<br>';
	echo $row[2] . '<br><hr>';
	// echo "<pre>"; var_dump($row); echo "</pre>";
}
*/
echo '<h1>';
echo mysql_num_rows($result) . ' number of lines<br><br>';
echo '</h1>';

mysql_close();

// mysql_fetch_array(); // MYSQL_ASSOC, MYSQL_NUM, MYSQL_BOTH
// mysql_fetch_assoc();
// mysql_fetch_row();
