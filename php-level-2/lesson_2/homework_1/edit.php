<?php

require_once 'dbconnect.php';
require_once 'model.php';

if (!empty($_POST)) {
	if (isset($_POST['update_button'])) {
		if (article_edit($_GET['id'], $_POST['title'], $_POST['content'])) {
			header('Location: editor.php');
			exit();
		}
		$title = $_POST['title'];
		$content = $_POST['content'];
	} elseif (isset($_POST['delete_button'])) {
		if (article_delete($_GET['id'])) {
			header('Location: editor.php');
			exit();
		}
		$title = $_POST['title'];
		$content = $_POST['content'];
	}
} else {
	$article = article_get($_GET['id']);
	$title = $article['title_article'];
	$content = $article['content_article'];
}

include 'theme/edit.php';
