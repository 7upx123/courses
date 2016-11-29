<?php

require_once 'dbconnect.php';
require_once 'model.php';

if (!empty($_POST)) {
	if (isset($_POST['update_button'])) {
		if (article_edit($_GET['id'], $_POST['title'], $_POST['content'])) {
			header('Location: editor.php');
			exit();
		}
		$title_post = $_POST['title'];
		$content_post = $_POST['content'];
	} elseif (isset($_POST['delete_button'])) {
		if (article_delete($_GET['id'])) {
			header('Location: editor.php');
			exit();
		}
		$title_post = $_POST['title'];
		$content_post = $_POST['content'];
	}
} else {
	$article = article_get($_GET['id']);
	$title_post = $article['title_article'];
	$content_post = $article['content_article'];
}

//include 'theme/edit.php';

$filename = 'edit.php';
$title = $filename;

$content = view_include(
	'v_edit.php',
	array('title_post' => $title_post, 'content_post' => $content_post)
);

$page = view_include(
	'v_main.php',
	array('title' => $title, 'filename' => $filename, 'content' => $content)
);

echo $page;
