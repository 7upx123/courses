<?php

class M_Model
{
	private static $instance;
	private $mysql;

	public static function Instance() {
		if (self::$instance == null)
			self::$instance = new M_Model();
		return self::$instance;
	}

	public function __construct() {
		$this->mysql = new M_MySQL();
	}

	// Список всех статей
	public function articles_all() {
		$query = 'SELECT * FROM ' . DB_TABLE_NAME . ' ORDER BY id_article DESC';
		return $this->mysql->select($query);
	}

	// Конкретная статья
	public function articles_get($id) {
		$sql = "SELECT * FROM " . DB_TABLE_NAME . " WHERE id_article = '$id'";
		$query = sprintf($sql, $id);
		$result = $this->mysql->select($query);
		return $result[0];
	}

	// Добавить статю
	public function articles_new($title, $content) {
		// Подготовка
		$title = trim($title);
		$content = trim($content);

		// Проверка
		if ($title == '')
			return false;

		$object = array();
		$object['title_article'] = $title;
		$object['content_article'] = $content;
		$this->mysql->insert($object);
		return true;
	}

	// Измменить статью
	public function articles_edit($id, $title, $content) {
		$title = trim($title);
		$content = trim($content);

		if ($title == '')
			return false;

		$object = array();
		$object['title_article'] = $title;
		$object['content_article'] = $content;
		$sql = "id_article = '%d'";
		$where = sprintf($sql, $id);
		$this->mysql->update($object, $where);
		return true;
	}

	// Удалить статью
	public function articles_delete($id) {

		return $this->mysql->delete($id);
	}

	// Короткое описание статьи
	public function articles_intro($article) {
		return mb_substr($article, 0, 150);
	}

	// Подключение шаблона
	public function view_include($fileName, $vars = array())
	{
		// Установка переменных для шаблона
		foreach ($vars as $key => $value)
			$$key = $value;

		// Генерация HTML в строку
		ob_start();
		include 'theme/' . $fileName;
		return ob_get_clean();
	}
}
