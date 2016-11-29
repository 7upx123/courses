<?php

require_once('dbconnect.php');

$content = 'Обновленный текст';

$id = isset($_GET['id']) ? $_GET['id'] : 0;

if (!$id) die('Error ID: update.php?id=N');

$sql = "UPDATE articles SET content_article = '$content' WHERE id_article = '$id'";

$result = mysql_query($sql);

if (!$result) die('ERROR data base: ' . mysql_error());
else echo 'Обновлено статей: ' . mysql_affected_rows();
