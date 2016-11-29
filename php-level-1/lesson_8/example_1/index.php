<?php

// Подключение библиотек
require_once('model/gallery.php');

//  Загружаем фотографию, если пользователь отправил файл
if (isset($_FILES['photo'])) {
	gallery_add($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
	header('Location: index.php');
	exit();
}

// Подготовка данных
$photos = gallery_list();

// Заголовок страницы
$title = 'Галерея фотографий';

// Выбор шаблона содержимогоы
$content = ($_GET['view'] == 'list') ? 'templates/content_index_list.php' : 'templates/content_index_table.php';

// Вывод HTML
include('templates/main.php');
