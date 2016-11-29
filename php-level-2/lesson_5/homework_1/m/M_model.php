<?php

// Список всех статей
function articles_all() {
	// Запрос
	$query = "SELECT * FROM articles ORDER BY id_article DESC";
	$result = mysql_query($query);

	if (!$result) die(mysql_error());

	// Извлечение из БД
	$n = mysql_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++) {
		$row = mysql_fetch_assoc($result);
		$articles[] = $row;
	}

	return $articles;
}

// Конкретная статья
function articles_get($id) {
	$query = "SELECT * FROM articles WHERE id_article = '$id'";
	$result = mysql_query($query);

	if (!$result) die(mysql_error());

	$article = mysql_fetch_assoc($result);

	return $article;
}

// Добавить статю
function articles_new($title, $content) {
	// Подготовка
	$title = trim($title);
	$content = trim($content);

	// Проверка
	if ($title == '') return false;

	// Запрос
	$t = "INSERT INTO articles (title_article, content_article) VALUES ('%s', '%s')";

	$query = sprintf($t, mysql_real_escape_string($title), mysql_real_escape_string($content));

	$result = mysql_query($query);

	if (!$result) die(mysql_error());

	return true;
}

// Измменить статью
function articles_edit($id, $title, $content) {
	$title = trim($title);
	$content = trim($content);

	if ($title == '') return false;

	$t = "UPDATE articles SET title_article = '$title', content_article = '$content' WHERE id_article = '$id'";

	$query = sprintf($t, mysql_real_escape_string($title), mysql_real_escape_string($content));

	$result = mysql_query($query);

	if (!$result) die(mysql_error());

	return true;
}

// Удалить статью
function articles_delete($id) {
	$id = mysql_real_escape_string($id);
	$t = "DELETE FROM articles WHERE id_article = '$id'";

	$result = mysql_query($t);

	if (!$result) die(mysql_error());
}

// Короткое описание статьи
function articles_intro($article) {
	return mb_substr($article, 0, 150);
}

// Подключение шаблона
function view_include($fileName, $vars = array())
{
	// Установка переменных для шаблона
	foreach ($vars as $key => $value)
	{
		$$key = $value;
	}

	// Генерация HTML в строку
	ob_start();
	include 'theme/' . $fileName;
	return ob_get_clean();	
}