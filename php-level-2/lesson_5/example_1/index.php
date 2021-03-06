<?php

include_once 'inc/model.php';
include_once 'inc/view.php';

// Информация для отображения
$title = 'Чтение';
$text = text_get();

// Внутренний шаблон
$content = view_include('theme/v_index.php', array('text' => $text));

// Внешний шаблон
$page = view_include('theme/v_main.php', array('title' => $title, 'content' => $content));

// Вывод
echo $page;
