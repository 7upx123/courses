<?php

class Article
{
	public $id;
	public $title;
	public $content;

	function view($article) {
		$filename = 'article.php';
		$title = $filename;

		$content = Template::view_include('v_article.php', $article);

		$page = Template::view_include(
			'v_main.php',
			array('title' => $title, 'filename' => $filename, 'content' => $content)
		);

		echo $page;
	}
}

class ArticlesAll extends Article
{
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
}

class ArticleIntro extends Article
{
	// Краткое описание статьи
	function article_intro($article) {
		return mb_substr($article, 0, 64);
	}
}

class ArticleNew extends Article
{
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

	function view($title_post, $content_post) {
		$filename = 'new.php';
		$title = $filename;

		$content = Template::view_include(
			'v_new.php',
			array('tittle_post' => $title_post, 'content_post' => $content_post)
		);

		$page = Template::view_include(
			'v_main.php',
			array('title' => $title, 'filename' => $filename, 'content' => $content)
		);

		echo $page;
	}
}

class ArticleEdit extends Article
{
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

	function view($title_post, $content_post) {
		$filename = 'edit.php';
		$title = $filename;

		$content = Template::view_include(
			'v_edit.php',
			array('title_post' => $title_post, 'content_post' => $content_post)
		);

		$page = Template::view_include(
			'v_main.php',
			array('title' => $title, 'filename' => $filename, 'content' => $content)
		);

		echo $page;
	}

}

class ArticleDelete extends Article
{
	// Удалить статью
	function article_delete($id) {
		$sql = "DELETE FROM articles WHERE id_article = '%d'";

		$query = sprintf($sql, $id);

		$result = mysql_query($query);

		if (!$result) die('ERROR data base: ' . mysql_error());

		return true;
	}
}

class ArticleGet extends Article
{
	// Статья по id
	function article_get($id) {
		$sql = "SELECT * FROM articles WHERE id_article = '%d'";

		$query = sprintf($sql, $id);

		$result = mysql_query($query);

		if (!$result) die('ERROR data base: ' . mysql_error());

		$article = mysql_fetch_assoc($result);

		return $article;
	}
}

class ArticlesEditor extends Article
{
	function view($articles) {
		$filename = 'editor.php';
		$title = $filename;

		$content = Template::view_include('v_editor.php', $articles);

		$page = Template::view_include(
			'v_main.php',
			array('title' => $title, 'filename' => $filename, 'content' => $content)
		);

		echo $page;
	}
}

class ArticleIndex extends Article
{
	function view($articles) {
		$filename = 'index.php';
		$title = $filename;

		$content = Template::view_include('v_index.php', $articles);

		$page = Template::view_include(
			'v_main.php',
			array('title' => $title, 'filename' => $filename, 'content' => $content)
		);

		echo $page;
	}
}

class Template
{
	// Подключение шаблона
	static public function view_include($fileName, $vars = array()) {
		// Установка переменных для шаблона
		foreach ($vars as $key => $value)
			$$key = $value;

		// Генерация HTML в строку
		ob_start();
		include 'theme/' . $fileName;
		return ob_get_clean();
	}
}
