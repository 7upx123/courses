<?php

require_once('dbconnect.php');

$title = 'Новая статья';
$content = 'Текст новой статьи';

$sql = "INSERT INTO articles (title_article, content_article) VALUES ('$title', '$content')";

$result = mysql_query($sql);

if (!$result) die('ERROR data base: ' . mysql_error());
else echo 'Статей добавлено: ' . mysql_affected_rows();

mysql_close();
