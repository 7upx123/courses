<?php

require_once 'dbconnect.php';
require_once 'model_class.php';

$article = ArticleGet::article_get($_GET['id']);

Article::view($article);
