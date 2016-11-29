<?php

class Article
{
	private $id;
	public $title;
	protected $content;

	const COPYRIGHT = '<hr><b>COPYRIGHT</b><hr>';

	function __construct($id, $title, $content)
	{
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
	}

	//  Функция для вывода статьи
	function view()
	{
		echo "<h1>$this->id - $this->title</h1><p>$this->content</p>" . self::COPYRIGHT; //Article::COPYRIGHT
	}
}

$a = new Article(1, 'Заголовок', 'Содержание');
$a->view();

echo Article::COPYRIGHT;
