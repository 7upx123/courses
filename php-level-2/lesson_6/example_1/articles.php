<?php

// Список всех статей
function articles_all() {
	// Запрос
	$query = "SELECT * FROM " . DB_TBL_PREF . "_articles ORDER BY id_article DESC";

	$result = mysql_query($query);

	if (!$result)
		die(mysql_error());

	// Извлечение из БД
	$n = mysql_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++)
	{
		$row = mysql_fetch_assoc($result);
		$articles[] = $row;
	}

	return $articles;
}

// Конкретная статья
function articles_get($id_article) {
	// Запрос
	$t = "SELECT * FROM " . DB_TBL_PREF . "_articles WHERE id_article = '%d'";

	$query = sprintf($t, $id_article);
	$result = mysql_query($query);

	if (!$result)
		die(mysql_error());

	// Извлечение из БД
	$article = mysql_fetch_assoc($result);

	return $article;
}

// Добавить статью
function articles_new($title, $content) {
	// Подготовка
	$title = trim($title);
	$content = trim($content);

	// Проверка
	if ($title == '')
		return false;

	// Запрос
	$t = "INSERT INTO " . DB_TBL_PREF . "_articles (title, content) VALUES ('%s', '%s')";

	$query = sprintf(
		$t,
		mysql_real_escape_string($title),
		mysql_real_escape_string($content)
	);

	$result = mysql_query($query);

	if (!$result)
		die(mysql_error());

	return true;
}

// Изменить статью
function articles_edit($id_article, $title, $content) {
	// Подготовка.
	$title = trim($title);
	$content = trim($content);

	// Проверка
	if ($title == '')
		return false;

	// Запрос
	$t = "UPDATE " . DB_TBL_PREF . "_articles SET title = '%s', content = '%s' WHERE id_article = '%d'";

	$query = sprintf(
		$t,
		mysql_real_escape_string($title),
		mysql_real_escape_string($content),
		$id_article
	);

	$result = mysql_query($query);

	if (!$result)
		die(mysql_error());

	return true;
}

// Удалить статью
function articles_delete($id_article) {
	$t = "DELETE FROM " . DB_TBL_PREF . "_articles WHERE id_article = '%d'";

	$query = sprintf($t, $id_article);

	$result = mysql_query($query);

	if (!$result)
		die(mysql_error());

	return true;
}
