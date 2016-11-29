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

include 'theme/index.php';
