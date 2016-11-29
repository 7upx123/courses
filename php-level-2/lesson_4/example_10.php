<?php

abstract class Article
{
	private $id;
	protected $content;
	public $title;

	function __construct($id, $title, $content) {
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
	}

	abstract function intro();

	//  Функция для вывода статьи
	function view() {
		$this->intro();
		echo "<h1>$this->id - $this->title</h1><p>$this->content</p>";
	}
}

class NewsArticle extends Article
{
	private $datetime;

	public function __construct($id, $title, $content) {
		parent::__construct($id, $title, $content);
		$this->datetime = time();
	}

	public function intro() {
		echo '<span style="color: red">' . strftime('%d.%m.%y', $this->datetime) . ' <b>Новость</b></span>';
	}
}

$a = new NewsArticle(1, 'Заголовок', 'Содержание');

$a->view();

$b = new Article(1, 'Заголовок', 'Содержание');

$b->view();
