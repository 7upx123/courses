<?php

require_once 'dbconnect.php';
require_once 'model.php';

$articles = articles_all();

for ($i = 0; $i < count($articles); $i++) {
	$articles[$i]['content_article'] = article_intro($articles[$i]['content_article']);
}

/*
foreach ($articles as $key => $article)
	$articles[$key]['content_article'] = article_intro($article['content_article']);
*/

//include 'theme/index.php';

$filename = 'index.php';
$title = $filename;

$content = view_include('v_index.php', $articles);

$page = view_include(
	'v_main.php',
	array('title' => $title, 'filename' => $filename, 'content' => $content)
);

echo $page;
