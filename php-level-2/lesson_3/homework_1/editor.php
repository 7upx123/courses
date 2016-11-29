<?php

require_once 'dbconnect.php';
require_once 'model.php';

$articles = articles_all();

//include 'theme/editor.php';

$filename = 'editor.php';
$title = $filename;

$content = view_include('v_editor.php', $articles);

$page = view_include(
	'v_main.php',
	array('title' => $title, 'filename' => $filename, 'content' => $content)
);

echo $page;
