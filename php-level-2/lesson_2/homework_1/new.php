<?php

require_once 'dbconnect.php';
require_once 'model.php';

if (!empty($_POST)) {
	if (article_new($_POST['title'], $_POST['content'])) {
		header('Location: editor.php');
		exit();
	}

	$title = $_POST['title'];
	$content = $_POST['content'];
} else {
	$title = '';
	$content = '';
}

include 'theme/new.php';
