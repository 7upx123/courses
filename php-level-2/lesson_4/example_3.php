<?php

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

class NewsArticle extends Article
{
	var $datetime;

	function NewsArticle($id, $title, $content) {
		parent::Article($id, $title, $content);
		$this->datetime = time();
	}

	//  Функция для вывода статьи
	function view() {
		echo "<h1>$this->title</h1><span style='color: red'>" .	strftime('%d.%m.%y', $this->datetime) .	" <b>Новость</b></span><p>$this->content</p>";
	}
}

$a = new NewsArticle(
	1,
	'Сенаторы ограничат количество автомобилей с мигалками',
	'В комитете Совета Федерации по промышленной политике подготовлен законопроект, содержащий исчерпывающий перечень транспортных средств, на которые могут быть установлены мигалки, сообщил РБК глава комитета сенатор Валентин Завадников.'
);

$a->view(); echo "<hr>";
