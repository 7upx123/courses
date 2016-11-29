<?php

require_once 'dbconnect.php';
require_once 'model_class.php';

$articles = ArticlesAll::articles_all();

for ($i = 0; $i < count($articles); $i++) {
	$articles[$i]['content_article'] = ArticleIntro::article_intro($articles[$i]['content_article']);
}

/*
foreach ($articles as $key => $article)
	$articles[$key]['content_article'] = article_intro($article['content_article']);
*/

ArticleIndex::view($articles);
