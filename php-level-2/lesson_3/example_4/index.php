<?php

include_once 'view.php';

// Информация для отображения
$title = 'Главная';

// Внутренний шаблон
$content = view_include('v_index.php');

// Внешний шаблон
$page = view_include('v_main.php', array('title' => $title, 'content' => $content));

// Вывод
echo $page;
