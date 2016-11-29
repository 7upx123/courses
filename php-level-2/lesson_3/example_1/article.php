<?php

// Установка параметров шаблона
$title = 'Статья';
$text = 'Текст статьи №' . $_GET['id'] . ' весьма интересен.';

// Шапка
include 'v_header.php';

// Содержимое
include 'v_article.php';

// Подвал
include 'v_footer.php';
