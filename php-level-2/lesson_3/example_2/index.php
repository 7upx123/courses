<?php

function content() {
	// Генерация HTML по внутреннему шаблону
	include 'v_index.php';
}

// Установка параметров основного шаблона
$title  = 'Главная';

// Генерация HTML всей страницы
include 'v_main.php';
