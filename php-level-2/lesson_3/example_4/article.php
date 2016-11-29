<?php

include_once 'view.php';

// Информация для отображения
$title = 'Статья';
$text = 'Текст статьи №' . $_GET['id'] . ' весьма интересен.';

// Внутренний шаблон
$content = view_include('v_article.php', array('text' => $text));

// Внешний шаблон
$page = view_include('v_main.php', array('title' => $title, 'content' => $content));

// Вывод
echo $page;
