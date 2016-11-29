<?php

require_once 'dbconnect.php';
require_once 'model.php';

if (!empty($_POST)) {
	if (article_new($_POST['title'], $_POST['content'])) {
		header('Location: editor.php');
		exit();
	}

	$title_post = $_POST['title'];
	$content_post = $_POST['content'];
} else {
	$title_post = '';
	$content_post = '';
}

//include 'theme/new.php';

$filename = 'new.php';
$title = $filename;

$content = view_include(
	'v_new.php',
	array('tittle_post' => $title_post, 'content_post' => $content_post)
);

$page = view_include(
	'v_main.php',
	array('title' => $title, 'filename' => $filename, 'content' => $content)
);

echo $page;
