<?php

// Менеджер статей
class M_Articles
{
	private static $instance; // ссылка на экземпляр класса
	private $msql; // драйвер БД

	// Получение единственного экземпляра (одиночка)
	public static function Instance() {
		if (self::$instance == null)
			self::$instance = new M_Articles();

		return self::$instance;
	}

	private function __construct() {
		$this->msql = MSQL::Instance();
	}

	// Список всех статей
	public function All() {
		// Запрос
		$query = "SELECT * FROM " . DB_TBL_PREF . "_articles ORDER BY id_article DESC";

		return $this->msql->Select($query);
	}

	// Конкретная статья
	public function Get($id_article) {
		// Запрос.
		$t = "SELECT * FROM " . DB_TBL_PREF . "_articles WHERE id_article = '%d'";

		$query = sprintf($t, $id_article);

		$result = $this->msql->Select($query);

		return $result[0];
	}

	// Добавить статью
	public function Add($title, $content) {
		// Подготовка
		$title = trim($title);
		$content = trim($content);

		// Проверка
		if ($title == '')
			return false;

		// Запрос
		$obj = array();
		$obj['title'] = $title;
		$obj['content'] = $content;

		$this->msql->Insert(DB_TBL_PREF . '_articles', $obj);

		return true;
	}

	// Изменить статью
	public function Edit($id_article, $title, $content) {
		// Подготовка.
		$title = trim($title);
		$content = trim($content);

		// Проверка
		if ($title == '')
			return false;

		// Запрос
		$obj = array();
		$obj['title'] = $title;
		$obj['content'] = $content;

		$t = "id_article = '%d'";

		$where = sprintf($t, $id_article);

		$this->msql->Update(DB_TBL_PREF . '_articles', $obj, $where);

		return true;
	}

	// Удалить статью
	public function Delete($id_article) {
		$t = "id_article = '%d'";

		$where = sprintf($t, $id_article);

		$this->msql->Delete(DB_TBL_PREF . '_articles', $where);

		return true;
	}
}
