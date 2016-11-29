<?php

require_once 'dbconnect.php';
require_once 'model_class.php';

if (!empty($_POST)) {
	if (ArticleNew::artcle_new($_POST['title'], $_POST['content'])) {
		header('Location: editor.php');
		exit();
	}

	$title_post = $_POST['title'];
	$content_post = $_POST['content'];
} else {
	$title_post = '';
	$content_post = '';
}

ArticleNew::view($title_post, $content_post);
