<?php

// Генерация HTML по внутреннему шаблону в $content
ob_start();
include 'v_index.php';
$content = ob_get_clean();

// Установка параметров основного шаблона
$title = 'Главная';

// Генерация HTML всей страницы
include 'v_main.php';
