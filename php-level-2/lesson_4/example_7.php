<?php

class Article
{
	// public private protected
	public $id;
	public $title;
	public $content;

	function __construct($id, $title, $content) {
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
	}

	///*
	function __clone() {
		$this->id = $this->id + 1;
	}

	//  Функция для вывода статьи
	public function view() {
		echo "<h1>$this->id - $this->title</h1><p>$this->content</p>";
	}
}

$a = new Article(1, 'Заголовок', 'Содержание');

$b = $a;

$b->title = 'Новый заголовок';

$a->view();
$b->view();

echo "<hr>";

$c = new Article(2, 'Заголовок', 'Содержание');

$d = clone $a;

$d->title = 'Новый заголовок';

$c->view();
$d->view();
