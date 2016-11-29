<?php

function changeTitle($article, $title) {
	$article->title = $title;
}

class Article
{
	var $id;
	var $title;
	var $content;

	function Article($id, $title, $content) {
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
	}

	//  Функция для вывода статьи
	function view() {
		echo "<h1>$this->title</h1><p>$this->content</p>";
	}
}

$a = new Article(1, 'супер новость', 'какой-то текст');
$b = $a;

echo "<pre>";

var_dump($a);
var_dump($b);

changeTitle($a, 'Новое название');

echo "<hr>";
var_dump($a);
var_dump($b);
echo "<hr>";

echo "</pre>";

$a->view();
$b->view();
