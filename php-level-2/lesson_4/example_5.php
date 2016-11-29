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
	function view()	{
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
	function view()	{
		echo "<span style='color: red'>" . strftime('%d.%m.%y', $this->datetime) . " <b>Новость</b></span>";
		parent::view();
	}
}

class CrossArticle extends Article
{
	var $source;

	function CrossArticle($id, $title, $content, $source) {
		parent::Article($id, $title, $content);
		$this->source = $source;
	}

	function view() {
		parent::view();
		echo '<small>' . $this->source . '</small>';
	}
}

$a = new Article(
	1,
	'Сенаторы ограничат количество автомобилей с мигалками',
	'В комитете Совета Федерации по промышленной политике подготовлен законопроект, содержащий исчерпывающий перечень транспортных средств, на которые могут быть установлены мигалки, сообщил РБК глава комитета сенатор Валентин Завадников.'
);

$b = new NewsArticle(
	1,
	'Невероятное событие',
	'Новое срочное сообщение'
);

$c = new CrossArticle(
	1,
	'Сенаторы ограничат количество автомобилей с мигалками',
	'В комитете Совета Федерации по промышленной политике подготовлен законопроект, содержащий исчерпывающий перечень транспортных средств, на которые могут быть установлены мигалки, сообщил РБК глава комитета сенатор Валентин Завадников.',
	'yandex.ru'
);

$a->view(); echo "<hr>";
$b->view(); echo "<hr>";
$c->view(); echo "<hr>";

?>
