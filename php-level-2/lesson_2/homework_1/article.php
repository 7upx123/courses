<?php

require_once 'dbconnect.php';
require_once 'model.php';

$article = article_get($_GET['id']);

include 'theme/article.php';
