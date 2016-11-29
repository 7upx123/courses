<?php

/*
Если к классу применяется интерфейс, то все методы определенные в интерфейсе должны быть определенны и в классе
*/

interface IArticle
{
	public function view();
	public function setTitle($title);
	public function getTitle();
}

class Article implements IArticle
{
	public $id;
	public $content;
	public $title;

	function getTitle() {
		return $this->title;
	}

	function __construct($id, $title, $content) {
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
	}

	function setTitle($title) {
		$this->title = $title;
	}

	//  Функция для вывода статьи
	function view() {
		echo "<h1>$this->id - $this->title</h1><p>$this->content</p>";
	}
}

$a = new Article(2, 'Заголовок 2', 'Содержание 2');

$a->view();
