<?php

class Article
{
	var $id;
	var $title;
	var $content;

	// Конструктор
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

$a = new Article(
	1,
	'1 Сенаторы ограничат количество автомобилей с мигалками',
	'1 В комитете Совета Федерации по промышленной политике подготовлен законопроект, содержащий исчерпывающий перечень транспортных средств, на которые могут быть установлены мигалки, сообщил РБК глава комитета сенатор Валентин Завадников.'
);

$a->view(); echo "<hr>";

$b = new Article(
	2,
	'2 Сенаторы ограничат количество автомобилей с мигалками',
	'2 В комитете Совета Федерации по промышленной политике подготовлен законопроект, содержащий исчерпывающий перечень транспортных средств, на которые могут быть установлены мигалки, сообщил РБК глава комитета сенатор Валентин Завадников.'
);

$b->view(); echo "<hr>";
