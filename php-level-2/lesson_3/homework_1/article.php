<?php

require_once 'dbconnect.php';
require_once 'model.php';

$article = article_get($_GET['id']);

//include 'theme/article.php';

$filename = 'article.php';
$title = $filename;

$content = view_include('v_article.php', $article);

$page = view_include(
	'v_main.php',
	array('title' => $title, 'filename' => $filename, 'content' => $content)
);

echo $page;
