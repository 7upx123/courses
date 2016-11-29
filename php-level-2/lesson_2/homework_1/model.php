<?php

// Список всех статей
function articles_all() {
	$sql = "SELECT * FROM articles ORDER BY id_article DESC";

	$result = mysql_query($sql);

	if (!$result) die('ERROR data base: ' . mysql_error());

	// Извлечение из БД
	$n = mysql_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++) {
		$row = mysql_fetch_assoc($result);
		$articles[] = $row;
	}

	return $articles;
}

// Краткое описание статьи
function article_intro($article) {
	return mb_substr($article, 0, 64);
}

// Статья по id
function article_get($id) {
	$sql = "SELECT * FROM articles WHERE id_article = '%d'";

	$query = sprintf($sql, $id);

	$result = mysql_query($query);

	if (!$result) die('ERROR data base: ' . mysql_error());

	$article = mysql_fetch_assoc($result);

	return $article;
}

// Добавить статью
function article_new($title, $content) {
	$title = trim($title);
	$content = trim($content);

	if ($title == '') return false;

	$sql = "INSERT INTO articles (title_article, content_article) VALUES ('%s', '%s')";

	$query = sprintf(
		$sql,
		htmlspecialchars(mysql_real_escape_string($title)),
		htmlspecialchars(mysql_real_escape_string($content))
	);

	$result = mysql_query($query);

	if (!$result) die('ERROR data base: ' . mysql_error());

	return true;
}

// Изменить статью
function article_edit($id, $title, $content) {
	$title = trim($title);
	$content = trim($content);

	if ($title == '') return false;

	$sql = "UPDATE articles SET title_article = '%s', content_article = '%s' WHERE id_article = '%d'";

	$query = sprintf(
		$sql,
		htmlspecialchars(mysql_real_escape_string($title)),
		htmlspecialchars(mysql_real_escape_string($content)),
		$id
	);

	$result = mysql_query($query);

	if (!$result) die('ERROR data base: ' . mysql_error());

	return true;
}

// Удалить статью
function article_delete($id) {
	$sql = "DELETE FROM articles WHERE id_article = '%d'";

	$query = sprintf($sql, $id);

	$result = mysql_query($query);

	if (!$result) die('ERROR data base: ' . mysql_error());

	return true;
}
