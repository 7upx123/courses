<?php

require_once 'dbconnect.php';
require_once 'model_class.php';

$articles = ArticlesAll::articles_all();

ArticlesEditor::view($articles);
