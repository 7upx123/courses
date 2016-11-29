<?php

require_once('dbconnect.php');

$id = isset($_GET['id']) ? $_GET['id'] : 0;

if (!$id) die('Error ID: update.php?id=N');

$sql = "DELETE FROM articles WHERE id_article = '$id'";

$result = mysql_query($sql);

if (!$result) die('ERROR data base: ' . mysql_error());
else echo 'Удалено статей: ' . mysql_affected_rows();
