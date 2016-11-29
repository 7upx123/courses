<?php

// Подключение библиотек
require_once('model/gallery.php');

// Подготовка данных
$photo = gallery_item($_GET['id']);

// Заголовок страницы
$title = 'Просмотр фотографии';

// Выбор шаблона содержимого
$content = 'templates/content_photo.php';

// Вывод HTML
include('templates/main.php');

?>