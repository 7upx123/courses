<?php

require_once 'dbconnect.php';
require_once 'model_class.php';

if (!empty($_POST)) {
	if (isset($_POST['update_button'])) {
		if (ArticleEdit::article_edit($_GET['id'], $_POST['title'], $_POST['content'])) {
			header('Location: editor.php');
			exit();
		}
		$title_post = $_POST['title'];
		$content_post = $_POST['content'];
	} elseif (isset($_POST['delete_button'])) {
		if (ArticleDelete::article_delete($_GET['id'])) {
			header('Location: editor.php');
			exit();
		}
		$title_post = $_POST['title'];
		$content_post = $_POST['content'];
	}
} else {
	$article = ArticleGet::article_get($_GET['id']);
	$title_post = $article['title_article'];
	$content_post = $article['content_article'];
}

ArticleEdit::view($title_post, $content_post);
