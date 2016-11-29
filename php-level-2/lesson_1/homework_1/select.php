<?php

require_once('dbconnect.php');

$sql = 'SELECT * FROM articles';

$result = mysql_query($sql);

if (!$result) die('ERROR data base: ' . mysql_error());

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo $row['id_article'] . '<br>';
	echo $row['title_article'] . '<br>';
	echo $row['content_article'] . '<br><hr>';
}

mysql_close();
